@extends('layout.template')
@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a contact</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif  
    {!! Form::model($book,['method' => 'POST','route'=>['books.store']]) !!}
        <div class="form-group">
            {!! Form::label('ISBN', 'ISBN:') !!}
            {!! Form::text('isbn',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Title', 'Title:') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Author', 'Author:') !!}
            {!! Form::text('author',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Publisher', 'Publisher:') !!}
            {!! Form::text('publisher',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Image', 'Image:') !!}
            {!! Form::text('image',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
    </div>
</div>
</div>
@endsection