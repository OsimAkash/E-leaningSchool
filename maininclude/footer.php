<!-- Strat  Footer Sections  -->
<footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">
        Copyright &copy; 2023 || Designed By E-Learning || <a href="#login" data-bs-toggle="modal"
            data-bs-target="#adminModalCenter"> Admin Login </a>
    </small>
</footer>

<!-- End  Footer Sections  -->

<!-- Start Student Registrations Model -->


<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="stuRegModalCenterLabel"> Student Registration </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Start Student Registration Form  -->

                <?php

                include('studentRegistration.php');

                ?>

                <!-- End Student Registration Form  -->


            </div>
            <div class="modal-footer">
                <span id="successMsg" class="alert alert-success "></span>
                <button type="button"id="singup" class="btn btn-primary" onclick="addStu()" >Sing Up</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<!-- End Student Registrations Model -->


<!-- Start Student Login Model -->


<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="stuLoginModalCenterLabel"> Student Login </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Start Student Login Form  -->
                <form id="stuLoginFrom">

                    <div class="mb-3 form-group">
                        <i class="fa-solid fa-envelope"></i>
                        <label for="stuLogemail" class="form-label">
                            Email </label>
                        <input type="email" class="form-control" id="stuLogEmail" name="stuLogemail" placeholder="Email"
                            aria-describedby="stuLogemailHelp">
                    </div>
                    <div class="mb-3 form-control">
                        <i class="fa-solid fa-key"></i>
                        <label for="stuLogpassword" id="stuLoginBtn" class="form-label">
                            Password</label>
                        <input type="password" class="form-control" id="stuLogpassword" name="stuLogpassword"
                            placeholder="Password">
                    </div>

                </form>
                <!-- End Student Login Form  -->
            </div>
            <div class="modal-footer">
                <small id="statusLogMsg"></small>
                <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

            </div>
        </div>
    </div>
</div>
<!-- End Student Login Model -->



<!-- Start Admin Login Model -->


<!-- Modal -->
<div class="modal fade" id="adminModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="adminModalCenterLabel"> Admin Login </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- Start Admin Login Form  -->
                <form id="adminLoginFrom">

                    <div class="mb-3 form-group">
                        <i class="fa-solid fa-envelope"></i>
                        <label for="adminLogemail" class="form-label">
                            Email </label>
                        <input type="email" class="form-control" id="adminLogemail" name="adminLogemail"
                            placeholder="Email" aria-describedby="adminLogemailHelp">
                    </div>
                    <div class="mb-3 form-control">
                        <i class="fa-solid fa-key"></i>
                        <label for="adminLogpassword" id="adminLoginBtn" class="form-label">
                            Password</label>
                        <input type="password" class="form-control" id="adminLogpassword" name="adminLogpassword"
                            placeholder="Password">
                    </div>

                </form>
                <!-- End Admin Login Form  -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="adminLoginBtn"> Admin Login</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

            </div>
        </div>
    </div>
</div>
<!-- End Admin Login Model -->


<!-- Strat typed.js -->
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script src="./js/type.js"></script>


<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/bootstrap.proper.min.js"></script>
<script src="./js/jquery.min.js"></script>
<!-- Font Awesome Js  -->
<script src="https://kit.fontawesome.com/8ea6442568.js" crossorigin="anonymous"></script>

<!-- Student Testimonial owl Slider Js  -->
<script src="/js/owl.min.js.js"></script>
<script src="./js/testyslider.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>


<!-- Student Ajaxs Call JAvaScript  -->
<script type="text/javascript" src="./js/ajaxrequest.js"></script>
</body>

</html>