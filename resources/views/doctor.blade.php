@extends('layouts.app', ['menu' => 'doctors', 'title' => $doctor->full_name])

@section('content')
    <!--<div class="banner clearfix" style="background-repeat: no-repeat; background-position: center top; background-image: url('/images/kutenko-irina-vladimirovna.jpg'); background-size: cover;"></div>-->
    <div class=" page-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2>Доктор</h2>
                    <nav class="bread-crumb">
                        <ul class="breadcrumb clearfix">
                            <li><a href="{{ route('site.main') }}">Mens Clinic</a><span class="divider"></span></li>
                            <li class="active">{{ $doctor->full_name }}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="doctors-posts clearfix">

        <article id="post-46"
                 class="doctors-single clearfix post-46 doctor type-doctor status-publish has-post-thumbnail hentry department-cardiac-clinic department-primary-health-care">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-5 ">
                        <div class="entry-meta common clearfix">
                            <figure>
                                <a class="swipebox" href="/images/doctors/thumb-{{ $doctor->photo }}"
                                   title="{{ $doctor->full_name }}">
                                    <img width="670" height="500" src="/images/doctors/{{ $doctor->photo }}"
                                         class="attachment-gallery-post-single wp-post-image" alt="doctor-2"/> </a>
                            </figure>
                            <h5>{{ $doctor->full_name }}</h5>
                            <div class="doctor-departments"><a href="#" rel="tag">{{ $doctor->department->name }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-7 ">
                        <div class="side-content clearfix">
                            <header class="top-area clearfix entry-header">
                                <h1 class="entry-title">{{ $doctor->full_name }}</h1>
                            </header>
                            <div class="entry-content">
                                <p>
                                <h3>{{ $doctor->short }}</h3>
                                <p>Стаж работы более {{ (date('Y') - $doctor->experience) }} лет</p>
                                <p>
                                    {!! $doctor->info !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
@endsection