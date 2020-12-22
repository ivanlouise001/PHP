<?php include '../public/header.php'; ?> 

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="areas/index.php">Manage Contact Tracings</a></li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>{insert area name}</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link active" href="areas/detail.php">Overview</a></li>
                </ul>

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Reports</span>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item"><a class="nav-link" href="reports/index.php">Room capacity</a></li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="border-bottom mb-3 pt-3 pb-2 area-title">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h1 class="h2">{insert user name}</h1>
                </div>
            </div>

            <!-- Visitors -->
            <div id="interactions" class="mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h2 class="h4">Interactions</h2>
                </div>
            </div>

            <div class="table-responsive visitors">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Location</th>
                        <th>Time</th>
                        <th>Person</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-nowrap" colspan="3">November 4, 2020</td>
                    </tr>
                    <tr>
                        <td class="text-nowrap"></td>
                        <td class="text-nowrap">WorldSkills Conference Room 1</td>
                        <td class="text-nowrap">08:30</td>
                        <td>Juan Dela Cruz</td> 
                    </tr>
                    <tr>
                        <td class="text-nowrap"></td>
                        <td class="text-nowrap">WorldSkills Conference Room 2</td>
                        <td class="text-nowrap">11:43</td>
                        <td>Captain Barbel</td> 
                    </tr>
                    <tr>
                        <td class="text-nowrap" colspan="3">November 5, 2020</td>
                    </tr>
                    <tr>
                        <td class="text-nowrap"></td>
                        <td class="text-nowrap">WorldSkills Conference Room 1</td>
                        <td class="text-nowrap">16:21</td>
                        <td>Captain Barbel</td> 
                    </tr>
                    <tr>
                        <td class="text-nowrap"></td>
                        <td class="text-nowrap">WorldSkills Conference Room 2</td>
                        <td class="text-nowrap">17:14</td>
                        <td>Juan Dela Cruz</td> 
                    </tr>
                    
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>

</body>
</html>

<?php include '../public/footer.php'; ?> 
