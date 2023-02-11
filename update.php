<?php
  $counterFile = fopen("counter.txt", "r");
  $counter = (int)fread($counterFile, filesize("counter.txt"));
  fclose($counterFile);

  ++$counter;

  $counterFile = fopen("counter.txt", "w");
  fwrite($counterFile, $counter);
  fclose($counterFile);
?>