<?php include "./inc/top.php"; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mt-2">
            <?php 
                include "./inc/navbar.php" ; 
                // include "./inc/slider.php" ;
            ?>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-9">
            <small class="text-center text-primary">
                <h3>Some successful students...</h3>
            </small> <hr>

            <table class="table table-bordered">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Sr No</th>
                        <th>Student Name</th>
                        <th>class</th>
                        <th>Batch</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>01</th>
                        <th>Amal</th>
                        <th>20</th>
                        <th>E/20</th>
                        <th><img src="./images/005.jpg" class="img-fluid" width="100px"></th>
                    </tr>
                    <tr>
                        <th>02</th>
                        <th>Vimal</th>
                        <th>20</th>
                        <th>E/20</th>
                        <th><img src="./images/005.jpg" class="img-fluid" width="100px"></th>
                    </tr>
                    <tr>
                        <th>03</th>
                        <th>Kamal</th>
                        <th>20</th>
                        <th>E/20</th>
                        <th><img src="./images/005.jpg" class="img-fluid" width="100px"></th>
                    </tr>
                    <tr>
                        <th>04</th>
                        <th>Samal</th>
                        <th>20</th>
                        <th>E/20</th>
                        <th><img src="./images/005.jpg" class="img-fluid" width="100px"></th>
                    </tr>
                    <tr>
                        <th>05</th>
                        <th>Thamil</th>
                        <th>20</th>
                        <th>E/20</th>
                        <th><img src="./images/005.jpg" class="img-fluid" width="100px"></th>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-white my-2">
                <div class="card-body">
                    <h4 class="card-title text-center">Parents Review</h4>
                </div>
                <img src="./images/004.jpg" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="row bg-dark py-5">
            <?php include "./inc/footer.php" ; ?>
        </div>
    </div>


</div>
