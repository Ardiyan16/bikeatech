<?php $this->load->view('partials/header1.php') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-dashboard"></i> Company</h1>
    </div>
    <div class="col-lg-8 mb-4">

        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail Company</h6>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="<?= base_url() ?>assets/users/images/bikeaa.png" alt="...">
                </div>
                <p>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $company->name ?></p>
                <p>Ceo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $company->ceo ?></p>
                <p>Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $company->address ?></p>
                <p>Telp &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $company->no_telp ?></p>
                <p>Instagram &nbsp;&nbsp;&nbsp;: <?= $company->instagram ?></p>
                <p>Facebook &nbsp;&nbsp;&nbsp;&nbsp;: <?= $company->facebook ?></p>
                <p>Twitter &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?= $company->twitter ?></p>
            </div>
            <div class="card-footer">
                <a href="#editcompany<?= $company->id ?>" data-toggle="modal" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Company</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editcompany<?= $edit->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="<?= base_url('Superadmin/update_company') ?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Company</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label>Name</label>
                    <input name="id" type="hidden" value="<?= $edit->id ?>">
                    <input name="name" type="text" value="<?= $edit->name ?>" placeholder="Name..." class="form-control" required>
                    <br>
                    <label>CEO</label>
                    <input name="ceo" type="text" value="<?= $edit->ceo ?>" placeholder="CEO.." class="form-control" required>
                    <br>
                    <label>Address</label>
                    <input name="address" type="text" value="<?= $edit->address ?>" placeholder="Harga Satuan" class="form-control">
                    <br>
                    <label>Telp</label>
                    <input name="no_telp" type="text" value="<?= $edit->no_telp ?>" placeholder="Harga Grosir" class="form-control">
                    <br>
                    <label>Instagram</label>
                    <input name="instagram" type="text" value="<?= $edit->instagram ?>" placeholder="Modal" class="form-control">
                    <br>
                    <label>Facebook</label>
                    <input name="facebook" type="text" value="<?= $edit->facebook ?>" placeholder="Stok" class="form-control" required>
                    <br>
                    <label>Twitter</label>
                    <input name="twitter" type="text" value="<?= $edit->twitter ?>" placeholder="Stok" class="form-control" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Tutup</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    <?php if ($this->session->flashdata('success')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'update data successful!',
            showConfirmButton: true,
            // timer: 1500
        })
    <?php endif ?>
</script>
<?php $this->load->view('partials/footer.php') ?>