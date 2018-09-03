@extends('layouts.app')

@section('content')

{!! Form::open(['action' => 'createJob2Controller@store', 'method' => 'Post']) !!}
    <div class="form-group">
    {{Form::label('skill1', 'skill1')}}
    {{Form::text('skill1', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill2 ', 'skill2')}}
    {{Form::text('skill2', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill3', 'skill3')}}
    {{Form::text('skill3', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill4', 'skill4')}}
    {{Form::text('skill4', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill5', 'skill5')}}
    {{Form::text('skill5', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill6', 'skill6')}}
    {{Form::text('skill6', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill7', 'skill7')}}
    {{Form::text('skill7', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill8', 'skill8')}}
    {{Form::text('skill8', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill9', 'skill9')}}
    {{Form::text('skill9', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
    {{Form::label('skill10', 'skill10')}}
    {{Form::text('skill10', '', ['class' => 'form-control'])}}
    </div>

    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection