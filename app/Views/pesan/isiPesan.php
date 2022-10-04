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

                <h4 class="mb-4"><?= $title; ?></h4>

                <div class="mt-2 p-2 container">
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
                            <div class="row">
                                <button type="submit" class="btn btn-primary mt-4 col align-self-end" name="simpan">Tambah</button>
                            </div>
                        </div>

                    </form>
                </div>

                <!-- END ISI CONTENT -->
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>