@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Permissions</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>
                            <label class="au-checkbox">
                                <input type="checkbox">
                                <span class="au-checkmark"></span>
                            </label>
                        </th>
                        <th>name</th>
                        
                        <th>Description</th>
                        
                        
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                     @foreach($permissions as $permission)
                    <tr class="tr-shadow">
                        <td>{{$loop->iteration}}</td>
                       
                        <td>{{$permission->name}}</td>
                      
                        <td>{{$permission->description}}</td>
                        <td>
                            <div class="table-data-feature">
                                {{-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                    <i class="zmdi zmdi-mail-send"></i>
                                </button> --}}

                                 @permission('Role-Update')
                                <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="{{route('permission.edit',$permission->id)}}"> <i class="zmdi zmdi-edit"></i></a>
                                 @endpermission
                                 @permission('Role-Delete')
                                <a class="item" data-toggle="tooltip" data-placement="top" title="Delete" href="#"> <i class="zmdi zmdi-delete"></i></a>
                                 @endpermission
                                
                                {{-- <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                    <i class="zmdi zmdi-more"></i>
                                </button> --}}
                            </div>
                        </td>
                    </tr>
                    <tr class="spacer"></tr>

                    @endforeach
                    
                </tbody>
            </table>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>


  
                  
@endsection
