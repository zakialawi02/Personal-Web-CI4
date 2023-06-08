<?= $this->extend('_Layout/templateHome') ?>

<!-- ISI CONTENT -->
<?= $this->section('content'); ?>

<!-- HOME  -->

<section class="home" id="home">

    <div class="home-container">
        <div class="row colom">
            <div class="home-text">
                <h3>Hello, my name is</h3>
                <h1>Ahmad Zaki Alawi</h1>
                <h4>And I'm a &#160;<span id="type1"></span></h4>
                <p>"Things turn out best for those who make the best of the way things turn out."</p>
                <div class="sosial-media">
                    <a href="https://www.instagram.com/a.zaki.alawi/" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/in/ahmad-zaki-alawi/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://github.com/zakialawi02/personal-web" target="_blank"><i class="fab fa-github"></i></a>
                </div>
            </div>

            <div class="home-img">
                <div class="img-box">
                    <img src="<?= base_url(); ?>/img/about.png" alt="profile-pic">
                    <span class="welcome-thumb-1">
                        <img class="welcome-animation" src="<?= base_url(); ?>/img/follow.gif" alt="">
                    </span>
                    <span class="welcome-thumb-2">
                        <img class="welcome-animation" src="<?= base_url(); ?>/img/ig_like.gif" alt="">
                    </span>
                    <span class="welcome-thumb-3">
                        <img class="welcome-animation" src="<?= base_url(); ?>/img/cool.png" alt="">
                    </span>
                </div>

            </div>
        </div>
    </div>

</section>

<!-- HOME end -->

<!-- ABOUT  -->

<section class="about" id="about">

    <div class="about-center-1 container-1" data-aos="fade-down">
        <span class="biograp">Biography</span>
        <h3 class="biograp2">About Me</h3>
    </div>

    <div class="about-center container">
        <div class="left animate__animated animate__fadeInLeft" data-aos="fade-right">
            <img src="<?= base_url(); ?>/img/pasfoto.jpg" alt="" class="gambarTilt" />
        </div>

        <div class="right animate__animated animate__fadeInRight" data-aos="fade-left">
            <h1>I'm Zaki, a <span id="type2"></span></h1>
            <p>
                Hello, Resume section is not yet available!! &nbsp;>>Load dummy text> Lorem ipsum dolor sit amet
                consectetur, adipisicing
                elit. Quos recusandae praesentium delectus ad sed, facilis voluptates id doloremque architecto
                consectetur excepturi quibusdam quia.
                Explicabo ipsum, tempore esse facere vero molestiae! []
            </p>

            <div class="detail-data-container">
                <div class="row colom">
                    <div class="detail-data-left">
                        <ul>
                            <li><i class="fas fa-birthday-cake"></i><span><label>&nbsp;&nbsp; Birthday: </label>
                                    2 December 2000</span>
                            </li>
                            <li><i class="fas fa-map-marker-alt"></i><span><label>&nbsp;&nbsp; Location: </label><a href="https://goo.gl/maps/tH8JhhDNjorMd7Ed9" target="_blank">
                                        Surabaya, Indonesia
                                    </a></span>
                            </li>
                            <li><i class="fas fa-school"></i><span><label>&nbsp;&nbsp; Study: </label>
                                    <a href="https://www.google.com/maps/place/Sepuluh+Nopember+Institute+of+Technology+(ITS)/@-7.2820793,112.7943996,854m/data=!3m1!1e3!4m5!3m4!1s0x2dd7fa1323221a93:0x306c3c99adedb258!8m2!3d-7.282356!4d112.7949253" target="_blank">
                                        ITS</a></span>
                            </li>
                            <li><i class="fas fa-graduation-cap"></i><span><label>&nbsp;&nbsp; Degree: </label>
                                    ********</span>
                            </li>
                        </ul>
                    </div>

                    <div class="detail-data-right">
                        <ul>
                            <li><i class="fas fa-gamepad"></i><span><label>&nbsp;&nbsp; Interest: </label>
                                    xxxxxxxxxxxxxxxx</span>
                            </li>
                            <li><i class="fas fa-envelope"></i><span><label>&nbsp;&nbsp; E-mail: </label><a href="mailto:hallo@zakialawi.my.id" target="_blank">hallo@zakialawi.my.id</a>
                                </span>
                            </li>
                            <li><i class="fab fa-whatsapp"></i><span><label>&nbsp;&nbsp; Phone: </label><a href="https://wa.me/18105805304" target="_blank">+1 (810) 580-5304</a>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <a href="<?= base_url(); ?>/CV.pdf" class="btn fas fa-download" target="_blank" data-aos="fade-down" delay="0.8">&nbsp;
                Download CV</a>
            <a href="/Detail-Resume" class="btn fas fa-external-link-alt" target="_blank" data-aos="fade-down" delay="0.8">&nbsp; Detail
            </a>
        </div>
    </div>

