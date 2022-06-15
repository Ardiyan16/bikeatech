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

<section class="posts section">
    <div class="container">
        <div class="row">
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
        </div>
    </div>
</section>

<?php $this->load->view('user/partials/footer.php') ?>