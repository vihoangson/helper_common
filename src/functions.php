<?php 
$files = glob_recursive(__DIR__ . '/*.php');
if ($files === false) {
    throw new RuntimeException("Failed to glob for function files");
}
foreach ($files as $file) {
    require_once $file;
}
unset($file);
unset($files);

function glob_recursive($pattern, $flags = 0){
	// forked from https://github.com/rodurma/PHP-Functions/
	// blob/master/glob_recursive.php
  $files = glob($pattern, $flags);
       
  foreach (glob(dirname($pattern).'/*', 
      GLOB_ONLYDIR|GLOB_NOSORT) as $dir){
    $files = array_merge($files, glob_recursive
        ($dir.'/'.basename($pattern), $flags));
  }
  return $files;
}
 ?>