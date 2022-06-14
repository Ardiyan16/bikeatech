<?php $this->load->view('partials/header2.php') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-dashboard"></i> <?= $title ?></h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <form action="<?php echo base_url(); ?>admin/save_category" method="post" class="row">
                <div class="col-md-2">
                    <input type="text" id="category" name="category" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </form>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Category</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($category as $cat) { ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $cat->category ?></td>
                                <td>
                                    <a href="<?= base_url('Admin/delete_category/' . $cat->id_cat) ?>" onclick="return confirm('are you sure delete data ?')" title="Delete" class="badge bg-danger" style="color: white" ;><i class="fa fa-trash"></i></a>
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