<form action="<?php echo _WEB . "/admin/adsPartner/addHandle" ?>" method="POST">
    <div class="row">
        <div class="col-4">
            <label class="form-label" for="fullname">Tên đối tác</label>
            <input class="form-control" id="fullname" name="fullname" required>
            <label class="form-label" for="username">Username</label>
            <input class="form-control" type="text" id="username" name="username" required>
            <label class="form-label">Password</label>
            <input class="form-control" id="pass" name="pass" required>

            <label class="form-label" for="email">Email</label>
            <input class="form-control" id="email" name="email" required>

            <label class="form-label" for="address">Address</label>
            <textarea class="form-control" name="address" required></textarea>

            <input class="form-label btn btn-primary" type="submit" value="AddKhachHang">
        </div>
    </div>
</form>