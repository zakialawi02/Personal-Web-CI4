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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">

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

        <a href="#" class="logo">>_<span class="C1">"</span><span class="C2">
                < </a>
                    <div id="menu" class="fas fa-bars">
                    </div>

                    <nav class="navbar">
                        <a class="active" href="#home">home</a>
                        <a href="#about">About</a>
                        <a href="#portfolio">Portfolio</a>
                        <a href="#contact">Contact</a>
                        <a class="btn-Gal" href="https://gallery.zakialawi.my.id/" target="_blank">Gallery</a>



                    </nav>

    </header>

    <!-- header section ends -->

    <!-- dark Mode Toggle -->
    <div class="darkModeToggle" id="darkModeToggle">
        <i class="fas fa-moon D1"></i>
        <i class="fas fa-sun D2"></i>
    </div>
    <!-- /darkModeToggle -->

    <!-- CONTENT -->
    <?= $this->renderSection('content') ?>
    <!-- CONTENT -->

    <!-- scroll top  -->

    <a href="#home" class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </a>









    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

    <!-- Typeit -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typeit/7.0.4/typeit.min.js"></script>

    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Tilt js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
    <script src="<?= base_url(); ?>/js/vanilla-tilt.min.js"></script>
    <script type="text/javascript">
        VanillaTilt.init(document.querySelector(".gambarTilt"), {
            reverse: true,
            max: 15,
            speed: 200,
            transition: true, // Set a transition on enter/exit.
            easing: "cubic-bezier(.03,.98,.52,.99)", // Easing on enter/exit.
            reset: true, // If the tilt effect has to be reset on exit.
            glare: true,
            "max-glare": 0.5, // the maximum "glare" opacity (1 = 100%, 0.5 = 50%)
            "glare-prerender": false, // false = VanillaTilt creates the glare elements for you, otherwise
        });

        //It also supports NodeList
        VanillaTilt.init(document.querySelectorAll(".gambarTilt"));
    </script>
    <!-- custom js file link  -->
    <script src="<?= base_url(); ?>/js/script.js"></script>
    <script src="<?= base_url(); ?>/js/Gallery.js"></script>
    <script src="<?= base_url(); ?>/js/quotes.js"></script>
    <script src="https://kit.fontawesome.com/68577d40c9.js" crossorigin="anonymous"></script>



</body>

</html>