<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style type="text/css">
         body {
              background-color: #141414;
         }
        .row1{
           display: inline-grid;
        }
        .row2{
            display: inline-grid;
        }
        .row3{
            display: inline-grid;
        }
     </style>
</head>
<body>

  
   <div class="row row-cols-1 row-cols-md-3">
     @foreach($products as $product)
    <div class="col mb-4">
     <div class="card">
      <img src="/images/{{$product->image}}" class="card-img-top" alt="...">
       <div class="card-body">
        <h5 class="card-title">{{$product->brand}}</h5>
           <p class="card-text"> 
                                <ul class="row1">
                                    <li class="mb-3 text-muted text-uppercase small">Model: {{$product->model}}</li>
                                    <li class="mb-2 text-muted text-uppercase small">
                                    RAM: {{$product->ram}}</li>
                                    <li class="mb-3 text-muted text-uppercase small">Processor: {{$product->processor}}</li>
                                </ul>

                                <ul class="row2">
                                    <li class="mb-3 text-muted text-uppercase small">SSD: {{$product->SSD}}</li>
                                    <li class="mb-3 text-muted text-uppercase small">HDD: {{$product->HDD}}</li>
                                </ul>

                                <ul>
                                   <li class="mb-3 text-muted text-uppercase small">DisplaySize: {{$product->displaySize}}</li>
                               </ul>

                                <ul class="row3">
                                   <li class="mb-3 text-muted text-uppercase small">Rating: {{$product->rating}}</li> 
                                   <li class="mb-3 text-muted text-uppercase small">Price: {{$product->price}}</li>
                                </ul>
            </p>
                   <a href="{{url('/donecart',$product->product_id)}}" class="btn btn-primary">ADD TO CART</a>
         </div>
      </div>
   </div>
   @endforeach
</div>
 
</body>
</html>
