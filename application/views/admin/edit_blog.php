<?php $this->load->view('partials/header2.php') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-dashboard"></i> <?= $title ?></h1>
    </div>
    <div class="card shadow py-2">
        <div class="card-body">
            <a href="<?= base_url('Admin/blog') ?>" class="btn btn-primary mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Back</a>
            <hr>

            <form action="<?= base_url('Admin/update_blog'); ?>" method="POST" enctype="multipart/form-data">
                <label>Title</label>
                <input type="hidden" name="id" value="<?= $edit->id ?>">
                <input name="title" value="<?= $edit->title ?>" type="text" placeholder="Title..." class="form-control" required>
                <br>
                <label>Date</label>
                <input name="date_blog" value="<?= $edit->date_blog ?>" type="date" placeholder="" class="form-control" required>
                <br>
                <label>Category</label>
                <input name="category" value="<?= $edit->category ?>" type="text" placeholder="Category..." required class="form-control">
                <br>
                <label>Tag</label>
                <input name="tag" type="text" value="<?= $edit->tag ?>" placeholder="Tag..." required class="form-control">
                <br>
                <label>Description</label>
                <textarea id="summernote" name="description" rows="10"><?= $edit->description ?></textarea>
                <br>
                <label>Images</label>
                <input type="hidden" name="old_images" value="<?= $edit->images ?>">
                <input name="images" type="file" placeholder="" class="form-control">
                <img src="<?= base_url('assets/img/images_blog/'. $edit->images ) ?>" width="100">
                <p>maximum size 3MB</p>
                <!-- <br> -->
                <label>Writer</label>
                <input name="writer" type="text" value="<?= $edit->writer ?>" placeholder="Writer..." class="form-control" required>
                <br>
                <button type="reset" class="btn btn-danger"> <span class="fa fa-times"></span> Reset</button>
                <button type="submit" class="btn btn-primary"> <span class="fa fa-save"></span> Save</button>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('partials/footer.php') ?>