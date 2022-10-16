<?php
	// db tanaman 
	$hostname = 'localhost'; //127.0.0.1
	$username = 'root';
	$psswd = '';
	$dbname = 'crud';

	$conn = mysqli_connect($hostname, $username, $psswd, $dbname);

	$return = mysqli_query($conn, "select * from tanaman");


	$arr = array();
	while($rec = mysqli_fetch_assoc($return)){
		// print_r($rec);
		array_push($arr, array("label"=>$rec['jenis'], "value"=>$rec['id'])); //simpen arrayy ke arr var
		// cek isi $arr --> print_r($arr)
	}

	// $a = json_encode($arr); // biar bentuknya json
	// echo $a;

	$c = array("caption"=>"jenis tanaman",
                    "subCaption"=>"UPlant",
                    "xaxisName"=>"jenis",
                    "yAxisName"=>"nama",
                    "theme"=>"fint");


    $gabungin = array("chart"=>$c, "data"=>$arr);
    //print_r($gabungin);

    $j = json_encode($gabungin);
    echo $j;
?>