<div id="app">
    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                <div class="p-4 m-3">
                    <img src="<?= base_url('assets/'); ?>img/stisla-fill.svg" alt="logo" width="80" class="shadow-light rounded-circle mb-5 mt-2">
                    <h4 class="text-dark font-weight-normal">Welcome to <span class="font-weight-bold">Koperasi Stisla</span></h4>
                    <p class="text-muted">Sebelum memulai, Anda harus masuk atau mendaftar jika Anda belum memiliki akun.</p>
                    <?= $this->session->flashdata('message'); ?>
                    <form method="POST" action="<?= base_url('auth'); ?>" class="needs-validation" novalidate="">
                        <div class="form-group">
                            <label for="usernmae">Username</label>
                            <input id="username" type="text" class="form-control" name="username" tabindex="1" required placeholder="Masukkan username" value="<?= set_value('username'); ?>">
                            <div class="invalid-feedback">
                                Please fill in your <span class="font-weight-bold">username</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                            </div>
                            <input id="password" type="password" class="form-control" name="password" tabindex="2" required placeholder="Masukkan password">
                            <div class="invalid-feedback">
                                please fill in your <span class="font-weight-bold">password</span>
                            </div>
                        </div>

                        <div class="form-group text-right">
                            <!-- <a href="auth-forgot-password.html" class="float-left mt-3">
                                Forgot Password?
                            </a> -->
                            <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
                                Login
                            </button>
                        </div>

                        <div class="mt-5 text-center">
                            Tidak punya akun? <a href="<?= base_url('auth/registration'); ?>">Buat yang baru</a>
                        </div>
                    </form>

                    <div class="text-center mt-5 text-small">
                        Copyright &copy; Koperasi Stisla <?= date('Y'); ?>.
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?= base_url('assets/'); ?>img/unsplash/login-bg-v2.jpg">
                <div class="absolute-bottom-left index-2">
                    <div class="text-light p-5 pb-2">
                        <div class="mb-5 pb-3">
                            <h1 class="mb-2 display-4 font-weight-bold">Good Morning</h1>
                            <h5 class="font-weight-normal text-muted-transparent">Yogyakarta, Indonesia</h5>
                        </div>
                        Photo by <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/-UGgMEeuXmo">Nirmal Rajendharkumar</a> on <a class="text-light bb" target="_blank" href="https://unsplash.com">Unsplash</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>