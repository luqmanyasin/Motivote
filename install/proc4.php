<?php
  $clear = "<?php header('HTTP/1.1 404 Not Found'); die('The requested file could not be found'); ?>";
	$fp = fopen('index.php', 'w');
	fwrite($fp, $clear);
	fclose($fp);


?>
