<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="style/login.css" crossorigin="anonymous">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/ba3e44e3cb.js"></script>

  <title>HW</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <style>
    form {
      margin: 100px;
    }
    .box {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      width: 300px;
      margin-top: 50px;
      margin-bottom: 50px;
    }
    .button {
      font-size: 30px;
    }
    input[type=radio]:checked + label {
      color: red;
    }
  </style>
</head>

<body>

  <form method="post" action="post.php">
    <input name="number1" type="text" class="form-control" style="width: 150px; display: inline" />

   <div class="box">
    <input class="hidden" type="radio" name="operation" id="add" value="plus" checked="true"><label class="button" for="add"><i class="fas fa-plus-circle"></i></label><br/>
    <input class="hidden" type="radio" name="operation" id="subtract" value="minus"><label class="button" for="subtract"><i class="fas fa-minus-circle"></i></label><br/>
    <input class="hidden" type="radio" name="operation" id="times" value="multiply"><label class="button" for="times"><i class="fas fa-times"></i></label><br/>
    <input class="hidden" type="radio" name="operation" id="divide" value="divided by"><label class="button" for="divide"><i class="fas fa-percentage"></i></label><br/>
   </div>


    <input name="number2" type="text" class="form-control" style="width: 150px; display: inline" />
    <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
  </form>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
