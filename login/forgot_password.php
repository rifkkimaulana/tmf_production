<?php
include 'halaman/header.php';
?>
<div class="login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?php echo $base_url; ?>/" class="h1"><b>TMF</b>PRODUCTION</a>
            </div>

            <div class="card-body">
                <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

                <form action="proses_insert_email.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Request new
                                password</button>
                        </div>
                    </div>
                </form>
                <p class="mt-3 mb-1">
                    <a href="<?php echo $base_url; ?>/login.php">Login</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="emailNotFound" tabindex="-1" role="dialog" aria-labelledby="emailNotFoundModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="emailNotFoundModalLabel">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Email tidak ditemukan. Silakan coba lagi.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const errorParam = urlParams.get('error');

        if (errorParam === 'email_tidak_ditemukan') {
            $("#emailNotFound").modal("show");
        }
    });
</script>

<div class="modal fade" id="emailSuccessModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Success</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Email berhasil diverifikasi! Silahkan cek whatsapp anda kami telah mengirimkan link reset password!
            </div>
            <div class="modal-footer">
                <a href="<?php echo $base_url; ?>" class="btn btn-primary">Masuk</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('success') === 'email_berhasil_diverifikasi') {
            $('#emailSuccessModal').modal('show');
        }
    });
</script>
<?php include 'halaman/footer.php'; ?>