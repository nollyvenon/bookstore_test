@extends('layout/template')

@section('content')
 <h1>Test Library</h1>
 <a href="{{url('/book/create')}}" class="btn btn-success">Create Book</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>ISBN</th>
         <th>Title</th>
         <th>Author</th>
         <th>Publisher</th>
         <!--<th>Image</th>
         <th colspan="3">Actions</th>-->
     </tr>
     </thead>
     <tbody>
     @foreach ($books as $book)

         <tr>
             <td>{{ $book->id }}</td>
             <td>{{ $book->isbn }}</td>
             <td>{{ $book->title }}</td>
             <td><ul>
                @foreach ($book->author as $author)
                <li>{{ $author->name }}</li>
                @endforeach
            </ul></td>
             <td>{{ $book->publisher }}</td>
             

             <!--<td><img src="{{asset('img/'.$book->image)}}" height="35" width="30"></td>
             <td><a href="{{route('books.show',$book->id)}}" class="btn btn-primary">Read</a></td>
             <td><a href="{{route('books.edit',$book->id)}}" class="btn btn-warning">Update</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['books.destroy', $book->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>-->
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection