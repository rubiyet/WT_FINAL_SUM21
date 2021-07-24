<?php

    include '../model/db_config.php';
    $err_db = "";

    $userid = "";
    $err_userid = "";
    $name = "";
    $err_name = "";
    $dob = "";
    $err_dob = "";
    $credit = "";
    $err_credit = "";
    $cgpa = "";
    $err_cgpa = "";
    $depart_id = "";
    $err_depart_id = "";
    $hasError = false;

    if(isset($_POST["btn_insertstudent"])){
        if(empty($_POST["userid"])){
            $hasError =  true;
            $err_userid = "ID Required";
        }
        else{
            $userid = $_POST["userid"];
        }
        if(empty($_POST["name"])){
            $hasError =  true;
            $err_name = "Name Required";
        }
        else{
            $name = $_POST["name"];
        }
        if(empty($_POST["dob"])){
            $hasError =  true;
            $err_dob = "Date of Birth Required";
        }
        else{
            $dob = $_POST["dob"];
        }
        if(empty($_POST["credit"])){
            $hasError =  true;
            $err_credit = "Credit Required";
        }
        else{
            $credit = $_POST["credit"];
        }
        if(empty($_POST["cgpa"])){
            $hasError =  true;
            $err_cgpa = "CGPA Required";
        }
        else{
            $cgpa = $_POST["cgpa"];
        }
        if(empty($_POST["depart_id"])){
            $hasError =  true;
            $err_depart_id = "Department ID Required";
        }
        else{
            $depart_id = $_POST["depart_id"];
        }
        if(!$hasError){
            $rs = insertstudent($userid,$name,$dob,$credit,$cgpa,$depart_id);
            if($rs === true){
                header("Location: allstudents.php"); 
            }
            else if($rs = 1062){
                $err_db = $userid." already inserted.";
            }
        }
    }
    function insertstudent($userid,$name,$dob,$credit,$cgpa,$depart_id){
        $query = "insert into students values(Null,'$name','$userid','$dob','$credit','$cgpa','$depart_id')";
        return execute($query);
    }
    if(isset($_POST["btn_updatestudent"])){
        $userid = $_POST["userid"];
        $name = $_POST["name"];
        $dob = $_POST["dob"];
        $credit = $_POST["credit"];
        $cgpa = $_POST["cgpa"];
        $depart_id = $_POST["depart_id"];
        $rs = editstudent($userid, $name, $dob, $credit, $cgpa, $depart_id);
        if($rs === true){
            header("Location: allstudents.php"); 
        }
        else if($rs = 1062){
            $err_db = $userid." already inserted.";
        }
    }
    function editstudent($userid, $name, $dob, $credit, $cgpa, $depart_id){
        global $id;
        $query = "update students set userid='$userid', name='$name', dob='$dob', credit='$credit', cgpa='$cgpa', depart_id='$depart_id' where id =$id";
        return execute($query);
    }
    function getAllStudents(){
        $query = "select * from students";
        $rs = get($query);
        return $rs;
    }
    function getStudent($id){
        $query = "select * from students where id = $id";
        $rs = get($query);
        return $rs[0];
    }
    function getdepartment($depart_id){
        $query = "select name from department where depart_id = $depart_id";
        $rs = get($query);
        return $rs[0];
    }
    function getAlldepartments(){
        $query = "select depart_id from department";
        $rs = get($query);
        return $rs;
    }
?>