<?= $this->extend('_Layout/templateHome') ?>

<!-- ISI CONTENT -->
<?= $this->section('content'); ?>

<!-- HOME  -->

<section class="resm" id="">
    <div class="resm-container">
        <div class="row colom">

            <div class="resm-text">
                <div class="resm-title solid-line">EDUCATION</div>
                <div class="resm-timeline">
                    <div class="resm-item" data-year="2007">
                        <div class="resm-item-title">SD</div>
                        <div class="resm-item-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </div>
                    </div>
                    <div class="resm-item" data-year="2016">
                        <div class="resm-item-title">SMP</div>
                        <div class="resm-item-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </div>
                    </div>
                    <div class="resm-item" data-year="2019">
                        <div class="resm-item-title"> SMA</div>
                        <div class="resm-item-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </div>
                    </div>
                    <div class="resm-item" data-year="2019">
                        <div class="resm-item-title">KULIAH</div>
                        <div class="resm-item-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </div>
                    </div>
                </div>

            </div>

            <div class="resm-text">
                <div class="resm-title solid-line">EXPERIENCE</div>
                <div class="resm-timeline">
                    <div class="resm-item" data-year="2019">
                        <div class="resm-item-title">Lorem Ipsum</div>
                        <div class="resm-item-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.</div>
                    </div>
                    <div class="resm-item" data-year="2021">
                        <div class="resm-item-title">Lorem Ipsum</div>
                        <div class="resm-item-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.</div>
                    </div>
                    <div class="resm-item" data-year="2022">
                        <div class="resm-item-title">Lorem Ipsum</div>
                        <div class="resm-item-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.</div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!--  -->






</section>



<!-- HOME end -->

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

                <img src="../img/qrcontact.jpeg" alt="" class="qrcontact">

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
                <form action="../mail.php" method="POST" autocomplete="off" class="form" id="myForm" name="myform">
                    <div>
                        <input type="text" placeholder="Your Name" name="name" id="name" required />
                        <input type="email" placeholder="Your Email" name="email" id="email" required />
                    </div>
                    <input type="text" placeholder="Subject" name="judul" id="judul" required />
                    <textarea cols="10" rows="10" placeholder="Your Message" name="message" id="message" required></textarea>

                    <input class="btn-contact" type="submit" value="Submit">
                    <h4 class="sent-notification"></h4>

                </form>


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

<a href="#" class="scroll-top">
    <i class="fas fa-arrow-up"></i>
</a>



<?= $this->endSection('content'); ?>
<!-- end ISI CONTENT -->