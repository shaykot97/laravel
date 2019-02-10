@extends('admin.master')
@section('styles') <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css"> @endsection
@section('heading') Upload Media @endsection

@section('content')

{!! Form::open(['action'=> 'AdminPhotoController@store' , 'method'=> 'post' , 'files'=>true , 'class'=>"dropzone" ]) !!}

{!! Form::close() !!}


@endsection


@section('scripts') <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script> @endsection

