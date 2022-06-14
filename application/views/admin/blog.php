<?php $this->load->view('partials/header2.php') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-dashboard"></i> <?= $title ?></h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('Admin/create_blog') ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add Blog</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Category</th>
                            <th>Tag</th>
                            <th>Writer</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($blog as $bg) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $bg->title ?></td>
                                <td><?= date('d-m-Y', strtotime($bg->date_blog)) ?></td>
                                <td><?= $bg->category ?></td>
                                <td><?= $bg->tag ?></td>
                                <td><?= $bg->writer ?></td>
                                <td>
                                    <a href="#detail<?= $bg->id ?>" data-toggle="modal" title="Detail" class="badge bg-success" style="color: white;"><i class="fa fa-eye"></i></a> |
                                    <a href="<?= base_url('Admin/edit_blog/' . $bg->id) ?>" title="Edit" class="badge bg-primary" style="color: white;"><i class="fa fa-edit"></i></a> |
                                    <a href="<?= base_url('Admin/delete_blog/' . $bg->id) ?>" onclick="return confirm('are you sure delete data ?')" title="Delete" class="badge bg-danger" style="color: white" ;><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php foreach ($detail as $dtl) { ?>
    <div class="modal fade" id="detail<?= $dtl->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detail Blog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img src="<?= base_url('assets/img/images_blog/' . $dtl->images) ?>" height="350" width="500">
                    </div>
                    <p><?= $dtl->description ?></p>
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