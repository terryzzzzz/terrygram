@extends('layouts.app')

@section('content')
<div class="container">
    <div class="w-full flex justify-center">
      <div class="w-8/12">
        <form class="w-full" action="/p" enctype="multipart/form-data" method="post">

          @csrf

          <div class="w-full my-4">
            <p class="text-3xl font-bold">Add New Post</p>
          </div>
          <div class="form-group w-full flex flex-col">
              <label for="caption" class="">Post Caption</label>
              <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption" autofocus>

              @if($errors->has('caption'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('caption') }}</strong>
                  </span>
              @endif
          </div>
          <div class="w-full flex flex-col">
            <label for="image" class="">Post Image</label>
            <input type="file" id="image" name="image" value="" class="@error('image') is-invalid @enderror">
            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="w-full pt-3">
            <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-400">Add New Post</button>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection
