@extends('home.app')
@section('title', 'Prompt AI | Laravel 12 Web Builder')
@section('content')
<div class="d-flex align-items-end" style="height: 70vh; overflow: hidden;">
    <div class="w-100 m-2 position-relative text-center">
        <h3 class="h4 mb-5 text-gray-50">What are you looking for?</h3>
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