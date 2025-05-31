class todoEnLedHeader extends HTMLElement{
    constructor(){
        super();
        this.render();
    }


    render(){
        this.innerHTML = /*HTML*/
        `
        <header>
            <div class="container-header">
                    <div class="logo">
                    <a href="../../index.php" >
                    <img src="../../assets/logo.png" alt="Logo TodoEnLed">
                    </a>
                </div>

                <div class="container-search">
                    <input type="search" placeholder="Buscar..." name="text" class="search-input">
                    <button type="button" class="search-button">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
                <nav class="nav-bar">
                    <ul>
                        <li><a href="">Inicio</a></li>
                        <li><a href="">Catalogo</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </nav>

                <a href="cart.php"  class="container-cart">
                    <svg class="" width="28" height="28" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <g fill="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.8 2.2a.8.8 0 1 0 0 1.6h2.803l1.542 14.541a1 1 0 0 0 .995.895h15.055a1 1 0 0 0 .982-.811l2.105-10.91a1 1 0 0 0-.982-1.189H6.48l-.432-4.081a.05.05 0 0 0-.05-.045H1.8Zm4.849 5.726h16.923l-1.873 9.709H7.679l-1.03-9.709Z"></path>
                            <path d="M10.917 23.62a1.909 1.909 0 1 1-3.818 0 1.909 1.909 0 0 1 3.818 0ZM22.372 23.62a1.91 1.91 0 1 1-3.819 0 1.91 1.91 0 0 1 3.819 0Z"></path>
                        </g>
                    </svg>
                    <h3 id="counter-product">0</h3>
                </a>
            </div>
        </header>
        `
    }
}

customElements.define('todoenled-header',todoEnLedHeader);