@extends('layouts.app')

@section('content')
<div class="container">
    <div class="w-full flex justify-center">
      <div class="w-10/12 mt-8 flex justify-center">
        <div class="w-6/12">
          <img src="/storage/{{ $post->image }}" alt="">
        </div>
        <div class="w-6/12 flex flex-col pl-6">
          <p class="text-2xl font-bold">{{ $post->user->username }}</p>
          <p>{{ $post->caption }}</p>
        </div>
      </div>
    </div>
</div>
@endsection
