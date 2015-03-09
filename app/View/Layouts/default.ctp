<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
    <title>The Disbanded | <?php echo $title_for_layout;?></title>
    <?php echo $this->Html->script('modernizr');?>
    <?php echo $this->Html->script('jquery-2.1.3.min');?>
    <?php echo $this->Html->script('fastclick');?>
    <?php echo $this->Html->css('bootstrap.min');?>
    <?php echo $this->Html->css('fixcompatibility');?>
    <?php echo $this->Html->script('bootstrap.min');?>

    <?php echo $this->Html->css('foundation.min');?>
    <?php echo $this->Html->script('foundation.min');?>
    <?php echo $this->Html->script('foundation.interchange');?>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
        echo $this->Html->css('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body style="background-color: rgb(14, 49, 81)">
	<div id="container" class="container-fluid">
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">

		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
