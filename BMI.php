<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style1.css">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <link rel="stylesheet" href="css/style2.css">
</head>
<body>
  <a href="header.php" class="logout">HOME</a>
<a href="logout.php" class="logout">LOGOUT</a>

      <h3>BODY MASS INDEX CALCULATOR</h3>
<form class="form" id="form" onsubmit="return validateForm()">
<div class="row-one">
  <p class="text">Nama</p><input type="text"class="text-input-nama" autocomplete="off" required><br><br>
  <p class="text">Umur</p><input type="text" class="text-input" id="age" autocomplete="off" required/><br><br>
  <label class="container">
  <p class="text">Perempuan </p><input type="radio" name="radio" id="f">
    <span class="checkmark"></span>
  </label>
  <label class="container">
  <p class="text">Laki - laki </p><input type="radio" name="radio" id="m">
    <span class="checkmark"></span>
  </label>
  </div>

<div class="row-two">
  <p class="text">Tinggi (cm)</p> <input type="text" class="text-input" id="height" autocomplete="off" required>
  <p class="text">Berat (kg)</p><input type="text" class="text-input" id="weight" autocomplete="off" required>
</div>
<button type="button" id="submit">Hitung</button>
</form>
 <script src="js/jsku.js"></script>
      
 

</body>
</html>