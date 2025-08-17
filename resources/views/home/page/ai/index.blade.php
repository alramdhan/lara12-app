@extends('home.app')

@section('content')
<div class="grid grid-cols-4 gap-1">
    <div class="col-span-4 relative">
        <textarea placeholder="Ask Anything" class="form-control" rows="4"></textarea>
        <div class="absolute right-4 bottom-2">
            <button class="">=></button>
        </div>
    </div>
</div>
@endsection