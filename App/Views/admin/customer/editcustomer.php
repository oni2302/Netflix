<form method="post" action="<form action=<?php echo _WEB . "/Customer/HandleAddCustomer" ?>" method="POST">
    <div class="row">
        <div class="col-4">
            <label class="form-label" for="username">Username</label>
            <input class="form-control" type="text" id="username" name="username" required>

            <label class="form-label">Password</label>
            <input class="form-control" id="password" name="password" required>

            <label class="form-label" for="email">Email</label>
            <input class="form-control" id="email" name="email" required>

            <label class="form-label" for="fullname">Full Name</label>
            <input class="form-control" id="fullname" name="fullname" required>

            <label class="form-label" for="birth">Date of Birth</label>
            <input class="form-control" id="birth" name="birth" required>

            <label class="form-label" for="address">Address</label>
            <textarea class="form-control" name="address" required></textarea>

            <input type="hidden" id="role" name="role" value="2"> <br></br>

            <input class="form-label btn btn-primary" type="submit" value="editKhachHang">
        </div>
    </div>
</form>