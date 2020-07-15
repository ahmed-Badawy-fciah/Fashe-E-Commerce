@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.inc.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                
            </div>
            <h1 class="text-secondary text-bold">Welcome Admin</h1>
            <p>Go to the home page? <a href="{{url('/')}}" class="btn btn-light btn-round">Go</a></p> 
            <hr>
            <h2>Section title</h2>

            <div class="table-responsive">
                    <table class="table table-striped table-sm " id="table_id">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Order Code</th>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Order details</th>
                        <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1,001</td>
                        <td>2525</td>
                        <td>Khaled</td>
                        <td>جنب فتح الله</td>
                        <td>01114470249</td>
                        <td>Product1, product2, product3, product4</td>
                        <td class="table-warning">review</td>
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
 