@extends('layouts.app', ['menu' => 'doctors', 'title' => 'Наши специалисты'])

@section('content')
    <div class="banner clearfix"
         style="background-repeat: no-repeat; background-position: center top; background-image: url('/images/contact-logo.jpg'); background-size: cover; min-height: 180px !important;"></div>
    <div class="page-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1 class="entry-title">Наши врачи</h1>
                    <nav class="bread-crumb">
                        <ul class="breadcrumb clearfix">
                            <li><a href="https://mensclinic.kz">Mens Clinic</a><span class="divider"></span></li>
                            <li class="active">врачи</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="doctors-posts doctors-page clearfix">

        <div class="container">
            <div class="row">

                <!-- Filter -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul id="filters">
                        <li class="active"><a href="#" onclick="return false;" data-filter="*">Все отделения</a></li>
                        @foreach($departments as $department)
                            <li><a href="#" onclick="return false;"
                                   data-filter=".{{ $department->url }}">{{ $department->short_name }}</a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="blog-page-single clearfix">
                        <article id="post-33" class=" clearfix post-33 page type-page status-publish hentry">
                            <div class="full-width-contents">
                                <div class="entry-content">
                                    <h2 style="text-align: center;">Врачи
                                        <span>Мужского центра здоровья и долголетия</span></h2>
                                    <p style="text-align: center;">У нас работаю только высококлассные специалисты!</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

            </div>
        </div>

        <div class="container isotope-wrapper text-center">
            <div class="row">
                <div id="isotope-container" class="clearfix">
                    @foreach($doctors as $doctor)
                        <div class="isotope-item {{ $doctor->department->url }} primary-health-care col-lg-3 col-md-4 col-sm-6 ">
                            <article class="common-doctor clearfix hentry">
                                <figure>
                                    <a href="/doctor/{{ $doctor->url }}"
                                       title="{{ $doctor->full_name }}">
                                        <img src="/images/doctors/{{ $doctor->photo }}"
                                             class="attachment-gallery-post-single wp-post-image"
                                             alt="{{ $doctor->full_name }}"/> </a>
                                </figure>
                                <div class="text-content">
                                    <h5 class="entry-title"><a
                                                href="/doctor/{{ $doctor->url }}">{{ $doctor->full_name }}</a></h5>
                                    <div class="doctor-departments"><a href="/department/{{ $doctor->department->url }}"
                                                                       rel="tag">{{ $doctor->department->name }}</a></div>
                                    <p class="entry-summary">{{ $doctor->specialization }}<br>
                                    Стаж более {{ (date('Y') - $doctor->experience) }} лет</p>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
