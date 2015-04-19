<?php
  class Common {
      // Удобный логер с тагированием в пользовательский файл (складывает в папку /log)
      public static function xlog($tag, $msg) {
          $msg = print_r($msg, true);
          $today = date("d.m.Y");
          $filename = "log/{$tag}_{$today}.txt";
          if (!file_exists($filename)) {
              //chmod($filename, 0777);
          }
          $fd = fopen($filename, "a+");
          $str = "[" . date("d/m/Y h:i:s", time()) . "] " . $msg;
          fwrite($fd, $str . PHP_EOL);
          fclose($fd);
          //chmod($filename, 0644);
      }
  }
?>