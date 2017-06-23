@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Врачи</h3>
                    <div class="box-tools pull-right">
                        <a href="{{ route('doctor.create') }}" class="btn btn-success">Добавить врача</a>
                    </div>
                </div>
                <div class="box-body">

                    <table id="doctors" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ФИО</th>
                            <th>Отделение</th>
                            <th>Специализация</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($doctors as $doctor)
                            <tr>
                                <td>{{ $doctor->full_name }}</td>
                                <td>{{ $doctor->name }}</td>
                                <td>{{ $doctor->specialization }}</td>
                                <td>
                                    <a href="{{ route('doctor.edit', ['id' => $doctor->id]) }}"
                                       class="btn btn-success btn-sm">редактировать</a>
                                    <a href="#" data-toggle="modal" data-target="#modal-danger-{{ $doctor->id }}"
                                       class="btn btn-warning btn-sm"
                                       onclick="deleteDoctor(
                                               '{{ $doctor->id }}',
                                               '{{ $doctor->full_name }}',
                                               '{{ route('doctor.destroy', ['id' => $doctor->id]) }}'
                                               )">удалить</a>
                                </td>
                                <div id="delete-doctor-{{ $doctor->id }}"></div>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>ФИО</th>
                            <th>Отделение</th>
                            <th>Специализация</th>
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
        $('#doctors').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": false,
            "autoWidth": false,
            "columns": [
                null,
                null,
                null,
                {"width": "12%"}
            ]
        });
    });
</script>
<script>
    function deleteDoctor(id, name, action) {
        var modal;

        modal = '<div class="modal modal-danger fade" id="modal-danger-' + id + '">\
            <div class="modal-dialog">\
            <div class="modal-content">\
            <div class="modal-header">\
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">\
            <span aria-hidden="true">&times;</span></button>\
        <h4 class="modal-title">Вы действительно хотите удалить врача?</h4>\
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

        $('#delete-doctor-' + id).html(modal);
    }
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="/admin/plugins/datatables/dataTables.bootstrap.css">
@endpush