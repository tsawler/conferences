@extends('vcms5::base')

@section('top-white')
    <h1>Conference Registrations</h1>
@stop

@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>
                    Registrant: {!! $registrant->first_name !!}
                    {!! $registrant->last_name !!}
                </h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">

                <table class="table table-compact table-striped">
                    <thead></thead>
                    <tbody>
                        <tr>
                            <td>Registrant:</td>
                            <td>
                                {!! $registrant->title !!}
                                {!! $registrant->first_name !!}
                                {!! $registrant->last_name !!}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Registration Date:
                            </td>
                            <td>
                                {!! $registrant->created_at !!}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Company/Organization:
                            </td>
                            <td>
                                {!! $registrant->company !!}
                            </td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>{!! $registrant->email !!}</td>
                        </tr>
                        <tr>
                            <td>Mailing Address:</td>
                            <td>{!! $registrant->address !!}</td>
                        </tr>
                        <tr>
                            <td>City/Town:</td>
                            <td>{!! $registrant->city !!}</td>
                        </tr>
                        <tr>
                            <td>Postal Code:</td>
                            <td>{!! $registrant->zip !!}</td>
                        </tr>
                        <tr>
                            <td>Phone:</td>
                            <td>{!! $registrant->phone !!}</td>
                        </tr>
                        <tr>
                            <td>Regional Service Commission:</td>
                            <td>{!! $commissions[$registrant->commission_id] !!}</td>
                        </tr>
                    </tbody>
                </table>

                <hr>

                <button class="btn btn-danger" onclick="deleteRegistrant()">Delete</button>
                <a href="/admin/conferences/edit-registrant?id={!! $registrant->id !!}" class="btn btn-info">Edit</a>
            </div>
        </div>
    </div>
@stop

@section('bottom-js')
    <script>
        $(document).ready(function() {

        });
        function deleteRegistrant(){
            bootbox.confirm("Are you sure you want to delete this registrant?", function(result) {
                if (result==true)
                {
                    window.location.href = '/admin/conferences/delete-registrant?id=' + {!! $registrant->id !!};
                }
            });
        }
    </script>
@stop