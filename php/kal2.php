<?php 
	//mengambil tanggal sistem saat ini (1-31)
	$hari = date("d");
	$hariini = $hari;
	//mengambil bulan sistem saat ini (1-12)
	$bulan = date("m");
	//mengambil tahun sistem saat ini
	$tahun = date("Y");
	//mencari jumlah hari bulan dan tahun ini
	$jumlahhari = date("t", mktime(0,0,0,$bulan,$hari,$tahun));
?>

<?php 
	switch ($bulan) {
		case 1:
			$nmbulan = "Jan";
			break;
		case 2:
			$nmbulan = "Feb";
			break;
		case 3:
			$nmbulan = "Mar";
			break;
		case 4:
			$nmbulan = "Apr";
			break;
		case 5:
			$nmbulan = "Mei";
			break;
		case 6:
			$nmbulan = "Jun";
			break;
		case 7:
			$nmbulan = "Jul";
			break;
		case 8:
			$nmbulan = "Agu";
			break;
		case 9:
			$nmbulan = "Sep";
			break;
		case 10:
			$nmbulan = "Okt";
			break;
		case 11:
			$nmbulan = "Nop";
			break;
		case 12:
			$nmbulan = "Des";
			break;
	}
	echo "<center><h1>$nmbulan $tahun</h1></center>";
?>

<br>

<table style="border: 2px solid #1E90FF" align="center" cellpadding="10">
	<tr bgcolor="#ADD8E6">
		<td align="center"><font color="#FF000">Min</font></td>
		<td align="center">Sen</font></td>
		<td align="center">Sel</font></td>
		<td align="center">Rab</font></td>
		<td align="center">Kam</font></td>
		<td align="center">Jum</font></td>
		<td align="center">Sab</font></td>
	</tr>

	<?php 
		$s = date("w", mktime(0,0,0, $bulan,1,$tahun));
		for ($ds=1; $ds<=$s; $ds++) { 
			echo "<td></td>";
		}

		for ($d=1; $d<=$jumlahhari; $d++) { 
			
			//jika minggu ke 0, maka buat baris baru
			if (date("w", mktime(0,0,0, $bulan, $d, $tahun))==0){
				echo "<tr>";

			}
			$warna = "#000000"; //warna default
			$warnasel = "#ffffff";

			//jika hari minggu beri warna merah
			if (date("l", mktime(0,0,0, $bulan, $d, $tahun))== "Sunday") {
				$warna = "#FF0000";
			}


			//blok sel g sesuai hari ini
			if ($hariini == $d) {
				$warna = "blue";
				$warnasel = "yellow";
			}
			//beri warna default tanggal tiap harinya(selain hari minggu)
			echo "<td align=center valign=middle bgcolor=$warnasel > <span style=\"color:$warna\">$d</span></td>";

			
			//if (date("l", mktime(0,0,0, $bulan, $d, $tahun))== "Sunday") {
				

			//jika hari ke enam, akhiri baris
			if(date("w", mktime(0,0,0, $bulan, $d, $tahun)) ==6){
				echo "</tr>";
			}
		}
		echo '</table>';
	?>
