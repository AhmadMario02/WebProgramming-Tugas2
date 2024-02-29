<?php
$array = array(
    array("tanggal" => date_create("01-03-2023"), "kategori" => "pembayaran pesanan", "keterangan" => "", "jenis" => array( "pemasukan" => 1000000, "pengeluaran" => 0)),
    array("tanggal" => date_create("01-03-2023"), "kategori" => "pembayaran pesanan", "keterangan" => "gaada", "jenis" => array("pemasukan" => 100000, "pengeluaran" => 0)),
    array("tanggal" => date_create("08-03-2023"), "kategori" => "pembayaran pesanan", "keterangan" => "", "jenis" => array("pemasukan" => 200000, "pengeluaran" => 0,)),
    array("tanggal" => date_create("09-03-2023"), "kategori" => "pembayaran pesanan", "keterangan" => "test pemasukan pesanan 090323", "jenis" => array("pemasukan" => 89000, "pengeluaran" => 0)),
    array("tanggal" => date_create("09-03-2023"), "kategori" => "pembayaran pesanan", "keterangan" => "test pengeluaran 090323", "jenis" => array("pemasukan" => 0, "pengeluaran" => 21000)),
    array("tanggal" => date_create("16-03-2023"), "kategori" => "pembayaran pesanan", "keterangan" => "lunas yak", "jenis" => array("pemasukan" => 165000, "pengeluaran" => 0)),
    array("tanggal" => date_create("16-03-2023"), "kategori" => "pembayaran pesanan", "keterangan" => "lunas yak", "jenis" => array("pemasukan" => 330000, "pengeluaran" => 0,)),
    array("tanggal" => date_create("15-03-2023"), "kategori" => "pinjaman ulang", "keterangan" => "tes", "jenis" => array("pemasukan" => 100000, "pengeluaran" => 0,)),
    array("tanggal" => date_create("16-02-2023"), "kategori" => "belanja modal", "keterangan" => "tes card tahun", "jenis" => array("pemasukan" => 100000, "pengeluaran" => 0,)),
    array("tanggal" => date_create("24-03-2023"), "kategori" => "pembayaran pesanan", "keterangan" => "", "jenis" => array("pemasukan" => 24032023, "pengeluaran" => 0)),
);
$counter = 1;
$totalIncome = 0;
$totalOutcome = 0;
function saldo($in, $out){
    return $in-$out;
}
?>
<style>
    table, tr, th, td{
        border: 1px solid black;
        border-collapse: collapse;
        padding-left: 20px;
        padding-right: 20px;
    }
</style>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Tanggal</th>
            <th rowspan="2">Kategori</th>
            <th rowspan="2">Keterangan</th>
            <th colspan="2" class="text-center">Jenis</th>
        </tr>
        <tr>
            <th>Pemasukan</th>
            <th>Pengeluaran</th>
        </tr>
    </thead>
    <?php foreach ($array as $report){?>
    <tbody>
        <tr>
            <td><?php echo $counter?></td>
            <td><?php echo date_format($report["tanggal"], "d-m-Y")?></td>
            <td><?php echo $report["kategori"]?></td>
            <td><?php echo $report["keterangan"]?></td>
            <td>Rp.<?php echo number_format($report["jenis"]["pemasukan"],0,"",".")?></td>
            <td>Rp.<?php echo number_format($report["jenis"]["pengeluaran"],0,"",".")?></td>
            <?php
            $counter++;
            $totalIncome += $report["jenis"]["pemasukan"]; 
            $totalOutcome += $report["jenis"]["pengeluaran"]; 
            } ?>
        </tr>
        <tr>
            <th colspan="4" class="text-end">TOTAL</th>
            <th class="text-success">Rp.<?php echo number_format($totalIncome).",-"?></th>
            <th class="text-danger">Rp.<?php echo number_format($totalOutcome).",-"?></th>
        </tr>
        <tr>
            <th colspan="4" class="text-end">Saldo</th>
            <th colspan="2" class="text-center text-bg-primary">Rp.<?php echo number_format(saldo($totalIncome,$totalOutcome)).",-"?></th>
        </tr>
    </tbody>
</table>