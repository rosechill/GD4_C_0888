<?php
    session_start();
    if(isset($_GET['id'])){
        include ('../db.php');
        $id = $_GET['id'];
        $show = mysqli_query($con, "SELECT  FROM movies WHERE id='$id'") or
        die(mysqli_error($con));
        if($show){
            echo
            '<script>
            window.location = "../page/editMoviesPage.php"
            </script>';
        }
    }
?>