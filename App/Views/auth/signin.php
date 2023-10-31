<div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
            <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                    <a href="<?php echo _WEB ?>" class="app-brand-link gap-2">
                        <span class="app-brand-logo demo">
                            <img src="<?php echo _WEB ?>/public/assets/images/brand/netflix.png" width="200" alt="" srcset="">
                        </span>
                    </a>
                </div>
                <!-- /Logo -->
                <h4 class="mb-2">Chào mừng bạn đến với Netflix 👋</h4>
                <p class="mb-4">Đăng nhập để sử dụng các chức năng của trang</p>

                <form id="formAuthentication" class="mb-3" action="<?php echo _WEB ?>/auth/signinHandle" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Tài khoản</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Tên tài khoản" autofocus="">
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">Mật khẩu</label>
                            <a href="">
                                <small>Quên mật khẩu?</small>
                            </a>
                        </div>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" class="form-control" name="pass" placeholder="············" aria-describedby="password">
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember-me">
                            <label class="form-check-label" for="remember-me">
                                Ghi nhớ tôi
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary d-grid w-100" type="submit">Đăng nhập</button>
                    </div>
                </form>

                <p class="text-center">
                    <span>Chưa có tài khoản?</span>
                    <a href="<?php echo _WEB ?>/auth/signup">
                        <span>Tạo tài khoản ngay</span>
                    </a>
                </p>
            </div>
        </div>
        <!-- /Register -->
    </div>
</div>