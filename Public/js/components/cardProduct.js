class cardProduct extends HTMLElement{
    constructor(){
        super();
    }

    connectedCallback() {
        this.render();
        this.name;
        this.price;
        this.img;
        this.desc;
        //this.disp;
    }

    static get observedAttributes() {
        return ['name', "price", "img", "desc"];
    }

    attributeChangedCallback(name, oldValue, newValue) {
        switch(name) {
            case 'name':
                this.name = newValue;
                break;
            case 'price':
                this.price = newValue;
                break;
            case 'img':
                this.img = newValue;
                break;
            case 'desc':
                this.desc = newValue;
                break;
        }
    }


    render(){
        /*let dispnivilidad;
        if(this.disp){
            dispnivilidad = `<p class="text-sm  text-green-600 mt-2">Disponoble</p>`
        }else 
        {

        }*/
        this.innerHTML = /*HTML*/
        `
        <article class="bg-white shadow rounded-lg overflow-hidden ">
            <a href="">
                <img src=${this.img} alt="${this.name}" class="w-full h-48 object-cover">
            </a>
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800">${this.name}</h3>
                <p class="text-sm text-gray-600 mt-1">${this.desc}</p>
                <p class="text-sm  text-green-600 mt-2">Disponoble</p>
                <p class="text-xl font-bold text-gray-800 mt-2">${this.price}$</p>
                <button type="button" 
                    class="mt-4 w-full bg-verde-principal text-white py-2 rounded hover:bg-azul-principal transition-colors duration-200">
                    Agregar al carrito
                </button>
            </div>
        </article>
        `
    }
}
customElements.define('card-product', cardProduct);