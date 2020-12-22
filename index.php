<?php include 'public/dbcon.php' ?>


<?php
session_start();

$error = ' ';





if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = mysqli_real_escape_string($connection,$_POST['email']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);

    $sql = "SELECT id FROM users WHERE email = '$username' AND password = '$password'";
    $result = mysqli_query($connection,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    if ($count == 1)
    {
       
                 $query = "SELECT id FROM users WHERE email = '$username' AND password = '$password'";
                 $result = mysqli_query($connection, $query);
                 while($row = mysqli_fetch_array($result))
                {
                    $_SESSION['id'] = $row["id"];
                }
                  header("Location: areas/index.php");




     
        
    }
    else{
        $error = '<h6  class="loginerror"> INVALID EMAIL/PASSWORD </h6>';
        $display = "flex";
        
    }   

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

    <base href="./">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles -->
    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <main class="col-md-6 mx-sm-auto px-4">
            <div class="pt-3 pb-2 mb-3 border-bottom text-center">
                <h1 class="h2">Contact Tracing Platform</h1>
            </div>

            <form class="form-signin" action="" method="POST">
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                <?php echo "$error";  ?>

                <label for="inputEmail" class="sr-only">Email</label>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" autofocus>

                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password">
                <button class="btn btn-lg btn-primary btn-block" id="login" type="submit">Sign in</button>
            </form>

        </main>
    </div>
</div>
</body>
</html>
