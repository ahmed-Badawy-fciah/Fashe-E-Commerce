@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.inc.sidebar')

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Color</h1>
                
            </div>
            <h1 class="text-secondary text-bold">Welcome Admin</h1>
            <p>Go to the home page? <a href="{{url('/')}}" class="btn btn-light btn-round">Go</a></p> 
            <hr>


            <h2>Add new Color</h2>

            <form class="m-2 bg-light">
                <div class="form-group m-3">
                    <label for="">Color Name</label>
                    <input type="text" class="form-control" placeholder="Enter The color name. Black for example">
                </div>
                <div class="form-group m-3">
                    <label for="">Color Value</label>
                    <input id="demo-input" type="text" value="rgb(255, 255, 255,0)" class="form-control" />
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
                        <td>1,002</td>
                        <td>amet</td>
                        <td>consectetur</td>
                        <td>adipiscing</td>
                        <td>elit</td>
                        </tr>
                        <tr>
                        <td>1,003</td>
                        <td>Integer</td>
                        <td>nec</td>
                        <td>odio</td>
                        <td>Praesent</td>
                        </tr>
                        <tr>
                        <td>1,003</td>
                        <td>libero</td>
                        <td>Sed</td>
                        <td>cursus</td>
                        <td>ante</td>
                        </tr>
                        <tr>
                        <td>1,004</td>
                        <td>dapibus</td>
                        <td>diam</td>
                        <td>Sed</td>
                        <td>nisi</td>
                        </tr>
                        <tr>
                        <td>1,005</td>
                        <td>Nulla</td>
                        <td>quis</td>
                        <td>sem</td>
                        <td>at</td>
                        </tr>
                        <tr>
                        <td>1,006</td>
                        <td>nibh</td>
                        <td>elementum</td>
                        <td>imperdiet</td>
                        <td>Duis</td>
                        </tr>
                        <tr>
                        <td>1,007</td>
                        <td>sagittis</td>
                        <td>ipsum</td>
                        <td>Praesent</td>
                        <td>mauris</td>
                        </tr>
                        <tr>
                        <td>1,008</td>
                        <td>Fusce</td>
                        <td>nec</td>
                        <td>tellus</td>
                        <td>sed</td>
                        </tr>
                        <tr>
                        <td>1,009</td>
                        <td>augue</td>
                        <td>semper</td>
                        <td>porta</td>
                        <td>Mauris</td>
                        </tr>
                        <tr>
                        <td>1,010</td>
                        <td>massa</td>
                        <td>Vestibulum</td>
                        <td>lacinia</td>
                        <td>arcu</td>
                        </tr>
                        <tr>
                        <td>1,011</td>
                        <td>eget</td>
                        <td>nulla</td>
                        <td>Class</td>
                        <td>aptent</td>
                        </tr>
                        <tr>
                        <td>1,012</td>
                        <td>taciti</td>
                        <td>sociosqu</td>
                        <td>ad</td>
                        <td>litora</td>
                        </tr>
                        <tr>
                        <td>1,013</td>
                        <td>torquent</td>
                        <td>per</td>
                        <td>conubia</td>
                        <td>nostra</td>
                        </tr>
                        <tr>
                        <td>1,014</td>
                        <td>per</td>
                        <td>inceptos</td>
                        <td>himenaeos</td>
                        <td>Curabitur</td>
                        </tr>
                        <tr>
                        <td>1,015</td>
                        <td>sodales</td>
                        <td>ligula</td>
                        <td>in</td>
                        <td>libero</td>
                        </tr>
                    </tbody>
                    </table>
                </div> 
        </main>
    </div>
</div>
@include('layouts.inc.scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/3.2.0/js/bootstrap-colorpicker.min.js"></script>
<script>
    $(function () {
      // Basic instantiation:
      $('#demo-input').colorpicker();
      
      // Example using an event, to change the color of the #demo div background:
      $('#demo-input').on('colorpickerChange', function(event) {
        $('#demo').css('background-color', event.color.toString());
      });
    });
  </script>
<script>
    $(document).ready( function () {
        $('#table_id').DataTable();
    });
</script>
@endsection
 