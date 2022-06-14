<?php $this->load->view('partials/header2.php') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-dashboard"></i> <?= $title ?></h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="#createteam" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add Team</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Age</th>
                            <th>Skill</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($team as $tm) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $tm->name ?></td>
                                <td><?= $tm->position ?></td>
                                <td><?= $tm->age ?></td>
                                <td><?= $tm->skill ?></td>
                                <td>
                                    <a href="#detail<?= $tm->id ?>" data-toggle="modal" title="Detail Description" style="color: white;" class="badge bg-success"><i class="fa fa-eye"></i></a>
                                    <a href="#editteam<?= $tm->id ?>" title="Edit" data-toggle="modal" class="badge bg-primary" style="color: white;"><i class="fa fa-edit"></i></a> |
                                    <a href="<?= base_url('Admin/delete_team/' . $tm->id) ?>" onclick="return confirm('are you sure delete data ?')" title="Delete" class="badge bg-danger" style="color: white" ;><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="createteam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="<?= base_url('Admin/save_team'); ?>" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Name</label>
                    <input name="name" type="text" placeholder="Name..." class="form-control" required>
                    <br>
                    <label>Position</label>
                    <input name="position" type="text" placeholder="Position..." class="form-control" required>
                    <br>
                    <label>Age</label>
                    <input name="age" type="text" placeholder="Age..." required class="form-control">
                    <br>
                    <label>Description</label>
                    <input name="description" type="text" placeholder="Description..." required class="form-control">
                    <br>
                    <label>Skill</label>
                    <input name="skill" type="text" placeholder="Skill..." required class="form-control">
                    <br>
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

<?php foreach ($team2 as $edit) { ?>
    <div class="modal fade" id="editteam<?= $edit->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="<?= base_url('Admin/update_team'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Team</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label>Name</label>
                        <input type="hidden" name="id" value="<?= $edit->id ?>">
                        <input name="name" type="text" value="<?= $edit->name ?>" placeholder="Name..." class="form-control" required>
                        <br>
                        <label>Position</label>
                        <input name="position" type="text" value="<?= $edit->position ?>" placeholder="Position..." class="form-control" required>
                        <br>
                        <label>Age</label>
                        <input name="age" type="text" value="<?= $edit->age ?>" placeholder="Age..." required class="form-control">
                        <br>
                        <label>Description</label>
                        <input name="description" type="text" value="<?= $edit->description ?>" placeholder="Description..." required class="form-control">
                        <br>
                        <label>Skill</label>
                        <input name="skill" type="text" value="<?= $edit->skill ?>" placeholder="Skill..." required class="form-control">
                        <br>
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

<?php foreach ($team3 as $det) { ?>
    <div class="modal fade" id="detail<?= $det->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detail description <?= $det->name ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><?= $det->description ?></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
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