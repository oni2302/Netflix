<div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">

        <!-- Register Card -->
        <div class="card">
            <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                    <a href="index.html" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                            <img src="<?php echo _WEB ?>/public/assets/images/brand/netflix.png" width="200" alt="" srcset="">
                    </a>
                </div>
                <!-- /Logo -->
                <h4 class="mb-2">Đăng kí thoyy 🚀</h4>
                <p class="mb-4">Tạo tài khoản và xem phim thoyyy!</p>

                <form id="formAuthentication" class="mb-3" action="<?php echo _WEB ?>/auth/signupHandle" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Tên tài khoản</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" autofocus="">
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <label class="form-label" for="password">Mật khẩu</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" name="pass" placeholder="············" aria-describedby="password">
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <label class="form-label" for="password">Nhập lại mật khẩu</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" name="repass" placeholder="············" aria-describedby="password">
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                            <label class="form-check-label" for="terms-conditions">
                                Tôi đồng ý
                                <a href="javascript:void(0);">điều khoản &amp; chính sách.</a>
                            </label>
                        </div>
                    </div>
                    <button class="btn btn-primary d-grid w-100">
                        Sign up
                    </button>
                </form>

                <p class="text-center">
                    <span>Bạn đã có tài khoản?</span>
                    <a href="<?php echo _WEB ?>/auth/signin">
                        <span>Đăng nhập</span>
                    </a>
                </p>
            </div>
        </div>
        <!-- Register Card -->
    </div>
</div>