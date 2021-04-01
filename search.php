
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

<body style="background-image: url('movies.jpg');">
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
   
    <div class="container" style="margin-top: 100px;">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row">

            <div class="col-12 col-md-3"></div>
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="send_request.php">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Movie Name</label>
                                <input type="text" class="form-control" name="movie_name" style="margin-top:10px" placeholder="Enter Movie Name" autofocus required>
                            </div>
                            <br>
                            <center>
                            <button type="submit" name="submit" class="btn btn-dark"><i class="fas fa-search"></i>&ensp;Search</button>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4"></div>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>