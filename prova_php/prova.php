<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova XAMPP</title>
</head>
<body>
    <?php
        echo '<p>Hola mon!</p>';
        echo '<br>';
        
            $username = "root";
            $password = "";
            $database = "mysql";
            $mysqli = new mysqli("localhost", $username, $password, $database);

            $query = "SELECT * FROM david";
            echo "<b> Sortida de la base de dades </b> <br> <br>";

            if ($result = $mysqli->query($query)) {
                echo '<table class="taula">';
                echo '<tr><td><b>ID</b></td><td><b>PES</b></td><td><b>ALÇADA</b></td><td><b>POBLACIÓ</b></td></tr>';
                while ($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                    $pes = $row["pes"];
                    $alcada = $row["alcada"];
                    $poblacio = $row["poblacio"];
                    echo '<tr>';
                    echo '<td><b>'.$id.'</b></td>';
                    echo '<td>'.$pes.'</td>';
                    echo '<td>'.$alcada.'</td>';
                    echo '<td>'.$poblacio.'</td>';
                    echo '</tr>';
                   
                }
                echo '</table>';
            
            $result->free();
            }

    ?>
    
</body>
</html>