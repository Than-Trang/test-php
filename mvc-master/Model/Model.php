<?php 

    class Model{
        
        
        public function Data()
        {
            $mysqli = new mysqli("localhost","root","","dbsinhvien");
            mysql_set_charset($connect,"utf8");
            return "this is data";
        }
    }