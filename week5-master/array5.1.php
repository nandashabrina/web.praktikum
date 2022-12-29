<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h2> Multidimensional Array </h2>
            <?php
                $movie = array(
                    array(
                        'judulFilm' => "Avengers: Infinity War",
                        'tahun' =>2018, 
                        'rating' => 8.7,
                    ),
                    array(
                        'judulFilm' => "The Avengers", 
                        'tahun' => 2012, 
                        'rating' => 8.1,
                    ),
                    array(
                        'judulFilm' => "Guardians of the Galaxy", 
                        'tahun' => 2014, 
                        'rating' => 8.1,
                    ),
                    array(
                        'judulFilm' => "Iron Man", 
                        'tahun' => 2008, 
                        'rating' => 7.9,
                    ),
                );
            ?>  
            <table border="1">
                <tr>
                    <td>Judul Film</td>
                    <td>Tahun</td>
                    <td>Rating</td>
                </tr>
            <?php
            foreach ($movie as $m){
            echo "<tr>";
                    echo "<td>". $m['judulFilm'] ."</td>";
                    echo "<td>". $m['judulFilm'] ."</td>";
                    echo "<td>". $m['judulFilm'] ."</td>";
            echo "</tr>";
            }
                ?>
        </table>
    </body>
</html>