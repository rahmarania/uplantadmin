<?php include 'config/connect.php'; ?>

<?php
require 'vendor/autoload.php';

if(isset($_POST['submit'])){
    $err ="";
    $ekstensi="";
    $success="";

    $file_name = $_FILES['filexls']['name'];
    $file_data = $_FILES['filexls']['tmp_name'];

    if(empty($file_name)){
        $err .="<li>Silakan upload file</li>";
    }else{
        $ekstensi = pathinfo($file_name)['extension'];

    }

    $ekstensi_allowed = array("xls", "xlsx");
    if(!in_array($ekstensi, $ekstensi_allowed)){
        $err .="<li>File format salah!</li>";
    }

    if(empty($err)){
        $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReaderForFile($file_data);
        $spreadsheet = $reader->load($file_data);
        $sheetData = $spreadsheet->getActiveSheet()->toArray();

        $jumlahData = 0;
        for($i=1;$i<count ($sheetData);$i++){
            $id = $sheetData[$i]['0'];
            $nama = $sheetData[$i]['1'];
            $jenis = $sheetData[$i]['2'];
            $namailmiah = $sheetData[$i]['3'];

            $sql1 = "insert into tanaman(nama, jenis, namailmiah) value('$nama', '$jenis', '$namailmiah')";

            mysqli_query($conn, $sql1);
            $jumlahData++;
        }

        if($jumlahData > 0){
            $success = "$jumlahData berhasil diinput";
        }
    }

    if($err){
        ?>
        <div class="alert alert-danger">
            <ul><?php echo $err ?></ul>
        </div>
        <?php    
    }

    if($success){
        ?>
        <div class="alert alert-primary">
            <ul><?php echo $success ?></ul>
        </div>
        <?php 
    } 
}