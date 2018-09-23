<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
        
            <div class="top-right links">
                             
                <a href="{{ url('/product') }}">All Products</a>

            </div>
            <div class="content">
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" name="name" class="form-control" id="name"  placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPrice1">Price</label>
                    <input type="number" name="price" class="form-control" id="price" placeholder="Price">
                  </div>

                  <button id="save" class="btn btn-primary">Submit</button>
                  <br>
                  <br>
                  <a href="{{url('/product')}}"><button id="save" class="btn btn-primary">Go To Products </button></a>

            </div>
        </div>
<footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script type="text/javascript">

            $('#save').click(function(){
                $.ajax({
                  type:'get',
                  url:"{{url('insert')}}",
                  dataType:'json',
                  data: {'name':$('#name').val() , 'price':$('#price').val()},
                  success : function (data) {
                      sweetAlert("Hello world!");
                 $('#name').val('');
                 $('#price').val('');
                  }
                 });
                });
        </script>
</footer>
   
    </body>
</html>
