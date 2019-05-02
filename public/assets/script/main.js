var form = document.getElementsByTagName('form')[0];
var div_gen_book = document.querySelector('.row-products');
var clear_doc_itm = document.querySelectorAll('.bk-itm-clear');

function createBook() {
    var formBook = new FormData(form);

    xhttpPost('ajax/create_book', function () {
        success(function () {
            console.log(xhttp.responseText);
        });
    }, formBook);
}

function getBooks(insert) {
    if (insert === null) {
        xhttpGet('ajax/get_book', function () {
            success(function () {
                var itm_book = JSON.parse(xhttp.responseText);
                itm_book.forEach((element) => {
                    new constructBook(element.book_name, element.book_price, element.book_img);
                });
            });
        });
    }
}

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