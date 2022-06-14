<?php $this->load->view('partials/header2.php') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-dashboard"></i> <?= $title ?></h1>
    </div>
    <div class="card shadow py-2">
        <div class="card-body">
            <a href="<?= base_url('Admin/portfolio') ?>" class="btn btn-primary mb-3"> <span class="fa fa-arrow-alt-circle-left"></span> Back</a>
            <hr>

            <form action="<?= base_url('Admin/update_portfolio'); ?>" method="POST" enctype="multipart/form-data">
                <label>Title</label>
                <input name="id" type="hidden" value="<?= $edit->id ?>">
                <input name="title" type="text" value="<?= $edit->title ?>" placeholder="Title..." class="form-control" required>
                <br>
                <label>Date</label>
                <input name="date" type="date" value="<?= $edit->date ?>" placeholder="" class="form-control" required>
                <br>
                <label>Category</label>
                <select name="id_category" class="form-control">
                    <?php foreach ($category as $cat) { ?>
                        <option <?php if ($edit->id_category == $cat->id_cat) {
                                    echo "selected=\"selected\"";
                                } ?> value="<?= $cat->id_cat ?>"><?= $cat->category ?></option>
                    <?php } ?>
                </select>
                <br>
                <label>Description</label>
                <textarea id="summernote" name="description" rows="10"><?= $edit->description ?></textarea>
                <br>
                <label>Partner</label>
                <select name="id_partner" class="form-control">
                    <?php foreach ($partner as $par) { ?>
                        <option <?php if ($edit->id_partner == $par->id) {
                                    echo "selected=\"selected\"";
                                } ?> value="<?= $par->id ?>"><?= $par->name_partner ?></option>
                    <?php } ?>
                </select>
                <br>
                <label>Images</label>
                <input name="old_picture" type="hidden" value="<?= $edit->picture ?>">
                <input name="picture" type="file" placeholder="" class="form-control">
                <br>
                <img src="<?= base_url('assets/img/images_portfolio/' . $edit->picture) ?>" width="100">
                <p>maximum 3MB</p>
                <!-- <br> -->
                <button type="reset" class="btn btn-danger"> <span class="fa fa-times"></span> Reset</button>
                <button type="submit" class="btn btn-primary"> <span class="fa fa-save"></span> Save</button>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('partials/footer.php') ?>