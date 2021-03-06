@extends('layouts.app', ['menu' => 'main'])

@section('content')
    <div class="home-slider clearfix">
        <div class="flexslider loading">
            <ul class="slides">
                <li>
                    <img src="/images/slide-one.jpg" class="gallery-post-single"
                         alt=""/>
                </li>
                <li>
                    <img src="/images/slide-two.jpg" class="gallery-post-single"
                         alt=""/>

                    <div class="content-wrapper clearfix">
                        <div class="container">
                            <div class="slide-content clearfix ">
                                <h1 style="color: #fff">Мы заботимся о Вас и о Вашем здоровье</h1>

                                <p style="color: #fff">Все виды анализов!</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="/images/slide-three.jpg" class="gallery-post-single"
                         alt=""/>

                    <div class="content-wrapper clearfix">
                        <div class="container">
                            <div class="slide-content clearfix ">
                                <h1>Современное оборудование</h1>

                                <p>Только лучшая медицинская техника!</p>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="/images/slide-six.jpg" class="gallery-post-single"
                         alt=""/>
                </li>
                <li>
                    <img src="/images/slide-seven.jpg" class="gallery-post-single"
                         alt=""/>
                </li>
                <li>
                    <img src="/images/slide-eight.jpg" class="gallery-post-single"
                         alt=""/>
                </li>
                <li>
                    <img src="/images/slide-nine.jpg" class="gallery-post-single"
                         alt=""/>
                </li>
                <li>
                    <img src="/images/slide-ten.jpg" class="gallery-post-single"
                         alt=""/>
                </li>
                <li>
                    <img src="/images/slide-eleven.jpg" class="gallery-post-single"
                         alt=""/>
                </li>
                <li>
                    <img src="/images/slide-tvelve.jpg" class="gallery-post-single"
                         alt=""/>
                </li>
                <li>
                    <img src="/images/slide-thirteen.jpg" class="gallery-post-single"
                         alt=""/>
                </li>
            </ul>
        </div>
        <div class="appointment clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6  ">
                        <span class="btn make-appoint">Запишись на прием и получи скидку 5% <i
                                    class="fa fa-caret-down"></i></span>
                    </div>
                </div>
                <div class="clearfix">

                    <div class="appointment-form clearfix animated">
                        <form class="clearfix" action="{{ route('appointment') }}" method="post">
                            {{ csrf_field() }}
                            <div class="col-lg-4 col-md-4 col-sm-6  common">
                                <input type="text" name="name" id="app-name" class="required" placeholder="Имя"/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6  common">
                                <input type="text" name="number" id="app-number" placeholder="Телефон"/>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6  common">
                                <input type="text" name="date" id="datepicker" placeholder="Дата приема"/>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-10 common">
                                <input type="text" name="department" id="app-message" class="required"
                                       placeholder="Отделение или врач"/>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 common">
                                <input type="submit" id="submit_button" name="Submit" class="btn" value="ЗАПИСАТЬСЯ"
                                       data-target=".bs-example-modal-sm"/>
                                <input type="hidden" name="action" value="make_appointment">
                            </div>
                        </form>
                    </div>

                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
                         aria-labelledby="mySmallModalLabel">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                ...
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="features-var-three clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="slogan-section clearfix">
                        <h2>Мы заботимся о вашем здоровье</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($departments as $department)
                    <section class="single-feature clearfix col-lg-4 col-md-4 col-sm-6 ">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3  text-center feature-icon">
                                <i class="fa fa-stethoscope med-icon"></i>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 ">
                                <h5>
                                    <a href="{{ route('department', ['url' => $department->url]) }}">{{ $department->name }}</a>
                                </h5>

                                <p>{{ $department->short }}</p>
                            </div>
                        </div>
                    </section>
                    <div class="visible-sm clearfix"></div>
                    @if($loop->iteration % 2 == 0)
                        <div class="visible-sm clearfix"></div>
                    @endif
                    @if($loop->iteration % 3 == 0)
                        <div class="visible-lg clearfix"></div>
                        <div class="visible-md clearfix"></div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="home-doctors  clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="slogan-section animated fadeInUp clearfix">
                        <h2>Наши <span>врачи</span></h2>
                        <p>Только лучшие специалисты своего дела.</p></div>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel">
                    @foreach($doctors as $doctor)
                        <div>&nbsp;
                            <img src="/images/doctors/{{ $doctor->photo }}"
                                 class="attachment-gallery-post-single wp-post-image"
                                 alt="{{ $doctor->full_name }}"/><br><span
                                    class="small">{{ $doctor->specialization }}</span><br>{{ $doctor->full_name }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="home-blog text-center clearfix">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="slogan-section animated fadeInUp clearfix">
                        <h2><a href="https://mensclinic.kz/news">Публикации</a> <span>нашего медицинского центра</span>
                        </h2>

                        <p>Будь в курсе последних событий</p></div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 ">
                            <article class="hentry animated fadeInRight clearfix">
                                <figure>
                                    <h3><a href="{{ route('news') }}" title="Новости">Новости</a></h3>
                                </figure>
                                @foreach($news as $item)
                                    <div class="text-content clearfix">
                                        <div class="col-lg-12 text-left">
                                            <div class="entry-meta">
                                                <time class="published updated" datetime="{{ $item->created_at }}">
                                                    {{ date('d.m.Y', strtotime($item->created_at)) }}
                                                </time>
                                            </div>
                                            <h6 class="entry-title">
                                                <a href="{{ route('news.read', ['url' => $item->url]) }}">{{ $item->title }}</a>
                                            </h6>
                                        </div>
                                    </div>
                                @endforeach
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 ">
                            <article class="hentry animated fadeInRight clearfix">
                                <figure>
                                    <h3><a href="{{ route('articles') }}" title="Статьи">Статьи</a></h3>
                                </figure>
                                @foreach($articles as $article)
                                    <div class="text-content clearfix">
                                        <div class="col-lg-12 text-left">
                                            <div class="entry-meta">
                                                <time class="published updated" datetime="{{ $article->created_at }}">
                                                    {{ date('d.m.Y', strtotime($article->created_at)) }}
                                                </time>
                                            </div>
                                            <h6 class="entry-title">
                                                <a href="{{ route('article.read', ['url' => $article->url]) }}">{{ $article->title }}</a>
                                            </h6>
                                        </div>
                                    </div>
                                @endforeach
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 ">
                            <article class="hentry animated fadeInRight clearfix">
                                <figure>
                                    <h3><a href="{{ route('videos') }}" title="Видео">Видео</a></h3>
                                </figure>
                                @foreach($videos as $video)
                                    <div class="text-content clearfix">
                                        <div class="col-lg-12 text-left">
                                            <div class="entry-meta">
                                                <time class="published updated" datetime="{{ $video->created_at }}">
                                                    {{ date('d.m.Y', strtotime($video->created_at)) }}
                                                </time>
                                            </div>
                                            <h6 class="entry-title">
                                                <a href="{{ route('video.read', ['url' => $video->url]) }}">{{ $video->title }}</a>
                                            </h6>
                                        </div>
                                    </div>
                                @endforeach
                            </article>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection