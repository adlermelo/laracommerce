<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laracommerce</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .carousel-item {
      height: 200px;
    }

    .product-image {
      max-height: 200px;
      object-fit: cover;
    }

    .card-body-custom {
      height: 150px;
    }
  </style>
</head>
<body>  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Laracommerce</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg class="bi bi-house" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M8 3.293l5 5V14h-3v-3H6v3H3v-5.707l5-5zM7 9V7h2v2H7z"/>
              <path fill-rule="evenodd" d="M2 14h12V7H2v7zm0-8.618l6-6 6 6H2v-.382z"/>
            </svg>
            Home
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">
                <svg class="bi bi-card-list" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 4a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v1H2V4zm0 2h14v6a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6zm12-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v1h12z"/>
                    <path fill-rule="evenodd" d="M2 6h5v1H2V6zm0 2h5v1H2V8zm0 2h4v1H2v-1zm0 2h4v1H2v-1zm7-4h3v1h-3V6zm0 2h2v1h-2V8zm0 2h1v1h-1v-1z"/>
                </svg>
              Products
            </a>
            <a class="dropdown-item" href="#">
              <svg class="bi bi-card-list" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 4a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v1H2V4zm0 2h14v6a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6zm12-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v1h12z"/>
                <path fill-rule="evenodd" d="M2 6h5v1H2V6zm0 2h5v1H2V8zm0 2h4v1H2v-1zm0 2h4v1H2v-1zm7-4h3v1h-3V6zm0 2h2v1h-2V8zm0 2h1v1h-1v-1z"/>
              </svg>
              Categories
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
                <svg class="bi bi-card-list" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2 4a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v1H2V4zm0 2h14v6a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6zm12-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v1h12z"/>
                    <path fill-rule="evenodd" d="M2 6h5v1H2V6zm0 2h5v1H2V8zm0 2h4v1H2v-1zm0 2h4v1H2v-1zm7-4h3v1h-3V6zm0 2h2v1h-2V8zm0 2h1v1h-1v-1z"/>
                  </svg>
              Products on offer
            </a>
          </div>
        </li>      
        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg class="bi bi-cart" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4 1.5A1.5 1.5 0 0 1 5.5 3h8a1.5 1.5 0 0 1 0 3H5.5A1.5 1.5 0 0 1 4 4.5a1.5 1.5 0 0 1 0-3zm9.5 1.5a.5.5 0 0 0 0-1h-11a.5.5 0 1 0 0 1h11zM2.97 4.5L2 6v7.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V6l-.97-1h-11zM3.5 13a.5.5 0 1 1 0 1h9a.5.5 0 0 1 0-1h-9z"/>
            </svg>
            Cart
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Access Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                  @auth
                    <a href="{{ url('/home') }}" class="dropdown-item">Home</a>
                  @else
                    <a href="{{ route('login') }}" class="dropdown-item">Log in</a>
                    @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                    @endif
                  @endauth
                </div>
              @endif
            </div>
          </li>
          
      </ul>
    </div>
  </nav>
  <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2">Welcome to Laracommerce</h1>
          <p class="lead mb-5 text-white-50">Check out our amazing products!</p>
        </div>
      </div>
    </div>
  </header>
  <div class="container mt-1">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://dummyimage.com/1200x200/000/fff" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://dummyimage.com/1200x200/000/fff" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://dummyimage.com/1200x200/000/fff" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-3">Categorias</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Categoria 1</a>
          <a href="#" class="list-group-item">Categoria 2</a>
          <a href="#" class="list-group-item">Categoria 3</a>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row" id="products"></div>
      </div>
    </div>
  </div>

  

  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Laracommerce &copy; 2023</p>
    </div>
  </footer>

  <!-- Product Modal -->
  <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <img id="productModalImage" class="img-fluid img-thumbnail rounded" alt="Product Image">
            </div>
            <div class="col-lg-6">
              <h6 id="productModalPrice"></h6>
              <p id="productModalDescription"></p>
              <p><b>Desconto:</b> <span id="productModalDiscount"></span>%</p>
              <p><b>Avaliação:</b> <span id="productModalRating"></span>/5</p>
              <p><b>Estoque:</b> <span id="productModalStock"></span></p>
              <p><b>Marca:</b> <span id="productModalBrand"></span></p>
              <p><b>Categoria:</b> <span id="productModalCategory"></span></p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Add to Cart</button>
          <button type="button" class="btn btn-success">Buy</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    fetch('https://dummyjson.com/products')
      .then(response => response.json())
      .then(data => {
        const products = data.products;
        const productsContainer = document.getElementById('products');

        products.forEach((product, index) => {
          const productElement = document.createElement('div');
          productElement.classList.add('col-lg-4', 'col-md-6', 'mb-4');

          productElement.innerHTML = `
            <div class="card h-100">
              <a href="#"><img class="card-img-top product-image img-fluid img-thumbnail rounded" src="${product.images[0]}" alt="Thumbnail"></a>
              <div class="card-body card-body-custom">
                <h6 class="card-title">
                  <a href="#">${product.title}</a>
                </h6>
                <h6>$${product.price}</h6>
                <p class="card-text"><b>Avaliação:</b> ${product.rating}/5</p>
              </div>
              <div class="card-footer">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal" data-product-index="${index}">+</button>
                <button type="button" class="btn btn-danger">Add to Cart</button>
                <button type="button" class="btn btn-success">Buy</button>
              </div>
            </div>
          `;

          productsContainer.appendChild(productElement);
        });

        // Product Modal Event Listener
        const productModals = document.querySelectorAll('[data-toggle="modal"]');
        productModals.forEach(modal => {
          modal.addEventListener('click', () => {
            const productIndex = modal.getAttribute('data-product-index');
            const selectedProduct = products[productIndex];

            document.getElementById('productModalLabel').textContent = selectedProduct.title;
            document.getElementById('productModalImage').setAttribute('src', selectedProduct.images[2]);
            document.getElementById('productModalPrice').textContent = `$${selectedProduct.price}`;
            document.getElementById('productModalDescription').textContent = selectedProduct.description;
            document.getElementById('productModalDiscount').textContent = selectedProduct.discountPercentage;
            document.getElementById('productModalRating').textContent = selectedProduct.rating;
            document.getElementById('productModalStock').textContent = selectedProduct.stock;
            document.getElementById('productModalBrand').textContent = selectedProduct.brand;
            document.getElementById('productModalCategory').textContent = selectedProduct.category;
          });
        });
      })
      .catch(error => {
        console.error('Error:', error);
      });
  </script>
</body>
</html>
