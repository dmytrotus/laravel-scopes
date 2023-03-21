<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

  <a href="{{ url('/') }}" class="btn btn-primary btn-lg m-2">Back to welcome page</a>
  <div class="container mt-5">

    <h4>List of items</h4>
    {{ $items->links() }}
    <ul class="list-group">
      @foreach($items as $item)
      <li class="list-group-item">
        <h5>{{ $item->name }}</h5>
        <h5>{{ $item->price }}</h5>
        <h5>{{ $item->user->name }}</h5>
      </li>
      @endforeach


  </ul>

  </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>