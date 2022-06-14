<?php $this->load->view('user/partials/header.php') ?>

<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>About</h2>
                <ol class="breadcrumb header-bradcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">About</li>
                </ol>
            </div>
        </div>
    </div>
</section>
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
            <div class="col-md-12 text-center">
                <img src="<?= base_url() ?>assets/users/images/bikeaa.png" class="inline-block" alt="">
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->
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
<section class="team" id="team">
    <div class="container">
        <div class="row">

            <!-- section title -->
            <div class="col-12">
                <div class="title text-center">
                    <h2>Team</h2>
                    <p>Berikut adalah team kami.</p>
                    <div class="border"></div>
                </div>
            </div>
            <?php foreach ($team as $tm) { ?>
                <div class="col-md-4 col-sm-6 ">
                    <div class="team-member text-center">
                        <div class="member-photo">
                            <!-- member photo -->
                            <img class="img-fluid" src="<?= base_url('assets/img/images_team/' . $tm->picture) ?>" alt="Meghna">
                            <!-- /member photo -->

                            <!-- member social profile -->
                            <div class="mask">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
                                    <li><a href="#"><i class="tf-ion-social-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <!-- /member social profile -->
                        </div>

                        <!-- member name & designation -->
                        <div class="member-content">
                            <h3><?= $tm->name ?></h3>
                            <span><?= $tm->position ?></span>
                            <br>
                            <p style="color=blue;"><?= $tm->skill ?></p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur necessitatibus ullam, culpa odio.</p>
                        </div>
                        <!-- /member name & designation -->
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php $this->load->view('user/partials/footer.php') ?>