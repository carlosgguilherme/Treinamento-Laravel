@extends('admin.layouts.app')

@section('title', "Editando {$post->title}" )

@section('content')
<h1>Editar o Post {{ $post->title }}</h1>

<form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @include('admin.posts._partials.form')
   
</form>
@endsection