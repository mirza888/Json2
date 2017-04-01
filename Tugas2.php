<?php
	//proses get file json
	$json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/webcams/q/CA/San_Francisco.json");
	$json_string2 = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/astronomy/q/IA/mugassari.json");
	$json_string3 = file_get_contents ("http://api.wunderground.com/api/a657d7d2ba430b38/planner_08090831/q/IA/mugassari.json");
	$parsed_json = json_decode ($json_string);
	$parsed_json2 = json_decode ($json_string2);
	$parsed_json3 = json_decode ($json_string3);
	
	//proses json
	$a1 = $parsed_json->webcams[0]->{"camid"};
	$a2 = $parsed_json->webcams[0]->{"updated"};
	$a3 = $parsed_json->webcams[0]->{"city"};
	
	$b1 = $parsed_json2->{"moon_phase"}->{"phaseofMoon"};
	$b2 = $parsed_json2->{"moon_phase"}->{"ageOfMoon"};
	$b3 = $parsed_json2->{"moon_phase"}->{"percentIlluminated"};
	
	$c1 = $parsed_json3->{"trip"}->{"title"};
	$c2 = $parsed_json3->{"trip"}->{"airport_code"};
        $c3 = $parsed_json3->{"trip"}->{"period_of_record"}->{"date_start"}->{"date"}->{"pretty"};
	
	
	//memanggil hasil proses json
	echo "Tugas 2 menampilkan json";
	echo "<br>";
	echo "Camera type ${a1}\n";
	echo "<br>";
	echo "Update foto ${a2}\n";
	echo "<br>";
	echo "Didapat dari ${a3}\n";
        echo "<br>";
	echo "<br>";
	echo "Element dari json astronomy";
	echo "<br>";
	echo "Fase Bulan ${b1}\n";
	echo "<br>";
	echo "Umur Bulan : ${b2}\n";
	echo "<br>";
	echo "Persentase Diterjang : ${b3}\n";
	echo "<br>";
	echo "<br>";
	echo "Element dari json planner";
	echo "<br>";
	echo "Judul : ${c1}\n";
	echo "<br>";
	echo "Code Pesawat terbang dibulan ini : ${c2}\n";
	echo "<br>";
	echo "Tanggal cantik: ${c3}\n";
?>
