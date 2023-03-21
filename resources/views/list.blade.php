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

    <h4>List of products</h4>
    <ul class="list-group">
      @foreach($products as $product)
      <li class="list-group-item">
        <h5>{{ $product->name }}</h5>
        <img src="{{ asset('storage/'.$product->mainImage()->path) }}" width="60" alt="">
        <!-- <img src="{{ asset('storage/'.$product->main_image) }}" width="60" alt=""> -->
      </li>
      @endforeach

  </ul>

  </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>