@extends('home.app')

@section('content')
<div class="container-fluid px-6">
    <table class="table table-sm table-bordered" style="width: 100%;">
        <thead class="cifor-gradient-primary text-white">
            <tr>
                <th style="width: 5%;">No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataUser as $key => $ud)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $ud->name }}</td>
                <td>{{ $ud->email }}</td>
                <td>
                    @if($ud->is_status == '1')
                    <div class="badge bg-success-500 text-white">
                        Active
                    </div>
                    @elseif ($ud->is_status == '0')
                    <div class="badge bg-warning-500 text-white">
                        Need Approve
                    </div>
                    @else
                    <div class="badge">
                        Not Active
                    </div>
                    @endif
                </td>
                <td>
                    @if($ud->is_status == '0')
                    <form action="{{ route('user-approve', $ud->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-info">
                            Approve
                        </button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection