@extends('layouts.app', ['menu' => 'contact'])

@section('content')
    <div class="banner clearfix"
         style="background-repeat: no-repeat; background-position: center top; background-image: url('/images/contact-logo.jpg'); background-size: cover; min-height: 180px !important;"></div>
    <div class="page-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1 class="entry-title">Контакты</h1>
                    <nav class="bread-crumb">
                        <ul class="breadcrumb clearfix">
                            <li><a href="{{ route('site.main') }}">MensClinic</a><span
                                        class="divider"></span></li>
                            <li class="active">контакты</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="blog-page-single clearfix">
                        <article id="post-177" class=" clearfix post-177 page type-page status-publish hentry">
                            <div class="full-width-contents">
                                <div class="entry-content">
                                    <h2>Оставьте нам сообщение</h2>

                                    <p>Мы будем рады вашим отзывам<br>
                                        а так же с удовольствием ответим на все ваши вопросы</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-5 col-md-5 col-sm-6 ">
                    <form id="contact_form" class="contact-form"
                          action="/" method="post">
                        <div class="row">

                            <div class="col-sm-12">
                                <input type="text" name="name" id="name" class="required" placeholder="Ваше имя"
                                       title="* Введите ваше имя">
                            </div>

                            <div class="col-sm-12">
                                <input type="text" name="email" id="email" class="required email"
                                       placeholder="Email" title="* Некорректный email">
                            </div>

                            <div class="col-sm-12">
                                <input type="text" name="number" id="number" placeholder="Телефон">
                            </div>

                            <div class="col-sm-12">
                                <input type="hidden" name="action" value="send_message"/>
                                <input type="hidden" name="nonce" value="7a782fc30f"/>
                                <textarea name="message" id="message" class="required" cols="30" rows="5"
                                          placeholder="Сообщение" title="* Введите сообщение"></textarea>
                            </div>


                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <input id="contact-form-submit" type="submit" value="ОТПРАВИТЬ">
                                <div id="error-container"></div>
                                <div id="response-container"></div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6  col-lg-offset-1 col-md-offset-1">
                    <div class="contact-sidebar clearfix">
                        <article class="address-area clearfix">
                            <h2><span>Mens Clinic</span></h2>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <address>Казахстан, г. Астана
                                        ул. Егемен Казахстан 3/5
                                    </address>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <p>
                                        <strong>Телефон :</strong>+7 (7172) 37 50 55
                                    </p>
                                    <p>
                                        <strong>Телефон :</strong>+7 (701) 888 5416
                                    </p>
                                    <p>
                                        <strong>Email :</strong> <a href="mailto:info@mensclinic.kz">info@mensclinic
                                            .kz</a>
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="social-icon clearfix">
                            <h5><span>Время работы</span></h5>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <address>
                                        <strong>Понедельник - пятница</strong> <br>
                                        <strong>с 8.00 до 20.00 </strong><br>
                                        <strong>Суббота</strong> <br>
                                        <strong>с 9.00 до 15.00</strong> <br>

                                    </address>
                                </div>
                            </div>
                        </article>
                        <article class="social-icon clearfix">
                            <h5><span>Social :</span></h5>
                            <ul class="clearfix">
                                <li><a target="_blank" href="https://twitter.com/mensclinickz"><i
                                                class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://www.facebook.com/mensclinic.kz"><i
                                                class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank"
                                       href="https://plus.google.com/u/4/103258812162843394934/about?hl=ru"><i
                                                class="fa fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="https://vk.com/mensclinic"><i class="fa fa-vk"></i></a>
                                </li>
                                <li><a target="_blank"
                                       href="https://www.youtube.com/mensclinickz"><i
                                                class="fa fa-youtube"></i></a></li>
                            </ul>
                        </article>
                        <article class="social-icon clearfix">
                            <h5><span>Автобусные маршруты :</span></h5>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <address>
                                        <strong>остановка Улица Бейсекбаева</strong> <br>
                                        <strong>Маршрутки: </strong>106, 129 <br>
                                        <strong>Автобусы: </strong>22, 40, 8, 9 <br><br>
                                        <strong>остановка Торгово-экономический колледж</strong> <br>
                                        <strong>Маршрутки: </strong>129 <br>
                                        <strong>Автобусы: </strong>104, 16, 30, 39, 9 <br><br>
                                        <strong>остановка Микрорайон Алатау</strong> <br>
                                        <strong>Маршрутки: </strong>129 <br>
                                        <strong>Автобусы: </strong>19, 20, 24, 33 <br><br>
                                        <strong>остановка Жилой комплекс "Хан Тенгри"</strong> <br>
                                        <strong>Маршрутки: </strong>106 <br>
                                        <strong>Автобусы: </strong>22, 40, 8 <br>
                                    </address>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection