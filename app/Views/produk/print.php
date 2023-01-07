<html>

<body>
    <center>
        <h1 style="margin-top:50px;">
            DATA LAPTOP
        </h1>

        <table border="1">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($produk as $p) : ?>
                    <tr>
                        <td scope="row" style="text-align: left;"><?= $i++; ?></td>
                        <td style="text-align: left;"><?= $p->nama; ?></td>
                        <td style=" text-align: left;"><?= $p->harga; ?></td>
                        <td style="text-align: left;"><?= $p->stok; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </center>
    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>