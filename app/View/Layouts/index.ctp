<?php

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $this->fetch('title'); ?></title>
	<?php
		echo $this->Html->meta('icon');

//		echo $this->Html->css();

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    
			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>

</body>
</html>