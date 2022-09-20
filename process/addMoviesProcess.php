<?php

    if(isset($_POST['addMovies'])){

        include('../db.php');

        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $realese = $_POST['realese'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];

        $query = mysqli_query($con, "SELECT * FROM movies WHERE name = '$name'") or
        die(mysqli_error($con));
        
        if(mysqli_num_rows($query) == 0){
            $query = mysqli_query($con,
            "INSERT INTO movies(name, genre, realese, season, synopsis)
                VALUES
            ('$name', '$genre', '$realese', '$season', '$synopsis')")
            or die(mysqli_error($con)); 

                if($query){
                    echo
                        '<script>
                        alert("Add Movies Success");
                        window.location = "../page/listMoviesPage.php"
                        </script>';
                }else{
                    echo
                        '<script>
                        alert("Add Movies Failed");
                        </script>';
                }
            }else{
                echo
                '<script>
                    alert("Movie udah ada kak");
                    window.location = "../page/listMoviesPage.php"
                </script>';
            }
         
    }else{
        echo
        '<script>
        window.history.back()
        </script>';
    }
?>