<?php

/*
* Setup compression level in zlib.
* Notice: zlib needs to be installed in 
*         your php configuration
* 
* Options: -1:
*          1-9:
*/
ini_set('zlib.output_compression_level', 6);

/*
* Set content type for application
*/
header("Content-type: application/javascript");

/*
* Ensures only forced if the Accept-Encoding 
* header contains "gzip", then call output
* buffering with gz
*/
if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
{
  header('Content-Encoding: gzip');
  ob_start('ob_gzhandler');
}
else
{
  ob_start();
}

/*
* Put your javascript content here
*/
echo 'function Test()
      {
        return this;
      };';

/*
* Get the buffered content from above
*/
$content = ob_get_contents();

/*
* Erase and turn off output buffering
*/
ob_end_clean();

/*
* Call again gz handler. This mask the absence of 
* the first call
* Notice: Without calling again, content becomes 
*         not compressed
*/
ob_start("ob_gzhandler");

/*
* Print buffered content
*/
echo $content;

?>
