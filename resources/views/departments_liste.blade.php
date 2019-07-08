@extends('layouts.app')

@section('content')
<div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Department List</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Department</li>
                            <li class="breadcrumb-item active">Department List</li>
                        </ul>
                    </div>            
                    <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <div class="bh_chart hidden-xs">
                            <div class="float-left m-r-15">
                                <small>Visitors</small>
                                <h6 class="mb-0 mt-1"><i class="icon-user"></i> 1,784</h6>
                            </div>
                            <span class="bh_visitors float-right">2,5,1,8,3,6,7,5</span>
                        </div>
                        <div class="bh_chart hidden-sm">
                            <div class="float-left m-r-15">
                                <small>Visits</small>
                                <h6 class="mb-0 mt-1"><i class="icon-globe"></i> 325</h6>
                            </div>
                            <span class="bh_visits float-right">10,8,9,3,5,8,5</span>
                        </div>
                        <div class="bh_chart hidden-sm">
                            <div class="float-left m-r-15">
                                <small>Chats</small>
                                <h6 class="mb-0 mt-1"><i class="icon-bubbles"></i> 13</h6>
                            </div>
                            <span class="bh_chats float-right">1,8,5,6,2,4,3,2</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Department List</h2>
                            <ul class="header-dropdown">
                                <li><a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#adddepartment">Add New</a></li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>
                                                <label class="fancy-checkbox">
                                                    <input class="select-all" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Description</th>
                                            <th>Created by</th>
                                            <th>Created date</th>
                                            <th>Updated date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($dept as $dept)
                                        <tr>
                                            <td class="width45">
                                            <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                                <!-- <img src="../assets/images/xs/avatar1.jpg." class="rounded-circle avatar" alt=""> -->
                                                <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                            </td>
                                            <td>
                                                <h6 class="mb-0"><a href="/department/{{ $dept->id}}">{{$dept->dept_name}}</a></h6>
                                                <!-- <span>marshall-n@gmail.com</span> -->
                                            </td>
                                            <td><span>{{$dept->dept_code}}</span></td>
                                            <td><span>{{$dept->dept_description}}</span></td>
                                            <td>{{$dept->user->user_code}}</td>
                                            <td>{{$dept->created_at}}</td>
                                            <td>{{$dept->updated_at}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Default Size -->
<div class="modal animated zoomIn" id="adddepartment" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Department</h6>
            </div>
            <form action="/department" method="post">
                <div class="modal-body">
                
                    {{ csrf_field() }}
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="form-group">                                    
                                <input type="text" name="dept_name" class="form-control" placeholder="Department name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">                                    
                                <input type="text" name="dept_code" class="form-control" placeholder="Department code">
                            </div>
                        </div>

                        
                        <div class="col-md-12">
                            <div class="form-group">                                    
                                <input type="number" name="employee_number" class="form-control" placeholder="Employee's quantity">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">                             
                                <textarea id="summernote" type="number" name="dept_description" class="form-control" placeholder="Department description"></textarea>
                            </div>
                        </div>   
                        <!-- <div class="col-12">
                            <div class="form-group">                                            
                                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                            </div>
                            <hr>
                        </div> -->
                    </div>
                
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
                </div>
            </form>
        </div>
    </div>
</div>

    @endsection