

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
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="areas/detail.php" class="btn text-left area">
                            <div class="card-body">
                                <h5 class="card-title">WorldSkills Conference Room 1</h5>
                                <p class="card-subtitle">{date registered}</p>
                                <hr>
                                <p class="card-text">3,546 unique visitors</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <a href="areas/detail.php" class="btn text-left area">
                            <div class="card-body">
                                <h5 class="card-title">WorldSkills Conference Room 2</h5>
                                <p class="card-subtitle">{date registered}</p>
                                <hr>
                                <p class="card-text">2,471 unique visitors</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>
