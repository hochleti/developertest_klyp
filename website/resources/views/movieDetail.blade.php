<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Movie Details</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #0B2028;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 80vh;
        }

        img {
            float: left;
            padding-right: 20px;
        }

        h1 {
            color: white;
            font-size: 40px;
            padding-bottom: 50px;
        }

        .content {
            color: white;
            font-size: 17px;
        }

        .details {
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;
            width: 800px;
        }
    </style>
</head>

<body>
    <!-- Display movie details -->
    <div class="details">
        <img src="https://image.tmdb.org/t/p/original/{{$movie->image}}" alt="{{$movie->title}}" style="width: auto; height: 25em">
        <div class="content">
            <h1><b>{{$movie->title}}</b></h1>
            <p>Released Date: {{$movie->year}}</p>
            <p>{{$movie->overview}}}</p>
        </div>
    </div>
</body>

</html>