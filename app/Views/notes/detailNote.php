<?= $this->extend('_Layout/templateNotes/templateNotes'); ?>


<?= $this->section('content'); ?>
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last" style="margin-bottom: 1rem;">

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

                <div class="judul">
                    <h2><?= $callNote->judul_note; ?></h2>
                    <h6><?= $callNote->created_at; ?></h6>
                    <br>
                </div>
                <div class="para">
                    <p><?= $callNote->isi_note; ?></p>
                </div>



                <!-- END ISI CONTENT -->
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>