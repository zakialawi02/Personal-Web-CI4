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

                <div class="d-grid gap-2 mp-1">
                    <a href="note/create" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">+ add note</a>
                </div>

                <?php if (session()->getFlashdata('alert')) : ?>
                    <div class="card-body">
                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('alert'); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="mb-5"></div>

                <div class="d-d-grid gap-2 mp-2 note">
                    <?php foreach ($callNote as $n) : ?>
                        <div class="card-blog">
                            <div class="card-span">
                                <a href="/note/<?= $n['id_note']; ?>" style="font-size:18px">
                                    <h3><?= $n['judul_note']; ?></h3>
                                </a>
                                <div>

                                    <a href="#" class="card-link">Admin</a>
                                    <span class="card-date">| <?= date('d M Y', strtotime($n['created_at'])); ?></span>
                                </div>
                                <p class="card-para"><?= $n['isi_note']; ?></p>
                            </div>
                            <div class="col m-2 ">
                                <form action="/note/edit/<?= $n['id_note']; ?>" style="display: inline;">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="EDIT">
                                    <button type="submit" class="p-1 btn btn-warning "><i class="bi bi-pencil-square"></i></button>
                                </form>
                                <form action="/note/delete/<?= $n['id_note']; ?>" style="display: inline;" method="post">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="p-2 btn btn-danger fa fa-trash" onclick="return confirm('Yakin Hapus Data?')"></button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>



                <!-- END ISI CONTENT -->
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>