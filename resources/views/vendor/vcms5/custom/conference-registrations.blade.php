@extends('vcms5::base')

@section('top-white')
    <h1>Conference Registrations</h1>
@stop

@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>
                    Registrations
                </h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">
                <table id="itable" class="table table-compact table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Registrant</th>
                        <th>Created</th>
                        <th>Updated</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($registrants as $registrant)
                        <tr>
                            <td>
                                <a href="/admin/conferences/registrant?id={!! $registrant->id!!}">
                                    {!! $registrant->last_name !!}, {!! $registrant->first_name !!}
                                </a>
                            </td>
                            <td>{!! $registrant->created_at !!}</td>
                            <td>{!! $registrant->updated_at !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('bottom-js')
    <script>
        $(document).ready(function() {
            $('#itable').dataTable({
                responsive: true,
                stateSave: true
            });
        });
    </script>
@stop