<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/js/app.js')
  </head>
  <body>
    <div id="app">

      <header class="py-2 bg-warning shadow">

          <nav class="navbar navbar-expand-md fw-bold">
            <div class="container">
              <a class="navbar-brand" href="#">Boolstore</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse flex-grow-0" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

      </header>

      <main>
        {{-- <ul>
          @foreach ($products as $product)
            <li>
              <p>{{$product->category->name}}</p>
              <p>{{$product->price}}</p>
              <p>{{$product->name}}</p>
              <p>{{$product->description}}</p>
              <p>{{$product->is_featured}}</p>
            </li>
          @endforeach
        </ul> --}}
        <section class="futured_products py-4">
          <div class="container">
            <div class="row justify-content-between">

              @foreach($products as $product)
                <div class="col-auto">
                  <div class="product_card">
                    <div class="product_card__header">
                      <h5>{{$product->category->name}}</h5>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </section>
      </main>
    </div>
  </body>
</html>
