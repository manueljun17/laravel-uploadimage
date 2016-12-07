@extends('layout.template')
    @section('content')
        <h1>Add Image</h1>
        {!! Form::open(array('action' => 'imageController@save', 'files'=>true)) !!}

        <div class="form-group">
            {!! Form::label('Profile-Picture', 'Profile Picture:') !!}
            {!! Form::file('image',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
        </div>
        {!! Form::close() !!}
    @stop