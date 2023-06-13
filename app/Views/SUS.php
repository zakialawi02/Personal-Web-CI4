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

    <style>
        .pp {
            font-size: 1.5rem;
        }

        .admin b {
            font-weight: 700;
        }

        .quiserror {
            width: 80%;
            display: block;
        }
    </style>

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
                <a class="active" href="/#home">home</a>
                <!-- <a href="/" target="_blank">About</a> -->
                <a href="https://github.com/zakialawi02" target="_blank"><i class="fa-brands fa-github"></i></a>
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

            <div class="pt-5 p-5" style="display: none;">
                <center>
                    <h2>The questionnaire has been closed</h2>
                    <h3>But you can still access the webgis</h3>
                    <a href="/a" class="btn m-4" target="_blank" data-aos="fade-down" delay="0.8">link <span class="fas fa-external-link-alt"></span>
                    </a>
                </center>
            </div>

            <div style="display: block;">
                <h2>System Usability Scale (SUS) Questionnaire</h2>
                <p>System Usability Scale (SUS) adalah salah satu metode uji pengguna yang menyediakan alat ukur yang “quick and dirty” dan dapat diandalkan. Diaplikasikan dengan menggunakan 10 pernyataan berbentuk kuisoner yang diikuti dengan 5 opsi jawaban untuk setiap pernyataan, mulai dari Sangat Setuju hingga Sangat Tidak Setuju. Metode uji pengguna ini diperkenalkan oleh John Brooke di tahun 1986 yang dapat digunakan untuk mengevaluasi berbagai jenis produk maupun servis, termasuk di dalamnya hardware, software, perangakat mobile, website dan aplikasi.</p>
                <p>Dalam pengujian ini anda diminta untuk menggunakan dan menjalankan situs WebGIS dan diminta untuk mengikuti task yang telah diberikan. Untuk penjelasan lebih detail baca point dibawah berikut.</p>

                <ol>
                    <li>Anda dapat mengakses dengan perangkat apapun, bisa menggunakan laptop*/PC*/tablet/ipad/smatrphone. *experience lebih baik.</li>
                    <li>Lakukan tugas berikut</li>
                    <div class="table-responsive">
                        <table class="table table-primary">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 8rem;">no.</th>
                                    <th scope="col">Task</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row">1</td>
                                    <td>Eksplorasi apa saja yang dimuat dalam webgis</td>
                                </tr>
                                <tr class="">
                                    <td scope="row">2</td>
                                    <td>Coba untuk melakukan input data kafe. Silakan membuat akun jika belum punya atau menggunakan akun yang telah disediakan dibawah</td>
                                </tr>
                                <tr class="">
                                    <td scope="row">3</td>
                                    <td>Masukkan data kafe yang berlokasi di surabaya. Bisa menggunkan data asli maupun dummy, atau bisa menggunakan data yang telah disediakan dibawah</td>
                                </tr>
                                <tr class="">
                                    <td scope="row">5</td>
                                    <td>Coba masuk ke dashboard untuk melihat status data yang telah diinputkan</td>
                                </tr>
                                <tr class="">
                                    <td scope="row">6</td>
                                    <td>Selesai!</td>
                                </tr>
                                <tr class="admin">
                                    <td scope="row">7</td>
                                    <td>[opsional] Coba masuk ke dashboard admin untuk melihat apa saja yang ada dan status semua data yang ada, anda dapat melakukan aprovment terhadap data yang barusan anda inputtkan. <b>Jangan Merubah data selain itu.</b></td>
                                </tr>
                                <tr class="">
                                    <td scope="row">8</td>
                                    <td>Selesai!!. silakan mengisi form kuisioner dibawah!!</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <li>Silakan akses situs WebGIS berikut dan jelajahi sesuai taks yang telah diberikan terlebih dahulu. Selebihnya dibebaskan <a href="/a" class="btn" target="_blank">click here <span class="fas fa-external-link-alt"></span>
                        </a></li>
                    <li>Jika anda telah mencoba menggunakan dan melakukan beberapa task mohon ketersediaannya untuk mengisi form kuisoner <a href="#Kuisioner">dibawah</a> atau buka kuisioner terpisah <a href=" https://forms.gle/EpQKzeYW5YUGEvAZA" class="btn" target="_blank"> disini <span class="fas fa-external-link-alt"></span>
                        </a>
                    </li>

                </ol>

                <p>Data Sampel jika perlu*</p>
                <label class="form-label pp">Nama Kafe : </label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="coptek1" value="Acorn Cafe" disabled>
                    <button type="button" class="btn" onclick="copyText1()">Salin <span class="fa-solid fa-copy"></span></button>
                </div>
                <label class="form-label pp">Alamat Kafe : </label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="coptek2" value="Jl. Babatan Pantai UT II No.18, Dukuh Sutorejo, Kec. Mulyorejo" disabled>
                    <button type="button" class="btn" onclick="copyText2()">Salin <span class="fa-solid fa-copy"></span></button>
                </div>
                <div class="row g-2">
                    <div class="col-md-6">
                        <label class="form-label pp">Longitude : </label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="coptek3" value="-7.2532915934025795" disabled>
                            <button type="button" class="btn" onclick="copyText3()">Salin <span class="fa-solid fa-copy"></span></button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label pp">Latitude : </label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="coptek4" value="112.7903269589938" disabled>
                            <button type="button" class="btn" onclick="copyText4()">Salin <span class="fa-solid fa-copy"></span></button>
                        </div>
                    </div>
                </div>
                <label class="form-label pp">Gambar (bebas) : </label>
                <div class="row gx-2">
                    <div class="col col-md-3 m-3">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/sus/foto1.jpg" class="card-img-top" alt="...">
                            <a href="#" class="btn m-1">Download <span class="fa-solid fa-download"></span></a>
                        </div>
                    </div>
                    <div class="col col-md-3 m-3">
                        <div class="card" style="width: 18rem;">
                            <img src="/img/sus/foto2.jpg" class="card-img-top" alt="...">
                            <a href="#" class="btn m-1">Download <span class="fa-solid fa-download"></span></a>
                        </div>
                    </div>
                </div>

                <hr>

                <p>Data Akun jika perlu*</p>
                <p>akun user</p>
                <div class="row g-2">
                    <div class="col-md-6">
                        <label class="form-label pp">Username : </label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="emaila" value="usertes" disabled>
                            <button type="button" class="btn" onclick="copyemaila()">Salin <span class="fa-solid fa-copy"></span></button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label pp">Password : </label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="passwa" value="usertes" disabled>
                            <button type="button" class="btn" onclick="copypasswa()">Salin <span class="fa-solid fa-copy"></span></button>
                        </div>
                    </div>
                </div>
                <p>akun admin</p>
                <div class="row g-2">
                    <div class="col-md-6">
                        <label class="form-label pp">Username : </label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="emaila" value="usertes1" disabled>
                            <button type="button" class="btn" onclick="copyemaila2()">Salin <span class="fa-solid fa-copy"></span></button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label pp">Password : </label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="passwa" value="usertes" disabled>
                            <button type="button" class="btn" onclick="copypasswa2()">Salin <span class="fa-solid fa-copy"></span></button>
                        </div>
                    </div>
                </div>

                <hr>
                <hr>

                <div class="mt-5"></div>
                <h2 class="mt-3 pt-3" id="Kuisioner">Kuisioner</h2>
                <center class="p-2 pt-3">
                    <a type="button" class="quiserror btn btn-primary pt-2" href="https://forms.gle/XsGpjaB5e4qZeZZ97">Jika kuisioner dibawah tidak muncul klik disini</a>
                </center>
                <div class="pt-4"></div>
                <div class="p-1"></div>
                <iframe src="https://forms.gle/XsGpjaB5e4qZeZZ97" frameborder="0" style="width: 100%; height: 95vh;"></iframe>


                <hr>
                <hr>
                <div class="pt-5 pb-4 p-2">
                    <h4>Jika menemukan error/keanehan dan mau berpartisipasi dalam memperbaiki dapat kirimkan status/tampilan error dibawah ini!!</h4>
                    <form class="p-1" action="/home/addReport" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <p>Email*</p>
                            <input type="email" class="form-control" name="email" placeholder="yourmail@mail.com" required>
                        </div>
                        <div class="mb-3">
                            <p>Deskripsi</p>
                            <textarea class="form-control" id="keterangan" name="keterangan" rows="3" placeholder="Jelaskan Permasalahannya dengan detail"></textarea>
                        </div>
                        <p>Gambar/Foto (optional)</p>
                        <div class="input-group mb-3">
                            <input class="form-control" type="file" name="fotos[]" id="fotos" accept="image/*" multiple>
                        </div>
                        <div id="FileHelp" class="h5 pb-2">.jpg/.png</div>
                        <div id="imgPreview"></div>
                        <button type="submit" class="a btn" style="width: 100%;">Submit</button>
                    </form>
                </div>

            </div>



        </div>

    </section>

    <!-- HOME end -->


    <!-- CONTACT  -->
    <section class="contact" id="contact" style="display: none;">

        <div class="title-contact">
            <h1 class="heading-title">CONTACT ME</h1>

            <div class="contact-center">
                <div class="left">
                    <h2>Get in Touch</h2>
                    <p>
                        Fill out the form to get in touch with me. <br> You don't like using forms? contact me by email
                        or scan the
                        following qrcode.
                    </p>

                    <img src="/img/qrcontact.jpeg" alt="" class="qrcontact">

                    <div>
                        <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                        <span class="content">
                            <h3>Address</h3>
                            <span style="color: #ffffff;">Indonesia</span>
                        </span>
                    </div>

                    <div>
                        <span class="icon"><i class="fas fa-envelope"></i></span>
                        <span class="content">
                            <h3>Email</h3>
                            <span style="color: #ffffff;">hallo@zakialawi.my.id</span>
                        </span>
                    </div>

                </div>

                <div class="right">
                    <h2>Message me</h2>

                    <!-- versi 2 -->
                    <div autocomplete="off" class="form" id="myForm" name="myform">
                        <?= csrf_field(); ?>
                        <div>
                            <input type="text" placeholder="Your Name" name="name" id="name" required />
                            <input type="email" placeholder="Your Email" name="email" id="email" required />
                        </div>
                        <input type="text" placeholder="Subject" name="judul" id="judul" required />
                        <textarea cols="10" rows="10" placeholder="Your Message" name="message" id="message" required></textarea>

                        <div id="terkirim"></div>
                        <input class="btn-contact" type="submit" onclick="sendMai()" role="button" value="Submit" name="sendMail">
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- CONTACT ends -->

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

    <!-- mailjs -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function() {
            emailjs.init("AP-Zbwta6_TwadTCB");
        })();
    </script>
    <script>
        function sendMai() {
            var templateParams = {
                name: document.getElementById("name").value,
                email: document.getElementById("email").value,
                judul: document.getElementById("judul").value,
                message: document.getElementById("message").value,
            };
            console.log(templateParams);
            emailjs.send('service_7xgeic2', 'template_20331zc', templateParams)
                .then(function(response) {
                    console.log('SUCCESS!', response.status, response.text);
                    document.getElementById("terkirim").innerHTML = "Berhasil dikirim!";
                    document.getElementById("terkirim").style.display = "block";
                    setTimeout(function() {
                        document.getElementById("terkirim").style.display = "none";
                    }, 5000);
                    document.getElementById("name").value = "";
                    document.getElementById("email").value = "";
                    document.getElementById("judul").value = "";
                    document.getElementById("message").value = "";
                }, function(error) {
                    console.log('FAILED...', error);
                    document.getElementById("terkirim").innerHTML = "Gagal dikirim!";
                    document.getElementById("terkirim").style.display = "block";
                    setTimeout(function() {
                        document.getElementById("terkirim").style.display = "none";
                    }, 5000);
                });
        }
    </script>


    <script>
        function copyText1() {
            var copyText = document.getElementById("coptek1");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
            navigator.clipboard.writeText(copyText.value);
        }

        function copyText2() {
            var copyText = document.getElementById("coptek2");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
            navigator.clipboard.writeText(copyText.value);
        }

        function copyText3() {
            var copyText = document.getElementById("coptek3");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
            navigator.clipboard.writeText(copyText.value);
        }

        function copyText4() {
            var copyText = document.getElementById("coptek4");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
            navigator.clipboard.writeText(copyText.value);
        }

        function copyemaila() {
            var copyText = document.getElementById("emaila");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
            navigator.clipboard.writeText(copyText.value);
        }

        function copypasswa() {
            var copyText = document.getElementById("passwa");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
            navigator.clipboard.writeText(copyText.value);
        }

        function copyemaila2() {
            var copyText = document.getElementById("emaila");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
            navigator.clipboard.writeText(copyText.value);
        }

        function copypasswa2() {
            var copyText = document.getElementById("passwa");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
            navigator.clipboard.writeText(copyText.value);
        }
    </script>
    <script>
        function readURL(input) {
            if (input.files) {
                $('#imgPreview').html(''); // mengosongkan preview
                for (var i = 0; i < input.files.length; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imgPreview').append('<div><img src="' + e.target.result + '" class="img-kafe"></div>');
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        }
        $("#fotos").change(function() {
            readURL(this);
        });
    </script>
    <script>
        $(document).ready(function() {
            $("th").css("pointer-events", "none");
            $(".no-sort").css("pointer-events", "none");
        });
    </script>

</body>

</html>