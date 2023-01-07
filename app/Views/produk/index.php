<style>
    #p1 {
        background-color: #cfe2ff;
    }
</style>
<div class="container">
    <div id="p1" class="mt-2 row border border-2 border-primary">
        <div class="col">
            <h1>Daftar Barang</h1>
            <a href="/produk/create" class="btn btn-primary mx-1">Tambah Data Barang</a>
            <a href="/produk/excel" class="btn btn-success mx-1">Excel<i class="fa fa-file-excel"></i></a>
            <a href="/produk/print" class="btn btn-secondary mx-1">Print<i class="fa fa-print"></i></a>

            <div class="row">
                <div class="my-1 col-4">
                    <?php
                    echo form_open_multipart('/produk/import'); ?>
                    <div class="form-group">
                        <input type="file" name="file_excel" class="form-control-file" accept=".xls,.xlsx,.csv,.doc,.jpq">
                        <button class="btn btn-warning">Import</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>

                <div class="col-4">
                    <form action="" method="post">
                        <div class=" float-right input-group col-5 my-1">
                            <input type="text" class="form-control" placeholder="Pencarian..." name="keyword">
                            <div class="input-group-append">
                                <button class=" btn btn-primary float-right" type="submit" name="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-2">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-primary" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="mt-2">
        <?php if (session()->getFlashdata('pesan1')) : ?>
            <div class="alert alert-primary" role="alert">
                <?= session()->getFlashdata('pesan1'); ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="mt-2">
        <?php if (session()->getFlashdata('pesan2')) : ?>
            <div class="alert alert-primary" role="alert">
                <?= session()->getFlashdata('pesan2'); ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="mt-2">
        <?php if (session()->getFlashdata('pesan3')) : ?>
            <div class="alert alert-primary" role="alert">
                <?= session()->getFlashdata('pesan3'); ?>
            </div>
        <?php endif; ?>
    </div>

    <thead>
        <table class="border border-primary border-2 table-primary mt-2 table  table-hover">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Stock</th>
                <th scope="col">Aksi</th>
            </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($produk as $p) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $p['nama']; ?></td>
                <td><?= $p['harga']; ?></td>
                <td><?= $p['stok']; ?></td>
                <td>
                    <a href="/produk/edit/<?= $p['id']; ?>" class="edit btn btn-success btn-sm">Edit</a>
                    <a href="/produk/delete/<?= $p['id']; ?>" class="del btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>
</div>
</div>
<?= $this->include('layout/footer'); ?>

<?= $this->renderSection('content'); ?>