<?php 
include_once "../model/display.php";
    class displayMain{
        public function hienthi(){
            $display = new display();
            $table = addslashes($_GET['table']);
            $id = addslashes($_GET['id']);
            $where = "id = ".$id;
            $dataupdate = [
                addslashes($_GET['type']) => addslashes($_GET['value']),
            ]; 
            $data = $display->displayProduct($table,$dataupdate,$where);         
        }
    }
?>