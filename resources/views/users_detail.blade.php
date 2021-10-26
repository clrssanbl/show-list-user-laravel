@extends('layouts.main')

@section('content')
      <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Avatar</th>
            <th scope="col">Email</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
        </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{ $user['id'] }}</th>
            <td><img src="{{ $user['avatar'] }}"></td>
            <td>{{ $user['email'] }}</td>
            <td>{{ $user['first_name'] }}</td>
            <td>{{ $user['last_name'] }}</td>
        </tr>
        </tbody>
      </table>
@endsection