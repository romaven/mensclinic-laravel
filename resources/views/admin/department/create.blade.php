@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Добавить отделение</h3>
                </div>
                <div class="box-body">
                    <form action="{{ route('department.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group col-md-10 col-md-offset-1{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Департамент</label>
                            <input name="name" class="form-control" type="text" placeholder="Департамент"
                                   value="{{ old('name') }}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 col-md-offset-1{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label for="url">URL</label>
                            <input name="url" class="form-control" type="text" placeholder="URL" value="{{ old('url') }}">

                            @if ($errors->has('url'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('url') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 col-md-offset-1{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description">Описание</label>
                            <textarea name="description" id="" rows="5" class="form-control"
                                      placeholder="Описание департамента">{{ old('description') }}</textarea>

                            @if ($errors->has('description'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
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

