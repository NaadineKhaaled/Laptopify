<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter laptop specifications</title>
</head>
<body>
    <form action="{{url('/store')}}" method="post">
    @csrf
    <div class="form-group">
        <label>Laptop Brand</label>
        <input name="brand" type="text" class="form-control" placeholder="Enter laptop brand">
    </div>
    <div class="form-group">
        <label>Model</label>
        <input name="model" type="text" class="form-control"  placeholder="Model">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input name="price" type="number" class="form-control"  placeholder="Price">
    </div>
    <div class="form-group">
        <label>RAM</label>
        <input name="ram" type="number" class="form-control"  placeholder="RAM in GBs">
    </div>
    <div class="form-group">
        <label>Display Size</label>
        <input name="displaySize" type="number" class="form-control"  placeholder="Display Size">
    </div>
     <div class="form-group">
        <label>Image</label>
        <input name="image" type="text" class="form-control"  placeholder="Image">
    </div>
    <div class="form-group">
        <label>Rating</label>
        <input name="rating	" type="number" class="form-control"  placeholder="Rating">
    </div>
    <div class="form-group">
        <label>Processor</label>
        <input name="processor" type="text" class="form-control"  placeholder="Processor">
    </div>
    <div class="form-group">
        <label>HDD</label>
        <input name="HDD" type="number" class="form-control"  placeholder="HDD">
    </div>
    <div class="form-group">
        <label>SSD</label>
        <input name="SSD" type="number" class="form-control"  placeholder="SSD">
    </div>
    <div class="form-group">
        <label>Graphics</label>
        <input name="Graphics" type="text" class="form-control"  placeholder="Graphics">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>
