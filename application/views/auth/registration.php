<div id="app">
    <section class="section">
        <div class="container mt-3">
            <div class="row">
                <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-12 offset-xl-0">
                    <div class="login-brand">
                        <img src=" <?= base_url('assets'); ?>/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Pendaftaran Anggota koperasi Stisla</h4>
                        </div>
                        <div class="card-body">
                            <div class="row mt-4">
                                <div class="col-12 col-lg-8 offset-lg-2">
                                    <div class="wizard-steps">
                                        <div class="wizard-step wizard-step-active">
                                            <div class="wizard-step-icon">
                                                <i class="fas fa-user-plus"></i>
                                            </div>
                                            <div class="wizard-step-label">
                                                Akun
                                            </div>
                                        </div>
                                        <div class="wizard-step">
                                            <div class="wizard-step-icon">
                                                <i class="fas fa-user-cog"></i>
                                            </div>
                                            <div class="wizard-step-label">
                                                Data Diri
                                            </div>
                                        </div>
                                        <div class="wizard-step">
                                            <div class="wizard-step-icon">
                                                <i class="fas fa-user-clock"></i>
                                            </div>
                                            <div class="wizard-step-label">
                                                Verifikasi
                                            </div>
                                        </div>
                                        <div class="wizard-step">
                                            <div class="wizard-step-icon">
                                                <i class="fas fa-user-check"></i>
                                            </div>
                                            <div class="wizard-step-label">
                                                Sukses
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form class="wizard-content mt-2">
                                <div class="wizard-pane">
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Username</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="text" name="username" class="form-control" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Email</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Password</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="text" name="password" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row align-items-center">
                                        <label class="col-md-4 text-md-right text-left">Ulangi Password</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="text" name="password_cehck" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row justify-content-md-center">
                                            <div class="col col-md-2">
                                                <a href="<?= base_url('auth'); ?>" class="btn btn-icon icon-right btn-secondary"><i class="fas fa-arrow-left"> </i> Batal</a>
                                            </div>
                                            <div class="col col-md-2 text-right">
                                                <a href="<?= base_url('auth/registration/2'); ?>" class="btn btn-icon icon-right btn-primary">Next <i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="simple-footer">
                        Copyright &copy; Koperasi Stisla <?= date('Y'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>