@extends('layouts.app', ['menu' => 'main', 'title' => 'Новости нашего медицинского центра'])

@section('content')
    <div class=" clearfix"
         style="background-repeat: no-repeat; background-position: center top; background-size: cover;"></div>
    <div class=" page-top clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 ">
                    <nav class="bread-crumb">
                        <ul class="breadcrumb clearfix">
                            <li><a href="{{ route('site.main') }}">Mens Clinic</a><span class="divider"></span></li>
                            <li class="active">Новости</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-page clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12 ">
                    @foreach($news as $item)
                        <div class="blog-post-single clearfix">
                            <article id="post-77"
                                     class=" clearfix post-77 post type-post status-publish format-image has-post-thumbnail hentry category-health-basics tag-benefits tag-body tag-health post_format-post-format-image">
                                <div class="left_meta clearfix entry-meta">
                                    <time class="entry-date published updated"
                                          datetime="{{ date('d.m.Y', strtotime($item->created_at)) }}">
                                        <strong>{{ date('d', strtotime($item->created_at)) }}</strong>{{ __('dates.'.strtolower(date('F', strtotime($item->created_at)))) }}
                                    </time>
                                </div>
                                <div class="right-contents">
                                    <header class="entry-header">
                                        <h1 class="entry-title"><a href="{{ route('news.read', ['url' => $item->url]) }}">{{ $item->title }}</a></h1>
                                    </header>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 ">
                    <aside class="sidebar clearfix">

                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection