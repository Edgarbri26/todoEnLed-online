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
    return ["id", "name", "price", "img", "desc"];
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
    }
  }

  render() {
    /*let dispnivilidad;
        if(this.disp){
            dispnivilidad = `<p class="text-sm  text-green-600 mt-2">Disponoble</p>`
        }else 
        {

        }*/
    this.innerHTML =
      /*HTML*/
      `
        <article class="bg-white shadow rounded-lg overflow-hidden p-2.5 w-full hover:scale-105 transition-all duration-300">
            <img src="${this._img}" alt="${this._name}" class="w-full h-48 object-cover">
            <div class="p-4">
              <h3 class="text-lg font-semibold text-gray-800">${this._name}</h3>
              <p class="text-sm text-gray-600 mt-1">${this._desc}</p>
              <p class="text-sm  text-green-600 mt-2">Disponoble</p>
              <p class="text-xl font-bold text-gray-800 mt-2">${this._price}$</p>
              <form method="POST" action="../../app/Controllers/controller_cart.php" onclick="event.stopPropagation();">
                <input type="hidden" name="product_id" value="${this._id}">
                <input type="hidden" name="product_name" value="${this._name}">
                <input type="hidden" name="product_price" value="${this._price}">
                <input type="hidden" name="product_img" value="${this._img}">
                <button type="submit" name="btn"
                class="mt-4 w-full bg-verde-principal text-white py-2 rounded hover:bg-azul-principal transition-colors duration-200">
                Agregar al carrito
                </button>
              </form>
            </div>
        </article>
        `;
  }
}
customElements.define("card-product", cardProduct);
