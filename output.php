<?php
	include('header.php');

?>
<br>
<br>
<br>
<br>
<center>
<div class="container">
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
		echo "<th>".getKriteriaNama($i)."</th>";
	}
?>
			</tr>
		</thead>
		<tbody>
<?php
	for ($x=0; $x <= ($n-1); $x++) { 
		echo "<tr>";
		echo "<td>".getKriteriaNama($x)."</td>";
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

	<br>
<div class="container">
<div class="panel">
	<h3 class="ui header">Matriks Nilai Kriteria</h3>
	<table class="ui celled red table">
		<thead>
			<tr>
				<th>Kriteria</th>
<?php
	for ($i=0; $i <= ($n-1); $i++) { 
		echo "<th>".getKriteriaNama($i)."</th>";
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
		echo "<td>".getKriteriaNama($x)."</td>";
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
			<button class="ui left labeled icon button primary">
				<i class="left arrow icon"></i>
				Kembali
			</button>
		</a>

<?php
	} else {

?>
<br>

	<a href="bobot.php?c=1">
	<button class="ui right labeled icon button primary" style="float: right;">
		<i class="right arrow icon"></i>
		Lanjut
	</button>
	</a>
</div>
</div>

<?php 
	}
	echo "</section>";
	include('footer.php');
?>