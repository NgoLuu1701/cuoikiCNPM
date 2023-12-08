<?php

      $server = 'localhost';
      $user = 'root';
      $pass = '';
      $database = 'cosodulieu';

      $conn =  new mysqLi($server, $user, $pass, $database);

      if($conn)
      {
        mysqLi_query($conn, "SET NAMES 'utf8' ");
        echo ' Kết nối thanh cong';
      }
      else
      {
        echo ' Kết nối thất bại';
      }

?>