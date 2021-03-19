<?php

include 'Databases.php';

class Search extends Databases {

    public function restsearch($name, $address, $genre, $country){
        $sql = "SELECT * FROM restaurans WHERE rest_name LIKE '%".$name."%' OR rest_address LIKE '%".$address."%' OR rest_genre LIKE '%".$genre."%' OR rest_country LIKE '%".$country."%'";
        $result = $this->conn->query($sql);

        while($result->num_rows >= 0){
            $row = $result->fetch_assoc();
            $_SESSION['search_id'] = $row['rest_id'];

            $rest_name = $row['rest_name'];
            $rest_address = $row['rest_address'];
            $rest_image = $row['rest_image'];

            echo $rest_name;
            echo $rest_address;
            echo $rest_image;
        }

    }
}

?>