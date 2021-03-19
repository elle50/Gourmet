<?php

include 'Databases.php';

class Search extends Databases {

    public function restsearch($name, $address, $genre, $country){
        $sql = "SELECT * FROM restaurans WHERE rest_name LIKE '%".$name."%' OR rest_address LIKE '%".$address."%' OR rest_genre LIKE '%".$genre."%' OR rest_country LIKE '%".$country."%'";
        $result = $this->conn->query($sql);

        if($result->num_rows >= 1){
            $row = $result->fetch_assoc();
            $_SESSION['search_id'] = $row['rest_id'];
            echo $result;
        }else{
            echo "There is none";
        }

    }
}

?>