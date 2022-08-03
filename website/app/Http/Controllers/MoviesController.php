<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class MoviesController extends Controller
{

    public function index()
    {
        $movie_details = DB::select('select * from movies');
        return view(
            'welcome',
            ['movie_detail' => $movie_details,]
        )->with('color', 'transparent')->withMessage('');
    }

    public function show()
    {
        $keyword = Request::get('keywords');
        $movie_detail = DB::table('movies')->where('title', 'like', '%' . $keyword . '%')->get();
        if (count($movie_detail) > 0)
            return view('welcome',   [
                'movie_detail' => $movie_detail,
            ])->with('color', $keyword)->withMessage('');
        else
            return view('welcome',   [
                'movie_detail' => $movie_detail,
            ])->with('color', $keyword)->withMessage('No Details found. Try to search again !');
    }

    public function about($id)
    {
        $movie =  DB::table('movies')->find($id);
        return view('movieDetail')->with('movie', $movie);
    }
}
