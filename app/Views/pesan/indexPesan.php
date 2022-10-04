<?= $this->extend('_Layout/templateAdmin/templateAdmin'); ?>


<?= $this->section('content'); ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last" style="margin-bottom: 1rem;">
                <h3><?= $title1; ?></h3>
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
            <!-- <div class="card-header">
                <h4 class="card-title"><?= $title; ?></h4>
            </div> -->
            <div class="card-body">
                <!-- ISI CONTENT -->

                <h4><?= $title; ?></h4>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary my-2 p-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fa fa-plus"></i> Tambah
                </button>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Tambah Pesan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <form action="/message/send_message" method="post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <div class="row mb-3">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Pesan:</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" for="pesan" id="pesan" name="pesan" placeholder="Tulis Pesan disini" required></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Dari:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" for="pesan_dari" id="pesan_dari" name="pesan_dari" placeholder="eg: seseorang">
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
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


                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Created at</th>
                            <th>Pesan</th>
                            <th>From</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tampilData as $p) : ?>
                            <tr>
                                <td><?= date('d M Y', strtotime($p->created_at)); ?></td>
                                <td><?= $p->pesan; ?></td>
                                <td><?= $p->pesan_dari; ?></td>
                                <td>
                                    <div class="btn-group mb-3 btn-group-sm" role="group" aria-label="Basic example">

                                        <form action="/message/hapus/<?= $p->id_pesan; ?>" method="post">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger fa fa-trash" onclick="return confirm('Yakin Hapus Data?')"></button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <!-- END ISI CONTENT -->
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>