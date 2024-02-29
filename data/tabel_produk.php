<?php
$barang = array(
    array("code"=>"B001","name"=>"Laptop Asus","price"=>9000000,"amount"=>3),
    array("code"=>"B002","name"=>"Keyboard Logitech","price"=>850000,"amount"=>4),
    array("code"=>"B003","name"=>"Speaker","price"=>500000,"amount"=>6),
    array("code"=>"B004","name"=>"Printer Epson","price"=>3000000,"amount"=>7),
);
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
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th style="text-align: center;">Harga</th>
            <th style="text-align: center;">Jumlah</th>
            <th style="text-align: center;">Subtotal</th>
        </tr>
        <?php
        $num = 1;
        $totalprice = 0;
        foreach($barang as $item){
            $price = ($item["price"]*$item["amount"]);
        ?>
        <tr>
            <td><?php echo $num?></td>
            <td><?php echo $item["code"]?></td>
            <td style="padding-left:5px;"><?php echo $item["name"]?></td>
            <td style="text-align: right; padding-right:5px;">Rp.<?php echo number_format($item["price"],0,"",".")?></td>
            <td style="text-align: center;"><?php echo number_format($item["amount"],0,"",".")?></td>
            <td style="text-align: right; padding-right:5px;">Rp.<?php echo number_format($price,0,"",".")?></td>
        </tr>
        <?php
        $num++;
        $totalprice += $price;
        }//penutup foreach
        ?>
        <tr>
            <th colspan="5" style="text-align: right;">TOTAL</th>
            <th style="text-align: right; padding-right:5px;">Rp.<?php echo number_format($totalprice,0,"",".")?></th>
        </tr>
    </table>