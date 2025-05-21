<?php
include "db.php";
include "function.php";
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokedex - by Valentijn </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                <ol class="breadcrumb fs-2">
                    <li class="breadcrumb-item"><a href="http://localhost/pokedex/?">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
        </div>
            <div class="col-md-3">

            </div>
            </div>
    <div class="row">
        <p class="fs-1">Welke Starter Is Het Best?</p>
    </div>
    <div class="row">
        <div class="col-3">
            <div class="card" style="width: 15rem;">
                <img src="img/bulbasaur.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Bulbasuar <span class="badge rounded-pill text-bg-success">Grass/Poison</span></h5>
                    <p class="card-text">Verander later naar groen/paars voor de dual types</p>
                    <select class="form-select" aria-label="Default select example"\>
                        <option selected> Bulbasaur</option>
                        <option value="1">Ivysaur</option>
                        <option value="2">Venusaur</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="img/charmander.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Charmander <span class="badge rounded-pill text-bg-danger">Fire</span></h5>
                        <select class="form-select" aria-label="Default select example">
                            <option selected> Charmander</option>
                            <option value="1">Charmeleon</option>
                            <option value="2">Charazard</option>
                        </select>
                    </div>
                </div>
        </div>
                <div class="col-3">
                    <div class="card" style="width: 15rem;">
                        <img src="img/squirtle.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Squirtle <span class="badge rounded-pill text-bg-primary">Water</span></h5>
                            <select class="form-select" aria-label="Default select example">
                                <option selected> Squirtle</option>
                                <option value="1">Wartortle</option>
                                <option value="2">Blastoise</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <form>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Reacties</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                <div id="Feedback" class="form-text">Stuur je feedback!</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Opslaan</button>
                        </form>
                    </div>

                </div>
            </div>


            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/main.js"></script>
</body>
</html>
