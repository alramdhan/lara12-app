@extends('home.app')
@section('title', 'User | Laravel 12 Web Template')
@section('content')
<table class="table table-sm table-bordered" style="width: 100%;" id="table-user">
    <thead class="text-start bg-gradient-primary text-white" style="border-radius: 16px;">
        <tr>
            <th class="p-1" style="width: 5%;">No</th>
            <th class="p-1">Nama</th>
            <th class="p-1">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($userData as $key => $user)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection