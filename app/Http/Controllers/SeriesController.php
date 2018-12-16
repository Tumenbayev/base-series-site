<?php
namespace App\Http\Controllers;

use App\Models\Episode;
use Faker\Factory;

class SeriesController extends Controller
{
    public function watchEpisode()
    {
        $faker = Factory::create();
        $faker->addProvider(new \Faker\Provider\Internet($faker));

        $model = new Episode();
        $model->id = 1;
        $model->season_id = 1;
        $model->series_id = 1;
        $model->episode_name = 'Знакомство с Йеннифер';
        $model->original_name = 'The meet with Yennifer';
        $model->description = $faker->realText();
        $model->published_date = '2018-12-15';
        $model->poster         = 'images/withcer-poster.jpg';
        $model->overlay_img    = 'images/episode-poster.jpg';

        return view('show.episode', ['episode' => $model]);
    }
}