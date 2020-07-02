@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2  d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#" id="my_info">
                    <span data-feather="home" class="fa fa-user"></span>
                    My Info
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="my_order">
                    <span class="fa fa-shopping-cart"></span>
                    My Orders
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="my_wish">
                    <span class="fa fa-heart"></span>
                    My Wish List
                    </a>
                </li>
            </ul>
        </div>
    </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">  
                <h1 class="h2" id="changeheadline">My Info</h1> 
            </div>
            <div id="infodiv" class="m-1 bg-light">
                <form>
                    <div class="col-md-4 m-1">
                            <img src="..." alt="usre Image" class="img-fluid">
                            <input type="file" name="" id="">
                    </div> 
                    <div class="form-row m-1">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Full Name</label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="Full Name" value="{{auth()->user()->name}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{auth()->user()->email}}">
                        </div>
                    </div>
                    
                    <div class="form-row m-1">
                    <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Confirm Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-row m-1">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Phone Number 1</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Your Phone Number">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Phone Number 2</label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Your second phone number if you ">
                        </div>
                    </div>
                    <div class="form-group m-1">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group m-1">
                        <label for="inputAddress2">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="form-row  m-1">
                        <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Alexandria</option>
                            <option>Cairo</option>
                            <option>Giza</option>
                        </select>
                        </div>
                        <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>...</option>
                        </select>
                        </div>
                        <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    <div class="form-group m-1">
                        <button type="submit" class="btn btn-primary mb-3">Update</button>
                    </div>
                </form>
            </div>
            <div id="orderdiv"  style="display: none">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Total Price</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>1 JULE 2020</td>
                            <td>Shipping</td>
                            <td>230 EGP for 1 item</td>
                            <td><a href="#" class="btn btn-info">View</a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>1 JULE 2020</td>
                            <td>Shipping</td>
                            <td>230 EGP for 1 item</td>
                            <td><a href="#" class="btn btn-info">View</a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>1 JULE 2020</td>
                            <td>Shipping</td>
                            <td>230 EGP for 1 item</td>
                            <td><a href="#" class="btn btn-info">View</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="wishdiv"  style="display: none">
                <div class="container-table-cart pos-relative">
                    <div class="wrap-table-shopping-cart bgwhite">
                        <table class="table-shopping-cart">
                            <tr class="table-head">
                                <th class="column-1"></th>
                                <th class="column-2">Product</th>
                                <th class="column-3">Price</th>
                                <th class="column-4 p-l-70">Quantity</th>
                                <th class="column-5">Total</th>
                                <th class="column-5">Actions</th>
                            </tr>

                            <tr class="table-row">
                                <td class="column-1">
                                    <div class="cart-img-product b-rad-4 o-f-hidden">
                                        <img src="images/item-10.jpg" alt="IMG-PRODUCT">
                                    </div>
                                </td>
                                <td class="column-2">Men Tshirt</td>
                                <td class="column-3">$36.00</td>
                                <td class="column-4">
                                    <div class="flex-w bo5 of-hidden w-size17">
                                        <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                            <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                        </button>

                                        <input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">

                                        <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                            <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </td>
                                <td class="column-5">$36.00</td>
                                <td class="column-5">
                                <a class="btn btn-dark text-white m-1">Add to Cart</a>
                                </td>
                            </tr>

                            <tr class="table-row">
                                <td class="column-1">
                                    <div class="cart-img-product b-rad-4 o-f-hidden">
                                        <img src="images/item-05.jpg" alt="IMG-PRODUCT">
                                    </div>
                                </td>
                                <td class="column-2">Mug Adventure</td>
                                <td class="column-3">$16.00</td>
                                <td class="column-4">
                                    <div class="flex-w bo5 of-hidden w-size17">
                                        <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                            <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                        </button>

                                        <input class="size8 m-text18 t-center num-product" type="number" name="num-product2" value="1">

                                        <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                            <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </td>
                                <td class="column-5">$16.00</td>
                                <td class="column-5">
                                    <a class="btn btn-dark text-white m-1">Add to Cart</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </main>        
    </div>
</div>
@include('layouts.inc.scripts')
<script>
$("#my_info").click(function ()
{
    $("#infodiv").show("slow");
    $("#orderdiv").hide("slow");
    $("#cartdiv").hide("slow");
    $("#wishdiv").hide("slow");
    $('#changeheadline').replaceWith('<h1 class="h2" id="changeheadline">My Info</h1>');
});

$("#my_order").click(function ()
{
    $("#orderdiv").show("slow");
    $("#infodiv").hide("slow");
    $("#cartdiv").hide("slow");
    $("#wishdiv").hide("slow");
    $('#changeheadline').replaceWith('<h1 class="h2"  id="changeheadline">My Orders</h1>');
});

$("#my_wish").click(function ()
{
    $("#wishdiv").show("slow");
    $("#orderdiv").hide("slow");
    $("#cartdiv").hide("slow");
    $("#infodiv").hide("slow");
    $('#changeheadline').replaceWith('<h1 class="h2"  id="changeheadline">My Wish List</h1>');
});
</script>
@endsection