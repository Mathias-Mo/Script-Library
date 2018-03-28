<?php

ini_set('zlib.output_compression_level', 6);
ob_start("ob_gzhandler");
header("Content-type: application/javascript");

echo 'function Test()
      {
	    return this;
	  };';
    
$content = ob_get_contents();
ob_end_clean();
ob_start("ob_gzhandler");

echo $content;

?>