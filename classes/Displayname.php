<?php

include 'Databases.php';

class Displayname extends Databases {
    
    public function display_name($username){
        $sql = "SELECT * FROM users WHERE user_name = '$username'";
        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            $_SESSION['login_id'] = $row['user_id'];
            $user_name = $row['user_name'];
            echo $user_name;
        }
    }
}