@extends('layouts.app')

@section('content')

<div id="main-content" class="profilepage_1">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Department Details</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/home"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Department</li>
                            <li class="breadcrumb-item active">Department Details</li>
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
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="body">
                            <h5>{{$dept->dept_name}}</h5>
                            <p>{{$dept->dept_description}}</p>
                            <div class="progress-container progress-info m-b-25">
                                <span class="progress-badge">{{$dept->employee->count()}} / {{$dept->employee_number}} employees</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{$count_user}}%;">
                                        <span class="progress-value">{{$count_user}}%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="header">
                            <h2>employees</h2>
                        </div>
                        <div class="body">
                            <div class="w_user">
                                <img class="rounded-circle" src="{{ asset('assets/images/user_image.PNG') }}" alt="">
                                <div class="wid-u-info">
                                    <h5>Fidel Tonn</h5>
                                    <span>info@thememakker.com</span>
                                    <p class="text-muted m-b-0">Department Lead</p>                                    
                                </div>
                                <hr>
                            </div>
                            <ul class="right_chat list-unstyled mb-0">
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Chris Fox</span>
                                                <span class="message">Sales Lead</span>                                                
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="online">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Joge Lucky</span>
                                                <span class="message">Java Developer</span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Isabella</span>
                                                <span class="message">UI UX Designer</span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>
                                <li class="offline">
                                    <a href="javascript:void(0);">
                                        <div class="media mb-0">
                                            <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                            <div class="media-body">
                                                <span class="name">Folisise Chosielie</span>
                                                <span class="message">FrontEnd Developer</span>
                                            </div>
                                        </div>
                                    </a>                            
                                </li>                     
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="card">
                        <div class="header">
                            <h2>About Clients</h2>
                        </div>
                        <div class="body text-center">
                            <div class="profile-image m-b-15"> <img src="../assets/images/user.png" class="rounded-circle" alt=""> </div>
                            <div>
                                <h4 class="m-b-0"><strong>Jessica</strong> Doe</h4>
                                <span>Washington, d.c.</span>
                            </div>
                            <div class="m-t-15">
                                <button class="btn btn-primary">Profile</button>
                                <button class="btn btn-outline-secondary">Message</button>
                            </div>                            
                        </div>
                    </div>                     -->
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Division
                                <a href="javascript:void(0);" class="btn btn-info pull-right" data-toggle="modal" data-target="#adddivision" style="margin-top:-10px;">Add New</a>
                            </h2>
                            
                            <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>
                                                Details
                                            </th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>Description</th>
                                            <th>Created date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($dept->division as $div)
                                        <tr>
                                            <td class="width45">
                                            <a href="/division/{{ $div->id}}"><i class="icon-list details"></i></a>
                                            </td>
                                            <td>
                                                <h6 class="mb-0">{{$div->div_name}}</h6>
                                                <!-- <span>marshall-n@gmail.com</span> -->
                                            </td>
                                            <td><span>{{$div->div_code}}</span></td>
                                            <td><span>{{$div->div_description}}</span></td>
                                            <td>{{$div->created_at}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        </div>
                        <div class="body">
                                                    
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <div class="timeline-item green">
                                <span class="date">Just now</span>
                                <h6>iNext - One Page Responsive Template</h6>
                                <span>Department Lead: <a href="javascript:void(0);" title="Fidel Tonn">Fidel Tonn</a></span>
                            </div>        
                            <div class="timeline-item warning">
                                <span class="date">02 Jun 2018</span>
                                <h6>Add Team Members</h6>
                                <span>By: <a href="javascript:void(0);" title="Fidel Tonn">Fidel Tonn</a></span>
                                <div class="msg">
                                    <p>web by far While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="../assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="Chris Fox" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Joge Lucky" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Folisise Chosielie" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Joge Lucky" alt="Avatar"></li>
                                    </ul>
                                    <div class="top_counter">
                                        <div class="icon"><i class="fa fa-file-word-o"></i> </div>
                                        <div class="content">
                                            <p class="mb-1">iNext Department documentation.doc</p>
                                            <span>Size: 2.3Mb</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="timeline-item warning">
                                <span class="date">02 Jun 2018</span>
                                <h6>Task Assigned</h6>
                                <span>By: <a href="javascript:void(0);" title="Fidel Tonn">Fidel Tonn</a></span>
                                <div class="msg">
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                                    <div class="media">
                                        <img class="media-object rounded width40 mr-3" src="../assets/images/xs/avatar1.jpg" alt="" />
                                        <div class="media-body">
                                            <h6 class="mb-0">Folisise Chosielie</h6>
                                            <p class="mb-0"><strong>Detail:</strong> Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <img class="media-object rounded width40 mr-3" src="../assets/images/xs/avatar5.jpg" alt="" />
                                        <div class="media-body">
                                            <h6 class="mb-0">Joge Lucky</h6>                                            
                                            <p class="mb-0"><strong>Detail:</strong> Ipsum is simply dummy text of the printing and typesetting industry. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>        
                            <div class="timeline-item warning">
                                <span class="date">02 Jun 2018</span>
                                <h6>Add new code on GitHub</h6>
                                <span>By: <a href="javascript:void(0);" title="Fidel Tonn">Folisise Chosielie</a></span>
                                <div class="msg">
                                    <div class="alert alert-success mb-3" role="alert">Code Update Successfully in GitHub</div>
                                        <pre class="prettyprint prettyprinted"><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-default"</span><span class="tag">&gt;</span><span class="pln">Default</span><span class="tag">&lt;/span&gt;</span><span class="pln">
                                        </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-primary"</span><span class="tag">&gt;</span><span class="pln">Primary</span><span class="tag">&lt;/span&gt;</span><span class="pln">
                                        </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-success"</span><span class="tag">&gt;</span><span class="pln">Success</span><span class="tag">&lt;/span&gt;</span><span class="pln">
                                        </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-info"</span><span class="tag">&gt;</span><span class="pln">Info</span><span class="tag">&lt;/span&gt;</span><span class="pln">
                                        </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-warning"</span><span class="tag">&gt;</span><span class="pln">Warning</span><span class="tag">&lt;/span&gt;</span><span class="pln">
                                        </span><span class="tag">&lt;span</span><span class="pln"> </span><span class="atn">class</span><span class="pun">=</span><span class="atv">"badge badge-danger"</span><span class="tag">&gt;</span><span class="pln">Danger</span><span class="tag">&lt;/span&gt;</span></pre>
                                </div>
                            </div>
                            <div class="timeline-item danger">
                                <span class="date">04 Jun 2018</span>
                                <h6>Department Reports</h6>
                                <span>By: <a href="javascript:void(0);" title="Fidel Tonn">Fidel Tonn</a></span>
                                <div class="msg">
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <span>Design Bug</span>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100" style="width: 17%;"></div>
                                            </div>
                                        </li>
                                        <li class="mb-2">
                                            <span>UI UX Design Task</span>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 83%;"></div>
                                            </div>
                                        </li>
                                        <li class="mb-2">
                                            <span>Developer Task</span>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100" style="width: 49%;"></div>
                                            </div>
                                        </li>
                                        <li class="mb-2">
                                            <span>QA (Quality Assurance)</span>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                            </div>
                                        </li>                                      
                                    </ul>                                         
                                </div>
                            </div>
                            <div class="timeline-item dark">
                                <span class="date">05 Jun 2018</span>
                                <h6>Department on Goinng</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<div class="modal animated zoomIn" id="adddivision" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add new division</h6>
            </div>
            <form action="/division" method="post">
                <div class="modal-body">
                
                    {{ csrf_field() }}
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="form-group">                                    
                                <input type="text" name="div_name" class="form-control" placeholder="Division name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">                                    
                                <input type="text" name="div_code" class="form-control" placeholder="Division code">
                                <input type="hidden" name="department_id" value="{{ $dept->id }}">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">                                    
                                <input type="number" name="qty_employee" class="form-control" placeholder="Quantity employee here">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">                              
                                <textarea id="summernote" type="number" name="div_description" class="form-control" placeholder="Division description"></textarea>
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



<div class="modal animated zoomIn" id="addposition" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add Position</h6>
            </div>
            <form action="/position" method="post">
                <div class="modal-body">
                
                    {{ csrf_field() }}
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="form-group">                                    
                                <input type="text" name="pos_name" class="form-control" placeholder="Position's name here">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">                                    
                                <input type="text" name="pos_code" class="form-control" placeholder="Position's code here">
                            </div>
                        </div>

                        
                        <div class="col-md-12">
                            <div class="form-group">                                    
                                <select name="division_id" id="" class="form-control" required>
                                    <option value="">Choose a division here</option>
                                    <option value="{{$dept->id}}">All</option>
                                    @foreach($dept->division as $div)
                                    <option value="{{$div->id}}">{{$div->div_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
  
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