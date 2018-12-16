<?php
namespace App\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Widgets\Menu as Widget;

class Menu
{
    public function compose(View $view)
    {
        $view->with('menu', (new Widget()));
    }
}