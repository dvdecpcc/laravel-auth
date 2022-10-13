 @extends('layouts.app')
 @section('content')
    <div class="">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Slug</th>
                  <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->slug}}</td>
                        <td>
                            <a href="#" class="btn btn-primary">Show</a>
                            <a href="#" class="btn btn-light">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
 @endsection