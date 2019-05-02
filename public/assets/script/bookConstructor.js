
class constructBook {
    constructor(b_name, b_price, b_img) {
        div_gen_book.innerHTML +=
            `<div class="card-product-book bk-itm-clear"> 
                    <div class="content-card-product">
                        <img src="${b_img}" alt="${b_name}">
                    </div>
                    <div class="rw-card-bottom-content">
                        <div class="title-card-product">
                            <h1>${b_name}</h1>
                            <h2>${b_price}</h2>
                        </div>
                    </div>
                </div>`;
    }
}