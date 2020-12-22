

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
            <div class="border-bottom mb-3 pt-3 pb-2">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center">
                    <h1 class="h2">{insert area name}</h1>
                </div>
            </div>

            <form class="needs-validation" novalidate action="areas/detail.php">

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="inputName">Name</label>
                        <!-- adding the class is-invalid to the input, shows the invalid feedback below -->
                        <input type="text" class="form-control is-invalid" id="inputName" name="name" placeholder="" value="">
                        <div class="invalid-feedback">
                            Area Name is required.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="inputName">Contact Person</label>
                        <!-- adding the class is-invalid to the input, shows the invalid feedback below -->
                        <input type="text" class="form-control is-invalid" id="inputContactPerson" name="contact_person" placeholder="" value="">
                        <div class="invalid-feedback">
                            Contact Person is required.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3">
                        <label for="inputSlug">Description</label>
                        <input type="text" class="form-control" id="inputDescription" name="description" placeholder="" value="">
                    </div>
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary" type="submit">Save</button>
                <a href="areas/detail.php" class="btn btn-link">Cancel</a>
            </form>

        </main>
    </div>
</div>

