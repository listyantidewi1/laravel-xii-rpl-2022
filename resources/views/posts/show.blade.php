@extends('layouts.app') {{-- extends digunkan untuk melakukan pewarisan pada layout yang sudah dibuat di app.blade.php sehingga tidak perlu membuat layout kembali --}}

@section('title', $post['title'] ) {{-- menampilkan title --}}

@section('content') {{-- awal dari section content sesuai layout--}}

{{-- directive if berfungsi untuk melakukan render data tertentu sesuai kondisi benar atau salah --}}
@if($post['is_new'])
<div>A new blog post!</div>
@else
<div>An old blog post!</div>
@endif

<h1>{{ $post['title'] }}</h1>
<p>{{ $post['content'] }}</p>

@endsection
