@extends("base")

@section('title')
    Upload
@endsection

@section('body')

    @if(session("success"))
        <div>
            {{session("success")}}
        </div>
    @endif

    <div class="container d-flex justify-content-center mt-5">
        <form action="/upload" method="POST" enctype="multipart/form-data">
            @csrf
            <input class="form-control" type="file" name="document">
            <button class="btn btn-success mt-3" type="submit">Upload</button>
        </form>
    </div>
@endsection
