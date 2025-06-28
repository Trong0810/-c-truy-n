<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/19e7ed2256.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dangky.css">
    <title>Dang ky</title>
</head>
<body>
     
    </nav> <!--          tap dky            -->
        <div class="bangdangky">
            <div class="form-title">Đăng ký</div>
            <form action="them.php" method="post">
                <div class="uname">
            <div class="form-group">
                <div class="name">
                    <label for="name">Tên:</label>
                    <input type="text" id="name" name="name" required>
                </div>
              </div>
              <div class="form-group">
                <div class="username">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                </div>
              </div>
            </div> 
            <div class="pasns">
              <div class="form-group">
                <div class="password">
                    <label for="password">Mật khẩu:</label>
                    <input type="password" id="password" name="password" required>
                </div>
              </div>
              <div class="form-group">
                <div class="ngaysinh">
                    <label for="dob">Ngày Sinh:</label>
                    <input type="date" id="dob" name="dob" required>
                </div>
              </div>
            </div>
              <div class="form-group">
                <div class="email">
                    <label for="email">Gmail:</label>
                    <input type="email" id="email" name="email" required>
                </div>
              </div>
              
              <div class="form-group">
                <button type="submit" value="Signup" class="signupBtn" name="signup_Btn">Đăng ký</button>
              </div>
            </form>
            <div class="login-option">
              Đã có tài khoản: <a href="login.php">Đăng nhập</a>
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
