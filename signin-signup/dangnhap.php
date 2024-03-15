<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Library - Dang Nhap</title>
    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- custom css -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="h-screen">
    <div class=" h-full flex justify-center items-center">
        <form action="" method="post" class="p-5 border border-slate-200 rounded bg-sky-700/60">
            <div class="items-center">
                <div class="text-center p-3 text-white">
                    <h1 class="font-bold capitalize text-2xl font-serif">My Library</h1>
                    <h3 class="font-bold capitalize text-xl">Đăng Nhập</h3>
                </div>
                <div class="mb-4">
                    <div class="mb-2">
                        <label for="username" class="text-white">Username:</label></br>
                        <input type="text" class="w-full rounded-md border border-slate-950 focus-visible:outline-none px-2" required>
                    </div>
                    <div class="mb-2">
                        <label for="password" class="text-white">Password:</label></br>
                        <input type="text" class="w-full rounded-md border border-slate-950 focus-visible:outline-none px-2" required>
                    </div>
                </div>
                <div class="btn-signin">
                    <button type="submit" class="w-full rounded border border-slate-200 bg-sky-700/60 hover:bg-sky-700/70 text-slate-200">Đăng
                        nhập</button>
                </div>
                <div class="other-btn mt-2 flex justify-center items-center space-x-1.5">
                    <button type="button" class="w-full rounded border border-slate-200 bg-blue-400 text-slate-200"><a href="./index.php">Trang chủ</a></button>
                    <button type="button" class="w-full rounded border border-slate-200 bg-rose-300 text-slate-200"><a href="./dangky.php">Đăng ký</a></button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>