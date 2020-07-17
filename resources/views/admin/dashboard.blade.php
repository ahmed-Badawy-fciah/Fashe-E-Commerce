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
        <div class="card-columns mt-3">
        
            <div class="card border-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body text-primary">
                    <h5 class="card-title">Orders Today</h5>
                    <p class="card-text">
                        Number of Orders Toaday is <span class="bg-danger text-white"> 15 Orders </span>
                        <a href="{{url('/admin/order')}}" target="_blank" >Watch All Orders?</a>
                    </p>
                </div>
            </div>
            <div class="card border-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body text-secondary">
                    <h5 class="card-title">Secondary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body text-success">
                    <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card border-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body text-danger">
                    <h5 class="card-title">Danger card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card border-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body text-warning">
                    <h5 class="card-title">Warning card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card border-info mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body text-info">
                    <h5 class="card-title">Info card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card border-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Light card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            <div class="card border-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body text-dark">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        </main>
    </div>
</div>
@include('layouts.inc.scripts')

@endsection