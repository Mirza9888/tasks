
@extends('layouts.app')

@section('content')

    {!! Form::open(['method'=>'POST','action'=>'App\Http\Controllers\PostsController@store']) !!}   }   {{-- MODIFYING OUR CREATE FORM WITH FORM PACKAGE--}}
    {{csrf_field()}}
    <div class="form-group">
    {!! Form::label('title','Title:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div>
    {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
{{--    @if(count($errors)>0)--}}
    <div class="alert alert-danger">  {{--THIS IS A BOOSTRAP CLASS--}}
    <ul>
    @foreach($errors->all() as $error)
    <li>
    {{$error}}
    </li>
    @endforeach
    </ul>
    </div>

@endsection

