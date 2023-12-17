<?php
session_start();
if (!empty($_SESSION['status'])) {
    header("Location: dashboard.php");
}
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container min-vh-100 d-flex justify-content-center align-items-center">
            <div class="card py-5 px-5">
                <div class="card-body">
                    <h4 class="text-danger">Welcome to Lecturer Login Page</h4>
                    <hr>
                    <form action="code.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Password</label>
                            <input type="password" name="pass" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Login" class="btn btn-info" name="login">
                        </div>
                        <label class="text-dark" style="font-style:italic;"><a href="register.php" style="text-decoration:none"> Don't have an account </a></label>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>