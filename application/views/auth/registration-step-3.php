<style type="text/css">
    #kodee {
        display: inline-block;
        margin: 1rem auto;
        border: none;
        padding: 0;
        width: 15ch;
        background: repeating-linear-gradient(90deg, dimgrey 0, dimgrey 1ch, transparent 0, transparent 1.5ch) 0 100%/ 10ch 2px no-repeat;
        letter-spacing: 0.5ch;
    }

    #kodee:focus {
        outline: none;
        color: dodgerblue;
    }
</style>

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
                                        <div class="wizard-step wizard-step-active">
                                            <div class="wizard-step-icon">
                                                <i class="fas fa-user-cog"></i>
                                            </div>
                                            <div class="wizard-step-label">
                                                Data Diri
                                            </div>
                                        </div>
                                        <div class="wizard-step wizard-step-info">
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
                                        <label class="col-md-5 text-md-right text-left">Verifikasi Kode</label>
                                        <div class="col-lg-4 col-md-6">
                                            <input type="text" id="kodee" name="id_user" class="form-control" placeholder="1234567" maxlength="7">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row justify-content-md-center">
                                            <div class="col col-md-2">
                                                <a href="<?= base_url('auth/registration/2'); ?>" class="btn btn-icon icon-right btn-secondary"><i class="fas fa-arrow-left"> </i> Kembali</a>
                                            </div>
                                            <div class="col col-md-2 text-right">
                                                <a href="<?= base_url('auth/registration/4'); ?>" class="btn btn-icon icon-right btn-primary">Konfirmasi <i class="fas fa-arrow-right"></i></a>
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