@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Добавить отделение</h3>
                </div>
                <div class="box-body">
                    <form action="{{ route('department.update', ['id' => $department->id]) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="form-group col-md-10 col-md-offset-1{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Департамент</label>
                            <input name="name" class="form-control" type="text" placeholder="Департамент"
                                   value="{{ $department->name }}" id="name">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 col-md-offset-1{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label for="url">URL</label>
                            <input name="url" class="form-control" type="text" placeholder="URL"
                                   value="{{ $department->url }}" id="url">

                            @if ($errors->has('url'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('url') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 col-md-offset-1{{ $errors->has('short') ? ' has-error' : '' }}">
                            <label for="short">Краткое описание</label>
                            <input name="short" class="form-control" type="text" placeholder="Краткое описание (до 255  символов)"
                                   value="{{ $department->short }}" id="short">

                            @if ($errors->has('short'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('short') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 col-md-offset-1{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description">Описание</label>
                            <textarea name="description" id="" rows="5" class="form-control"
                                      placeholder="Описание департамента">{{ $department->description }}</textarea>

                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 col-md-offset-1">
                            <input type="submit" class="btn" value="Обновить">
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
<script>
    $(document).ready(function () {
        $("#name").stringToSlug({
            'getPut': '#url'
        });
    });
</script>
@endpush