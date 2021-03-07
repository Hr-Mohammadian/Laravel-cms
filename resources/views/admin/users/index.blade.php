@extends('layouts.master')

@section('header')
    <link href="/assets/ltr/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
    <link href="/assets/ltr/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="portlet">
                <div class="portlet-heading bg-primary">
                    <h3 class="portlet-title">
                        Filter Box
                    </h3>
                    <div class="portlet-widgets">
                        <a href="javascript:;" data-toggle="reload"><i class="zmdi zmdi-refresh"></i></a>
                        <a data-toggle="collapse" data-parent="#accordion1" href="#bg-primary1"><i
                                class="zmdi zmdi-minus"></i></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div id="bg-primary1" class="panel-collapse collapse in">
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">filter test</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                           placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">filter test</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter email">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">filter test</label>
                                <select id="exampleInputEmail1" class="form-control select2">
                                    <option value="">item</option>
                                    <option value="">im</option>
                                    <option value="">te</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">filter test</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                           placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">filter test</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                       placeholder="Enter email">
                            </div>
                            <div class="col-md-4">
                                <label for="exampleInputEmail1">filter test</label>
                                <select id="exampleInputEmail1" class="form-control select2">
                                    <option value="">item</option>
                                    <option value="">im</option>
                                    <option value="">te</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-success btn-sm">Filter</button>
                        <button class="btn btn-warning btn-sm">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-1">
                            <div class="m-b-30">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info dropdown-toggle waves-effect waves-light"
                                            data-toggle="dropdown" aria-expanded="false">Operations <span
                                            class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Add</a></li>
                                        <li><a href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="table-responsive">
                        <table class="table m-0">
                            <thead>
                            <tr align="center">
                                <th><input id="selectAll" type="checkbox" checked=""></th>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Role</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($users as $user)

                                <tr align="center">
                                    <td><input class="multicheck" id="Customers" type="checkbox" checked=""></td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        <ul style="list-style: none;">
                                            @foreach($user->roles as $role)
                                                <li>{{$role->name}}</li>
                                            @endforeach
                                        </ul>
                                    </td>

                                    <td>{{$user->created_at}}</td>
                                    <td class="actions">
                                        <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- end: panel body -->

            </div> <!-- end panel -->
        </div> <!-- end col-->
    </div>






@endsection
@section('wrapper')
    <!-- MODAL -->
    <div id="dialog" class="modal-block mfp-hide">
        <section class="panel panel-info panel-color">
            <header class="panel-heading">
                <h2 class="panel-title">Are you sure?</h2>
            </header>
            <div class="panel-body">
                <div class="modal-wrapper">
                    <div class="modal-text">
                        <p>Are you sure that you want to delete this row?</p>
                    </div>
                </div>

                <div class="row m-t-20">
                    <div class="col-md-12 text-right">
                        <button id="dialogConfirm" class="btn btn-primary waves-effect waves-light">Confirm</button>
                        <button id="dialogCancel" class="btn btn-default waves-effect">Cancel</button>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <!-- end Modal -->
@endsection

@section('footer')

    <script src="/assets/ltr/plugins/select2/dist/js/select2.min.js" type="text/javascript"></script>

    {{--    this script is for ticking all checkboxes--}}
    <script>
        $('#selectAll').click(function (e) {
            var table = $(e.target).closest('table');
            $('td input:checkbox', table).prop('checked', this.checked);
        });

        $(".multicheck").click(function () {
            if (!$(this).prop("checked")) {
                $("#selectAll").prop("checked", false);
            }
        });


        $(".select2").select2();
        $(".select2-limiting").select2({
            maximumSelectionLength: 2
        });
    </script>
@endsection
