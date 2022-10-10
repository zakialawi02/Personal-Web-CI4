<?= $this->extend('_Layout/templateNotes/templateNotes'); ?>


<?= $this->section('content'); ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last" style="margin-bottom: 1rem;">
                <h3><?= $title; ?></h3>
                <!-- <p class="text-subtitle text-muted">The default layout </p> -->
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Layout Default</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <!-- ISI CONTENT -->


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary my-2 p-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fa fa-plus"></i> Notes
                </button>
                <!-- Modal -->
                <div class="modal fade tombol-tutup" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Tambah Manual</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <form action="/note/clip" method="post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <div class="row mb-3">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Nama:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" for="judulNote" id="judulNote" name="judulNote" placeholder="Judul" required>
                                        </div>
                                    </div>

                                    <div class="row mb-3" id="THadir">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label" id="reason-list">Notes:</label>
                                        <div class="col-sm-8">
                                            <div>
                                                <div id="toolbar"></div>
                                                <div id="editor"></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary tombol-cancel" data-bs-dismiss="modal" id="tombolTutup">Cancel</button>
                                        <button type="submit" class="btn btn-primary" id="tombolSimpan">Snap</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if (session()->getFlashdata('alert')) : ?>
                    <div class="card-body">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('alert'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                <?php endif; ?>


                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <a href="#" class="btn btn-primary">view detail</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <a href="#" class="btn btn-primary">view detail</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <a href="#" class="btn btn-primary">view detail</a>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                            <a href="#" class="btn btn-primary">view detail</a>
                        </div>
                    </div>
                </div>




                <!-- END ISI CONTENT -->
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>