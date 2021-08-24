<?php
      //Recibimos los datos de la imagen

   
      $nombre_img=$_FILES['img']['name']; //guarda el nombre de la imagen.//
      $tipo_imagen=$_FILES['img']['type'];//guarda el tipo de la imagen//
      $tamagno_imagen=$_FILES['img']['size'];//guarda el tamaño de la imagen//

      //echo  $_SERVER['DOCUMENT_ROOT'].PHP_EOL;//

      $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/practicas/Imagenes/Img/'; //Ruta de destino donde se almacenara la imgen//

      move_uploaded_file($_FILES['img']['tmp_name'], $carpeta_destino.$nombre_img);
      /*La funcion move uploaded_file realiza la funicion  de  trasaladar el archivo de la carpeta
      temporal hacia la carpeta de destino. */

      echo  $nombre_img; //imprimo el nombre de la imagen//


?>