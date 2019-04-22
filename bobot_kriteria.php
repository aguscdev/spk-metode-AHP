<?php
	include 'config.php';
	include 'fungsi.php';

	include 'header.php';
?>

<center>
<div class="container">
<div class="panel">
      <div class="panel-heading">
      	<br>
      	<br>
      	<br>
<section class="content">
	<h2 class="ui header">Perbandingan Kriteria</h2>
	<?php showTabelPerbandingan('kriteria','kriteria'); ?>
</section>
</div>
</div>
</div>
</center>

<?php include 'footer.php'; ?>