class cardProduct extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    this.render();
    //this.disp;
    // Debug: Agregar evento de clic para verificar si se ejecuta
    this.addEventListener('click', (e) => {
      console.log('Card clicked:', this._id);
      // No prevenir el comportamiento por defecto para que el enlace padre funcione
    });
  }

  static get observedAttributes() {
    return ["id", "name", "price", "img", "desc", "stock"];
  }

  attributeChangedCallback(name, oldValue, newValue) {
    switch (name) {
      case "id":
        this._id = newValue;
        break;
      case "name":
        this._name = newValue;
        break;
      case "price":
        this._price = newValue;
        break;
      case "img":
        this._img = newValue;
        break;
      case "desc":
        this._desc = newValue;
        break;
      case "stock":
        this._stock = newValue;
        break;
    }
  }

  render() {
    /*let dispnivilidad;
        if(this.disp){
            dispnivilidad = `<p class="text-sm  text-green-600 mt-2">Disponoble</p>`
        }else 
        {

        }*/
    let stockText = '';
    let stockColor = '';
    if (this._stock > 0) {
      stockText = `Disponible`;
      stockColor = 'text-green-600';
    } else {
      stockText = 'Sin stock';
      stockColor = 'text-red-600';
    }
    this.innerHTML =
      /*HTML*/
      `
        <article class="bg-white shadow rounded-lg overflow-hidden p-2.5 w-full hover:scale-105 transition-all duration-300">
            <img src="${this._img}" alt="${this._name}" class="w-full h-48 object-cover rounded-lg">
            <div class="p-4">
              <h3 class="text-lg font-semibold text-gray-800">${this._name}</h3>
              <p class="text-sm text-gray-600 mt-1">${this._desc}</p>
              <p class="text-sm ${stockColor} mt-2">${stockText}</p>
              <p class="text-xl font-bold text-gray-800 mt-2">${this._price}$</p>
              <form method="POST" action="../../app/Controllers/controller_cart.php" onclick="event.stopPropagation();" onsubmit="return handleStockSubmit(event, ${this._stock})">
                <input type="hidden" name="product_id" value="${this._id}">
                <input type="hidden" name="product_name" value="${this._name}">
                <input type="hidden" name="product_price" value="${this._price}">
                <input type="hidden" name="product_img" value="${this._img}">
                <button type="submit" class="bg-verde-principal text-white px-4 py-2 rounded hover:scale-105 transition-all mt-2 w-full">Agregar al carrito</button>
              </form>
            </div>
        </article>
        `;
  }
}
customElements.define("card-product", cardProduct);

// Agregar función global para manejar el submit
if (!window.handleStockSubmit) {
  window.handleStockSubmit = function(event, stock) {
    if (stock <= 0) {
      event.preventDefault();
      Swal.fire({
        icon: 'error',
        title: 'Sin stock',
        text: 'Este producto no está disponible actualmente.'
      });
      return false;
    }
    return true;
  }
}
