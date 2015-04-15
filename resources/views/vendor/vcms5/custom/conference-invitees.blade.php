@extends('vcms5::base')

@section('top-white')
    <h1>Conference Invitees</h1>
@stop

@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>
                    Conference Invitees
                </h5>
                <div class="ibox-tools">
                    <a href="/admin/conferences/edit-invitee?id=0" class="btn btn-xs btn-primary">Add Invitee</a>
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">
                <table id="itable" class="table table-compact table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Invitee</th>
                        <th>Accepted?</th>
                        <th>Created</th>
                        <th>Updated</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($invitees as $registrant)
                        <tr>
                            <td>
                                <a href="/admin/conferences/edit-invitee?id={!! $registrant->id!!}">
                                    {!! $registrant->last_name !!}, {!! $registrant->first_name !!}
                                </a>
                            </td>
                            <td>
                                @if ($registrant->responded == 0)
                                    <span style="color: red">No</span>
                                @else
                                    <span style="color: green">Yes</span>
                                @endif
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