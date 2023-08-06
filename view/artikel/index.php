<div class="col-md-9 tmf_production">
    <?php
    if (isset($_GET['judul']) && !empty($_GET['judul'])) {
        include 'detail_artikel.php';
    } else {
        if (isset($_GET['search']) && !empty($_GET['search'])) {
            include 'search_artikel.php';
        } else {
            include 'all_artikel.php';
        }
    }
    ?>
</div>
<div class="col-md-3 tmf_production ">
    <div class="card-flat hide-on-small-screen">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-flat">
                    <div class="card-header">
                        <h5 class="card-title m-0">Cari Artikel</h5>
                    </div>
                </div>
                <form action="dashboard.php" method="get">
                    <div class="form-group mt-3">
                        <div class="input-group">
                            <input type="hidden" name="page" value="artikel">
                            <input type="text" class="form-control" id="judul" name="search"
                                placeholder="Masukkan judul artikel">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-secondary" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>