
@extends('layouts.index')

@section('content')

<div style="padding:5rem;">
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif
<hr>
<form action="" method="post" enctype="multipart/form-data">
         @csrf
         <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Name:</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="name">
          </div>  
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mobile:</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="mobile">
          </div>  
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email:</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>
        <button class="btn btn-primary"  id="view" type="submit" data-toggle="modal" data-target="#services" >Submit</button>
      </form>
    </div> 

        <div class="modal fade" id="services" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="formModalLabel">Choose a Service</h4>
                    </div>
                    <div class="modal-body">
                        @foreach($services as $service)
                        <button type="button" class="btn btn-primary" id="btn-save" value="{{$service['service_id']}}">{{$service['service_name']}}</button>
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary"  id="next" type="submit" data-toggle="modal" data-target="#interests" >Next</button>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="interests" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="formModalLabel">Choose your interest</h4>
                        </div>
                        <div class="modal-body">
                            {{-- @foreach($interests as $interest)
                            <button type="button" class="btn btn-primary" id="btn-save" value="{{$interest['interest_id']}}">{{$interest['interest_name']}}</button>
                            @endforeach --}}
                            <button type="button" class="btn btn-primary" id="btn-save" value="">1 week </button>
                            <button type="button" class="btn btn-primary" id="btn-save" value="">2 weeks</button>
                            <button type="button" class="btn btn-primary" id="btn-save" value="">3 weeks</button>
    
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>   
    
        </div>   

@endsection



{{-- <div class="container">

    <div class="d-flex bd-highlight mb-4">
        <div class="p-2 w-100 bd-highlight">
            <h2>Laravel AJAX Example</h2>
        </div>
        <div class="p-2 flex-shrink-0 bd-highlight">
            <button class="btn btn-success" id="btn-add">
                Add Todo
            </button>
        </div>
    </div>

    <div>
        <table class="table table-inverse">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody id="todos-list" name="todos-list">
                @foreach ($users as $data)
                <tr id="todo{{$data->id}}">
                    <td>{{$data->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="modal fade" id="formModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="formModalLabel">Create Todo</h4>
                    </div>
                    <div class="modal-body">
                        <form id="myForm" name="myForm" class="form-horizontal" novalidate="">

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                        placeholder="Enter title" value="">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                    <input type="text" class="form-control" id="description" name="description"
                                        placeholder="Enter Description" value="">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="btn-save" value="add">Save changes
                        </button>
                        <input type="hidden" id="todo_id" name="todo_id" value="0">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div> --}}


