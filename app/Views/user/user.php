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

                <h4>EDIT DISINI 01</h4>
                <h4><?= $title; ?></h4>

                <!-- END ISI CONTENT -->
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>