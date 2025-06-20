let carrito = [];
let numProducts = 0;

cargarCarrito();
localStorage.clear();

function agregarAlCarrito(idProducto) {
  const counterProduct = document.getElementById("counter-product");
  carrito.push(idProducto);
  console.log(carrito);
  numProducts++;
  counterProduct.textContent = numProducts;
  alert("PRoducto agregado con exito")
  guardarCarrito();
}

function guardarCarrito() {
  localStorage.setItem('carrito', JSON.stringify(carrito));
  localStorage.setItem('numProducts', numProducts);
}

function cargarCarrito() {
  const carritoGuardado = localStorage.getItem('carrito');
  const cantidadGuardada = localStorage.getItem('numProducts');

  if (carritoGuardado && cantidadGuardada) {
    carrito = JSON.parse(carritoGuardado);
    numProducts = parseInt(cantidadGuardada);
    document.getElementById("counter-product").textContent = numProducts;
  }
}

