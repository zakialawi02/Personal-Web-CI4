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

                <div class="modal-body">

                    <form action="/note/update" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" class="form-control" for="idNote" id="idNote" name="idNote" value="<?= $updateNote->id_note; ?>">

                        <div class="row mb-3">
                            <label for="colFormLabel" class=" col-form-label">Judul:</label>
                            <div class="col">
                                <input type="text" class="form-control" for="judulNote" id="judulNote" name="judulNote" value="<?= $updateNote->judul_note; ?>" required>
                            </div>
                        </div>

                        <div class="row mb-3" id="isi">
                            <label for="colFormLabel" class="col-form-label" id="reason-list">Notes:</label>
                            <div class="col">
                                <div>
                                    <!-- <div id="toolbar"></div>
                                    <div id="editor"></div> -->
                                    <textarea class="form-control" for="isiNote" id="isiNote" name="isiNote" required><?= $updateNote->isi_note; ?></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="modal-footer">
                            <a href="/note" class="btn btn-secondary " tabindex="-1" role="button" aria-disabled="true">Back</a>
                            <button type="submit" class="btn btn-primary">Snap</button>
                        </div>
                    </form>
                </div>



                <!-- END ISI CONTENT -->
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>