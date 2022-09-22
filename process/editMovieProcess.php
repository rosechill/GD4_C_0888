<?php
        

       

        // $query = mysqli_query("UPDATE movies SET name='$name', genre='$genre', season='$season', synopsis='$synopsis' WHERE id='$id'");
        // $query = mysqli_query($con, "UPDATE movies(name, genre, realese, season, synopsis) SET ('$name', '$genre', '$realese', '$season', '$synopsis')");
        // $query = mysqli_query("UPDATE movies SET name='$name', genre='$genre', season='$season', synopsis='$synopsis' WHERE id='$id'");
        // $query = mysqli_query($con,
        //     "UPDATE movies(name, genre, realese, season, synopsis)
        //         VALUES
        //     ('$name', '$genre', '$realese', '$season', '$synopsis')");

        // $sql = "UPDATE movies SET name='$name', genre='$genre', season='$season', synopsis='$synopsis' WHERE id='$id'";

        // session_start();
        if(isset($_POST['editMovies'])){
            include ('../db.php');

            
            $name = $_POST['name'];
            $genre = $_POST['genre'];
            $realese = $_POST['realese'];
            $season = $_POST['season'];
            $synopsis = $_POST['synopsis'];
            
            $id = $_GET['id'];
            $query = mysqli_query($con, "UPDATE FROM movies SET name='$name', genre='$genre', season='$season', synopsis='$synopsis' WHERE id='$id'");
            if($query){
                echo
                '<script>
                alert("asd Success"); window.location = "../page/listMoviesPage.php"
                </script>';
            }else{
                echo
                '<script>
                alert("asd Failed"); window.location = "../page/listMoviesPage.php"
                </script>';
            }
        }else{
            echo
            '<script>
            alert("ga masuk");window.history.back()
            </script>';
        }
?>