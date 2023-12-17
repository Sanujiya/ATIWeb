<?php
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container min-vh-100 my-5">
        <div class="card py-5 px-5">
            <div class="card-body">
                <h4 class="text-danger">Lecturer Registration Page</h4>
                <hr>
                <form action="code.php"  method="POST">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="Lecturer Name" class="form-label">Lecturer Name</label>
                            <input type="text" name="lectname" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="Lecturer Email" class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="Lecturer Designation" class="form-label">Designation</label>
                            <select name="designation"class="form-select">
                                <option value="Assistant Lecturer">Assistant Lecturer</option>
                                <option value="Lecturer">Lecturer</option>
                                <option value="Senior Lecturer I">Senior Lecturer I</option>
                                <option value="Senior Lecturer II">Senior Lecturer II</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="Course List" class="form-label">Course</label>

                            <select name="c" class="form-select">
                                <?php
                                $sql = "SELECT * from course";
                                $result = mysqli_query($con, $sql);
                                while ($course = mysqli_fetch_array($result)) {
                                ?>
                                    <option value="<?php echo $course['CourseId'] ?>"><?php echo $course['Title'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="Gender" class="form-label">Gender</label>
                            <select name="gender" class="form-select">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="Password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <input type="submit" value="Register" class="btn btn-info" name="registration">
                        <input type="reset" value="Clear" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</body>

</html>