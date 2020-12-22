<?php include '../public/header.php'; ?> 

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link active" href="areas/index.php">Manage areas</a></li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Manage areas</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <a href="areas/create.php" class="btn btn-sm btn-outline-secondary">Create new area</a>
                    </div>
                </div>
            </div>

            <div class="row areas">


                <?php

                 $query = "SELECT * FROM areas";
                 $result = mysqli_query($connection, $query);
                 while($row = mysqli_fetch_array($result))
                {
                 ?>

                 <div class="col-md-4">
                    <form method="POST">
                        <?php echo '<input type="hidden" name="id" value="'.$row["id"].'" >'?>
                        
                    <div class="card mb-4 shadow-sm">
                        <a href="areas/detail.php" class="btn text-left area">
                            <div class="card-body">
                                <?php echo '<h5 class="card-title">'.$row["name"].'</h5>'?>
                                <?php echo '<p class="card-subtitle">'.$row["created_at"].'</p>'?>
                                
                                <hr>
                                <?php
                                 $areadid = $row["id"];
                                 $qry = "SELECT COUNT(DISTINCT user_id) AS area_id FROM tracers WHERE area_id = $areadid";
                                 $res =  mysqli_query($connection, $qry);
                                 $rw = mysqli_fetch_array($res);

                                 $uniquevisitors =$rw['area_id'];
                                 ?>
                                <p class="card-text"> <?php echo "$uniquevisitors";?>  unique visitors</p>
                            </div>
                        </a>
                    </div>
                    </form>
                </div>





                <?php 
                }
                ?>


                
              



            </div>

        </main>
    </div>
</div>

<?php include '../public/footer.php'; ?> 