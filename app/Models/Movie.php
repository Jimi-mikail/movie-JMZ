<?php

namespace App\Models;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Movie extends Model
{
    use HasFactory;

    public static function get_movie($query)
    {
        $client = new Client();
        $client->request('GET', 'https://api.themoviedb.org/3/search/movie', [
            'query' => [
                'api_key' => 'ce31100dc355960c4c9bb8f9b79e2c22',
                'query' => $query,
            ],
        ]);
        return $client;
    }

    public static function get_movie_genre($genre, $page)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/' . $genre, [
            'query' => [
                'api_key' => 'ce31100dc355960c4c9bb8f9b79e2c22',
                'page' => $page,
            ],
        ]);
        $moviesCollection = json_decode($response->getBody()->getContents())->results;
        return $moviesCollection;
    }
    public static function get_movie_genre_query($genre, $page, $query)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.themoviedb.org/3/search/movie', [
            'query' => [
                'api_key' => 'ce31100dc355960c4c9bb8f9b79e2c22',
                'query' => $query,
            ],
        ]);
        $moviesCollection = json_decode($response->getBody()->getContents())->results;
        return $moviesCollection;
    }

    public static function get_film_genre($genre, $page)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.themoviedb.org/3/tv/' . $genre, [
            'query' => [
                'api_key' => 'ce31100dc355960c4c9bb8f9b79e2c22',
                'page' => $page,
            ],
        ]);
        $moviesCollection = json_decode($response->getBody()->getContents())->results;
        return $moviesCollection;
    }

    public static function get_film_genre_query($genre, $page, $query)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://api.themoviedb.org/3/search/film', [
            'query' => [
                'api_key' => 'ce31100dc355960c4c9bb8f9b79e2c22',
                'query' => $query,
            ],
        ]);
        $moviesCollection = json_decode($response->getBody()->getContents())->results;
        return $moviesCollection;
    }

    public static function get_movie_id($query)
    {
        $movie = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI3ODVmZGEyMTU1M2E4ZGE1ZWUwZGZhMjNmMTAzZmJmMCIsInN1YiI6IjY0MTE0MTI4ZmU2YzE4MDBmOWJjZjc4YSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.LE-7QZlsOV9r4TSxtCCx7gK-xfYt1INgjTDbej1Duwg')
            ->get('https://api.themoviedb.org/3/movie/' . $query . '?append_to_response=credits,images,videos')
            ->json();
        return $movie;

    }

    public static function get_film_id($query)
    {
        $movie = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI3ODVmZGEyMTU1M2E4ZGE1ZWUwZGZhMjNmMTAzZmJmMCIsInN1YiI6IjY0MTE0MTI4ZmU2YzE4MDBmOWJjZjc4YSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.LE-7QZlsOV9r4TSxtCCx7gK-xfYt1INgjTDbej1Duwg')
            ->get('https://api.themoviedb.org/3/tv/' . $query . '?append_to_response=credits,images,videos')
            ->json();
        return $movie;

    }

}
