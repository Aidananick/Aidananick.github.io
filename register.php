<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="auto+register.css">
  <title>Зарегистрироваться</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-4" align="center">
  <h1>Registration form</h1>
  <form method="post" action="check.php">
    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин:"><br>
    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя:"><br>
    <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль:"><br>
    <form action="auto.php">
    <button type="submit" class="btn btn-success">Зарегестрироваться</button>
  </form>
</div>
</body>
</html>
</html>