<?php
    require_once "../db.php";

    class consolUtil{
        function insertar($nombreTabla, $camposInsertar, $valoresInsertar){
            global $connect;
            $arregloCampos = "";
            $arregloValores = "";
            
            for($indexCampos = 0; $indexCampos < count($camposInsertar); $indexCampos++){
                $arregloCampos = ($indexCampos == (count($camposInsertar) - 1)) ? $arregloCampos."`".
                $camposInsertar[$indexCampos]."`" : $arregloCampos."`".$camposInsertar[$indexCampos]."`,";

            }

            for($indexValores = 0; $indexValores < count($valoresInsertar); $indexValores++){
                $arregloValores = ($indexValores == (count($valoresInsertar) - 1)) ? $arregloValores."'".
                $valoresInsertar[$indexValores]."'" : $arregloValores."'".$valoresInsertar[$indexValores]."',";

            }

            $consultasql = "INSERT INTO `$nombreTabla` ($arregloCampos) VALUES ($arregloValores);";
            $query = $connect->prepare($consultasql);

            return $query;
        }

        function ActualizarDatos($nombreTabla, $camposActualizar, $valoresActualizar, $campoCondicion, $condiconIgual){
            global $connect;
            $valoresConstrain = "";

            for($index = 0; $index < count($valoresActualizar); $index++){
                $valoresConstrain = ($index == (count($valoresActualizar) - 1)) ? $valoresConstrain."`".
                $camposActualizar[$index]."` = '".$valoresActualizar[$index]."'" : $valoresConstrain."`".
                $camposActualizar[$index]."` = '".$valoresActualizar[$index]."',";
  
            }

            $consulta = "UPDATE `$nombreTabla` SET $valoresConstrain WHERE $campoCondicion = $condiconIgual";
            $query = $connect->prepare($consulta);

            return $query;

        }


        function ConsultarTodosDatos($nombreTabla, $camposConsult, $valoresConsult){
            global $connect;
            $condicion = "WHERE";

            for($index = 0; $index < count($camposConsult); $index++){
                $condicion = ($index == (count($camposConsult) - 1)) ? $condicion."`". $camposConsult[$index]."` = '"
                .$valoresConsult[$index]."'" : $condicion."`".$camposConsult[$index]."`= '".$valoresConsult[$index].
                "' AND ";
                
            }

            $consulta = "SELECT * FROM $nombreTabla $condicion";
            $query = $connect->prepare($consulta);

            return $query;

        }

        function consultarDeterminadosCamnpos($nomnbreTabla, $campoUnico){


        }

    }

?>