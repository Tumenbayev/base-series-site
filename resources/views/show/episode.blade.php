@extends('layouts.base')

@section('title', 'Страница серии')

@section('overlay-area')
    <!-- breadcrumb area start -->
    <section class="breadcrumb-area" style="background-image: url({{ $episode->overlay_img }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-content">
                        <h1>{{ $episode->episode_name }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- breadcrumb area end -->
@endsection

@section('content')
    <!-- transformers area start -->
    <section class="transformers-area">
        <div class="container">
            <div class="transformers-box">
                <div class="row flexbox-center">
                    <div class="col-lg-5 text-lg-left text-center">
                        <div class="transformers-content">
                            <img src="{{ asset($episode->poster) }}" alt="about" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="transformers-content">
                            <h2>Ведьмак {{ $episode->season_id }} сезон {{ $episode->series_id }} серия</h2>
                            <p>{{ $episode->episode_name }}, {{ $episode->original_name }}</p>
                            <ul>
                                <li>
                                    <div class="transformers-left">
                                        Сезон:
                                    </div>
                                    <div class="transformers-right">
                                        {{ $episode->season_id }}
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Серия:
                                    </div>
                                    <div class="transformers-right">
                                        {{ $episode->series_id }}
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Дата выхода:
                                    </div>
                                    <div class="transformers-right">
                                        {{ $episode->published_date }}
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Озвучка:
                                    </div>
                                    <div class="transformers-right">
                                        English, Russian
                                    </div>
                                </li>
                                <li>
                                    <div class="transformers-left">
                                        Share:
                                    </div>
                                    <div class="transformers-right">
                                        <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                        <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                        <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                                        <a href="#"><i class="icofont icofont-youtube-play"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <a href="#" class="theme-btn"><i class="icofont icofont-ticket"></i> Смотреть онлайн</a>
            </div>
        </div>
    </section><!-- transformers area end -->
    <!-- details area start -->
    <section class="details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="details-content">
                        <div class="details-overview">
                            <h2>Описание</h2>
                            <p>{{ $episode->description }}</p>
                        </div>
                        <div class="details-overview">
                            <div class="container">
                                <video width="800" controls crossorigin playsinline poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
                                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" size="576">
                                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" size="720">
                                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" size="1080">

                                    <!-- Caption files -->
                                    <track kind="captions" label="English" srclang="en" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt"
                                           default>
                                    <track kind="captions" label="Français" srclang="fr" src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">
                                </video>
                            </div>
                            <!-- Plyr resources and browser polyfills are specified in the pen settings -->
                        </div>
                        <div class="details-reply">
                            <h2>Leave a Reply</h2>
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="select-container">
                                            <input type="text" placeholder="Name"/>
                                            <i class="icofont icofont-ui-user"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="select-container">
                                            <input type="text" placeholder="Email"/>
                                            <i class="icofont icofont-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="select-container">
                                            <input type="text" placeholder="Phone"/>
                                            <i class="icofont icofont-phone"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="textarea-container">
                                            <textarea placeholder="Type Here Message"></textarea>
                                            <button><i class="icofont icofont-send-mail"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="details-comment">
                            <a class="theme-btn theme-btn2" href="#">Post Comment</a>
                            <p>You may use these HTML tags and attributes: You may use these HTML tags and attributes: You may use these HTML tags and attributes: </p>
                        </div>
                        <div class="details-thumb">
                            <div class="details-thumb-prev">
                                <div class="thumb-icon">
                                    <i class="icofont icofont-simple-left"></i>
                                </div>
                                <div class="thumb-text">
                                    <h4>Previous Post</h4>
                                    <p>Standard Post With Gallery</p>
                                </div>
                            </div>
                            <div class="details-thumb-next">
                                <div class="thumb-text">
                                    <h4>Next Post</h4>
                                    <p>Standard Post With Preview Image</p>
                                </div>
                                <div class="thumb-icon">
                                    <i class="icofont icofont-simple-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center text-lg-left">
                    <div class="portfolio-sidebar">
                        <img src="{{ asset('images/sidebar/sidebar1.png') }}" alt="sidebar" />
                        <img src="{{ asset('images/sidebar/sidebar2.png') }}" alt="sidebar" />
                        <img src="{{ asset('images/sidebar/sidebar4.png') }}" alt="sidebar" />
                    </div>
                </div>
            </div>
        </div>
    </section><!-- details area end -->
@endsection
