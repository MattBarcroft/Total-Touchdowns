<?php
class fileHandler{

  function writeToFile($filename, $stringToWrite){
    $fp = fopen($filename, "a+") or die ("unable to open file");

    if ($fp != false) {
      fwrite($fp, $stringToWrite);
    }
    else {
      echo "error reading file";
    }
  }

  function readFromFile($filename){
  $fp = fopen($filename, "r");
  $contents = [];
    if ($fp != false) {
      $contents = fread($fp, filesize($filename));
    }
    return $contents;
  }

}
 ?>
