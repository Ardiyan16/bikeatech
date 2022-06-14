<?php $this->load->view('partials/header2.php') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-dashboard"></i> <?= $title ?></h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?= base_url('Admin/create_portfolio') ?>"  class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add Portfolio</a>
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
                            <th>Partner</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($portfolio as $por) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $por->title ?></td>
                                <td><?= date('d-m-Y', strtotime($por->date)) ?></td>
                                <td><?= $por->category ?></td>
                                <td><img src="<?= base_url('assets/img/partner/' . $por->name_partner) ?>"></td>
                                <td>
                                    <a href="#detail<?= $por->id ?>" data-toggle="modal" title="Detail" style="color: white;" class="badge bg-success"><i class="fa fa-eye"></i></a>
                                    <a href="#editteam<?= $por->id ?>" title="Edit" data-toggle="modal" class="badge bg-primary" style="color: white;"><i class="fa fa-edit"></i></a> |
                                    <a href="<?= base_url('Admin/delete_team/' . $por->id) ?>" onclick="return confirm('are you sure delete data ?')" title="Delete" class="badge bg-danger" style="color: white" ;><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
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