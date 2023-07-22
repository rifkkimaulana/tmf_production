<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Reset Database</h2>
            </div>
            <div class="card-body">
                <p class="card-text">Apakah Anda yakin ingin mereset database? Tindakan ini akan menghapus semua
                    data dalam database.</p>
                <form action="reset_database/reset_database_process.php" method="POST">
                    <div class="form-group">
                        <button type="button" class="btn btn-danger" data-toggle="modal"
                            data-target="#confirmResetModal">Reset Database</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Konfirmasi Reset Database -->
<div class="modal fade" id="confirmResetModal" tabindex="-1" role="dialog" aria-labelledby="confirmResetModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmResetModalLabel">Konfirmasi Reset Database</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin melakukan reset database? Tindakan ini akan menghapus semua data dalam tabel
                (kecuali tabel "user").
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="reset_database/reset_database_process.php" class="btn btn-danger">Reset Database</a>
            </div>
        </div>
    </div>
</div>