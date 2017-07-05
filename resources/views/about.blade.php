@extends('layouts.app', ['menu' => 'about'])

@section('content')
    <div class="banner clearfix"
         style="background-repeat: no-repeat; background-position: center top; background-image: url('/images/contact-logo.jpg'); background-size: cover; min-height: 180px !important;"></div>
    <div class="page-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1 class="entry-title">О клинике</h1>
                    <nav class="bread-crumb">
                        <ul class="breadcrumb clearfix">
                            <li><a href="{{ route('site.main') }}">Mens Clinic</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="blog-page default-page service-page clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 ">
                    <div class="blog-page-single clearfix">
                        <article id="post-104"
                                 class="clearfix post-104 service type-service status-publish has-post-thumbnail hentry">
                            <div class="page-contents">
                                <div class="entry-content">
                                    <p>
                                    <h1>О Центре</h1>
                                    <p>
                                        Товарищество с ограниченной ответственностью «Мужской центр здоровья и
                                        долголетия»
                                        оказывает квалифицированную лицензированную медицинскую помощь. Центр был создан
                                        18
                                        октября 2011 года (лицензия № 010587DZ).
                                    </p>
                                    <p>
                                        Медицинские услуги оказываются в удобное для Вас время, с учетом индивидуального
                                        графика
                                        работы. При необходимости возможен вызов врача или другого специалиста на дом.
                                        Каждый
                                        человек, обратившийся за помощью, встречает доброжелательное отношение и
                                        чуткость со
                                        стороны персонала, а специально разработанная система приемов позволяет
                                        исключить
                                        очереди и обеспечить комфорт при посещении центра.
                                    </p>
                                    <p>
                                        Основные направления деятельности Центра: урология-андрология, кардиология,
                                        эндокринология, гинекология, дерматовенерология, оториноларингология и др.
                                        Наши врачи – эксперты в своей области медицинских знаний. Принципы работы нашего
                                        Центра:
                                        индивидуальный подход, максимум внимания, профессионализм и высокие стандарты
                                        лечения.
                                        Все кабинеты Центра оснащены диагностическим и лечебным оборудованием последнего
                                        поколения.
                                    </p>
                                    <p>
                                        Преимущества нашего Центра – это:
                                    <ul>
                                        <li>качество выше, чем цена;</li>
                                        <li>комплексное лечение пациентов в условиях одного учреждения;</li>
                                        <li>высококвалифицированный врачебный состав;</li>
                                        <li>доброжелательный подход сотрудников Центра;</li>
                                        <li>широкий спектр диагностических и лабораторных услуг.</li>
                                    </ul>
                                    Общая идея Центра - продление молодости, улучшение качества жизни, а также
                                    сохранение
                                    генофонда нашей страны и долголетие семейной пары.
                                    </p>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection