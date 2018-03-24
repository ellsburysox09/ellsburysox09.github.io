<?php
        $servername = "162.241.217.12";
        $username = "nuinstig_goat";
        $password = "kzzgBq_o]uVF";
        $database = "nuinstig_goats";
        $port = "3306";
        
        $conn = mysqli_connect($servername, $username, $password, $database, $port);
        
        if(!$conn){
                die("Connection Failed: " . mysqli_connect_error());
        }
        else {
                echo "<p>Connection succeeded</p>";
        }
        
        $sql = "SELECT * FROM `location`";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0){
                while ($row = $result->fetch_assoc()){
                        echo "<p>". row["location_id"] . ", " . row["plant_type"] . "</p>";
                }
        }
?>