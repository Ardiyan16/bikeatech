<?php $this->load->view('user/partials/header.php') ?>

<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Detail Portfolio</h2>
                <ol class="breadcrumb header-bradcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Detail Portfolio</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="portfolio section-sm" id="portfolio">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12">

                <!-- section title -->
                <div class="title text-center">
                    <h2><?= $portfolio->title ?></h2>
                    <p><?= $portfolio->description ?>.</p>
                    <div class="border"></div>
                </div>
                <!-- /section title -->

                <div class="row filtr-container">
                    <?php foreach ($detail as $det) { ?>
                        <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix">
                            <div class="portfolio-block">
                                <img class="img-fluid" src="<?= base_url('assets/img/images_detail/' . $det->images) ?>" alt="">
                                <div class="caption">
                                    <a class="search-icon" href="<?= base_url('assets/img/images_detail/' . $det->images) ?>" data-lightbox="image-1">
                                        <i class="tf-ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div> <!-- /end col-lg-12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- End section -->
<?php $this->load->view('user/partials/footer.php') ?>