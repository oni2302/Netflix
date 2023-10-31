<form action="<?php echo _WEB . "/admin/adsPartner/editHandle" ?>" method="POST">
    <div class="row">
        <div class="col-4">
            <input type="hidden" name="id" value="<?php echo $temp['id']; ?>">
            <label class="form-label" for="fullname">Tên đối tác</label>
            <input class="form-control" id="fullname" name="fullname" value="<?php echo $temp['fullname'] ?>" >
            <label class="form-label" for="username" >Username</label>
            <input class="form-control" type="text" id="username" name="username"  value="<?php echo $temp['username'] ?>">
            <label class="form-label">Password</label>
            <input class="form-control" id="pass" name="pass"  value="<?php echo $temp['pass'] ?>">

            <label class="form-label" for="email">Email</label>
            <input class="form-control" id="email" name="email"  value="<?php echo $temp['email'] ?>">

            <label class="form-label" for="address">Address</label>
            <textarea class="form-control" name="address" ><?php echo $temp['address'] ?></textarea >

            <input class="form-label btn btn-primary" type="submit">
        </div>
    </div>
</form>