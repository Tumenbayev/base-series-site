<?php
namespace App\Widgets;
use Iterator;
use Illuminate\Support\Facades\Route;

class Menu implements Iterator
{
    protected $current;

    protected $pages = [
        'home' => [
            'route' => 'home',
            'title' => 'Главная',
        ],
        'seasons' => [
            'route' => 'seasons',
            'title' => 'Сезоны',
            'submenu' => [
                [
                    'url' => 'season/1',
                    'title' => '1 сезон',
                ],
                [
                    'url' => 'season/2',
                    'title' => '2 сезон',
                ],
            ]
        ],
        'actors' => [
            'route' => 'actors',
            'title' => 'Список актеров',
        ],
        'news' => [
            'route' => 'news',
            'title' => 'Новости',
        ],
    ];

    public function __construct()
    {
        $this->current = Route::currentRouteName();
    }

    public function getMenu()
    {
        return $this->pages;
    }

    /**
     * Возвращает текущею страницу
     *
     * @return mixed|null
     */
    public function current()
    {
        if(!array_key_exists($this->current, $this->pages)){
            return null;
        }

        return $this->pages[$this->current];
    }

    public function next()
    {
        $this->current++;
    }

    public function key()
    {
        if(!isset($this->pages[$this->current])){
            return null;
        }

        return $this->current;
    }

    public function valid()
    {
        return true;
    }

    public function rewind()
    {
        $this->current = 'home';
    }
}