<?php $this->load->view('user/partials/header.php') ?>

<div class="hero-slider">
    <div class="slider-item th-fullpage hero-area" style="background-image: url(assets/users/images/slider/slider-bg-1.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Bikea Tech <br>
                        IT Consultant</h1>
                    <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Kami memberikan analisa sistem terbaik untuk membangun aplikasi sesuai dengan kebutuhan anda</p>
                    <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main" href="service.html">Contact Me</a>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-item th-fullpage hero-area" style="background-image: url(assets/users/images/slider/slider2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Bikea Tech <br>
                        IT Consultant</h1>
                    <p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5">Kami memberikan analisa sistem terbaik untuk membangun aplikasi sesuai dengan kebutuhan anda
                    </p>
                    <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main" href="service.html">Contact Me</a>
                </div>
            </div>
        </div>
    </div>
</div>




<!--
Start About Section
==================================== -->
<section class="service-2 section">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <!-- section title -->
                <div class="title text-center">
                    <h2>About Me</h2>
                    <p>Bikea Tech merupakan perusahaan yang bergerak pada bidang konsultasi Teknologi Informasi. Bikea Tech hadir untuk memenuhi
                        kebutuhan anda akan teknologi informasi dengan memberikan solusi, rancangan, dan strategi pasar yang pas untuk memaksimalkan
                        kebutuhan dan permasalahan dalam perkembangan teknologi informasi.
                    </p>
                    <div class="border"></div>
                </div>
                <!-- /section title -->
            </div>

            <div class="col-md-4 text-center">
                <img src="<?= base_url() ?>assets/users/images/bikea-about.png" class="inline-block" alt="">
            </div>
            <div class="col-md-8">
                <div class="row text-center">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <i class="fa fa-desktop"></i>
                            <h4>Software & Sistem</h4>
                            <p>Custom software sesuai dengan proses bisnis anda</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <i class="fa fa-mobile"></i>
                            <h4>Web & mobile design</h4>
                            <p>Desain web dan mobile apps yang menarik dan mudah digunakan oleh user.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <i class="fa fa-handshake"></i>
                            <h4>Consultant IT</h4>
                            <p>Menjadi partner konsultasi IT untuk menemukan solusi akan kebutuhan teknologi informasi bisnis anda.</p>
                        </div>
                    </div><!-- END COL -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="service-item">
                            <i class="fa fa-shield"></i>
                            <h4>Security System</h4>
                            <p>Memberikan keamanan sitem anda.</p>
                        </div>
                    </div><!-- END COL -->
                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Mari mempermudah pengelolaan bisnis anda dengan teknologi informasi</h2>
                <!-- <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p> -->
                <a href="" class="btn btn-main">Contact Us</a>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->

<!--
		Start Counter Section
		==================================== -->

<section class="counter-wrapper section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title">
                    <h2>Komitmen Bersama Anda</h2>
                    <p>Membangun konsep dan mengimplementasikan proses bisnis yang berkelanjutan bersama anda untuk mencapai improvisasi setuai target anda
                        memlalui sistem informasi yang terintegrasi.</p>
                </div>
            </div>
            <!-- first count item -->
            <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="fa fa-users"></i>
                    <div>
                        <span class="counter" data-count="<?= $count_partner ?>">0</span>
                    </div>
                    <h3>Partner</h3>
                </div>
            </div>
            <!-- end first count item -->

            <!-- second count item -->
            <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="fa fa-briefcase"></i>
                    <div>
                        <span class="counter" data-count="<?= $count_portfolio ?>">0</span>
                    </div>
                    <h3>Projects completed</h3>
                </div>
            </div>
            <!-- end second count item -->

            <!-- third count item -->
            <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item">
                    <i class="fa fa-comment"></i>
                    <div>
                        <span class="counter" data-count="99">0</span>
                    </div>
                    <h3>Feedback</h3>

                </div>
            </div>
            <!-- end third count item -->

            <!-- fourth count item -->
            <div class="col-md-3 col-sm-6 col-xs-6 text-center ">
                <div class="counters-item kill-border">
                    <i class="fa fa-users"></i>
                    <div>
                        <span class="counter" data-count="<?= $count_team ?>">0</span>
                    </div>
                    <h3>Team</h3>
                </div>
            </div>
            <!-- end fourth count item -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->


<section class="team-skills section-sm" id="skills">
    <div class="container">
        <div class="row">

            <!-- section title -->
            <div class="col-12">
                <div class="title text-center">
                    <h2>Our Skills</h2>
                    <p>Berikut adalah kemampuan kami di bidang IT.</p>
                    <div class="border"></div>
                </div>
            </div>
            <!-- /section title -->

            <div class="col-md-5">
                <div class="team-skills-content">
                    <h2>Simple To Start</h2>
                    <p>Tim kami memiliki beberapa kemampuan dalam beberapa bidang IT sesuai dengan standart yang telah ditetapkan oleh perusahaan kami.</p>
                    <a href="" class="btn btn-main mt-20">Contact Us</a>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <div class="progress-block">
                    <ul>
                        <li>
                            <span>Design</span>
                            <div class="progress">
                                <div class="progress-bar" title="80%" style="width: 80%;">
                                </div>
                            </div>
                        </li>
                        <li>
                            <span>Website Development</span>
                            <div class="progress">
                                <div class="progress-bar" title="90%" style="width: 90%;">
                                </div>
                            </div>
                        </li>
                        <li>
                            <span>Mobile Development</span>
                            <div class="progress">
                                <div class="progress-bar" title="80&" style="width: 80%;">
                                </div>
                            </div>
                        </li>
                        <li>
                            <span>Network</span>
                            <div class="progress">
                                <div class="progress-bar" title="*70%" style="width: 70%;">
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->

<section class="team-skills section-sm" id="partner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title text-center">
                    <h2>Partner</h2>
                    <p>Berikut adalah partner kami.</p>
                    <div class="border"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <?php foreach ($partner as $par) { ?>
                        <img src="<?= base_url('assets/img/images_partner/' . $par->images) ?>" title="<?= $par->name_partner ?>" width="200" alt="">
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
		Start Blog Section
		=========================================== -->

<section class="blog" id="blog">
    <div class="container">
        <div class="row">

            <!-- section title -->
            <div class="col-12">
                <div class="title text-center ">
                    <h2> Latest <span class="color">Posts</span></h2>
                    <div class="border"></div>
                    <p>Blog kami berisi mengenai beberapa artikel yang membantu wawasan anda mengenai dunia IT dan beberapa penjelasan mengnai dunia IT.</p>
                </div>
            </div>
            <!-- /section title -->
            <!-- single blog post -->
            <?php foreach ($blog as $bg) { ?>
                <article class="col-md-4 col-sm-6 col-xs-12 clearfix ">
                    <div class="post-item">
                        <div class="media-wrapper">
                            <img src="<?= base_url('assets/img/images_blog/' . $bg->images) ?>" alt="amazing caves coverimage" class="img-fluid">
                        </div>

                        <div class="content">
                            <h3><a href="<?= base_url('Users/detail_blog/' . $bg->title) ?>"><?= $bg->title ?></a></h3>
                            <!-- <p>
                                <?php $paragraf = substr($bg->description, 0, 300);
                                echo $paragraf;
                                ?>
                            </p> -->
                            <hr>
                            <a class="btn btn-main" href="<?= base_url('Users/detail_blog/' . $bg->id) ?>">Read more</a>
                        </div>
                    </div>
                </article>
            <?php } ?>
            <!-- /single blog post -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->

<?php $this->load->view('user/partials/footer.php') ?>