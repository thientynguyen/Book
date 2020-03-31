@extends('layout.main')
@section('content')
    <div>
        <div class="container">
            <h2>Category</h2>
            <button class="btn btn-primary" data-target="#poupCategory" data-toggle="modal">Create</button>
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
            <div class="modal fade" id="poupCategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="ah">
                                <div>
                                    <input id="txtId" type="hidden" value="">
                                </div>
                                <div class="form-group">
                                    <label for="categoryName">Category name</label>
                                    <input type="text" name="categoryName" class="form-control" id="categoryName">
                                </div>
                                <div class="form-group">
                                    <label for="description">Category Description</label>
                                    <input type="text" name="description" class="form-control" id="description">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="btnSave">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="confirm-delete11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
                            <button type="button" class="btn btn-primary btn-ok">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="regTitle">

        </div>
    </div>
    <input type="hidden" name="txtHndUrlApiCate" value="api/category">
@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('js/business/test.js') }}"></script>

@endsection
