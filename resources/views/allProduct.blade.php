<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div style="height: 50px;direction: ltr;">
            <a href="{{url('/')}}" class="btn btn-primary"><h3>New Product</h3></a>
        </div>
        
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>

            </tr>
        </thead>
        <tbody>
             @foreach($data as $product)
            <tr class="product">
                <td>{{$product->name}}</td>
                <td class="price">{{$product->price}}</td>
            </tr>
            @endforeach
            <tr>
                <td> Total Price</td>
                <td id="price"></td>
            </tr>
        </tfoot>
    </table>

    <script type="text/javascript">
        $(document).ready(function() {
    $('#example').DataTable();
} );


    var newTotal = 0;
     $(".product").each(function() {
        var price = parseInt($(this).find('.price').text()); 
        newTotal = newTotal + price;
    });
    $("#price").text(newTotal);


    </script>
    </body>
</html>