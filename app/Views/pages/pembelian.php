<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Pembelian Barang</h2>
            <form action="/pages/pembelian" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="nama_pembeli" class="col-sm-2 col-form-label">Nama Pembeli</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_laptop" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_laptop" name="nama_laptop">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nohp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nohp" name="nohp">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">SUBMIT</button>
            </form>
        </div>
    </div>
</div>