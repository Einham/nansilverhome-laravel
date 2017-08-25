@extends('admin.layout.admin')

@section('content')

<h3>Add Product</h3>

<div class="row">
    <div class="col-md-6 col-md-offset-2">

        {!! Form::open(['route' => 'product.store', 'method' => 'post', 'files' => true]) !!}


        <div class="form-group">
            {{ Form::label('name', 'name') }}
            {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'1')) }}
        </div>

        <div class="form-group">
            {{ Form::label('weight', 'Weight') }}
            {{ Form::text('weight', null, array('class' => 'form-control','required'=>'','minlength'=>'1')) }}
        </div>


        <div class="form-group">
            {{ Form::label('category_id', 'Categories') }}
            {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
        </div>

        <div class="form-group">
            {{ Form::label('image', 'Image') }}
            {{ Form::file('image',array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description', null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
        {!! Form::close() !!}

        <br><br>
        <br><br>
        <br><br>



      
    </div>
</div>

@endsection
