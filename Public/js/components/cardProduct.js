class cardProduct extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    this.render();
    this.id
    this.name;
    this.price;
    this.img;
    this.desc;
    //this.disp;
  }

  static get observedAttributes() {
    return ["id", "name", "price", "img", "desc"];
  }

  attributeChangedCallback(name, oldValue, newValue) {
    switch (name) {
      case "id":
        this.id = newValue;
        break;
      case "name":
        this.name = newValue;
        break;
      case "price":
        this.price = newValue;
        break;
      case "img":
        this.img = newValue;
        break;
      case "desc":
        this.desc = newValue;
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
            <a href="">
                <img src=${this.img} alt="${this.name}" class="w-full h-48 object-cover">
            </a>
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800">${this.name}</h3>
                <p class="text-sm text-gray-600 mt-1">${this.desc}</p>
                <p class="text-sm  text-green-600 mt-2">Disponoble</p>
                <p class="text-xl font-bold text-gray-800 mt-2">${this.price}$</p>
                <form method="POST" action="../../app/Controllers/controller_cart.php">
                    <input type="hidden" name="product_id" value="${this.id}">
                    <input type="hidden" name="product_name" value="${this.name}">
                    <input type="hidden" name="product_price" value="${this.price}">
                    <input type="hidden" name="product_img" value="${this.img}">
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
