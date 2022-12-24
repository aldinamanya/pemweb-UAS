<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['usermail'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <a href="logout.php" class="logout">LOGOUT</a>
    <a href="BMI.php" class="cek">Cek Kesehatanmu</a>
   <h1 class="T">Selamat datang di Perhitungan BMI</h1>
   <p class="R"> Mengetahui Berat Badan dan menjaga pola makan. kesehatan memang urusan tuhan, tapi merawat badan itu Kewajiban...</p>
   <h2>Apa itu BMI (Body Mass Index)?</h2>
 
<p class= "definisi">
 BMI adalah indikator pengukuran yang digunakan untuk menentukan kategori berat badan ideal atau tidak. BMI dikembangkan oleh Adolphe Quetelet selama abad ke-19. Melalui hasil perhitungan BMI, Anda akan mengetahui kategori berat badan, yaitu kurus, ideal, berlebihan, atau bahkan obesitas.
 
  
 
 Metode perhitungan ini juga bisa menjadi alat skrining untuk melihat risiko kesehatan tertentu. Menurut WHO, hasil BMI yang tidak normal/ideal akan meningkatkan risiko terkena beberapa penyakit. Maka dari itu, sekiranya Anda perlu memahami bagaimana cara menghitung BMI secara tepat untuk meminimalisir kenaikan atau penurunan berat badan secara berlebihan.
 
  
 
 Adapun beberapa masalah kesehatan yang salah satu faktor risikonya adalah obesitas, di antaranya penyakit kardiovaskular, kematian dini, hipertensi, dan diabetes. </p>   
<h2>Cara Menghitung BMI</h2>
 

 <p class="definisi">Lantas, bagaimana cara menghitung BMI? Nah, sebagian dari Anda mungkin masih bingung mengenai hal ini.
 
  
 
 Cara menghitung Body Mass Index (BMI) terbagi menjadi dua jenis berdasarkan pengukurannya, yaitu pengukuran metrik dan imperial.
 
  
 
 Sebelum mencoba cara menghitung BMI, pastikan Anda mengetahui berat dan tinggi badan secara spesifik ya.<p>
 
 <h2>Berikut penjelasan mengenai masing-masing cara menghitung BMI:</h2>
 
 <h2> Menggunakan Pengukuran Metrik<h2>
  
 
 <p class="definisi">Rumus BMI metrik adalah perhitungan yang paling sering digunakan di Indonesia, di mana satuannya adalah kilogram (berat badan) dan meter (tinggi badan).</p>
 
  
 
 <p class="definisi">Sehingga rumusnya adalah : </p>
 
 <p class="definisi">[berat badan (kg) : (tinggi badan(m))kuadrat] atau<p>
 
 <p class="definisi">[berat badan (kg) : (tinggi badan (m) x tinggi badan (m))]</p>
 
  
 
 <p class="definisi">Contohnya, Anda memiliki berat badan 60 kg dengan tinggi badan 150 cm (1,5 m), maka cara menghitung BMI adalah sebagai berikut:</p>
 
  
 
 <p class="definisi"> BMI = 60 : (1,5 x 1,5) = 60 : 2,25 = 26,6</p>
 
  
 
 <p class="definisi">Jadi, hasil perhitungan BMI dari seseorang dengan berat badan 60 kg dan tinggi badan 150 cm adalah 26,6.</p>
 
  
 
  
 
 <h2>Kategori BMI</h2>
  
 
 <p class="definisi">Setelah mengetahui cara menghitung Body Mass Index (BMI), lantas bagaimana caranya mengetahui berat badan ideal atau tidak?
 
  
 
 Menurut WHO, kategori standar berat badan ideal pria dan wanita dewasa berdasarkan BMI adalah sebagai berikut:</p>
 
 <p class="definisi">Kurang dari 18,5 berarti berat badan kurang (underweight).<p>
 <p class="definisi">Antara 18,5 - 24,9 berarti berat badan normal<p>
 <p class="definisi">Antara 25-29,9 berarti berat badan berlebih (overweight).</p>
 <p class="definisi">Di atas 30 berarti obesitas</p>
  
 <p class="definisi">
 Maka, apabila mengacu dari contoh perhitungan BMI di atas, hasil 26,6 termasuk dalam kategori berat badan berlebih.</P>
 </p>      
  


      
 

</body>
</html>