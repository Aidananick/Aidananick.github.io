<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="auto+register.css">
  <title>Авторизация</title>
</head>
<body>
<div class="container mt-4" align="center">
  <form method="post" action="checkauto.php">
  <h1>Authorization form</h1>
    <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин:"><br>
    <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя:"><br>
    <input type="password" class="form-control" name="password" id="password" placeholder="Введите пароль:"><br>
    <form action="index1.php">
    <button type="submit" class="btn btn-success">Войти</button>
  </form>
    <p>У вас нет аккаунта? - 
      <a href="register.php">Зарегестрироваться</a>
    </p>
  </form> 
</div>
  </form> 
</body>
</html>
</html>