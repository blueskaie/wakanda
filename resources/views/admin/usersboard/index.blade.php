@extends('layouts.admin')

@section('meta')
<meta charset="utf-8" />
<title>
	Metronic | UsersDashboard
</title>
<meta name="description" content="Column rendering datatables examples">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@endsection

@section('style')
<link href="{{ asset('admintheme/assets/vendors/custom/datatables/datatables.bundle.css') }} " rel="stylesheet" type="text/css" />
<link href="{{ asset('admintheme/assets/vendors/base/vendors.bundle.css') }} " rel="stylesheet" type="text/css" />
<link href="{{ asset('admintheme/assets/demo/default/base/style.bundle.css') }} " rel="stylesheet" type="text/css" />

@endsection

@section('script')
	<script src="{{ asset('admintheme/assets/vendors/base/vendors.bundle.js') }} " type="text/javascript"></script>
	<script src="{{ asset('admintheme/assets/demo/default/base/scripts.bundle.js') }} " type="text/javascript"></script>
	<script src="{{ asset('admintheme/assets/vendors/custom/datatables/datatables.bundle.js') }} " type="text/javascript"></script>

<script>
    var DatatablesAdvancedMultipleControls={
        init:function(){
            $("#m_table_1").DataTable(
            {
                dom:"<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>><'row'<'col-sm-12 col-md-6'i><'col-sm-12 col-md-6'p>><'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            })
        }
    };
    jQuery(document).ready(function(){
        DatatablesAdvancedMultipleControls.init()
    });

    function deleteUser(id){
        $("userdelete-"+id).addClass("m-loader m-loader--light m-loader--right")
        $.ajax({
            type: "POST", 
            url: "../users/delete/"+id, 
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success: function(result){
                alert("Removed sucessfully")
                $("#user-"+id).remove();
            }
        });
    }
    </script>
@endsection

@section('content')
<!--Begin::Section-->
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        All Users
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                <thead>
                    <tr>
                        <th>
                            RecordID
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Email_Verified_at
                        </th>
                        <th>
                            CreateAt
                        </th>
                        <th>
                            UpdateAt
                        </th>
                        <th>
                            Membership
                        </th>
                        <th>
                            Role
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody id="users-list">
                    @foreach($users as $user)
                    <tr id="user-{{$user->id}}">
                        <td>
                            {{ $user->id }}
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->email }} 
                       </td>
                        <td>
                            {{ $user->email_verified_at?$user->email_verified_at:'None' }}
                        </td>
                        <td>
                            {{ $user->created_at?$user->created_at: 'None' }}
                        </td>
                        <td>
                            {{ $user->updated_at?$user->updated_at:'None'}}
                        </td>
                        <td>
                            Free Memeber
                        </td>
                        <td>
                            General User
                        </td>
                        <td>
                            Online
                        </td>
                        <td>
                            <button type="button" class="btn m-btn--pill btn-danger" id="userdelete-{{$user->id}}" onclick="deleteUser({{$user->id}})" >Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
