<!doctype html>
<html>
<head>
	<?php echo $this->html->charset();?>
	<title>Application &gt; <?php echo $this->title(); ?></title>
	<?php echo $this->html->style(['framework7/css/framework7.bundle.css']); ?>
	
	<?php echo $this->styles(); ?>
	<?php echo $this->html->link('Icon', null, ['type' => 'icon']); ?>
</head>
<body >

		<div class="content">
			<?php echo $this->content(); ?>
		</div>

		<hr>

		<div class="footer">
			
		</div>

	
</body>
<?php $this->scripts('<script src="framework7/js/framework7.bundle.js"></script>');?>
<?php echo $this->scripts(); ?>
</html>