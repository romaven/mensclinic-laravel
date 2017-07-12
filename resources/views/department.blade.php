@extends('layouts.app', ['menu' => 'department', 'title' => $doctor->full_name])

@section('content')
    <div class="banner clearfix"
         style="background-repeat: no-repeat; background-position: center top; background-image: url('/images/contact-logo.jpg'); background-size: cover; min-height: 180px !important;"></div>
    <div class=" page-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <nav class="bread-crumb">
                        <ul class="breadcrumb clearfix">
                            <li><a href="{{ route('site.main') }}">Mens Clinic</a><span class="divider"></span></li>
                            <li class="active">{{ $department->name }}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="services-page clearfix">
        <div class="container">
            @if(count($doctors) > 0)
                <div class="row text-center">
                    @foreach($doctors as $doctor)
                        <div class="isotope-item cardio-clinic primary-health-care col-lg-3 col-md-4 col-sm-6">
                            <article class="common-doctor clearfix hentry">
                                <figure>
                                    <a href="{{ route('site.doctor', ['url' => $doctor->url]) }}"
                                       onclick="return false;"
                                       title="{{ $doctor->full_name }}">
                                        <img width="670" height="500" src="/images/doctors/thumb-{{ $doctor->photo }}"
                                             class="attachment-gallery-post-single wp-post-image"
                                             alt="{{ $doctor->full_name }}"/> </a>
                                </figure>
                                <div class="text-content"><br>
                                    <h5 class="entry-title"><a
                                                href="{{ route('site.doctor', ['url' => $doctor->url]) }}">{{ $doctor->full_name }}</a>
                                    </h5>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <article id="post-112" class=" clearfix post-112 page type-page status-publish hentry">
                        <div class="entry-content">
                        </div>
                    </article>
                </div>
            </div>

            <article class="row one-col-service post-104 service type-service status-publish has-post-thumbnail hentry">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <hr>
                    <div class="service-contents">
                        <h3 class="entry-title">{{ $department->name }}</h3>
                        <div class="entry-content">
                            {!! $department->info !!}
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
@endsection