<?php
include '../component/sidebar.php'
?>
<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px
solid #D40013; boxshadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0,
0.19);">

<div>
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
            <label for="exampleInputMovies" class="formlabel">Release</label>
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
            <button type="submit" class="btn btn-primary" name="addMovies">Add Movie</button>
        </div>
    </p>
    </form>
        </div>
    </div>
        </div>
    </div>