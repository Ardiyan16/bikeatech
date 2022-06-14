<?php $this->load->view('partials/header2.php') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-dashboard"></i> <?= $title ?></h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="#createpartner" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add Partner</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name Partner</th>
                            <th>Address</th>
                            <th>Images</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($partner as $pt) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $pt->name_partner ?></td>
                                <td><?= $pt->address ?></td>
                                <td><img src="<?= base_url('assets/img/images_partner/' . $pt->images) ?>" width="64"></td>
                                <td>
                                    <a href="#editpartner<?= $pt->id ?>" title="Edit" data-toggle="modal" class="badge bg-primary" style="color: white;"><i class="fa fa-edit"></i></a> |
                                    <a href="<?= base_url('Admin/delete_partner/' . $pt->id) ?>" onclick="return confirm('are you sure delete data ?')" title="Delete" class="badge bg-danger" style="color: white" ;><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="createpartner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="<?= base_url('Admin/save_partner'); ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Partner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Name Partner</label>
                    <input name="name_partner" type="text" placeholder="Name..." class="form-control" required>
                    <br>
                    <label>Address</label>
                    <input name="address" type="text" placeholder="Address..." class="form-control" required>
                    <br>
                    <label>Images</label>
                    <input name="images" type="file" placeholder="..." required class="form-control">
                    <p>Maximum size 3 MB</p>
                    <button type="reset" class="btn btn-warning"><span class="fa fa-undo"></span> Reset</button>
                    <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Save</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php foreach ($partner2 as $edit) { ?>
    <div class="modal fade" id="editpartner<?= $edit->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="<?= base_url('Admin/update_partner'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Partner</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label>Name Partner</label>
                        <input type="hidden" name="id" value="<?= $edit->id ?>">
                        <input name="name_partner" value="<?= $edit->name_partner ?>" type="text" placeholder="Name..." class="form-control" required>
                        <br>
                        <label>Address</label>
                        <input name="address" value="<?= $edit->address ?>" type="text" placeholder="Address..." class="form-control" required>
                        <br>
                        <label>Images</label>
                        <input type="hidden" name="old_images" value="<?= $edit->images ?>">
                        <input name="images" type="file" placeholder="..." class="form-control">
                        <img src="<?= base_url('assets/img/images_partner/'. $edit->images ) ?>" width="100">
                        <p>Maximum size 3 MB</p>
                        <button type="reset" class="btn btn-warning"><span class="fa fa-undo"></span> Reset</button>
                        <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Save</button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<script>
    <?php if ($this->session->flashdata('success_create')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'created data successful!',
            showConfirmButton: true,
            // timer: 1500
        })

    <?php elseif ($this->session->flashdata('success_update')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'updated data successful!',
            showConfirmButton: true,
            // timer: 1500
        })

    <?php elseif ($this->session->flashdata('success_delete')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'delete data successful!',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php endif ?>
</script>
<?php $this->load->view('partials/footer.php') ?>