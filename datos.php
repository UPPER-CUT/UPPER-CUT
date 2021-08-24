<?php
      //Recibimos los datos de la imagen

   
      $nombre_img=$_FILES['img']['name']; //guarda el nombre de la imagen.//
      $tipo_imagen=$_FILES['img']['type']."<br>";//guarda el tipo de la imagen//
      $tamagno_imagen=$_FILES['img']['size']."<br>";//guarda el tamaño de la imagen//

    if($tamagno_imagen=$_FILES['img']['size']<=3000000){

      if($tamagno_imagen="image/jpeg" || $tamagno_imagen="image/png" ||$tipo_imagen="image/gif"){
            //echo  $_SERVER['DOCUMENT_ROOT'].PHP_EOL;//
            
            $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/practicas/Imagenes/Img/'; 
            //Ruta de destino donde se almacenara la imgen//

            move_uploaded_file($_FILES['img']['tmp_name'], $carpeta_destino.$nombre_img);
            /*La funcion move uploaded_file realiza la funicion  de  trasaladar el archivo de la carpeta
            temporal hacia la carpeta de destino. */
      }
      else{

            echo"Error:El formato que haz ingresado se soporta por el servidor";
      }
    }

    else{

      echo "Error:No se pude Enviar archivos de mas de 3MB";
    }


?>