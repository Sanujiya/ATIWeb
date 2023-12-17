<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
    session_start();
    if(empty($_SESSION['status'])){
        header("Location: login.php");
    }

    if(!empty($_SESSION['status'])){
        ?>
        <div class="container my-5">
            
        <?php
            echo $_SESSION['userNewEmail'];

    }
    ?>
    <br><a href="logout.php" class="btn btn-info">Logout</a>
    </div>
</body>
</html>