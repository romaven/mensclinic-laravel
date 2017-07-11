@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Добавить новость</h3>
                </div>
                <div class="box-body">
                    <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group col-md-10 col-md-offset-1{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="name">Заголовок</label>
                            <input name="title" class="form-control" type="text" placeholder="Заголовок"
                                   value="{{ old('title') }}" id="title">

                            @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 col-md-offset-1{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label for="url">URL</label>
                            <input name="url" class="form-control" type="text" placeholder="URL"
                                   value="{{ old('url') }}" id="url">

                            @if ($errors->has('url'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('url') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 col-md-offset-1{{ $errors->has('body') ? ' has-error' : '' }}">
                            <label for="body">Новость</label>
                            <textarea name="body" id="body" rows="5" class="form-control"
                                      placeholder="Новость">{{ old('body') }}</textarea>

                            @if ($errors->has('body'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 col-md-offset-1">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="is_published" value="1">
                                    Опубликовать новость
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-10 col-md-offset-1">
                            <label for="keywords">SEO: Ключевые слова</label>
                            <input name="keywords" class="form-control" type="text" placeholder="Ключевые слова через запятую"
                                   value="{{ old('keywords') }}" id="keywords">
                        </div>
                        <div class="form-group col-md-10 col-md-offset-1">
                            <label for="description">SEO: Описание</label>
                            <input name="description" class="form-control" type="text" placeholder="Описание (до 255  символов)"
                                   value="{{ old('description') }}" id="description">
                        </div>
                        <div class="form-group col-md-10 col-md-offset-1">
                            <input type="submit" class="btn" value="Добавить">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="/admin/speakingurl.min.js"></script>
<script src="/admin/jquery.stringtoslug.js"></script>
<script src="/admin/plugins/ckeditorNew/ckeditor.js"></script>
<script>
    $(document).ready(function () {
        $("#title").stringToSlug({
            'getPut': '#url'
        });
    });
    $(function () {
        CKEDITOR.replace('body')
    })
</script>
@endpush