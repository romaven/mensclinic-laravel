@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('success'))
                <span class="alert alert-success">
                    <strong>{{ session('success') }}</strong>
                </span>
            @endif
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Статьи</h3>
                    <div class="box-tools pull-right">
                        <a href="{{ route('articles.create') }}" class="btn btn-success">Добавить статью</a>
                    </div>
                </div>
                <div class="box-body">

                    <table id="article" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Заголовок</th>
                            <th>Дата создания</th>
                            <th>Опубликовано</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->created_at }}</td>
                                <td class="text-center">{{ $article->is_published }}</td>
                                <td>
                                    <a href="{{ route('articles.edit', ['id' => $article->id]) }}"
                                       class="btn btn-success btn-sm">редактировать</a>
                                    <a href="#" data-toggle="modal" data-target="#modal-danger-{{ $article->id }}"
                                       class="btn btn-warning btn-sm"
                                       onclick="deleteArticle(
                                               '{{ $article->id }}',
                                               '{{ $article->title }}',
                                               '{{ route('articles.destroy', ['id' => $article->id]) }}'
                                               )">удалить</a>
                                </td>
                            </tr>
                            <div id="delete-article-{{ $article->id }}"></div>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Заголовок</th>
                            <th>Дата создания</th>
                            <th>Опубликовано</th>
                            <th>Действия</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="/admin/plugins/fastclick/fastclick.js"></script>
<script>
    $(function () {
        $('#article').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": false,
            "autoWidth": false,
            "columns": [
                null,
                {"width": "20%"},
                {"width": "12%"},
                {"width": "15%"}
            ]
        });
    });
</script>
<script>
    function deleteArticle(id, name, action) {
        var modal;

        modal = '<div class="modal modal-danger fade" id="modal-danger-' + id + '">\
            <div class="modal-dialog">\
            <div class="modal-content">\
            <div class="modal-header">\
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">\
            <span aria-hidden="true">&times;</span></button>\
        <h4 class="modal-title">Вы действительно хотите удалить статью?</h4>\
        </div>\
        <div class="modal-body">\
            <p>' + name + '</p>\
        </div>\
        <div class="modal-footer">\
            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Отмена</button>\
            <form action="' + action + '" method="post">{{ csrf_field() }}{{ method_field('DELETE') }}<button type="submit" class="btn btn-outline">Удалить</button></form>\
        </div>\
        </div>\
        </div>\
        </div>\
        ';

        $('#delete-article-' + id).html(modal);
    }
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="/admin/plugins/datatables/dataTables.bootstrap.css">
@endpush