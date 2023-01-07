<?php

header("Content-type: application/vnc-ms-excel");
header("Content-Disposition: attachment; filename=Data Produk.xls");

?>

<html>

<body>
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
</body>

</html>