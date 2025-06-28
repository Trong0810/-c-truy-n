<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/19e7ed2256.js" crossorigin="anonymous"></script>
    <title>Quản Lý Thông Tin Cá Nhân</title>
    <link rel="stylesheet" href="personal.css">
</head>

<body>
    <header>
        <a style="color: blue;">____</a>
    </header>

    <nav class="mom">
        <div class="container">
            <ul>
                <li><a href=""> <img src="./looo.jpg" style="height: 40px;" alt=""></a></li>
                <li><input type="text" placeholder="Tim truyen..."> <button><i
                            class="fa-solid fa-magnifying-glass"></i></button></li>
                <li><a href=""></a><button><i class="fa-solid fa-question"></i></button></li>
                <li><a href=""><button><i class="fa-solid fa-exclamation"></i></button></a></li>
                <li><a href=""><button><i class="fa-solid fa-bell"></i></button></a></li>
                <li> <button><a href="dangky.php"><i class="fa-solid fa-circle-user"></i></a></button></li>
            </ul>
        </div>

        <div class="thanh">
            <div class="thanh1">
                <button><a><i class="fa-solid fa-bars"></i></a></button>
            </div>
        </div>
    </nav>
    <div class="eo">
        <div class="sidebar">
            <ul>
                <li><a href="#">Thông tin</a></li>
                <li><a href="#">Cài đặt</a></li>
                <li><a href="#">Đổi mật khẩu</a></li>
                <li><a href="#">Bộ sưu tập</a></li>
                <li><a href="#">Lịch sử đọc</a></li>
            </ul>
        </div>
    </div>
    <div class="breadcrumb"><a href="/tetx/readbook.php" class="a1">Trang chủ</a>>> <a class="a2" href="">Thông tin cá nhân</a> </div>
    <div class="bangthongtincanhan">
        <form class="personal-info-form">
            <h1>Thông tin cá nhân</h1>
            <div class="gach">
                <div class="gachtrong"></div>
            </div>
            <!-- Thêm các trường form ở đây -->
            <div>
                <div class="form-group">
                    <label for="name">Họ và Tên:</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="form-group">
                    <div class="ngaysinh">
                        <label for="dob">Ngày Sinh:</label>
                        <input type="date" id="dob" name="dob" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="email">
                        <label for="email">Gmail:</label>
                        <input type="email" id="email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="username">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username">
                    </div>
                </div>
                <div class="form-group">
                    <div class="password">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" id="password" name="password">
                    </div>
                </div>
            </div>
            <!-- Thêm các trường khác tương tự -->
            <button type="submit">Cập nhật</button>
        </form>
    </div>
</body>

</html>