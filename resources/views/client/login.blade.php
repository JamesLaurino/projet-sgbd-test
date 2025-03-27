@extends("base")

@section("title")
    login
@endsection

@section("body")
    <div class="container d-flex justify-content-center mt-5">
        <form method="POST" action="{{route('auth.login')}}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email"
                       value="{{old('email', 'votre email')}}">
                <div class="text-danger">
                    @error("email")
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password"/>
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
    </div>
@endsection
