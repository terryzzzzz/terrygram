@extends('layouts.app')

@section('content')
<div class="container">
    <div class="w-full flex justify-center">
      <div class="w-3/12 p-5">
        <img class="rounded-full" src="https://instagram.fmel8-1.fna.fbcdn.net/v/t51.2885-15/e35/11352337_1687784871451206_1366911275_n.jpg?_nc_ht=instagram.fmel8-1.fna.fbcdn.net&_nc_cat=106&_nc_ohc=QtAf6QWqoFEAX80bm5j&oh=2a3abcc99518e6a4fd0ff24fd768ebb3&oe=5F317F30" alt="">
      </div>
      <div class="w-7/12 flex flex-col p-5">
        <div class="mb-4 flex justify-between items-end">
          <p class="text-2xl font-bold">{{ $user->username }}</p>
          <a href="/p/create">Add New Post</a>
          @can ('update', $user->profile)
            <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
          @endcan
        </div>
        <div class="flex mb-4">
          <p class="mr-4"><span class="font-bold">{{ $user->posts->count() }}</span> posts</p>
          <p class="mr-4"><span class="font-bold">3.1m</span> followers</p>
          <p><span class="font-bold">0</span> following</p>
        </div>
        <div class="">
          <p class="font-bold">{{ $user->profile->title }}</p>
          <p>{{ $user->profile->description }}</p>
          <a href="#">{{ $user->profile->url }}</a>
        </div>
      </div>
    </div>

    <div class="w-full flex justify-center">
      <div class="w-10/12 flex flex-wrap">
        @foreach ($user->posts as $post)
          <div class="w-1/3 p-4">
            <a href="/p/{{ $post->id }}">
              <img src="/storage/{{ $post->image }}" alt="">
            </a>
          </div>
        @endforeach
      </div>
    </div>
</div>
@endsection
