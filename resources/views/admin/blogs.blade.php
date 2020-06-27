@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.inc.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Blogs</h1>
                
            </div>
            <h1 class="text-secondary text-bold">Welcome Admin</h1>
            <p>Go to the home page? <a href="{{url('/')}}" class="btn btn-light btn-round">Go</a></p> 
            <hr>
            <div class="mt-4 bg-light">
                <form id="blogForm" class=" m-1  mb-2">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Example select</label>
                        <select multiple  class="form-control " id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Body</label>
                        <textarea type="text" id="body" class="form-control" ></textarea>
                    </div>
                    <input type="hidden" class="hidden" id="id">
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
                        <th>title</th>
                        <th>Written By</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="items">
                        
                    </tbody>
                    </table>
                </div> 
        </main>
    </div>
</div>
@include('layouts.inc.scripts')
<script>
    $(document).ready( function () {
        
        getblogs();


        $('#blogForm').on('submit' , function(e){
            e.preventDefault();

            let title = $('#title').val();
            let body = $('#body').val();
            let id = $('#id').val();
            if ($('input.checkStoreOrUpdate').val() == 'update') {
                updateItem(id , title , body);
            }
            else{
                addItem(title , body)
            }
        });

        $('body').on('click' , '.clear' , function(){
            $('#title').val('');
            $('#body').val('');
            $('#id').val('');
            $('h1.headLine').replaceWith("<h1 class='headLine'>Add Item</item>" );
            $('input.checkStoreOrUpdate').replaceWith("<input type='submit' value='submit' class='checkStoreOrUpdate mb-2 btn btn-success' >");
        });

        $('body').on('click' , '.showLink' , function(e){
            e.preventDefault();
            let id = $(this).data('id');
            let title = $(this).data('title');
            let body = $(this).data('body');
            $('#title').val(title)  ;
            $('#body').val(body) ;
            $('#id').val(id);
            $('input.checkStoreOrUpdate').replaceWith("<input type='submit' value='update' class='checkStoreOrUpdate mb-2 btn btn-info' >");
        });


        function addItem(title , body){
            $.ajax({
                method: 'POST',
                url: 'http://zeroweb.com/api/blog',
                data: {title: title, description: body}
            }).done(function(item){
                alert('item #' + item.id + ' Add successfully!');
                location.reload();
                $('#title').val('');
                $('#body').val('');
                $('#id').val('');
            });
        }

        function updateItem(id,title , body){
            $.ajax({
                method: 'POST',
                url: 'http://zeroweb.com/api/blog/' + id,
                data: {_method:'PUT' , id:id , title:title , description:body}
            }).done(function(item){
                alert('item #' + item.id + ' updated successfully!');
                location.reload();
                $('#title').val('');
                $('#body').val('');
                $('#id').val('');
            });
        }

        $('body').on('click' , '.deleteLink' , function(e){
            e.preventDefault();
            let id = $(this).data('id');
            deleteItem(id);
        });

        function deleteItem(id){
            $.ajax({
                method: 'POST',
                url: 'http://zeroweb.com/api/blog/' + id,
                data: {_method: 'DELETE'}
            }).done(function(){
                alert('This item ' + id + ' is deleted successfully!');
                $('#title').val('');
                $('#body').val('');
                $('#id').val('');
                location.reload();
            });
        }

        function getblogs(){
            $.ajax({
                url:'http://zeroweb.com/api/blog'
            }).done(function(blogs){
                let output = '';
                let counter = 1 ;
                $.each(blogs, function(key , blog){
                    output += `
                        <tr>
                        <td>100${counter}</td>
                        <td>${blog.title}</td>
                        <td>${blog.description}</td>
                        <td><a class="btn btn-primary btn-sm showLink" href="#blogs" data-id="${blog.id}" data-title="${blog.title}" data-body="${blog.description}">Edit</a></td>
                        <td><a class="btn btn-danger btn-sm deleteLink" data-id="${blog.id}">Delete</a></td>
                        </tr>
                    `
                    counter++;
                });                
                $('#items').append(output);
                $('#table_id').DataTable();
            });
        }
    });
</script>
@endsection
 