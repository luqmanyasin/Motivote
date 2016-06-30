<?php
  $clear = "<?php header('HTTP/1.1 404 Not Found'); die('The requested file could not be found'); ?>";
  $files = glob("../install/*.php", GLOB_BRACE);
  //print_r($files);
  foreach ($files as $file) {
    $f = pathinfo($file, PATHINFO_BASENAME);
    $fp = fopen($f, 'w');
    fwrite($fp, $clear);
    fclose($fp);


  }


?>
