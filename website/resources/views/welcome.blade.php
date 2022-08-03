<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Movies Wiki</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Styles -->
    <style>
        :root {
            --main-bg-color: {{$color}};
        }

        html,
        body {
            background-color: #0B2028;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            text-align: center;
        }

        h1 {
            color: white;
            font-size: 40px;
            padding: 50px;
        }

        p {
            color: white;
        }

        .row {
            margin: 0 auto;
        }

        .card {
            border: none;
            margin-bottom: 15px;
            width: 18em;
            height: auto;
            background-color: var(--main-bg-color);
        }

        .card-title {
            color: #aad2b1;
            font-size: 20px;
        }

        .input-group {
            width: 500px;
            margin: auto;
            padding-bottom: 30px;
        }

        .btn .btn-primary {
            width: 25px;
        }
    </style>
</head>

<body>
    <h1><b>Movies Wiki</b></h1>

    <!-- Search functionality -->
    <form action="{{URL::to('/search')}}" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="keywords" placeholder="Type a colour e.g green, red, yellow" autocomplete="off"> <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">
                    Search
                </button>
            </span>
        </div>
    </form>
    <p>{{$message}}</p>

    <!-- Display movies in card style -->
    <div class="row">
        @foreach ($movie_detail as $movie)
        <div class="col-sm-3">
            <a href="{{ route('movies.about', ['id' => $movie->id]) }}">
                <div class="card">
                    <img src="https://image.tmdb.org/t/p/w500/{{$movie->image}}" class="card-img-top" alt="{{$movie->title}}" style="width: auto; height: 25em">
                    <div class="card-body">
                        <p class="card-title">{{$movie->title}}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</body>

</html>