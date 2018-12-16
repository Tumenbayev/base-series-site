<div class="menu-area">
    <div class="responsive-menu"></div>
    <div class="mainmenu">
        <ul id="primary-menu">
            @foreach ($menu->getMenu() as $item)
                <li>
                    <a @if($menu->current()['route'] == $item['route']) class="active" @endif
                        href="{{ route($item['route']) }}">
                        {{ $item['title'] }}
                        @isset($item['submenu']) <i class="icofont icofont-simple-down"></i>@endisset
                    </a>
                    @isset($item['submenu'])
                        <ul>
                            @foreach($item['submenu'] as $item)
                                <li>
                                    <a href="{{ url($item['url']) }}">{{ $item['title'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endisset
                </li>
            @endforeach
        </ul>
    </div>
</div>