<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/19e7ed2256.js" crossorigin="anonymous"></script>
    <script>src="./login.js" defer</script>
    <link rel="stylesheet" href="bonlogin.css">
    <title>Login</title>
</head>
<body>
    <header>
        <a style="color: blue;">____</a>
    </header>

    <nav class="mom">
        <div class="container">
        <ul>
            <li><a href="" > <img src="./looo.jpg" style="height: 40px;" alt=""></a></li>
            <li><input type="text" placeholder="Tim truyen..."> <button><i class="fa-solid fa-magnifying-glass"></i></button></li>
            <li><a href=""></a><button><i class="fa-solid fa-question"></i></button></li>
            <li><a href=""><button><i class="fa-solid fa-exclamation"></i></button></a></li>
            <li><a href=""><button><i class="fa-solid fa-bell"></i></button></a></li>
            <li> <button ><a href="dangky.php"><i class="fa-solid fa-circle-user"></i></a></button></li>
        </ul>
    </div>  
    <div class="thanh">
      <div class="thanh1">
        <button><a><i class="fa-solid fa-bars"></i></a></button>
      </div>
    </div>  
    </nav><!--          tap dky            -->
        <div class="bangdangky">
            <div class="form-title">Đăng nhập</div>
            <form method = "post" action="login.php">
              <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="........" require>
              </div>
              <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" placeholder="........" require>
              </div>
              <div class="form-group">
                <label for="email">Gmail:</label>
                <input type="email" id="email" name="email" placeholder="Abc.gmail.com" require>
              </div>
              <div class="form-group">
                <button type="submit" value="Login" class="loginBtn" name="login_Btn">Đăng Nhập</button>
              </div>
            </form>
            <div class="login-option">
              Chưa có tài khoản: <a href="http://localhost/htkk/dangky.php">Đăng Ký</a>
            </div>
            <div class="social-icons">
            </div>
            <div class="gach"><i class="fa-solid fa-slash fa-rotate-by fa-2xl" style="--fa-rotate-angle: 141.3deg;"></i></div>
            <div class="dangnhapqua">Đăng nhập qua</div>
            <div class = "tuychondangnhap">
              <div class="appdangnhap">
                <button class="app"><i class="fa-brands fa-twitter" style="color: #74C0FC;"></i></button>
                <button class="app"><i class="fa-brands fa-facebook" style="color: #74C0FC;"></i></button>
                <button class="app"><i class="fa-brands fa-weixin" style="color: #58df80;"></i></button>
                <button class="app"><i class="fa-solid fa-envelope" style="color: #8b7647;"></i></button>
              </div>
           </div>
    </div>
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root","");
if(isset($_POST['login_Btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $sql= "SELECT * FROM doctruyen.usernguoi WHERE username = '$username' AND email = '$email'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
      $resultPassword = $row['password'];
      if($password == $resultPassword){
          header('Location:http://localhost/htkk/tetx/readbook.php');
      }else{
          echo "<script>
              alert('Sai mật khẩu hoặc user name rồi chế ơi!! Maybe là sai email ?');
          </script>";
      }
    }
}
?>