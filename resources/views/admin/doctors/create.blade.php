@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Добавить врача</h3>
                </div>
                <div class="box-body">
                    <form action="{{ route('doctor.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group col-md-10 col-md-offset-1{{ $errors->has('full_name') ? ' has-error' : '' }}">
                            <label for="name">ФИО врача</label>
                            <input name="full_name" class="form-control" type="text" placeholder="ФИО врача"
                                   value="{{ old('full_name') }}" id="full_name">

                            @if ($errors->has('full_name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('full_name') }}</strong>
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
                        <div class="form-group col-md-10 col-md-offset-1{{ $errors->has('specialization') ? ' has-error' : '' }}">
                            <label for="specialization">Заголовок (например: <span class="text-gray">Врач оториноларинголог</span>)</label>
                            <input name="specialization" class="form-control" type="text" placeholder="Заголовок"
                                   value="{{ old('specialization') }}" id="specialization">

                            @if ($errors->has('specialization'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('specialization') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 col-md-offset-1">
                            <label for="photo">Фотография</label>
                            <input type="file" id="photo" name="photo">

                            <p class="help-block">Загрузить фотографию</p>
                        </div>
                        <div class="form-group col-md-10 col-md-offset-1">
                            <label for="department">Отделение</label>
                            <select class="form-control" name="department_id">
                                <option value="0">Не входит во врачебные отделения</option>
                                @foreach($departments as $department)
                                    <option value="{{ $department->id }}" {{ (old('department') == $department->id) ? ' selected' : '' }}>{{ $department->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-10 col-md-offset-1{{ $errors->has('experience') ? ' has-error' : '' }}">
                            <label for="experience">Стаж работы (с какого года)</label>
                            <input name="experience" class="form-control" type="number"
                                   placeholder="Стаж работы (с какого года)"
                                   value="{{ old('experience') }}" id="experience" min="1950" max="{{ date('Y') }}">

                            @if ($errors->has('experience'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('experience') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 col-md-offset-1{{ $errors->has('info') ? ' has-error' : '' }}">
                            <label for="info">Информация о враче</label>
                            <textarea name="info" id="info" rows="5" class="form-control"
                                      placeholder="Информация о враче">{{ old('info') }}</textarea>

                            @if ($errors->has('info'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('info') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-md-10 col-md-offset-1">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="show_in_catalog" value="1">
                                    Отображать врача в каталоге специалистов
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="show_in_main_page" value="1">
                                    Отображать врача на главной странице
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
        $("#full_name").stringToSlug({
            'getPut': '#url'
        });
    });

    $(function () {
        CKEDITOR.replace('info')
    })
</script>
@endpush