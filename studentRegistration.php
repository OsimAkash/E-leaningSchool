<!-- Start Student Registration Form  -->
<form id="stuRegForm">
    <div class="form-group">
        <i class="fas fa-user"></i> <label for="stuname" class="pl-2 font-weight-bold"> Name
        </label> <small id="statusMsg1"> </small> <input type="text" class="form-control" placeholder="Name"
            name="stuname" id="stuname">
    </div>
    <div class="mb-3 form-group">
        <i class="fa-solid fa-envelope"></i>
        <label for="stuemail" class="form-label">
            Email </label>
        <small id="statusMsg2"> </small>
        <input type="email" class="pl-2 form-control" name="email" placeholder="Email" id="stuemail"
            aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">
            <small class="form-text"> We'll never share your email with anyone else.
            </small>
        </div>
    </div>
    <div class="mb-3 form-control">
        <i class="fa-solid fa-key"></i>
        <label for="stupassword" class="pl-2 form-label">
            New Password</label>
        <small id="statusMsg3"> </small>
        <input type="password" class="form-control" id="stupassword" name="stupassword" placeholder="Password">
    </div>

</form>
<!-- End Student Registration Form  -->