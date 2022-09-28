@extends('layouts.app') {{-- extends digunkan untuk melakukan pewarisan pada layout yang sudah dibuat di app.blade.php sehingga tidak perlu membuat layout kembali --}}

@section('title', 'Blog Posts' ) {{-- menampilkan title --}}

@section('content') {{-- awal dari section content sesuai layout--}}


@forelse ($posts as $key => $post )

{{-- @break($key == 2) --}}

{{-- @continue($key == 1) --}}

@if($loop->even)
<div>{{ $key }}. {{ $post['title'] }}</div>

@else
<div style="background-color: silver">{{ $key }}. {{ $post['title'] }}</div>

@endif

@empty
<p>Sorry, no post found</p>

@endforelse
@endsection
