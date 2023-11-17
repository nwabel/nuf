<?php
    include "./connection.php";
    include "./session.php";
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <div class="row align-items-center mt-5">
                <div class="col"></div>

                <div class="col mt-5 border border-primary rounded p-5">
                    <h1 class="text-center">Selamat Datang <?php echo $_SESSION['username']; ?></h1>

                    <div class="row align-items-center">
                        <div class="col"></div>
                        <div class="col">
                        <button type="submit" class="btn btn-primary mt-5" style="width: 200px;" onclick="document.location='logout.php'">Keluar</button>
                        </div>
                        <div class="col"></div>
                    </div>

                </div>

                <div class="col"></div>
            </div>
        </div>
        

    </body>
</html>