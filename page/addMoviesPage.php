<?php
include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">
    <div class="body d-flex justify-content-between">
        <h4><b>Add Data Movies</b></h4>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <a href="../page/listMoviesPage.php?id='.$data['id'].'" onClick="return confirm ( \'Are you sure want to delete this data?\')"> 
        <i class="fa fa-arrow-left" style="font-size:30px;color:red"></i></a>  
    </div>
        <hr>
        <form action="../process/addMoviesProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputMovies" class="formlabel">Name</label>
                <input class="form-control" id="name" name="name" aria-describedby="movieHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputMovies" class="formlabel">Genre</label>
                <select class="form-select" aria-label="Default select example" name="genre" id="genre">
                        <option value="Comedy">Comedy</option>
                        <option value="Romance">Romance</option>
                        <option value="Horor">Horor</option>

                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputMovies" class="formlabel">Year Release</label>
                <input class="form-control" id="realese" name="realese" aria-describedby="movieHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputMovies" class="formlabel">Season</label>
                <input class="form-control" id="season" name="season" aria-describedby="movieHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputSynopsis" class="formlabel">Synopsis</label>
                <input class="form-control" id="synopsis" name="synopsis" aria-describedby="movieHelp">
            </div>
            <div class="d-grid gap-2">
                <button style="background-color: black" type="submit" class="btn btn-primary" name="addMovies">Save</button>
            </div>
        </form>
</body>

</html>