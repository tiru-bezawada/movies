<?php
$movie_name = $_POST['movie_name'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.themoviedb.org/3/search/movie?api_key=b99763c67f88c812779d81b9bc402dd2&query=$movie_name&include_adult=false");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$data = json_decode($response);
// echo "<pre>";
// print_r($data);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Show Time</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link rel="shortcut icon" type="image/x-icon" href=" https://image.shutterstock.com/image-photo/movie-projector-on-dark-background-260nw-753798850.jpg">
    <!-- Bootstrap CSS -->
    <script src="fontawesome/fontawesome.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Show Time</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="upcoming_movies.php">Upcoming Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="top_rated_movie.php">Top Rated Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">Search Movies</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    
    <div class="container">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row" id="myItems">
            <?php
            $i = 19;
            for ($x = 0; $x <= $i; $x++) {
                $release_date = $data->results[$x]->release_date;
                $formatted_created_at = date("M jS, Y", strtotime($release_date));
            ?>
                <div class="col-12 col-md-3">
                    <div class="card" style="margin-bottom:25px">
                        <img class="card-img-top" src="https://image.tmdb.org/t/p/w185/<?php echo $data->results[$x]->poster_path ?>" alt="Movie Poster">
                        <div class="card-body">
                            <h5 class="card-title text-center" style="font-size: 16px;font-weight:bold"><?php echo $data->results[$x]->title ?></h5>
                            <p class="card-text"><i class="fas fa-language" style="color:#1a4780" data-toggle="tooltip" title="Language"></i>&ensp;<?php echo $data->results[$x]->original_language ?>&emsp;
                                <span><i class="fas fa-heart" style="color:red" data-toggle="tooltip" title="Vote"></i>&ensp;<?php echo $data->results[$x]->vote_average ?></span>&emsp;
                                <span><i class="fas fa-calendar-alt" style="color:black;font-size:12px" data-toggle="tooltip" title="Release Date"></i>&ensp;<?php echo $formatted_created_at ?></span>&emsp;
                            </p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
    
</body>

</html>