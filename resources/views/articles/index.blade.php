<h1>Hello World</h1>

<table>
  <thead>
      <title>Artigo</title>
    </thead>
  <tbody>
    <div>
      @foreach($article as $article)
      <h1>{{ $article->title }}</h1>
      <p>{{ $article->text }}</p>
      @endforeach
    </div>
  </tbody>
</table>