@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.inc.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Caregory</h1>
                
            </div>
            <h1 class="text-secondary text-bold">Welcome Admin</h1>
            <p>Go to the home page? <a href="{{url('/')}}" class="btn btn-light btn-round">Go</a></p> 
            <hr>


            <h2>Add new Category</h2>

            <form class="m-2 bg-light">
                <div class="form-group m-1">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" placeholder="Enter The Category Name">
                </div>

                <div class="form-group m-1">
                    <label >category size (optional)</label>
                    <select multiple class="form-control" >
                    <option>Small</option>
                    <option>Meduim</option>
                    <option>Large</option>
                    <option>Extra Larage</option>
                    <option>44 mm</option>
                    <option>45 mm</option>
                    <option>46 mm</option>
                    <option>47 mm</option>
                    </select>
                </div>

                <div class="form-group m-1">
                    <label >category Colors (optional)</label>
                    <select multiple class="form-control" >
                    <option class="bg-danger">Red</option>
                    <option>White</option>
                    <option>Black</option>
                    </select>
                </div>
                <div class="form-check form-check-inline m-1">
                    <div class="filter-color p-t-22 p-b-50 bo3">
                                <div class="m-text15 p-b-12">
                                    Color
                                </div>

                                <ul class="flex-w">
                                    <li class="m-r-10">
                                        <input class="checkbox-color-filter" id="color-filter1" type="checkbox" name="color-filter1">
                                        <label class="color-filter color-filter1" for="color-filter1"></label>
                                    </li>

                                    <li class="m-r-10">
                                        <input class="checkbox-color-filter" id="color-filter2" type="checkbox" name="color-filter2">
                                        <label class="color-filter color-filter2" for="color-filter2"></label>
                                    </li>

                                    <li class="m-r-10">
                                        <input class="checkbox-color-filter" id="color-filter3" type="checkbox" name="color-filter3">
                                        <label class="color-filter color-filter3" for="color-filter3"></label>
                                    </li>

                                    <li class="m-r-10">
                                        <input class="checkbox-color-filter" id="color-filter4" type="checkbox" name="color-filter4">
                                        <label class="color-filter color-filter4" for="color-filter4"></label>
                                    </li>

                                    <li class="m-r-10">
                                        <input class="checkbox-color-filter" id="color-filter5" type="checkbox" name="color-filter5">
                                        <label class="color-filter color-filter5" for="color-filter5"></label>
                                    </li>

                                    <li class="m-r-10">
                                        <input class="checkbox-color-filter" id="color-filter6" type="checkbox" name="color-filter6">
                                        <label class="color-filter " style="background-color: #fff390;" for="color-filter6"></label>
                                    </li>

                                    <li class="m-r-10">
                                        <input class="checkbox-color-filter" id="color-filter7" type="checkbox" name="color-filter7">
                                        <label class="color-filter color-filter7" for="color-filter7"></label>
                                    </li>
                                </ul>
                            </div>
                    </div>
                <div class="bfh-colorpicker" data-name="colorpicker2" data-color="#FF0000">
                </div>
                <div class="form-group m-3">
                    <button type="submit" class="btn btn-primary mb-3">Submit</button>
                    <button type="reset" class="btn btn-info mb-3">Clear</button>
                </div>
            </form>
            <div class="table-responsive">
                    <table class="table table-striped table-sm " id="table_id">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Header</th>
                        <th>Header</th>
                        <th>Header</th>
                        <th>Header</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1,001</td>
                        <td>Lorem</td>
                        <td>ipsum</td>
                        <td>dolor</td>
                        <td>sit</td>
                        </tr>
                        <tr>
                        
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
 