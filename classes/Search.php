<?php

include 'Databases.php';

class Search extends Databases
{

    public function restsearch($name, $address, $genre, $country)
    {
        $sql = "SELECT * FROM restaurants WHERE rest_name LIKE '%" . $name . "%' OR rest_address LIKE '%" . $address . "%' OR rest_genre LIKE '%" . $genre . "%' OR rest_country LIKE '%" . $country . "%'";
        $result = $this->conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $_SESSION['search_id'] = $row['rest_id'];
            $rest_name = $row['rest_name'];
            $rest_address = $row['rest_address'];
            $rest_image = base64_encode($row['rest_image']);


            echo '<div class="row portfolio-container" data-aos="fade-up">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src=data:base64,' . "$rest_image" . 'class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>' . $rest_name . '</h4>
                            <p>' . $rest_address. '</p>
                            <br>
                        </div>
                    </div>
                </div>';


        }
    }
}
