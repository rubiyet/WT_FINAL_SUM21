<?php

    include '../model/db_config.php';
    $err_db = "";
    
    $depart_id = "";
    $err_depart_id = "";
    $name = "";
    $err_name = "";
    $hasError = false;

    if(isset($_POST["btn_insertdepartment"])){
        if(empty($_POST["depart_id"])){
            $hasError =  true;
            $err_depart_id = "Department ID Required";
        }
        else{
            $depart_id = $_POST["depart_id"];
        }
        if(empty($_POST["name"])){
            $hasError =  true;
            $err_name = "Name Required";
        }
        else{
            $name = $_POST["name"];
        }
        if(!$hasError){
            $rs = insertdepartment($name,$depart_id);
            if($rs === true){
                header("Location: alldepartment.php"); 
            }
            else if($rs = 1062){
                $err_db = $depart_id." already inserted.";
            }
        }
    }
    function insertdepartment($name,$depart_id){
        $query = "insert into department values(Null,'$name','$depart_id')";
        return execute($query);
    }
    if(isset($_POST["btn_updatedepartment"])){
        $depart_id = $_POST["depart_id"];
        $name = $_POST["name"];
        $rs = editdepartment($name, $depart_id);
        if($rs === true){
            header("Location: alldepartment.php");
        }
        else if($rs = 1062){
            $err_db = $depart_id." already inserted.";
        }
    }
    function editdepartment($name, $depart_id){
        global $id;
        $query = "update department set name='$name', depart_id='$depart_id' where id =$id";
        return execute($query);
    }
    function getAllDepartments(){
        $query = "select * from department";
        $rs = get($query);
        return $rs;
    }
    function getdepartment($id){
        $query = "select * from department where id = $id";
        $rs = get($query);
        return $rs[0];
    }

?>