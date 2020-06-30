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
                <form id="blogForm" class=" m-1  mb-2">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" id="title" class="form-control">
                    
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
                        <th>Name</th>
                        <th>Slug</th>
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

            let name = $('#title').val();
            let id = $('#id').val();
            if ($('input.checkStoreOrUpdate').val() == 'update') {
                updateItem(id , name);
            }
            else{
                addItem(name)
            }
        });

        $('body').on('click' , '.clear' , function(){
            $('#title').val('');
            $('#id').val('');
            $('input.checkStoreOrUpdate').replaceWith("<input type='submit' value='submit' class='checkStoreOrUpdate mb-2 btn btn-success' >");
        });

        $('body').on('click' , '.showLink' , function(e){
            e.preventDefault();
            let id = $(this).data('id');
            let name = $(this).data('name');
            $('#title').val(name)  ;
            $('#id').val(id);
            $('input.checkStoreOrUpdate').replaceWith("<input type='submit' value='update' class='checkStoreOrUpdate mb-2 btn btn-info' >");
        });


        function addItem(name){
            $.ajax({
                method: 'POST',
                url: 'http://zeroweb.com/api/tag',
                data: {name:name}
            }).done(function(item){
                alert('item #' + item.id + ' Add successfully!');
                $('#title').val('');
                $('#id').val('');
                location.reload();
            });
        }

        function updateItem(id,name){
            $.ajax({
                method: 'POST',
                url: 'http://zeroweb.com/api/tag/' + id,
                data: {_method:'PUT' , id:id , name:name}
            }).done(function(tag){
                console.log(tag);
                alert('item #' + tag.id + ' updated successfully!');
                $('#title').val('');
                $('#id').val('');
                // $(`#${tag.id}`).replaceWith(`
                //     <tr id='#${tag.id}'> 
                //         <td>${tag.name}</td>
                //         <td>${tag.slug}</td>
                //     </tr>`);
                location.reload();
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
                url: 'http://zeroweb.com/api/tag/' + id,
                data: {_method: 'DELETE'}
            }).done(function(tag){
                alert('This item ' + id + ' is deleted successfully!');
                $('#title').val('');
                $('#id').val('');
                $(`#${tag.id}`).remove();
            });
        }

        function getblogs(){
            $.ajax({
                url:'http://zeroweb.com/api/tag'
            }).done(function(tags){
                let output = '';
                let counter = 1 ;
                $.each(tags, function(key , tag){
                    output += `
                        <tr id="${tag.id}">
                        <td>${counter}</td>
                        <td>${tag.name}</td>
                        <td>${tag.slug}</td>
                        <td><a class="btn btn-primary btn-sm showLink" data-id="${tag.id}" data-name="${tag.name}" >Edit</a></td>
                        <td><a class="btn btn-danger btn-sm deleteLink"  data-id="${tag.id}">Delete</a></td>
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
 