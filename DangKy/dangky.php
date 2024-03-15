<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Library - Dang Nhap</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- custom css -->
    <link rel="stylesheet" href="../style.css">
</head>

<body class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form action="./xulyDN.php" method="post" id="form" class="border-black">
        <div class="form-content m-3 p-lg-3">
            <div id="title" class="text-center">
                <h1>My Library</h1>
                <h3>Đăng Ký</h3>
            </div>
            <div>
                <div>
                    <label for="username">Username:</label></br>
                    <input type="text" name="username" class="w-100 rounded border-1" required>
                </div>
                <div>
                    <label for="password">Password:</label></br>
                    <input type="text" name="pass" class="w-100 rounded border-1" required>
                </div>
                <div>
                    <label for="hoten">Họ và tên:</label></br>
                    <input type="text" name="fullname" class="w-100 rounded border-1" required>
                </div>
            </div>
            <div class="my-2">
                <button type="submit" name="dangnhap" class="signin-btn w-100 rounded">Đăng ký</button>
            </div>
            <div class="d-flex my-2 text-center">
                <button type="button" class="home-btn w-100 rounded" style="margin-right: 0.2rem;"><a href="../index.php">Trang chủ</a></button>
                <button type="button" class="signup-btn w-100 rounded"><a href="../DangNhap/dangnhap.php">Đăng nhập</a></button>
            </div>
        </div>
    </form>

</body>

</html>