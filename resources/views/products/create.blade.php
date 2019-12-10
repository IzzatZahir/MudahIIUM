@extends('layout')

@section('content')

    <h3>Add Product</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'products.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::text('description', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('price', 'Price') }}
                {{ Form::text('price', null, array('class' => 'form-control')) }}
            </div>

            <!-- <div class="form-group">
            {{ Form::hidden('invisible', 'secret', array('user_id'=> Auth::user()->id )) }}
            <input type="hidden" value="('user_id'=>'Auth::user()->id')" name="user_id">
            </div> -->


            <div class="form-group">
                {{ Form::label('category_id', 'Categories') }}
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Select Category']) }}
            </div>

            <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image',array('class' => 'form-control')) }}
            </div>

             {{ Form::submit('Create', array('class' => 'btn btn-default')) }}
            {!! Form::close() !!}

        </div>
    </div>



@endsection