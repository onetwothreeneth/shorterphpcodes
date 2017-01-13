<?php header("Access-Control-Allow-Origin: *");
include 'model.php';

class db {

    public static function clean($string){
        global $conn;
        return $conn->escape_string($string);
    }

    public static function looper($sql){
        global $conn;
        $q = $conn->query($sql);
        $n = mysqli_num_rows($q);
        $rs=array();
        if($n<=0){
            return 0;
        } else {
            while($r = mysqli_fetch_object($q)){
                $rs[] = $r;
            } return $rs;
        }
        //foreach ($asd as $v){ }
    }

    public static function get($col,$sql){
        global $conn;
        $q = $conn->query($sql);
        $n = mysqli_num_rows($q);
        if($n<=0){
            return 0;
        } else {
            while($r = mysqli_fetch_array($q)){
                return $r[$col];
            }
        }
    }

    public static function json($sql){
        global $conn;
        $q = $conn->query($sql);
        $n = mysqli_num_rows($q);
        $rs=array();
        if($n<=0){
            return 0;
        } else {
            while($r = mysqli_fetch_array($q)){
                $rs[] = $r;
            } return json_encode($rs);
        }
    }

    public static function counts($sql){
        global $conn;
        $q = $conn->query($sql);
        return $n = mysqli_num_rows($q);
    }

    public static function udi($sql){
        global $conn;
        $q = $conn->query($sql);
        if($q){
            return true;
        } else {
            return false;
        }
    }

    public static function redirect($url){
        global $conn;
        return "<script>document.location.href = '$url';</script>";
    }

    public static function out(){
        @$role = $_SESSION['role'];
        @$id = $_SESSION['admin_id'];
        session_unset();
        session_destroy();
    }


}
