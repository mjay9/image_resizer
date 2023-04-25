<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nrich Image Resizer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" width="40" height="32"
                    class="d-inline-block align-text-top">
                <b>Nrich</b>
            </a>
        </div>
    </nav>
    @if(isset($success))
        <div class="alert alert-success">
            {{ $success }}
        </div>
    @endif
    <div class="container my-5">
        <h3>Please upload an image to resize the width!!</h3>
        <form action="{{ url('/image-upload') }}" method="POST" class="my-4" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" accept="image/*">
            <br>
            <br>
            <button type="submit" class="btn btn-primary">Upload Image</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>