</section>

<!-- ABOUT ends -->

<!-- PORTFOLIO  -->
<section class="portfolio" id="portfolio">

    <div class="title-porto">
        <h1 style="font-size: 3rem;">OUR WORKS</h1>
    </div>

    <div class="wrapper">
        <!-- filter Items -->
        <nav>
            <div class="items">
                <span class="item active" data-name="all">All</span>
                <span class="item" data-name="Photo">Photo</span>
                <span class="item" data-name="Design">Design</span>
                <span class="item" data-name="Web">Web</span>
            </div>
        </nav>
        <!-- filter Images -->
        <div class="gallery">
            <div class="image" data-name="Photo"><span><img src="<?= base_url(); ?>/img/Portfolio/IMG_8576-7.jpg" alt=""></span></div>
            <div class="image" data-name="Photo"><span><img src="<?= base_url(); ?>/img/Portfolio/20190803_054047-scaled.jpg" alt=""></span></div>
            <div class="image" data-name="Photo"><span><img src="<?= base_url(); ?>/img/Portfolio/P_20180410_150823_SRES.jpg" alt=""></span></div>
            <div class="image" data-name="Photo"><span><img src="<?= base_url(); ?>/img/Portfolio/Copy-of-IMG_6743-2-scaled.jpg" alt=""></span></div>
            <div class="image" data-name="Photo"><span><img src="<?= base_url(); ?>/img/Portfolio/IMG20190624073359-scaled.jpg" alt=""></span></div>
            <div class="image" data-name="Photo"><span><img src="<?= base_url(); ?>/img/Portfolio/IMG_0087-1-rotated.jpg" alt=""></span></div>
            <div class="image web-hover " data-name="Web"><span><img src="<?= base_url(); ?>/img/Portfolio/Personal-Web.png" alt=""></span>
                <p><span><a href="https://zakialawi.my.id/" target="_blank" class="btn-web">Visit Page</a></span>
                </p>
            </div>
            <div class="image" data-name="Photo"><span><img src="<?= base_url(); ?>/img/Portfolio/IMG_7621-1-scaled.jpg" alt=""></span>
            </div>
            <div class="image" data-name="Photo"><span><img src="<?= base_url(); ?>/img/Portfolio/IMG_7643-scaled.jpg" alt=""></span>
            </div>
            <div class="image" data-name="Photo"><span><img src="<?= base_url(); ?>/img/Portfolio/IMG_9978-5-scaled.jpg" alt=""></span>
            </div>
            <div class="image" data-name="Design"><span><img src="<?= base_url(); ?>/img/Portfolio/01.-Cover.png" alt=""></span></div>
            <div class="image" data-name="Design"><span><img src="<?= base_url(); ?>/img/Portfolio/01-cloud.jpg" alt=""></span></div>
            <div class="image" data-name="Design"><span><img src="<?= base_url(); ?>/img/Portfolio/01-Hari-ulang-tahun-ITS-(10-Nov).png" alt=""></span></div>
            <div class="image web-hover" data-name="Web"><span><img src="<?= base_url(); ?>/img/Portfolio/zakiphoto.png" alt=""></span>
                <p><span><a href="http://gallery.zakialawi.my.id/" target="_blank" class="btn-web">Visit
                            Page</a></span></p>
            </div>
            <div class="image web-hover " data-name="Web"><span><img src="<?= base_url(); ?>/img/Portfolio/himage.png" alt=""></span>
                <p><span><a href="https://arek.its.ac.id/himage" target="_blank" class="btn-web">Visit
                            Page</a></span></p>
            </div>
        </div>
    </div>
    </div>
    <!-- fullscreen img preview box -->
    <div class="preview-box">
        <div class="details">
            <span class="title">Category: <p></p></span>
            <span class="icon fas fa-times"></span>
        </div>
        <div class="image-box"><img src="" alt=""></div>
    </div>
    <div class="shadow"></div>


