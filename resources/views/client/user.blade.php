@extends("base")

@section("title")
    users
@endsection

@section("body")
    <div class="container mt-5">
        <table class="table mt-3">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">CreationDate</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name']  }}</td>
                    <td>{{ $user['created_at']  }}</td>
                    <td>{{ $user['email']  }}</td>
                    <td>{{ $user['password']  }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
