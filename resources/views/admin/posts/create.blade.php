<h1>Cadastrar novo post</h1>
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('posts.store') }}" method="post">
    @csrf
    <input type="text" name="title" id="title" placeholder="Titulo" value="{{ old('title') }}">
    <br>
    <textarea name="content" id="content" cols="30" rows="4" placeholder="Conteudo">{{ old('content') }}</textarea>
    <br>
    <button type="submit">Enviar</button>
</form>