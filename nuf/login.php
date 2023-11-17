<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include("./connection.php");
?>

<!doctype html>
<html>
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="rowa">
                <div class="col"></div>

                <div class="col mt-5">
                    <div class="row mt-5">
                        <div class="col-6">
                            <button type="submit" class="btn btn-warning" style="width: 200px;" onclick="document.location='login.php'">Login</button>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-outline-danger" style="width: 200px;" onclick="document.location='regist.php'">Registrasi</button>
                        </div>
                    </div>
                    <div class="row">
                        <form action="" method="POST" class="mt-5">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control border border-warning" placeholder="Masukkin username" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control border border-warning" placeholder="Masukkin password" required>
                            </div>

                            <button type="submit" name="submit" class="btn btn-warning" style="width: 430px;">Masuk</button>
                        </form>
                    </div>
                </div>

                <div class="col"></div>
            </div>
        </div>
        

    </body>
</html>

<?php
    if (isset($_POST['submit'])) {
        $sql = mysqli_query($connection, "SELECT * FROM users WHERE username = '$_POST[username]' AND password = '$_POST[password]'");

        $cek = mysqli_num_rows($sql);
        if ($cek > 0) {
            $_SESSION['username'] = $_POST['username'];
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        } else {
            echo "<script>alert('Username atau Password Salah')</script>";
            echo "<meta http-equiv='refresh' content='0; url=login.php'>";
        }
    }
?>