<?php $this->load->view('user/partials/header.php') ?>

<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Portfolio</h2>
                <ol class="breadcrumb header-bradcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Portfolio</li>
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
                    <h2>Our Works</h2>
                    <p>Berikut merupakan beberapa hasil produk dari project yang telah di selesaikan oleh team Bikea Tech.</p>
                    <div class="border"></div>
                </div>
                <!-- /section title -->

                <div class="portfolio-filter">
                    <button type="button" data-filter="all">All</button>
                    <?php foreach ($category as $cat) { ?>
                        <button type="button" data-filter="<?= $cat->id_cat ?>"><?= $cat->category ?></button>
                    <?php } ?>
                    <!-- <button type="button" data-filter="ios">IOS App</button>
                    <button type="button" data-filter="development">Development</button>
                    <button type="button" data-filter="design">Design</button> -->
                </div>
                <div class="row filtr-container">
                    <?php foreach ($portfolio as $por) { ?>
                        <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, <?= $por->id_category ?>">
                            <div class="portfolio-block">
                                <img class="img-fluid" src="<?= base_url('assets/img/images_portfolio/' . $por->picture) ?>" alt="">
                                <div class="caption">
                                    <a class="search-icon" href="<?= base_url('assets/img/images_portfolio/' . $por->picture) ?>" data-lightbox="image-1">
                                        <i class="tf-ion-ios-search-strong"></i>
                                    </a>
                                    <h4><a href="<?= base_url('Users/detail_portfolio/' . $por->id) ?>"><?= $por->title ?></a></h4>
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