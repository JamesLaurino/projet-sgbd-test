@extends("base")

@section("title")
    Welcome
@endsection

@section("body")

    @php
        $demo = true;
        echo $demo;
    @endphp

    <div @class(["container-fluid", "d-flex", "justify-content-center", "mt-5", "text-danger" => $demo])>
        <p>Hello world with bootstrap</p>
    </div>

@endsection
