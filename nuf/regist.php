<?php
    include("./connection.php");

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $check_username_query = mysqli_query($connection, "SELECT * FROM users WHERE username = '$username'");
        $check_username = mysqli_num_rows($check_username_query);

        if ($check_username > 0) {
            echo "<script>alert('Username telah digunakan')</script>";
            echo "<meta http-equiv='refresh' content='0; url=regist.php'>";
        } else {
            $insert_query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
            $result = mysqli_query($connection, $insert_query);

            if ($result) {
                echo "<script>alert('Registrasi berhasil')</script>";
                echo "<meta http-equiv='refresh' content='0; url=login.php'>";
            } else {
                echo "<script>alert('Registrasi gagal')</script>";
                echo "<meta http-equiv='refresh' content='0; url=regist.php'>";
            }
        }
    }
?>

<html>
    <head>
        <title>Registrasi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col"></div>

                <div class="col mt-5">
                    <div class="row mt-5">
                        <div class="col-6">
                            <button type="submit" class="btn btn-outline-warning" style="width: 200px;" onclick="document.location='login.php'">Login</button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-danger" style="width: 200px;" onclick="document.location='regist.php'">Registrasi</button>
                        </div>
                    </div>
                    <div class="row">
                        <form action="" method="post" class="mt-5">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control border border-danger" placeholder="Masukkin username" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control border border-danger" placeholder="Masukkin password" required>
                            </div>
                            <div class="mb-3 form-check mt-3">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label danger">Dengan ini Anda menyatakan setuju dengan peraturan</label>
                            </div>
                            <button type="submit" name="submit" class="btn btn-danger" style="width: 430px;">Daftar</button>
                        </form>
                    </div>
                </div>

                <div class="col"></div>
            </div>
        </div>
        

    </body>
</html>