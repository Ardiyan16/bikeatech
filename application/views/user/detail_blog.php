<?php $this->load->view('user/partials/header.php') ?>

<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Detail Blog</h2>
                <ol class="breadcrumb header-bradcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Detail Blog</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="blog-details section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <article class="post">
                    <div class="post-image">
                        <img class="img-fluid w-100" src="<?= base_url('assets/img/images_blog/' . $detail->images) ?>" alt="post-image">
                    </div>
                    <!-- Post Content -->
                    <div class="post-content">
                        <h3><?= $detail->title ?>.</h3>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#"><?= $detail->writer ?></a>&nbsp;/
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><?= date('d-m-Y', strtotime($detail->date_blog)) ?></a>
                            </li>
                        </ul>
                        <p><?= $detail->description ?></p>
                        <!-- post share -->
                    </div>
                </article>
            </div>
            <div class="col-lg-4">
                <!-- sidebar -->
                <aside class="sidebar">
                    <div class="widget-post widget">
                        <h2>Latest Post</h2>
                        <!-- latest post -->
                        <ul class="widget-post-list">
                            <?php foreach ($blog as $bg) { ?>
                                <li class="widget-post-list-item">
                                    <div class="widget-post-image">
                                        <a href="<?= base_url('Users/detail_blog/' . $bg->id) ?>">
                                            <img src="<?= base_url('assets/img/images_blog/' . $bg->images) ?>" alt="post-img">
                                        </a>
                                    </div>
                                    <div class="widget-post-content">
                                        <a href="<?= base_url('Users/detail_blog/' . $bg->id) ?>">
                                            <h5><?= $bg->title ?>.</h5>
                                        </a>
                                        <h6><?= date('d-m-Y', strtotime($bg->date_blog)) ?></h6>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
<!-- blog details part end -->
<?php $this->load->view('user/partials/footer.php') ?>