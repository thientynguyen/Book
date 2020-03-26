@extends('layout.main')
@section('content')
    <div>
        <div class="container">
            <h2>Hover Rows</h2>
            <p>The .table-hover class enables a hover state on table rows:</p>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>action</th>
                </tr>
                </thead>
                <tbody class="msg">

                </tbody>
            </table>
        </div>
        <div class="regTitle">

        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('js/business/test.js') }}"></script>

@endsection
