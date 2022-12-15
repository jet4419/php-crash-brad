<?php

$users_file = 'extras/files/users.txt';

if(file_exists($users_file)) {
  // echo readfile($users_file);
  $handle = fopen($users_file, 'r');
  $contents = fread($handle, filesize($users_file));
  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($users_file, 'w');
  $contents = 'DevJet' . '<br>' . 'Keih03' . '<br>' . 'Jack56' . '<br>' . 'John12' . '<br>' . 'Clark22';
  fwrite($handle, $contents);
  fclose($handle);
}