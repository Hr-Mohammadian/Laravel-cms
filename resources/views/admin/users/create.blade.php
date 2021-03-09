@extends('layouts.master')
@section('header')
    @csrf
    <link href="{{asset('/ltr/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
@endsection
@section('pagetitle')
    Create User
@endsection
@section('body')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">

                <div class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="zmdi zmdi-more-vert"></i>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>

                <h4 class="header-title m-t-0 m-b-30">User Attributes</h4>

                <div class="row">
                    <div class="col-lg-6">
                        <form method="POST" action="/admin/users" class="form-horizontal" role="form">
                            @csrf
                            <div class="form-group">
                                <label class="col-md-2 control-label">Name</label>
                                <div class="col-md-10">
                                    <input type="text" name="title" class="form-control" value="Some text value...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Email</label>
                                <div class="col-md-10">
                                    <input type="text" name="email" class="form-control" value="Some text value...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Role</label>
                                <div class="col-sm-10">
                                    <select name="role_id" class="form-control">
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="status" class="form-control">
                                        <option value="0">not Verified</option>
                                        <option value="1">Verified</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Password</label>
                                <div class="col-md-10">
                                    <input type="password" name="password" class="form-control" value="123456789">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary waves-effect w-md waves-light m-b-5">Create
                            </button>
                        </form>

                    </div>
                    <div class="col-lg-6">
                        <form method="post" action="/admin/customer" class="form-horizontal" role="form">
                            @csrf
                            <div class="form-group">
                                <label class="col-sm-2 control-label">customer_type_id</label>
                                <div class="col-sm-10">
                                    <select name="customer_type_id" class="form-control">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">name</label>
                                <div class="col-md-10">
                                    <input type="text" name="name" class="form-control" value="Some text value...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">country</label>
                                <div class="col-sm-10">
                                    <select name="country_id" class="form-control">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">state_id</label>
                                <div class="col-sm-10">
                                    <select name="state_id" class="form-control">
                                        {{--                                        @foreach($states as $state)--}}
                                        <option value=""></option>
                                        {{--                                        @endforeach--}}
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">city_id</label>
                                <div class="col-md-10">
                                    <input type="text" name="city_id" class="form-control" value="11">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">address</label>
                                <div class="col-md-10">
                                    <input type="text" name="address" class="form-control" value="Some text value...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">postal_code_zip</label>
                                <div class="col-md-10">
                                    <input type="text" name="postal_code_zip" class="form-control" value="11">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">payment_expire_date</label>
                                <div class="col-md-10">
                                    <input type="text" name="payment_expire_date" class="form-control"
                                           value="2021-03-04 09:14:48">
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-2">Auto Close</label>
                                    <div class="col-sm-8">
                                        <div class="input-group col-md-10">
                                            <input type="text" class="form-control" placeholder="mm/dd/yyyy"
                                                   id="datepicker-autoclose">
                                            <span class="input-group-addon bg-primary b-0 text-white"><i
                                                    class="ti-calendar"></i></span>
                                        </div><!-- input-group -->
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary waves-effect w-md waves-light m-b-5">submit
                            </button>
                        </form>

                    </div><!-- end col -->


                </div><!-- end row -->
            </div>
        </div><!-- end col -->
    </div>

@endsection
@section('footer')
    <script src="{{asset('/ltr/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
@endsection
@section('script')
    <script>
        //country state drop down
        $(document).ready(function () {
            $('select[name="country_id"]').on('change', function () {
                var country_id = $(this).val();
                if (country_id) {
                    $.ajax({
                        url: "{{url('admin/customer/dropDown/')}}/" + country_id,
                        type: "POST",
                        dataType: "json",
                        success: function (data) {
                            console.log(data);
                            $('select[name="state_id"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="state_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="state_id"]').empty();
                }
            });
        });
        // Date Picker
        $(document).ready(function () {
            jQuery('#datepicker').datepicker();
            jQuery('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true
            });
            jQuery('#datepicker-inline').datepicker();
            jQuery('#datepicker-multiple-date').datepicker({
                format: "mm/dd/yyyy",
                clearBtn: true,
                multidate: true,
                multidateSeparator: ","
            });
            jQuery('#date-range').datepicker({
                toggleActive: true
            });
        });
    </script>
@endsection
