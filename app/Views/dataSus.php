<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="personal website  ahmad zaki alawi" />
    <meta name="keywords" content="resume, personal, portfolio, cv, ahmad zaki alawi" />


    <title><?= $title; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href=" <?= base_url(); ?>/img/favicon.png" type="image/x-icon" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- custom css file link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/sus.css">

</head>


<body>
    <!-- PRELOADER -->
    <div id="preloader" class="preloader">
        <div class="loading-text">
            <span class="loading-text-words" data-preloader="L">L</span>
            <span class="loading-text-words" data-preloader="O">O</span>
            <span class="loading-text-words" data-preloader="A">A</span>
            <span class="loading-text-words" data-preloader="D">D</span>
            <span class="loading-text-words" data-preloader="I">I</span>
            <span class="loading-text-words" data-preloader="N">N</span>
            <span class="loading-text-words" data-preloader="G">G</span>
            <span class="loading-text-words" data-preloader=".">.</span>
            <span class="loading-text-words" data-preloader=".">.</span>
            <span class="loading-text-words" data-preloader=".">.</span>
        </div>
    </div>


    <!-- header section starts  -->

    <header>

        <a href="/" class="logo">>_<span class="C1">"</span><span class="C2">
                < </a>
            </span>
            <div id="menu" class="fas fa-bars">
            </div>

            <nav class="navbar">
                <a class="active" href="#home">home</a>
                <a href="/" target="_blank">About</a>
                <a href="https://github.com/zakialawi02"><i class="fa-brands fa-github"></i></a>
                <!-- <a href="#contact">Contact</a>
                <a class="btn-Gal" href="https://gallery.zakialawi.my.id/" target="_blank">Gallery</a> -->



            </nav>

    </header>

    <!-- header section ends -->

    <!-- dark Mode Toggle -->
    <div class="darkModeToggle" id="darkModeToggle">
        <i class="fas fa-moon D1"></i>
        <i class="fas fa-sun D2"></i>
    </div>
    <!-- /darkModeToggle -->

    <!-- HOME  -->

    <section class="home" id="home">

        <div class="container-fluid mt-10 p-4">

            <div class="table-responsive">
                <table class="table table-primary" style="font-size: 1.6rem;">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 8rem;">no.</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Foto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($kuisioner as $K) : ?>
                            <tr class="">
                                <td scope="row"><?= $i++; ?></td>
                                <td><?= $K->keterangan; ?></td>
                                <td><?php if (empty($K->gambar)) : ?>
                                        -
                                    <?php else : ?>
                                        <?php $fotos = explode(', ', $K->gambar); ?>
                                        <?php foreach ($fotos as $foto) : ?>
                                            <img src="/img/sus/<?= $foto ?>" class="rounded float-start img-kafe">
                                        <?php endforeach ?>
                                    <?php endif ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>


        </div>

    </section>

    <!-- HOME end -->


    <!-- footer starts  -->

    <div class="footer">

        <h1 class="credit">Made with 💖 by <a href="https://www.instagram.com/a.zaki.alawi/">Zaki</a>. </h1>

    </div>

    <!-- footer ends -->

    <!-- scroll top  -->

    <a href="#home" class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </a>









    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/js/sus.js"></script>
    <script src="https://kit.fontawesome.com/68577d40c9.js" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $("th").css("pointer-events", "none");
            $(".no-sort").css("pointer-events", "none");
        });
    </script>

</body>

</html>