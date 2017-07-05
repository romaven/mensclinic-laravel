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
                        <form class="clearfix" action="" method="post">
                            {{--{{ csrf_token() }}--}}
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
                                <input type="text" name="message" id="app-message" class="required"
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
                        <h2>Наши услуги<h2>Мы заботимся о вашем здоровье</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <section class="single-feature clearfix col-lg-4 col-md-4 col-sm-6 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3  text-center feature-icon">
                            <i class="fa fa-venus-mars med-icon"></i>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 ">
                            <h5><a href="https://mensclinic.kz/department/urology">Отделение Урологии</a></h5>

                            <p>Описание отделения</p>
                        </div>
                    </div>
                </section>
                <section class="single-feature clearfix col-lg-4 col-md-4 col-sm-6 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3  text-center feature-icon">
                            <i class="fa fa-heartbeat med-icon"></i>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 ">
                            <h5><a href="https://mensclinic.kz/department/cardiology">Отделение Кардиологии</a></h5>

                            <p>Описание отделения</p>
                        </div>
                    </div>
                </section>
                <div class="visible-sm clearfix"></div>
                <section class="single-feature clearfix col-lg-4 col-md-4 col-sm-6 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3  text-center feature-icon">
                            <i class="fa fa-user-md med-icon"></i>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 ">
                            <h5><a href="https://mensclinic.kz/department/therapy">Отделение Терапии</a></h5>

                            <p>Описание отделения</p>
                        </div>
                    </div>
                </section>
                <div class="visible-lg clearfix"></div>
                <div class="visible-md clearfix"></div>
                <section class="single-feature clearfix col-lg-4 col-md-4 col-sm-6 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3  text-center feature-icon">
                            <i class="fa fa-wheelchair med-icon"></i>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 ">
                            <h5><a href="https://mensclinic.kz/department/rheumatology">Отделение Ревматологии</a></h5>

                            <p>Описание отделения</p>
                        </div>
                    </div>
                </section>
                <div class="visible-sm clearfix"></div>
                <section class="single-feature clearfix col-lg-4 col-md-4 col-sm-6 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3  text-center feature-icon">
                            <i class="fa fa-wheelchair med-icon"></i>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 ">
                            <h5><a href="https://mensclinic.kz/department/physiotherapy">Отделение Физиотерапии</a></h5>

                            <p>Описание отделения</p>
                        </div>
                    </div>
                </section>
                <section class="single-feature clearfix col-lg-4 col-md-4 col-sm-6 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3  text-center feature-icon">
                            <i class="fa fa-stethoscope med-icon"></i>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 ">
                            <h5><a href="https://mensclinic.kz/department/lor">Отделение Оториноларингологии</a></h5>

                            <p>Описание отделения</p>
                        </div>
                    </div>
                </section>
                <div class="visible-lg clearfix"></div>
                <div class="visible-md clearfix"></div>
                <section class="single-feature clearfix col-lg-4 col-md-4 col-sm-6 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3  text-center feature-icon">
                            <i class="fa fa-hospital-o med-icon"></i>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 ">
                            <h5><a href="https://mensclinic.kz/department/ultrasound-diagnostics">Отделение УЗД</a></h5>

                            <p>Описание отделения</p>
                        </div>
                    </div>
                </section>
                <section class="single-feature clearfix col-lg-4 col-md-4 col-sm-6 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3  text-center feature-icon">
                            <i class="fa fa-eyedropper med-icon"></i>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 ">
                            <h5><a href="https://mensclinic.kz/department/laboratory">Лаборатория</a></h5>

                            <p>Описание отделения</p>
                        </div>
                    </div>
                </section>
                <div class="visible-sm clearfix"></div>
                <section class="single-feature clearfix col-lg-4 col-md-4 col-sm-6 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3  text-center feature-icon">
                            <i class="fa fa-venus med-icon"></i>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 ">
                            <h5><a href="https://mensclinic.kz/department/gynecology">Отделение Гинекологии</a></h5>

                            <p>Описание отделения</p>
                        </div>
                    </div>
                </section>
                <div class="visible-lg clearfix"></div>
                <div class="visible-md clearfix"></div>
                <section class="single-feature clearfix col-lg-4 col-md-4 col-sm-6 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3  text-center feature-icon">
                            <i class="fa fa-stethoscope med-icon"></i>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 ">
                            <h5><a href="https://mensclinic.kz/department/endocrinology">Отделение Эндокринологии</a>
                            </h5>

                            <p>Описание отделения</p>
                        </div>
                    </div>
                </section>
                <section class="single-feature clearfix col-lg-4 col-md-4 col-sm-6 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3  text-center feature-icon">
                            <i class="fa fa-heartbeat med-icon"></i>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 ">
                            <h5><a href="https://mensclinic.kz/department/neurology">Отделение Неврологии</a></h5>

                            <p>Описание отделения</p>
                        </div>
                    </div>
                </section>
                <div class="visible-sm clearfix"></div>
                <section class="single-feature clearfix col-lg-4 col-md-4 col-sm-6 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3  text-center feature-icon">
                            <i class="fa fa-stethoscope med-icon"></i>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 ">
                            <h5><a href="https://mensclinic.kz/department/functional-diagnostics">Отделение
                                    Функциональной
                                    диагностики</a></h5>

                            <p>Описание отделения</p>
                        </div>
                    </div>
                </section>
                <div class="visible-lg clearfix"></div>
                <div class="visible-md clearfix"></div>
                <section class="single-feature clearfix col-lg-4 col-md-4 col-sm-6 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3  text-center feature-icon">
                            <i class="fa fa-bed med-icon"></i>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 ">
                            <h5><a href="https://mensclinic.kz/department/hirurgiya">Отделение Хирургии (ФГДС)</a></h5>

                            <p>Описание отделения</p>
                        </div>
                    </div>
                </section>
                <section class="single-feature clearfix col-lg-4 col-md-4 col-sm-6 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3  text-center feature-icon">
                            <i class="fa fa-plus-square med-icon"></i>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 ">
                            <h5><a href="https://mensclinic.kz/department/massage">Кабинет Массажа и ЛФК</a></h5>

                            <p>Описание отделения</p>
                        </div>
                    </div>
                </section>
                <section class="single-feature clearfix col-lg-4 col-md-4 col-sm-6 ">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3  text-center feature-icon">
                            <i class="fa fa-plus-square med-icon"></i>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 ">
                            <h5><a href="https://mensclinic.kz/department/flebolog">Отделение флебологии</a></h5>

                            <p>Описание отделения</p>
                        </div>
                    </div>
                </section>

                <div class="visible-lg clearfix"></div>
                <div class="visible-md clearfix"></div>
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
                            <img src="/images/doctors/thumb-{{ $doctor->photo }}"
                                 class="attachment-gallery-post-single wp-post-image"
                                 alt="{{ $doctor->full_name }}"/><br><span class="small">{{ $doctor->specialization }}</span><br>{{ $doctor->full_name }}
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
                        <h2><a href="https://mensclinic.kz/news">Новости</a> <span>нашего медицинского центра</span>
                        </h2>

                        <p>Будь в курсе последних событий</p></div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 ">
                            <article class="common-blog-post hentry animated fadeInRight clearfix">
                                <figure>
                                    <a href="https://mensclinic.kz/news/trening-halilja-shajhatdinova-moe-vysshee-ja-mozhet-vse"
                                       title="Image Post Format">
                                        <img width="732" height="447" src="/images/Medtsentr_345x345.jpg"
                                             class="attachment-blog-post-thumb wp-post-image" alt="news-2"/> </a>
                                </figure>
                                <div class="text-content clearfix">
                                    <h5 class="entry-title"><a
                                                href="https://mensclinic.kz/news/trening-halilja-shajhatdinova-moe-vysshee-ja-mozhet-vse"
                                                rel="bookmark">Тренинг Халиля Шайхатдинова «Мое высшее Я может Все!!!»
                                            29-30 октября 2016 Запишись через сайт и получи скидку 5%</a></h5>

                                    <div class="entry-meta">
                                        <time class="published updated" datetime="2016-09-28T10:55:42+00:00">28 сентября
                                            2016
                                        </time>


                                    </div>
                                    <div class="for-border"></div>
                                    <p>Приглашаем Вас на тренинг "Холодинамика. Мое высшее Я может ВСЕ!!!" в Астане,
                                        который будет проведён мастером холодинамики -Халилем Шайхатдиновым! 29-30
                                        октября 2016</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 ">
                            <article class="common-blog-post hentry animated fadeInRight clearfix">
                                <figure>
                                    <a href="https://mensclinic.kz/news/zdorovyj-muzhchina-zdorovaja-nacija"
                                       title="Image Post Format">
                                        <img width="732" height="447" src="/event/january.jpg"
                                             class="attachment-blog-post-thumb wp-post-image" alt="news-2"/> </a>
                                </figure>
                                <div class="text-content clearfix">
                                    <h5 class="entry-title"><a
                                                href="https://mensclinic.kz/news/zdorovyj-muzhchina-zdorovaja-nacija"
                                                rel="bookmark">Акция! Здоровый мужчина – Здоровая нация!</a></h5>

                                    <div class="entry-meta">
                                        <time class="published updated" datetime="2014-05-10T10:55:42+00:00">22 января
                                            2016
                                        </time>


                                    </div>
                                    <div class="for-border"></div>
                                    <p>С 25.01.16 по 14.02.16год. Скидка 20% </p>
                                </div>
                            </article>
                            <!--                        <a class="read-more" href="/news">Подробнее</a>-->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 ">
                            <article class="common-blog-post hentry animated fadeInRight clearfix">
                                <figure>
                                    <a href="/news" title="Image Post Format">
                                        <img width="732" height="447" src="/event/december.png"
                                             class="attachment-blog-post-thumb wp-post-image" alt="news-2"/> </a>
                                </figure>
                                <div class="text-content clearfix">
                                    <h5 class="entry-title"><a href="/news" rel="bookmark">ЭКГ, ЭХО-сердца, Холтер,
                                            СМАД,
                                            Велоэргометрия</a></h5>

                                    <div class="entry-meta">
                                        <time class="published updated" datetime="2014-05-10T10:55:42+00:00">24 декабря
                                            2015
                                        </time>


                                    </div>
                                    <div class="for-border"></div>
                                    <p>Обследование сердца&hellip; </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection