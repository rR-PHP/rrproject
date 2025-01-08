<div class="container-fluid mt-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($matkul as $mk) : ?>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="<?php echo $mk->gambar ?>" class="card-img-top" alt="Gambar Mata Kuliah" style="height: 180px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><?php echo $mk->nama_matkul ?></h5>
                        <p class="card-text text-muted">
                            <strong>Keterangan:</strong> <?php echo $mk->keterangan ?><br>
                            <strong>Kategori:</strong> <?php echo $mk->kategori ?><br>
                            <strong>SKS:</strong> <?php echo $mk->sks ?>
                        </p>
                        <p class="card-text">Ambilah mata kuliah ini agar hidup anda penuh dengan komedi.</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="#" class="btn btn-success btn-sm">Ambil</a>
                        <a href="#" class="btn btn-info btn-sm">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Scroll-to-Top Button -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>
