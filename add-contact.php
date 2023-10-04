<?php
include('includes/header.php')
?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-header">
                    <h4>
                        Add Contact
                        <a href="index.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body"></div>
                <form action="code.php" method="POST">
                    <div class="form-group mb-3">
                        <label for="">First Name</label>
                        <input type="text" name="first_name" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Last Name</label>
                        <input type="text" name="last_name" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Email Address</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Phone Number</label>
                        <input type="number" name="phone" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" name="save_content" class="btn btn-primary">Save Content</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
include('includes/footer.php')
?>