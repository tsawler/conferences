@extends('vcms5::base')

@section('top-white')
    <h1>Print Badges</h1>
@stop

@section('content')

    <p>Clicking the button below will generate a PDF file with badges for all registrants. Load your printer
    with the Avery labels, and print the PDF.</p>

    <p>
        <a href="#!" onclick="confirmPrint()" class="btn btn-primary">Generate PDF File with Labels</a>
    </p>
@stop

@section('bottom-js')
    <script>
        function confirmPrint(){
            bootbox.confirm("Are you sure you want to generate the PDF file?", function(result) {
                if (result==true) {
                    window.location.href = '/admin/conferences/generateBadgesPDF';
                }
            });
        }
    </script>
@stop