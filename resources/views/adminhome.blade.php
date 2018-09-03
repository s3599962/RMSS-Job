@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{URL('users')}}" class="btn btn-sm btn-primary">New Users</a>
                    <div class="alert alert-success">
                      <p> You're logged in as ADMINISTRATOR</p>
                    </div>
                    <table class="table table-hover table-bordered">
                      <thead>
                        <tr>
                          <th width="6">No.</th>
                          <th> Member Name</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                    <tbody>
                    @foreach ($users as $key => $value);
                      <tr>
                        <td>{{ $key+1}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                        
                        <td>Edit</td>
                        <td><form action="{{action('UserController@destory',$value->id)}}"method="post">
                          {{csrf_field()}}
                          <input name="_method" type="hidden" value="DELETE">
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        </td>
                        </td>
                     @endforeach;
                  </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
