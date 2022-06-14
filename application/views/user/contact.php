<?php $this->load->view('user/partials/header.php') ?>

<section class="single-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Contact Us</h2>
                <ol class="breadcrumb header-bradcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!--Start Contact Us
	=========================================== -->
<section class="contact-us" id="contact">
    <div class="container">
        <div class="row">

            <!-- section title -->
            <div class="col-12">
                <div class="title text-center">
                    <h2>Contact</h2>
                    <p>Silahkan hubungi contact kami untuk berdiskusi</p>
                    <div class="border"></div>
                </div>
            </div>
            <!-- /section title -->

            <!-- Contact Details -->
            <div class="contact-details col-md-6 ">
                <h3>Contact Details</h3>
                <ul class="contact-short-info">
                    <li>
                        <i class="tf-ion-ios-home"></i>
                        <span>Jl. Darmokali Gang Irigasi No 87 Wonokromo Surabaya</span>
                    </li>
                    <li>
                        <i class="tf-ion-android-phone-portrait"></i>
                        <span>Phone: 082132881252</span>
                    </li>
                    <!-- <li>
                        <i class="tf-ion-android-globe"></i>
                        <span>: +880-31-000-000</span>
                    </li> -->
                    <li>
                        <i class="tf-ion-android-mail"></i>
                        <span>Email: bikeatech@gmail.com</span>
                    </li>
                </ul>
                <!-- Footer Social Links -->
                <div class="social-icon">
                    <ul>
                        <li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-instagram"></i></a></li>
                        <li><a href="#"><i class="tf-ion-social-linkedin-outline"></i></a></li>
                    </ul>
                </div>
                <!--/. End Footer Social Links -->
            </div>
            <!-- / End Contact Details -->

            <!-- Contact Form -->
            <div class="contact-form col-md-6 ">
                <form action="<?= base_url('Users/save_message') ?>" method="post" role="form">
                    <div class="form-group">
                        <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                    </div>

                    <div class="form-group">
                        <input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Your Phone" class="form-control" name="phone" id="phone">
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                    </div>

                    <div class="form-group">
                        <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-left: 45%;"><i class="fa fa-paper-plane"></i> Send</button>

                </form>
            </div>
            <!-- ./End Contact Form -->

        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->

<script>
    <?php if ($this->session->flashdata('success_send')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'data sent successfully!',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php endif ?>
</script>

<?php $this->load->view('user/partials/footer.php') ?>