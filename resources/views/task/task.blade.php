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

@if(session("success"))
    <div class="container d-flex justify-content-center mt-5">
        <div class="alert alert-success" role="alert">
            {{ session("success") }}
        </div>
    </div>
@endif

<div class="container mt-5">
    <table class="table mt-3">
        <thead>
        <tr>
{{--            <th scope="col">#</th>--}}
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">CreationDate</th>
            <th scope="col">Category</th>
            <th scope="col">Detail</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
{{--                <th scope="row">{{ $loop->index }}</th>--}}
                <td>{{ $task['id'] }}</td>
                <td>{{ $task['name']  }}</td>
                <td>{{ $task['created_at']  }}</td>
                <td>
                    @if($task->category)
                        {{ $task->category->name }}
                    @else
                        No category
                    @endif
                </td>
                <td><a href="{{ route('task.show', ['id' => $task['id']]) }}" class="btn btn-warning">Detail</a></td>
                <td><a href="{{ route('task.delete', ['id' => $task['id']]) }}" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="mt-5 d-flex justify-content-center">
        {{$tasks->links()}}
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>
