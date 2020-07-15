@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.inc.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Blogs</h1>
                
            </div>
            <h1 class="text-secondary text-bold">Welcome {{auth()->user()->name}}</h1>
            <p>Go to the home page? <a href="{{url('/')}}" class="btn btn-light btn-round">Go</a></p> 
            <hr>
            <div class="mt-4 bg-light">
                <form id="blogForm" class=" m-1  mb-2" method="POST" action="/admin/blog">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" id="title" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                            <select multiple  class="form-control " id="tagsbody" name="tags[]">
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type='file' id="imgInp" />
                        <img id="blah" src="#" alt="your image" />
                    </div>
                    <div class="form-group">
                        <label>Body</label>
                        <textarea type="text" id="editor" class="form-control" name="description"></textarea>
                    </div>
                    <input type="hidden" name="" id="auth" value="{{auth()->user()->name}}">
                    <input type="hidden" class="hidden" id="id">
                        <input type="submit" value="submit" class="checkStoreOrUpdate btn btn-success mb-2">
                        <input type="reset" class="btn btn-primary float-right clear" value="Clear">
                </form>
            </div>
            
            <hr>
            <div class="table-responsive">
                    <table class="table table-striped table-sm " id="table_id">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>title</th>
                        <th>Written By</th>
                        <th>Tags</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>
                        <span class="fa fa-external-link"></span>
                        Preview</th>
                        </tr>
                    </thead>
                    <tbody id="items">
                        @php
                            $counts = 0;
                        @endphp
                        @forelse($blogs as $blog)
                            
                            <tr>
                                <td>{{$counts}}</td>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->user->name}}</td>
                                <td>
                                @if(count($blog->tags) > 0)
                                    @foreach($blog->tags as $tag)
                                        {{$tag->name}},
                                    @endforeach
                                @endif
                                </td>
                                <td><a href="#" class="btn btn-primary btn-sm">
                                <span class="fa fa-edit"></span> Edit</a></td>
                                <td>
                                <form action="{{url('admin/blog') . '/' . $blog->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                <span class="fa fa-trash"></span> Danger</button></td>
                                </form>
                                
                                <td>
                                    <a href="{{url('blog') . '/' . $blog->id}}" target="_blank" class="btn btn-info btn-sm">
                                    <span class="fa fa-external-link"></span> view</a>
                                </td>
                            </tr>
                        @empty
                            <tr><h2 class="text-center text-danger"></h2></tr>
                        @endforelse
                    </tbody>
                    </table>
                </div> 
        </main>
    </div>
</div>
@include('layouts.inc.scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                
                reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
                }
                
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
            }

            $("#imgInp").change(function() {
            readURL(this);
            });
</script>
<script>
$(document).ready( function () {
        $('#table_id').DataTable();
});
</script>
@endsection
 