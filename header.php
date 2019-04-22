<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sistem Pendukung Keputusan metode AHP</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- <script src="js/bootstrap.min.js"></script> -->
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">SPK METODE AHP</a>
      <img src="assets/img/stmk.png" class="img-circle person" alt="Random Name" width="50" height="50"></a>
    </div>
  </tr>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
         <li><a href="nama.php">Nama Kelompok 6</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Data
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="kriteria.php">Data Kriteria <div class="ui blue tiny label" style="float: right;"><?php echo getJumlahKriteria(); ?></div></a></li>
            <li><a href="alternatif.php">Data Alternatif WO <div class="ui blue tiny label" style="float: right;"><?php echo getJumlahAlternatif(); ?></div></a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Analisa Perbandingan
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="bobot_kriteria.php">Perbandingan Kriteria</a></li>
            <li><a href="bobot.php?c=1">Perbandingan Alternatif</a></li>
          </ul>
          <li>
            <?php

              if (getJumlahKriteria() > 0) {
                for ($i=0; $i <= (getJumlahKriteria()-1); $i++) { 
                  echo "<li><a class='item' href='bobot.php?c=".($i+1)."'>".getKriteriaNama($i)."</a></li>";
                }
              }

            ?>
          </li>
        </li>
        <li><a href="hasil.php">Hasil</a></li>
      </ul>
    </div>
  </div>
</nav>