</section>

<!-- PORTFOLIO ends -->

<!-- QUOTES  -->
<section class="QOFTD">

    <div class="quote-section" id="quote">
        <div class="quotes">
            <div class="QTD">Quote of the Day</div>
            <div class="content">
                <div class="quote-area">
                    <i class="fas fa-quote-left"></i>
                    <p class="quote">The beginning is always today.</p>
                    <i class="fas fa-quote-right"></i>
                </div>
                <div class="author">
                    <span>__</span>
                    <span class="name">Mary Wollstonecraft</span>
                </div>
            </div>
            <div class="buttons">
                <div class="features">
                    <ul>
                        <li class="speech"><i class="fas fa-volume-up"></i></li>
                        <li class="copy"><i class="fas fa-copy"></i></li>
                        <li class="twitter"><i class="fab fa-twitter"></i></li>
                    </ul>
                    <button>New Quote</button>
                </div>
            </div>
        </div>
        <p class="credit-quote">Random Quote Generator, Credit by <a target="_blank" href="https://www.codingnepalweb.com/random-quote-generator-html-javascript/">&nbsp;
                codingnepalweb</a></p>
        <p class="credit-quote">API by <a target="_blank" href="https://github.com/lukePeavey/quotable">&nbsp;
                Quotable</a></p>
    </div>

</section>

<!-- Quote ends -->


<!-- Anonymous Message -->

<section class="pesan">

    <div class="title-pesan">
        <h1 style="font-size: 3rem;">ANONYMOUS MESSAGE</h1>
    </div>
    <div class="quote-section" id="quote">
        <div class="quotes">
            <div class="card-chat scroll">

                <center>
                    <?php foreach ($tampilData as $p) : ?>
                        <div class="msg-bubble">
                            <div class="msg-info">
                                <div class="msg-info-name">~ <?= $p->pesan_dari; ?></div>
                                <div class="msg-info-time"><?= date('d M Y h:i A', strtotime($p->created_at)); ?></div>
                            </div>

                            <div class="msg-text">
                                <?= $p->pesan; ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </center>

                <div class="garisbatasbawah"></div>
            </div>

            <?php if (session()->getFlashdata('alert')) : ?>
                <div id="toastContainer" class="toastContainer">
                    <p><?= session()->getFlashdata('alert'); ?>
                        <span id="close">
                            <button id="closebtn" onclick="closetoast()">&times;</button>
                        </span>
                    </p>
                </div>
            <?php endif; ?>

            <div class="buttons">
                <form action="home/send_message" method="POST" autocomplete="off" class="form" id="pesan" name="pesan" for="pesan">
                    <textarea style="margin-top: 0.8rem; margin-bottom: 0.3rem;" cols="5" rows="2" placeholder="Your Message" name="pesan" id="pesan" for="pesan" required></textarea>
                    <input type="text" placeholder="eg: seseorang/anonim" name="pesan_dari" id="pesan_dari" />

                    <input class="btn-send" type="submit" value="Send">
                    <h4 class="sent-notification"></h4>

                </form>
            </div>
        </div>
    </div>

</section>

<!-- Anonymous Message end -->

<!-- doctor section start  -->
<!-- <section class="doctor" id="doctor">

        <h1 class="heading">consult to our doctors</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/doc1.png" alt="">
                <h3>john doe</h3>
                <span>senior expert</span>
                <div class="share">
                    <a href="#" class="fab fa-whatsapp"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/doc2.png" alt="">
                <h3>john doe</h3>
                <span>senior expert</span>
                <div class="share">
                    <a href="#" class="fab fa-whatsapp"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/doc3.png" alt="">
                <h3>john doe</h3>
                <span>senior expert</span>
                <div class="share">
                    <a href="#" class="fab fa-whatsapp"></a>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

        </div>

    </section> -->
<!-- doctor section ends -->

<!-- CONTACT  -->

<section class="contact" id="contact">

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

                <img src="img/qrcontact.jpeg" alt="" class="qrcontact">

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

<?= $this->endSection('content'); ?>
<!-- end ISI CONTENT -->