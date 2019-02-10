@extends('admin.master')
@section('heading') Categories @endsection

@section('content')

   <div class="cotainer">
       <div class="row">
           <div class="col-md-6">
        
                {!! Form::open(['action'=>'AdminCategoryController@store','method'=>'post','class'=>'create-roll-form']) !!}
                    {!! Form::text('name' , null , ['placeholder'=>'Category Name','class'=>'form-control' ,'required'=>'true']) !!}
                    {!! Form::submit('Create Category' , ['class'=>'btn btn-primary']) !!}
                {{ Form::close() }}
           </div>


           <div class="col-md-6">
               

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Created</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                            <td> <a href="{{ route('categories.edit', $category) }}"> {{ $category->name }}  </a> </td>
                                <td> {{ $category->created_at->diffForHumans() }}  </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
           </div>
       </div>
   </div>

@endsection