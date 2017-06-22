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
                    <h3 class="box-title">Отделения</h3>
                    <div class="box-tools pull-right">
                        <a href="{{ route('department.create') }}" class="btn btn-success">Добавить отделение</a>
                    </div>
                </div>
                <div class="box-body">

                    <table id="departments" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Отделение</th>
                            <th>Краткое описание</th>
                            <th>Количество врачей</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($departments as $department)
                            <tr>
                                <td>{{ $department->name }}</td>
                                <td>{{ $department->short }}</td>
                                <td class="text-center">{{ count($department->doctors) }}</td>
                                <td>
                                    <a href="{{ route('department.edit', ['id' => $department->id]) }}"
                                       class="btn btn-success btn-sm">редактировать</a>
                                    <a href="#" data-toggle="modal" data-target="#modal-danger-{{ $department->id }}"
                                       class="btn btn-warning btn-sm"
                                       onclick="deleteDepartment(
                                               '{{ $department->id }}',
                                               '{{ $department->name }}',
                                               '{{ route('department.destroy', ['id' => $department->id]) }}'
                                               )">удалить</a>
                                </td>
                            </tr>
                            <div id="delete-department-{{ $department->id }}"></div>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Отделение</th>
                            <th>Краткое описание</th>
                            <th>Количество врачей</th>
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
        $('#departments').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": false,
            "autoWidth": false,
            "columns": [
                {"width": "20%"},
                null,
                {"width": "12%"},
                {"width": "15%"}
            ]
        });
    });
</script>
<script>
    function deleteDepartment(id, name, action) {
        var modal;

        modal = '<div class="modal modal-danger fade" id="modal-danger-' + id + '">\
            <div class="modal-dialog">\
            <div class="modal-content">\
            <div class="modal-header">\
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">\
            <span aria-hidden="true">&times;</span></button>\
        <h4 class="modal-title">Вы действительно хотите удалить отделение?</h4>\
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

        $('#delete-department-' + id).html(modal);
    }
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="/admin/plugins/datatables/dataTables.bootstrap.css">
@endpush