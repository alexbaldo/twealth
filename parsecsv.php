<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

foreach(scandir('data') as $period) {
   if ($period != '.' && $period != '..') {
      print $period . '<br />';
      foreach(scandir('data/' . $period) as $disease) {
         if ($disease != '.' && $disease != '..') {
            print '--' . $disease . '<br />';
            foreach (scandir('data/' . $period . '/' . $disease) as $file) {
               if ($file != '.' && $file != '..') {
                  print '----' . $file . '<br />';
                  $csv = fopen('data/' . $period . '/' . $disease . '/' . $file, 'r');
                  while($line = fgetcsv($csv)) {
                     var_dump($line);
                     print '<br />';
		  }
		  return;
               }
            }
         }
      }
   }
}






