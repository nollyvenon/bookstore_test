@extends('layout/template')

@section('content')
 <h1>Test Library</h1>
 <!--<a href="{{url('/book/create')}}" class="btn btn-success">Create Book</a>-->
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>ISBN</th>
         <th>Title</th>
         <th>Author</th>
         <th>Publisher</th>
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
         </tr>
     @endforeach

     </tbody>

 </table>
@endsection