let carrito = [];

function agregarAlCarrito(producto) {
  carrito.push(producto);
  mostrarCarrito();
}

function mostrarCarrito() {
  const lista = document.getElementById('carrito');
  lista.innerHTML = '';
  carrito.forEach((item) => {
    const li = document.createElement('li');
    li.textContent = `${item.nombre} - $${item.precio}`;
    lista.appendChild(li);
  });
}

function enviarPedido() {
  if (carrito.length === 0) {
    alert("El carrito está vacío.");
    return;
  }

  const datos = carrito.map(p => `${p.nombre} ($${p.precio})`).join("\n");
  document.getElementById('pedidoInput').value = datos;
  document.getElementById('formularioPedido').submit();
}
