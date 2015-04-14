@extends('vcms5::base')

@section('top-white')
    <h1>Conference Registrations</h1>
@stop

@section('content')
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>
                    Edit Invitee: {!! $registrant->first_name !!}
                    {!! $registrant->last_name !!}
                </h5>

                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">

                {!! Form::model($registrant, array(
                'role' => 'form',
                'name' => 'bookform',
                'id' => 'bookform',
                'method' => 'post',
                'url' => array('admin/conferences/edit-invitee' )
                )
                )
                !!}

                <div class="form-group">
                    {!! Form::label('first_name', 'First Name', array('class' => 'control-label')); !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-font"></i></span>
                            {!! Form::text('first_name', null, array('class' => 'required form-control',
                            'style' => 'max-width: 400px;',
                            'placeholder' => '')); !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('last_name', 'Last Name', array('class' => 'control-label')); !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            {!! Form::text('last_name', null, array('class' => 'required form-control',
                            'style' => 'max-width: 400px;',
                            'placeholder' => '')); !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('company', 'Company/Organization', array('class' => 'control-label')); !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            {!! Form::text('company', null, array('class' => 'required form-control',
                            'style' => 'max-width: 400px;',
                            'placeholder' => '')); !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email', array('class' => 'control-label')); !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            {!! Form::email('email', null, array('class' => 'required form-control',
                            'style' => 'max-width: 400px;',
                            'placeholder' => '')); !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('city', 'City/Town', array('class' => 'control-label')); !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            {!! Form::text('city', null, array('class' => 'required form-control',
                            'style' => 'max-width: 400px;',
                            'placeholder' => '')); !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('phone', 'Phone', array('class' => 'control-label')); !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            {!! Form::text('phone', null, array('class' => 'required form-control',
                            'style' => 'max-width: 400px;',
                            'placeholder' => '')); !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('fax', 'Fax', array('class' => 'control-label')); !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            {!! Form::text('fax', null, array('class' => 'required form-control',
                            'style' => 'max-width: 400px;',
                            'placeholder' => '')); !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('band', 'Band', array('class' => 'control-label')); !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            {!! Form::text('band', null, array('class' => 'required form-control',
                            'style' => 'max-width: 400px;',
                            'placeholder' => '')); !!}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('invite_type', 'Type', array('class' => 'control-label')); !!}
                    <div class="controls">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            {!! Form::text('invite_type', null, array('class' => 'required form-control',
                            'style' => 'max-width: 400px;',
                            'placeholder' => '')); !!}
                        </div>
                    </div>
                </div>

                <hr>
                <input type="submit" class="btn btn-primary" value="Save Changes">
                <a href="#!" class="btn btn-danger" onclick="deleteRegistrant()">Delete</a>
                <a class="btn btn-info" href="/admin/conferences/all-invitees">Cancel</a>

                <input type="hidden" name="id" value="{!! $registrant->id !!}">
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    </div>
@stop

@section('bottom-js')
    <script>
        $(document).ready(function () {

        });
        function deleteRegistrant(){
            bootbox.confirm("Are you sure you want to delete this invitee?", function(result) {
                if (result==true)
                {
                    window.location.href = '/admin/conferences/delete-invitee?id=' + {!! $registrant->id !!};
            }
        });
        }
    </script>
@stop