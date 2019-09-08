<?php 	
		// $mahasiswa =[
		// 	[
		// 		"nama" =>"Jaenudin",
		// 		"nrp"=>"11170952",
		// 		"email" => "jaenudin0901@bsi.ac.id"
		// 	],
		// 	[
		// 		"nama" =>"Dwi",
		// 		"nrp" => "12140085",
		// 		"email" =>"jaenudin090191@gmail.com"
		// 		]
		// 		];

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc','root','');

$db = $dbh->prepare('SELECT * FROM mahasiswa');

$db->execute();

$mahasiswa = $db->fetchALL(PDO::FETCH_ASSOC);

$data =json_encode($mahasiswa);
echo $data;

 ?>