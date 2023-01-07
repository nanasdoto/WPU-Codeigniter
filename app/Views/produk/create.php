<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Barang</h2>
            <form action="/produk/save" method="post" enctype="multipart/form-data">


                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="stok" name="stok">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </form>
        </div>
    </div>
</div>