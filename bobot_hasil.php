<?php
	include('header.php');

?>
<br>
<br>
<br>
<br>

<table class="table table-bordered">
  <tbody>
    <div class="container">
      <tr>
        <td>

<center>
<div class="panel">
      <div class="panel-heading">
<section class="content">
	<h3 class="ui header">Matriks Perbandingan Berpasangan</h3>
	<table class="ui collapsing celled blue table">
		<thead>
			<tr>
				<th>Kriteria</th>
<?php
	for ($i=0; $i <= ($n-1); $i++) {
		echo "<th>".getAlternatifNama($i)."</th>";
	}
?>
			</tr>
		</thead>
		<tbody>
<?php
	for ($x=0; $x <= ($n-1); $x++) {
		echo "<tr>";
		echo "<td>".getAlternatifNama($x)."</td>";
			for ($y=0; $y <= ($n-1); $y++) {
				echo "<td>".round($matrik[$x][$y],2)."</td>";
			}

		echo "</tr>";
	}
?>
		</tbody>
		<tfoot>
			<tr>
				<th>Jumlah</th>
<?php
		for ($i=0; $i <= ($n-1); $i++) {
			echo "<th>".round($jmlmpb[$i],2)."</th>";
		}
?>
			</tr>
		</tfoot>
	</table>
</section>
</div>
</div>
</center>

</td>
      </tr>
    </div>
  </tbody>
</table>


	<br>

	<table class="table table-bordered">
  <tbody>
    <div class="container">
      <tr>
        <td>

<div class="panel">
      <div class="panel-heading">
	<h3 class="ui header">Matriks Nilai Kriteria</h3>
	<table class="ui celled red table">
		<thead>
			<tr>
				<th>Kriteria</th>
<?php
	for ($i=0; $i <= ($n-1); $i++) {
		echo "<th>".getAlternatifNama($i)."</th>";
	}
?>
				<th>Jumlah</th>
				<th>Priority Vector</th>
			</tr>
		</thead>
		<tbody>
<?php
	for ($x=0; $x <= ($n-1); $x++) {
		echo "<tr>";
		echo "<td>".getAlternatifNama($x)."</td>";
			for ($y=0; $y <= ($n-1); $y++) {
				echo "<td>".round($matrikb[$x][$y],2)."</td>";
			}

		echo "<td>".round($jmlmnk[$x],2)."</td>";
		echo "<td>".round($pv[$x],2)."</td>";

		echo "</tr>";
	}
?>

		</tbody>
		<tfoot>
			<tr>
				<th colspan="<?php echo ($n+2)?>">Nilai Eigen Maksimum (λ maks)</th>
				<th><?php echo (round($eigenvektor,2))?></th>
			</tr>
			<tr>
				<th colspan="<?php echo ($n+2)?>">Index Konsistensi/Consistency Index (CI) : (λ max-n)/(n-1)</th>
				<th><?php echo (round($consIndex,2))?></th>
			</tr> 
			<tr>
				<th colspan="<?php echo ($n+2)?>">Rasio Konsistensi/Consistency Ratio (CR) : CI/RI</th>
				<th><?php echo (round(($consRatio * 100),2))?> %</th>
			</tr>
		</tfoot>
	</table>


	</td>
      </tr>
    </div>
  </tbody>
</table>


<?php

	if ($consRatio > 0.1) {
?>
		<div class="ui icon red message">
			<i class="close icon"></i>
			<i class="warning circle icon"></i>
			<div class="content">
				<div class="header">
					Nilai Consistency Ratio melebihi 10% !!!
				</div>
				<p>Mohon input kembali tabel perbandingan...</p>
			</div>
		</div>

		<br>

		<a href='javascript:history.back()'>
			<button class="ui left labeled icon button">
				<i class="left arrow icon"></i>
				Kembali
			</button>
		</a>

<?php

	} else {
		if ($jenis == getJumlahKriteria()) {
?>

<br>

<form action="hasil.php">
	<button class="ui right labeled icon button primary" style="float: right;">
		<i class="right arrow icon"></i>
		Lanjut
	</button>
</form>


<?php

		} else {

?>
<br>
	<a href="<?php echo "bobot.php?c=".($jenis + 1)?>">
	<button class="ui right labeled icon button primary" style="float: right;">
		<i class="right arrow icon"></i>
		Lanjut
	</button>
	</a>
</section>
</div>
</div>

<?php

		}
	}

	echo "</section>";
	include('footer.php');

?>
