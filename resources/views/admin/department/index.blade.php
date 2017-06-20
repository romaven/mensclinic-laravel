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
                            <th>Количество врачей</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($departments as $department)
                            <tr>
                                <td>{{ $department->name }}</td>
                                <td class="text-center">{{ count($department->doctors) }}</td>
                                <td>
                                    <a href="{{ route('department.edit', ['id' => $department->id]) }}"
                                       class="btn btn-success btn-sm">редактировать</a>
                                    <a href="{{ route('department.destroy', ['id' => $department->id]) }}"
                                       class="btn btn-warning btn-sm">удалить</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Отделение</th>
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
                null,
                {"width": "12%"},
                {"width": "15%"}
            ]
        });
    });
</script>
@endpush

@push('styles')
<link rel="stylesheet" href="/admin/plugins/datatables/dataTables.bootstrap.css">
@endpush