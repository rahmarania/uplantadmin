    <script type="text/javascript" src="js/jquery-1.4.js"></script>
    <script type="text/javascript" src="js/jquery.fusionchart.js"></script>

    <table id="Tabeltanaman" border="1">
<tr>
  <th>Jenis</th>
  <th>Banyak Tanaman</th>
</tr>
    <?php
    //koneksi
    $koneksi=mysqli_connect("localhost","root","","crud");
    //mengambil data
    $kueri = "SELECT * FROM jenisplant";
    $hasil = mysqli_query($koneksi,$kueri);
    $hitung = mysqli_num_rows($hasil);

    while ($data = mysqli_fetch_array($hasil)) {
      echo " <tr bgcolor='#blue' style='display:none;'></tr>
            <td>Jenis $data[jenis]</td>
            <td align='center'>$data[banyak_tanaman]</td> ";
    }
     ?>

    </table>

    <script type="text/javascript">
      $("#Tabeltanaman").convertToFusionCharts({
        swfPath :"Charts/",
        type : "MSColumn3D",
        data: "#Tabeltanaman",
        dataFormat: "HTMLTable"
      });
    </script>
