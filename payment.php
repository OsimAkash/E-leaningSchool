<!-- Start Header  -->
<?php 
include ('./maininclude/header.php');

?>
<!-- End Header  -->

<!-- Strat Courses Banner  -->

<div class="container-fluid bg-dark">
    <div class="row ">
        <img src="./image/bard.jpg" style="height: 500px; width: 100%; object-fit: cover;box-shadow: 10px;" alt="">
    </div>
</div>

<!-- End Courses Banner  -->


<div class="container">
    <h2 class="text-center my-4">Payment Status</h2>
    <form action="post" action="">
        <div class="form-group row">
            <label for="form-control" class="offset-sm-1  col-form-label">Order ID:</label>
            <div>
                <input type="text" name="" id="" class="form-control mb-3 ">
            </div>
            <div>
                <input type="submit" value="view" class="btn btn-primary mb-4">
            </div>
        </div>
    </form>

</div>

<!-- Start Contact US  -->

<?php
    include('./contact.php');
?>


<!-- End Contact US  -->


<!-- Start Include Footer  -->
<?php    
    include('./maininclude/footer.php')
    ?>
<!-- End Include Footer  -->