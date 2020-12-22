<?php include 'dbcon.php' ?>
<?php 
session_start();
$_SESSION['id'];
$userid = $_SESSION['id'];

$query = "SELECT * FROM users WHERE id = '$userid'";
                 $result = mysqli_query($connection, $query);
                 while($row = mysqli_fetch_array($result)){
                    $user_name = $row["name"];

                 }




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Tracing Backend</title>

    <base href="../">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="areas/index.php">Contact Tracing Platform</a>
    <span class="navbar-organizer w-100"> <?php echo "$user_name"; ?></span>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" id="logout" href="public/logout.php">Sign out</a>
        </li>
    </ul>
</nav>