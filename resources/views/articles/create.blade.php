<!DOCTYPE html>
<html>
  <head>
    <title>Criar Artigo</title>
  </head>
  <body>
    <h1>Criar Artigo</h1>

    <form method="POST" action="{{ route('article.store') }}">
      @csrf
      <div>
        <label for="title">Título</label>
        <input type="text" name="title" id="title">
      </div>

      <div>
        <label for="text">Texto</label>
        <textarea name="text" id="text"></textarea>
      </div>

      <button type="submit">Criar</button>
    </form>
  </body>
</html>
