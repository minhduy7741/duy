<?php
$o =  new PDO('mysql:host=localhost;dbname=bookstore','root','');
$sql= 'select * from loai';
$o2 = $o -> querry($sql);
$data = $o2 ->fetchAll(PDO::FETCH_ASSOC);//LAY DU LIEU TU MANG
echo '<pre>';print_r($data);
?>
<table>
    <?php
    foreach($data as $i)
    {
        ?>
        <tr>
            <td><?php echo $i['maloai']?></td>;
            <td><?php echo $i['tenloai']?></td>;
        </tr>
        <?php
    }
    ?>
</table>
