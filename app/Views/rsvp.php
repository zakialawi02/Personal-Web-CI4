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
                    <i class="fa fa-plus"></i> Hadir
                </button>
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Tambah Manual</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <form action="/rsvp/send_konfirmasi" method="post" enctype="multipart/form-data">
                                    <?= csrf_field(); ?>
                                    <div class="row mb-3">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Nama:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" for="nama_tamu" id="nama_tamu" name="nama_tamu" placeholder="Nama" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="colFormLabel kehadiran" class="col-sm-3 col-form-label">Kehadiran:</label>
                                        <div class="col-sm-8">
                                            <select id="kehadiran" name="kehadiran" class="form-select" for="kehadiran" id="kehadiran">
                                                <option value="Hadir" selected>Hadir</option>
                                                <option value="Mungkin Hadir">Kemungkinan Hadir</option>
                                                <option value="Tidak Hadir">Tidak Hadir</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="colFormLabel" class="col-sm-3 col-form-label">Jumlah Orang:</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" for="jumlah_tamu" id="jumlah_tamu" name="jumlah_tamu" value="1">
                                        </div>
                                    </div>


                                    <div class="row mb-3" id="THadir">
                                        <label for="colFormLabel keterangan" class="col-sm-3 col-form-label" id="reason-list">Keterangan:</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" for="keterangan" id="keterangan" name="keterangan" placeholder="keterangan"></textarea>
                                        </div>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Konfirmasi</button>
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
                            <th>ID</th>
                            <th>Send at</th>
                            <th>Name</th>
                            <th>Number of people</th>
                            <th>Attendance</th>
                            <th>KET</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tampilRsvp as $r) : ?>
                            <tr>
                                <td>#0<?= $r->id_tamu; ?></td>
                                <td><?= date('d M Y H:i:s', strtotime($r->created_at)); ?></td>
                                <td><?= $r->nama_tamu; ?></td>
                                <td><?= $r->jumlah_tamu; ?></td>
                                <td><?= $r->kehadiran; ?></td>
                                <td><?= $r->ket_tdkhadir; ?></td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn-group mb-3 btn-group-sm btn btn-primary" data-bs-toggle="modal" data-bs-target="#modaledit" data-id="<?= $r->id_tamu; ?>" data-tamu="<?= $r->nama_tamu; ?>" data-hadir="<?= $r->jumlah_tamu; ?>" data-status="<?= $r->kehadiran; ?>" data-ket="<?= $r->ket_tdkhadir; ?>"><i class="bi bi-pencil-square"></i></button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="modaledit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modaleditLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modaleditLabel">Edit</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="/rsvp/send_konfirmasi" method="post" enctype="multipart/form-data">
                                                        <?= csrf_field(); ?>
                                                        <div class="row mb-3">
                                                            <label for="colFormLabel" class="col-sm-3 col-form-label">Nama:</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" for="nama_rsvp" id="nama_rsvp" name="nama_rsvp" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="colFormLabel kehadiran" class="col-sm-3 col-form-label">Kehadiran:</label>
                                                            <div class="col-sm-8">
                                                                <select id="confirmhadir" name="confirmhadir" class="form-select" for="confirmhadir" id="confirmhadir">
                                                                    <option>Hadir</option>
                                                                    <option>Kemungkinan Hadir</option>
                                                                    <option>Tidak Hadir</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="colFormLabel" class="col-sm-3 col-form-label">Jumlah Orang:</label>
                                                            <div class="col-sm-8">
                                                                <input type="number" class="form-control" for="jumlah_rsvp" id="jumlah_rsvp" name="jumlah_rsvp" value="">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="colFormLabel keterangan" class="col-sm-3 col-form-label" id="reason-list">Keterangan:</label>
                                                            <div class="col-sm-8">
                                                                <textarea class="form-control" for="ket_rsvp" id="ket_rsvp" name="ket_rsvp" value=""></textarea>
                                                            </div>
                                                        </div>


                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="btn-group mb-3 btn-group-sm" role="group" aria-label="Basic example">
                                        <form action="/rsvp/hapus/<?= $r->id_tamu; ?>" method="post">
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