class constructBook {
    constructor(b_name, b_price, b_img) {

        div_gen_book.innerHTML += `<div class="card-product-book bk-itm-clear"> 
        <div class="content-card-product">
                <div class="title-card-usr-name">
                    <h2>Nbn</h2>
                </div>
                <img src="${b_img}" alt="${b_name}">
            </div>
            <div class="rw-card-bottom-content">
                <div class="title-card-product">
                    <h1>${b_name}</h1>
                    <h2>R$ ${b_price}</h2>
                </div>
            </div>
        </div>`;


    }
}