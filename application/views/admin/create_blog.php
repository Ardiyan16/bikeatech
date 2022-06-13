<?php $this->load->view('partials/header2.php') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-dashboard"></i> <?= $title ?></h1>
    </div>
    <div class="card shadow py-2">
        <div class="card-body">
            <a href="<?= base_url('Admin/blog') ?>" class="btn btn-primary mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Kembali</a>
            <hr>

            <form action="<?= base_url('Admin/save_blog'); ?>" method="POST" enctype="multipart/form-data">
                <label>Title</label>
                <input name="title" type="text" placeholder="Title..." class="form-control" required>
                <br>
                <label>Date</label>
                <input name="date_blog" type="date" placeholder="" class="form-control" required>
                <br>
                <label>Category</label>
                <input name="category" type="text" placeholder="Category..." required class="form-control">
                <br>
                <label>Tag</label>
                <input name="tag" type="text" placeholder="Tag..." required class="form-control">
                <br>
                <label>Description</label>
                <textarea id="summernote" name="description" rows="10"></textarea>
                <br>
                <label>Images</label>
                <input name="images" type="file" placeholder="" class="form-control">
                <p>maximum 3MB</p>
                <!-- <br> -->
                <label>Writer</label>
                <input name="writer" type="text" placeholder="Writer..." class="form-control" required>
                <br>
                <button type="reset" class="btn btn-danger"> <span class="fa fa-times"></span> Reset</button>
                <button type="submit" class="btn btn-primary"> <span class="fa fa-save"></span> Save</button>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('partials/footer.php') ?>