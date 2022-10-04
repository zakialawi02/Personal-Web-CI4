<?= $this->extend('_Layout/templateAdmin/templateAdmin'); ?>


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
            <!-- <div class="card-header">
            </div> -->
            <div class="card-body">
                <!-- ISI CONTENT -->



                <a href="/message" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">MESSAGE</a>
                <a href="/gis" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">WEB GIS</a>
                <a href="/rsvp" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">RSVP</a>
                <a href="#" class="btn btn-primary disabled" tabindex="-1" role="button" aria-disabled="true">SOON..</a>



                <!-- END ISI CONTENT -->
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>