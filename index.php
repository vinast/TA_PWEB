<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS AKHIR PWEB</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>DidikVinastu</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#kalkulator">Kalkulator</a></li>
                    <li><a href="#kalender">Kalender</a></li>
                    <li><a href="#i&o">Input/Output</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="" class="tbl-biru">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="img/hr1.png" />
            <div class="kolom">
                <p class="deskripsi">Welcome To My Website...</p>
                <h2>Tugas Akhir Pemrogramman Web</h2>
                <p> Membuat aplikasi web yang menggabungkan HTML, CSS, JavaScript dan PHP dengan materi dasar : calculator, kalender, dan form input-output data (fopen) dalam satu tampilan layar.</p>
                <p><a href="" class="tbl-pink">Bismillah Bisa</a></p>
            </div>
        </section>


        <section id="kalkulator">
            <div class="kolom" align="center">
                <h2>Kakulator Sederhana</h2>
                <hr>
                <p class="deskripsi">Berikut adalah program kalkulator untuk perkalian, penjumlahan, pengurangan dan pembagian</p>
                <table border="10" cellspacing="35" cellpadding="5" width="30%">
                    <tr>
                        <td colspan="4" id="inputLabel">0</td>
                    </tr>
                    <tr>
                        <td colspan="3"><button onclick="pushBtn(this);">Reset</button></td>
                        <td><button onclick="pushBtn(this);">/</button></td>
                    </tr>
                    <tr>
                        <td><button onclick="pushBtn(this);">7</button></td>
                        <td><button onclick="pushBtn(this);">8</button></td>
                        <td><button onclick="pushBtn(this);">9</button></td>
                        <td><button onclick="pushBtn(this);">*</button></td>
                    </tr>
                    <tr>
                        <td><button onclick="pushBtn(this);">4</button></td>
                        <td><button onclick="pushBtn(this);">5</button></td>
                        <td><button onclick="pushBtn(this);">6</button></td>
                        <td><button onclick="pushBtn(this);">-</button></td>
                    </tr>
                    <tr>
                        <td><button onclick="pushBtn(this);">1</button></td>
                        <td><button onclick="pushBtn(this);">2</button></td>
                        <td><button onclick="pushBtn(this);">3</button></td>
                        <td><button onclick="pushBtn(this);">+</button></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button onclick="pushBtn(this);">0</button></td>
                        <td><button onclick="pushBtn(this);">.</button></td>
                        <td><button onclick="pushBtn(this);">=</button></td>
                    </tr>
                </table>
            </div>
            <img src="img/hr2.jpg" />
        </section>


        <section id="kalender">
            <div class="tengah">
                <div class="kolom">
                    <h2>Kalender</h2>
                    <hr>
                    <p class="deskripsi">Porgram Kalender Sederhana Menggunakan metode include dari php</p>
                </div>
                <div class="panggil">
                    <div class="tutor-list">
                        <div class="kartu-tutor">
                            <?php
                            include 'php/kal1.php';
                            ?>
                        </div>
                        <div class="kartu-tutor">
                            <?php
                            include 'php/kal2.php';
                            ?>
                        </div>
                        <div class="kartu-tutor">
                            <?php
                            include 'php/kal3.php';
                            ?>
                        </div>
                        <div class="kartu-tutor">
                            <?php
                            include 'php/kal4.php';
                            ?>
                        </div>
                    </div>
                </div>
        </section>

        <section id="i&o">
            <div class="tengah">
                <div class="kolom">
                    <h2>Input Output Menggunakan (fopen)</h2>
                    <hr>
                    <p class="deskripsi">Berikut program input output menggunakan fopen pada php</p>
                    <br><br><br>
                    <div align="center"><strong><font size="6" face="Courier New, Courier, mono">BUKU TAMU </font></strong></div>
			<form name="form1" method="post" action="proses.php">
				<table width="78%" border="0" align="center" cellspacing="20" cellpadding="0">
					<tr>
						<td>Nama</td>
						<td><input name="nama" type="text" id="nama"></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><input name="alamat" type="text" id="alamat"></td>
					</tr>

					<tr>
						<td>Email</td>
						<td><input name="email" type="text" id="email"></td> </tr>
					</tr>

					<tr>
						<td>Status</td>
						<td>
							<select name="status" id="status">
								<option>Mahasiswa</option>
								<option>Kerja</option>
							</select>
						</td>
					</tr>

					<tr>
						<td>Komentar</td>
						<td><textarea name="komentar" id="komentar"></textarea></td> </textarea>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="Submit" value="Kirim">
                            <input type="reset" name="Submit2" value="Batal">
					    </td>
					</tr>
				</table>
			</form>
		<div align="center"><strong><a href="lihat.php">::Lihat Buku Tamu::
		</a></strong></div>
                </div>

            </div>
        </section>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>DidikVinast</h3>
                    <p>NAMA : DIDIK VINASTU <br>NIM &nbsp;&nbsp;&nbsp;&nbsp;: 2100018181 <br> KELAS &nbsp;: D</p>
                </div>
                <div class="footer-section">
                    <h3>About</h3>
                    <p>Tugas Akhir Permorgramman Web</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Jl. Lowano, Kost Griya Lowanu No.99b, Sorosutan, Umbulharjo, DIY</p>
                    <p>Kode Pos: 57365</p>
                </div>
                <div class="footer-section">
                    <h3>Social</h3>
                    <a href="https://www.instagram.com/vinastt_/" style="font-size: 25px; color: black ;"><img src="img/ig.png" alt="Instaram" width="9%" height="20px">&nbsp;&nbsp;Instagram</a>
                    <br>
                    <a href="https://www.twitter.com/vinastt/" style="font-size: 25px; color: black ;"><img src="img/tw.png" alt="Twitter" width="12%" height="25px">&nbsp;Twitter</a>
                    <br>
                    <a href="https://www.github.com/vinast/" style="font-size: 25px; color: black ;"><img src="img/gt.png" alt="Github" width="9%" height="20px">&nbsp;&nbsp;Github</a>
                    <br>
                    <a href="https://www.facebook.com/profile.php?id=100026730090913" style="font-size: 25px; color: black ;"><img src="img/fb.png" alt="Facebook" width="9%" height="20px">&nbsp;&nbsp;Facebook</a>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2022. <b>DidikVinast</b> All Rights Reserved.
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>