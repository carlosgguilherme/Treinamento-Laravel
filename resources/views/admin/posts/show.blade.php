<h1>Detalhes do Post {{ $post->title }}</h1>
<ul>
    <li><strong>Titulo: </strong>{{ $post->title }}</li>
    <li><strong>Conteúdo: </strong>{{ $post->content }}</li>
</ul>
<form method="post" action="{{ route('posts.destroy', $post->id) }}">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar o Post: {{ $post->title }}</button>
</form>