@extends('home.app')
@section('title', 'Prompt AI | Laravel 12 Web Builder')
@section('content')
<div class="grid grid-cols-4 gap-1">
    <div class="col-span-4 position-relative">
        <textarea placeholder="Ask Anything" class="form-control" rows="4" style="resize: none; border-radius: 24px;"></textarea>
        <!-- <input type="text" class="form-control" valign="top" style="height: 120px; box-sizing: border-box" placeholder="Ask Anything" /> -->
        <div class="position-absolute end-1 bottom-6">
            <button class="btn bg-gradient-primary rounded-circle p-2 m-0" style="width: 40px; height: 40px;">
                <i class="fa-solid fa-arrow-up" style="font-size: 16px;"></i>
            </button>
        </div>
    </div>
</div>
@endsection