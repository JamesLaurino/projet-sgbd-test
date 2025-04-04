<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Cars</title>
</head>
<body>

<div class="container-fluid d-flex justify-content-center bg-dark">
    <h1 class="m-3 text-white">Task List</h1>
</div>

<div class="container d-flex justify-content-center mt-5">
    <form method="POST" action="{{route('task.store')}}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name"
                   value="{{old('name', 'titre par défault')}}">
            <div class="text-danger">
                @error("name")
                    {{ $message }}
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="description">Example textarea</label>
            <textarea name="description" class="form-control" id="description" rows="5" cols="5">
            </textarea>
            <div class="text-danger">
                @error('description')
                    {{$message}}
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add tast</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>
