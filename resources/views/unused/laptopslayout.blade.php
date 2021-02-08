<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <tbody>
        <tr>
            <td>Brand,</td>
            <th scope="row">Model,</th>
            <td>Price,</td>
            <td>Rating,</td>
            <td>RAM,</td>
            <td>Size,</td>
            <td>Processor,</td>
            <td>HDD,</td>
            <td>SSD,</td>
            <td>Graphics</td>
        <td>
        </tr>
        <br>
        @foreach($products as $product)
            <tr>
                <td>{{$product->brand}},</td>
                <th scope="row">{{$product->model}},</th>
                <td>{{$product->price}},</td>
                <td>{{$product->rating}},</td>
                <td>{{$product->ram}},</td>
                <td>{{$product->displaySize}},</td>
                <td>{{$product->processor}},</td>
                <td>{{$product->HDD}},</td>
                <td>{{$product->SSD}},</td>
                <td>{{$product->Graphics}}</td>
                <td>
            </tr>
            <br>
        @endforeach
    </tbody>

</body>
</html>
