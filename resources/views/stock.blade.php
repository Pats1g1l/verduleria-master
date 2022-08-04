<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Grupo-1 Ambar-Patricio-Marcos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" type="text" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">GRUPO 1</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/index">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Sobre Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/contacto">Contacto</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Tienda</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Nuestros Productos</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="http://127.0.0.1:8000/stock">Stock Productos</a></li>
                                <li><a class="dropdown-item" href="#!">Nuevos Productos</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Carrito 
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                   
                            <a class="dropdown-item" href="http://127.0.0.1:8000/login">Iniciar Sesion</a>

                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Inventario Stock -Evaluacion 1</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Tienda de Productos Online</p>
                </div>
            </div>
        </header>
        <br>
<div class="container">
        <select class="form-select" aria-label="Default select example">
  <option selected>Seleccione una opcion</option>
  <option value="1">Actualizar</option>
  <option value="2">Eliminar</option>
  <option value="3">Consultar</option>
</select>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Sucursal </label>
  <input type="sucursal" class="form-control" id="exampleFormControlInput1" placeholder="Ejemplo --- Egaña">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Codigo </label>
  <input type="codigo" class="form-control" id="exampleFormControlInput1" placeholder="7478">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombre Producto </label>
  <input type="nombreP" class="form-control" id="exampleFormControlInput1" placeholder="papaya">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Precio </label>
  <input type="precio" class="form-control" id="exampleFormControlInput1" placeholder="$ 1.990 ">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Descripcion de Producto</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary btn-block mb-4">
                Enviar
              </button>
</div>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Grupo 1 &copy; Ámbar 😻 Adriazola - Patricio 🎸 Almonacid - Marcos 🐶 Toro </p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
