<?php
	include('config.php');
	include('fungsi.php');

	$jenis = $_GET['c'];

	include('header.php');
?>

<center>
<div class="container">
<div class="panel">
      <div class="panel-heading">
      	<br>
      	<br>
      	<br>
<section class="content">
	<h2 class="ui header">Perbandingan Alternatif &rarr; <?php echo getKriteriaNama($jenis-1) ?></h2>
	<?php showTabelPerbandingan($jenis,'alternatif'); ?>
</section>
</div>
</div>
</center>

<?php include('footer.php'); ?>