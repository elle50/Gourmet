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
                $rest_image = ($row['rest_image']);


                echo '<div class="row portfolio-container" data-aos="fade-up">';

                echo '<div class="col-lg-4 col-md-6 portfolio-item filter-app">';
                echo "<img src=$rest_image class='img-fluid' alt=''>";
                echo '<div class="portfolio-info">';
                echo "<h4>$rest_name</h4>";
                echo '<p>' . $rest_address . '</p>';
                echo '<button type="submit" name="reserve" value="reserve"><i class="icofont-search"></i></button>
                            
                        </div>
                    </div>
                </div>';
            
        }
    }

    public function cafesearch($name, $address, $genre)
    {
        $sql = "SELECT * FROM cafes WHERE cafe_name LIKE '%" . $name . "%' OR cafe_address LIKE '%" . $address . "%' OR cafe_genre LIKE '%" . $genre . "%'";
        $result = $this->conn->query($sql);

            while ($row = $result->fetch_assoc()) {
                $_SESSION['search_id'] = $row['cafe_id'];
                $cafe_name = $row['cafe_name'];
                $cafe_address = $row['cafe_address'];
                $cafe_image = ($row['cafe_image']);


                echo '<div class="row portfolio-container" data-aos="fade-up">';

                echo '<div class="col-lg-4 col-md-6 portfolio-item filter-app">';
                echo "<img src=$cafe_image class='img-fluid' alt=''>";
                echo '<div class="portfolio-info">';
                echo "<h4>$cafe_name</h4>";
                echo '<p>' . $cafe_address . '</p>
                            
                        </div>
                    </div>
                </div>';
            
        }
    }
}
