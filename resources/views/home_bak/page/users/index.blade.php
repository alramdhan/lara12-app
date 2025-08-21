@extends('home.app')
@section('title', 'User | Laravel 12 Web Template')
@section('content')
<div class="container-fluid">
    <table class="display compact" style="width: 100%;" id="table-user">
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
</div>
@endsection

@push('dashboard')
<script type="module">
    $(document).ready(function() {
        let table = new DataTable('#table-user', {
            responsive: true
        });
    });
</script>
@endpush