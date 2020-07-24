@extends('layouts.app')

@section('content')
<div class="container">
  <div class="w-full flex justify-center">
    <div class="w-8/12">
      <form class="w-full" action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">

        @csrf
        @method('PATCH')

        <div class="w-full my-4">
          <p class="text-3xl font-bold">Edit Profile</p>
        </div>
        <div class="form-group w-full flex flex-col">
            <label for="title" class="">Title</label>
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}"  autocomplete="title" autofocus>

            @if($errors->has('title'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group w-full flex flex-col">
            <label for="description" class="">Description</label>
            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}"  autocomplete="description" autofocus>

            @if($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group w-full flex flex-col">
            <label for="url" class="">Url</label>
            <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}"  autocomplete="url" autofocus>

            @if($errors->has('url'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('url') }}</strong>
                </span>
            @endif
        </div>

        <div class="w-full flex flex-col">
          <label for="image" class="">Profile Image</label>
          <input type="file" id="image" name="image" value="" class="@error('image') is-invalid @enderror">
          @error('image')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>

        <div class="w-full pt-3">
          <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-400">Save Profile</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
