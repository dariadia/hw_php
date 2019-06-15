"use strict";

/**
 * @property {Object} settings настройки галереи
 * @property {string} settings.previewSelector Селектор обертки для миниатюр галереи
 * @property {string} settings.openedImageWrapperClass Класс для обертки открытой картинки.
 * @property {string} settings.openedImageClass Класс открытой картинки
 * @property {string} settings.openedImageScreenClass Класс для ширмы открытой картинки
 * @property {string} settings.openedImageCloseBtnClass Класс для картинки кнопки закрыть.
 * @property {string} settings.openedImageCloseBtnSrc Путь до картинки кнопки закрыть.
 * @property {string} settings.openedImageNextBtnClass Класс для картинки кнопки вперед.
 * @property {string} settings.openedImageNextBtnSrc Путь до картинки кнопки вперед.
 * @property {string} settings.openedImageBackBtnClass Класс для картинки кнопки назад.
 * @property {string} settings.openedImageBackBtnSrc Путь до картинки кнопки назад.
 * @property {string} ifErrorLoadingImage Путь до картинки ошибки.
 * @property {string} openedImageEl Открытая картинка
 */
const gallery = {
  settings: {
    previewSelector: ".mySuperGallery",
    openedImageWrapperClass: "galleryWrapper",
    openedImageClass: "galleryWrapper__image",
    openedImageScreenClass: "galleryWrapper__screen",
    openedImageCloseBtnClass: "galleryWrapper__close",
    openedImageCloseBtnSrc: "images/gallery/button_close.png",
    ifErrorLoadingImage: "images/gallery/error.jpg",
    openedImageNextBtnClass: "galleryWrapper__next",
    openedImageNextBtnSrc: "images/gallery/next.png",
    openedImageBackBtnClass: "galleryWrapper__back",
    openedImageBackBtnSrc: "images/gallery/back.png",
    openedImageEl: ""
  },

  openedImageEl: null,

  /**
   * Инициализирует галерею
   * @param {Object} userSettings Объект настроек для галереи.
   */
  init(userSettings = {}) {
    // Записываем настройки, которые передал пользователь в наши настройки.
    Object.assign(this.settings, userSettings);

    // Находим элемент, где будут превью картинок и ставим обработчик на этот элемент,
    // при клике на этот элемент вызовем функцию containerClickHandler в нашем объекте
    // gallery и передадим туда событие MouseEvent, которое случилось.
    document
      .querySelector(this.settings.previewSelector)
      .addEventListener("click", event => this.containerClickHandler(event));
  },

  /**
   * Обработчик события клика для открытия картинки.
   */
  containerClickHandler(event) {
    // Если целевой тег не был картинкой, то ничего не делаем, просто завершаем функцию.
    if (event.target.tagName !== "IMG") {
      return;
    }

    this.openedImageEl = event.target;
    //console.log(this.settings.openedImageEl);

    // Открываем картинку с полученным из целевого тега (data-full_image_url аттрибут).
    this.openImage(event.target.dataset.full_image_url);
  },

  /**
   * Открывает картинку.
   * @param {string} src Ссылка на картинку, которую надо открыть.
   */
  openImage(src) {
    // пробуем загрузить картинку, если картинка загружена - показываем картинку с полученным
    // из целевого тега (data-full_image_url аттрибут) если картинка не загружена - показываем заглушку
    // Получаем контейнер для открытой картинки, в нем находим тег img и ставим ему нужный src.
    const openedImageEl = this.getScreenContainer().querySelector(
      `.${this.settings.openedImageClass}`
    );
    const img = new Image();
    img.onload = () => (openedImageEl.src = src);
    img.onerror = () => (openedImageEl.src = this.settings.ifErrorLoadingImage);
    img.src = src;
  },

  /**
   * Возвращает контейнер для открытой картинки, либо создает такой контейнер, если его еще нет.
   * @returns {Element}
   */
  getScreenContainer() {
    // Получаем контейнер для открытой картинки.
    const galleryWrapperElement = document.querySelector(
      `.${this.settings.openedImageWrapperClass}`
    );
    // Если контейнер для открытой картинки существует - возвращаем его.
    if (galleryWrapperElement) {
      return galleryWrapperElement;
    }

    // Возвращаем полученный из метода createScreenContainer контейнер.
    return this.createScreenContainer();
  },

  /**
   * Создает контейнер для открытой картинки.
   * @returns {HTMLElement}
   */
  createScreenContainer() {
    // Создаем сам контейнер-обертку и ставим ему класс.
    const galleryWrapperElement = document.createElement("div");
    galleryWrapperElement.classList.add(this.settings.openedImageWrapperClass);

    // Создаем контейнер занавеса, ставим ему класс и добавляем в контейнер-обертку.
    const galleryScreenElement = document.createElement("div");
    galleryScreenElement.classList.add(this.settings.openedImageScreenClass);
    galleryWrapperElement.appendChild(galleryScreenElement);

    // Создаем картинку для кнопки закрыть, ставим класс, src и добавляем ее в контейнер-обертку.
    const closeImageElement = new Image();
    closeImageElement.classList.add(this.settings.openedImageCloseBtnClass);
    closeImageElement.src = this.settings.openedImageCloseBtnSrc;
    closeImageElement.addEventListener("click", () => this.close());
    galleryWrapperElement.appendChild(closeImageElement);

    // Создаем картинку для кнопки вперед, ставим класс, src и добавляем ее в контейнер-обертку.
    const nextImageElement = new Image();
    nextImageElement.classList.add(this.settings.openedImageNextBtnClass);
    nextImageElement.src = this.settings.openedImageNextBtnSrc;
    galleryWrapperElement.appendChild(nextImageElement);

    nextImageElement.addEventListener("click", () => {
      this.openedImageEl = this.getNextImage();
      this.openImage(this.openedImageEl.dataset.full_image_url);
    });

    // Создаем картинку для кнопки назад, ставим класс, src и добавляем ее в контейнер-обертку.
    const prevImageElement = new Image();
    prevImageElement.classList.add(this.settings.openedImageBackBtnClass);
    prevImageElement.src = this.settings.openedImageBackBtnSrc;
    galleryWrapperElement.appendChild(prevImageElement);

    prevImageElement.addEventListener("click", () => {
      this.openedImageEl = this.getPrevImage();
      this.openImage(this.openedImageEl.dataset.full_image_url);
    });

    // Создаем картинку, которую хотим открыть, ставим класс и добавляем ее в контейнер-обертку.
    const image = new Image();

    image.classList.add(this.settings.openedImageClass);

    // добавляем к обертке картинку
    galleryWrapperElement.appendChild(image);

    // Добавляем контейнер-обертку в тег body.
    document.body.appendChild(galleryWrapperElement);

    // Возвращаем добавленный в body элемент, наш контейнер-обертку.
    return galleryWrapperElement;
  },

  /**
   * Возвращает следующий элемент (картинку) от открытой или первую картинку в контейнере,
   * если текущая открытая картинка последняя.
   * @returns {Element} Следующую картинку от текущей открытой.
   */
  getNextImage() {
    const nextSibling = this.openedImageEl.nextElementSibling;
    return nextSibling
      ? nextSibling
      : this.openedImageEl.parentNode.firstElementChild;
  },

  /**
   * Возвращает предыдущий элемент (картинку) от открытой или последнюю картинку в контейнере,
   * если текущая открытая картинка первая.
   * @returns {Element} Предыдущую картинку от текущей открытой.
   */
  getPrevImage() {
    const prevSibling = this.openedImageEl.previousElementSibling;
    return prevSibling
      ? prevSibling
      : this.openedImageEl.parentNode.lastElementChild;
  },

  /**
   * Закрывает (удаляет) контейнер для открытой картинки.
   */
  close() {
    document
      .querySelector(`.${this.settings.openedImageWrapperClass}`)
      .remove();
  }
};

// Инициализируем нашу галерею при загрузке страницы.
window.onload = () =>
  gallery.init({
    previewSelector: ".galleryPreviewsContainer"
  });
