<?php

include 'Databases.php';

class Gourmet_user extends Databases {

    public function signup($username, $password){
        $sql = "INSERT INTO users(user_name,user_password)VALUES('$username', '$password')";
        $stt = $this->conn->prepare($sql);
        //$stt->bind_param(':user_name', $username);
        //$stt->bind_param(':user_password', $password);
        //$stt->execute();
        $result = $this->conn->query($sql);

        if($result == TRUE){
            header("Location: ../../../Gourmet/index.html");
        }else{
            die('ERROR: '.$this->conn->error);
        }
    }

    public function login_user($username, $password){
        $sql = "SELECT * FROM users WHERE user_name = '$username' AND user_password = '$password'";
        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            $_SESSION['login_id'] = $row['user_id'];
            header("Location: ../../../Gourmet/member.php");
        }else{
            echo "<font color=red>Username or Password is Incorrect</font>";
        }

        // return print_r($result->num_rows);


        // $stmt = $this->conn->prepare($sql);
        // if($stmt==false){
        //   header("Location: ../../../Gourmet/login-form-04/login-form-04/index.php");
        // } else {
        //     $stmt->bind_param(':user_name', $username);
        //     $stmt->bind_param(':user_password', $password);
        //     $stmt->execute();
        //     while($row=$stmt->fetch()){
        //         $result['user_id'] = $row['user_id'];
        //         $result['user_name'] = $row['user_name'];
        //         $result['user_password'] = $row['user_password'];
        //     }
        //     header("Location: ../../../Gourmet/index.html");
        // }
    }  

    //login認証
    function authCheck($username, $password){
        $sql = "SELECT * FROM users WHERE user_name = :user_name AND user_password = :user_password";
        $stt = $this->conn->prepare($sql);
        $stt->bind_param(':user_name', $username);
        $stt->bind_param(':user_password', $password);
        $stt->execute();
        while($row=$stt->fetch()){
            $result['user_id'] = $row['user_id'];
            $result['user_name'] = $row['user_name'];
            $result['user_password'] = $row['user_password'];
        }
        if(isset($result)){
            return $result;
        }   
    }

    public function display_name($username){
        $sql = "SELECT * FROM users WHERE user_name = '$username'";
        $result = $this->conn->query($sql);

        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            $_SESSION['login_id'] = $row['user_id'];
            echo $username;
        }
    }
}

?>