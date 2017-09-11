<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <ul>
                <li><a href="{{ url('/categories') }}">Categories</a></li>
                <li><a href="{{ url('/products') }}">Procusts</a></li>
                <li><a href="{{ url('/customers') }}">Customers</a></li>
                <li><a href="{{ url('/orders') }}">Orders</a></li>
                <li><a href="{{ url('/orders/products') }}">OrdersProduct</a></li>
            </ul>
            
        </div>
    </body>
</html>
