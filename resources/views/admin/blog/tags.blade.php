@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.inc.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2" id="tags">Tags</h1>
                
            </div>
            <h1 class="text-secondary text-bold">Welcome Admin</h1>
            <p>Go to the home page? <a href="{{url('/')}}" class="btn btn-light btn-round">Go</a></p> 
            <hr>
            <div class="mt-4 bg-light">
                <form id="blogForm" class=" m-1  mb-2" method="POST" action="{{url('admin/tag')}}">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text"  class="form-control" for="name" name="name">
                    </div>
                        <input type="submit" value="submit" class="checkStoreOrUpdate btn btn-success mb-2">
                        <button type="button" class="btn btn-primary float-right clear">Clear</button>
                </form>
            </div>
            
            <hr>
            <div class="table-responsive">
                    <table class="table table-striped table-sm " id="table_id">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="items">
                        @php
                            $counts = 1;
                        @endphp
                        @foreach($tags as $tag)
                            <tr>
                                <td>{{$counts}}</td>
                                <td>{{$tag->name}}</td>
                                <td>{{$tag->slug}}</td>
                                <td>
                                    <a href="http://" target="_blank" class="btn btn-primary btn-sm">
                                    <span class="fa fa-edit"></span> Edit</a>
                                </td>
                                <td>
                                    <form action="{{url('admin/tag') . '/' . $tag->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                    <span class="fa fa-trash"></span> Danger</button></td>
                                    </form>    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div> 
        </main>
    </div>
</div>
@include('layouts.inc.scripts')
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
});
</script>
@endsection
 