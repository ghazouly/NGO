<?php

function upload($file,$path){
  $name = $file->getClientOriginalName();
  $fileName = date("Y_h:i:s_A").'_'.$name;
  $file->move($path, $fileName);
  return $fileName;
}

 ?>
