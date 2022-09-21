<?php
include '../component/sidebar.php';
?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">
    <div class="body d-flex justify-content-between">
        <h4><b>Edit Data Movies</b></h4>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <a href="../page/listMoviesPage.php?id='.$data['id'].'"> 
            <i class="fa fa-arrow-left" style="font-size:30px;color:red"></i></a>  
    </div>
    <hr>

    <?php
        // session_start();
            if(isset($_GET['id'])){
                include ('../db.php');
                $id = $_GET['id'];
                $queryEdit = mysqli_query($con, "SELECT * FROM movies WHERE id='$id'") or
                die(mysqli_error($con));
                $nomor = 1;   
            }else {
                echo
                '<script>

                </script>';
            }
        while($data = mysqli_fetch_array($queryEdit)){
        ?>
            <form action="../process/editMovieProcess.php" method="post"> 
            <div class="mb-3">
                    <label for="exampleInputMovies" class="formlabel">Name</label>
                    <input class="form-control" id="name" name="name" value=" <?php echo $data['name'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputMovies" class="formlabel">Genre</label>
                <select class="form-select" aria-label="Default select example" name="genre" id="genre">
                        <option diasbled value="Selected"><?php echo $data['genre'] ?></option>
                        <option value="Comedy">Comedy</option>
                        <option value="Romance">Romance</option>
                        <option value="Horor">Horor</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputMovies" class="formlabel">Year Release</label>
                <input class="form-control" id="realese" name="realese" value=" <?php echo $data['realese'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputMovies" class="formlabel">Season</label>
                <input class="form-control" id="season" name="season" value=" <?php echo $data['season'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputSynopsis" class="formlabel">Synopsis</label>
                <input class="form-control" id="synopsis" name="synopsis" value=" <?php echo $data['synopsis'] ?>">
            </div>
            <div class="d-grid gap-2">
                <button style="background-color: black" type="submit" class="btn btn-primary" name="editMovies">Save</button>
            </div>  
            </form>
    <?php } ?>
          
</body>

</html>