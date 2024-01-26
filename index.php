<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<?php
if (isset($_SESSION["Create"])) {
   header("Location: Create.php");
}
if (isset($_SESSION["Blogs"])) {
    header("Location: Blogs.php");
 }
?>
<body>
<form action="index.php" method="post">
    <div class="container">
        <h1>Welcome to Dashboard</h1>
        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
    <div class="form-btn">
        <input type="submit" class="btn btn-primary" value="Create" name="Create">
    </div>
    <div class="form-btn">
        <input type="submit" class="btn btn-primary" value="Blogs" name="Blogs">
    </div>
</form>
</body>
</html>