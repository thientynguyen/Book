@extends('welcome')
@section('content')
    <h1>test ne hihi</h1>
    <div id="test">

    </div>
    @endsection
@section('script')
    <script>
        $(document).ready(function () {
            fetchData();
        });

        function fetchData() {
            $.ajax({
               url: '/api/category',
                type: 'GET',
                dataType: 'json',
            }).done((res) => {
                console.log(res);
            });
        }
    </script>

    @endsection
