/*jslint browser, es6, single, for, devel, this */

//create variables
var //addToCartButtons = document.getElementsByClassName("my-cart-btn"),
    button1 = document.getElementById("1"),
    button2 = document.getElementById("2"),
    button3 = document.getElementById("3"),
    button4 = document.getElementById("4"),
    button5 = document.getElementById("5"),
    button6 = document.getElementById("6"),
    button7 = document.getElementById("7"),
    button8 = document.getElementById("8"),
    button9 = document.getElementById("9"),
    button10 = document.getElementById("10"),
    button11 = document.getElementById("11"),
    button12 = document.getElementById("12"),
    button13 = document.getElementById("13"),
    button14 = document.getElementById("14"),
    button15 = document.getElementById("15"),
    emptyCartBox = document.getElementById('empty-cart-body'),
    emptyCartBoxFull = true,
    emptyCartButton = document.getElementById('empty-cart-button'),
    builtCart = document.getElementById("products-in-cart"),
    cartQuantity = document.getElementById("offcanvas-cart-number"),

    // Fake JSON data array here should be API call
    products = [
        {
            id: 1,
            name: "book1",
            description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
            imageUrl: "../img/product/small/1.jpg",
            price: 50,
            productNum: "product-popup-1"
    },
        {
            id: 2,
            name: "book2",
            description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
            imageUrl: "../img/product/small/2.jpg",
            price: 50,
            productNum: "product-popup-2"
    },
        {
            id: 3,
            name: "book3",
            description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
            imageUrl: "../img/product/small/3.jpg",
            price: 50,
            productNum: "product-popup-3"
    },
        {
            id: 4,
            name: "book4",
            description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
            imageUrl: "../img/product/small/4.jpg",
            price: 50,
            productNum: "product-popup-4"
    },
        {
            id: 5,
            name: "book5",
            description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
            imageUrl: "../img/product/small/5.jpg",
            price: 50,
            productNum: "product-popup-5"
    },
        {
            id: 6,
            name: "book6",
            description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
            imageUrl: "../img/product/small/6.jpg",
            price: 50,
            productNum: "product-popup-6"
    },
        {
            id: 7,
            name: "book7",
            description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
            imageUrl: "../img/product/small/7.jpg",
            price: 50,
            productNum: "product-popup-7"
    },
        {
            id: 8,
            name: "book8",
            description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
            imageUrl: "../img/product/small/8.jpg",
            price: 50,
            productNum: "product-popup-8"
    },
        {
            id: 9,
            name: "book9",
            description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
            imageUrl: "../img/product/small/9.jpg",
            price: 50,
            productNum: "product-popup-9"
    },
        {
            id: 10,
            name: "book10",
            description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
            imageUrl: "../img/product/small/10.jpg",
            price: 50,
            productNum: "product-popup-10"
    },
        {
            id: 11,
            name: "book11",
            description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
            imageUrl: "../img/product/small/11.jpg",
            price: 50,
            productNum: "product-popup-11"
    },
        {
            id: 12,
            name: "book12",
            description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
            imageUrl: "../img/product/small/12.jpg",
            price: 50
    },
        {
            id: 13,
            name: "book13",
            description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
            imageUrl: "../img/product/small/13.jpg",
            price: 50
    },
        {
            id: 14,
            name: "book14",
            description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
            imageUrl: "../img/product/small/14.jpg",
            price: 50
    },
        {
            id: 15,
            name: "book15",
            description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
            imageUrl: "../img/product/small/15.jpg",
            price: 50
    }
  ],
    productsInCart = [];

//create functions
// This function checks if project is already in productsInCart array
function productFound(productId) {
    'use strict';

    return productsInCart.find(function (item) {
        return item.product.id === productId;
    });
}

function calculateTotalPrice() {
    'use strict';
    return productsInCart.reduce(function (total, item) {
        return total + (item.product.price * item.quantity);
    }, 0);
}

//generates product for basket
function generateProduct() {
    'use strict';

    var product = document.createElement("div");

    product.className = "cart-product-list alert";
    product.role = "alert";
    product.innerHTML = '<div class="row no-gutters"><div class="col-md-3"><img class="img-fluid" src="img/product/small/3.jpg" alt=""></div><!-- /.col-md-4 --><div class="col-md-9"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><h2>Portable Bluetooth Speaker</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>$25.00</strong></p></div><div class="col-md-4"><p class="qty">QTY: 1</p></div></div></div><!-- /.col-md-8 --></div><!-- /.row -->';

    console.log(products);
    builtCart.appendChild(product);
}

// Adds new items or updates existing one in productsInCart array
function addToCart(id) {
    'use strict';

    var obj = products[id];

    if (productsInCart.length === 0 || productFound(obj.id) === undefined) {
        productsInCart.push({
            product: obj,
            quantity: 1
        });
        emptyCartBox.style.display = "none";
        emptyCartBoxFull = false;
        generateProduct(obj);

    } else {
        productsInCart.forEach(function (item) {
            if (item.product.id === obj.id && productsInCart.length === 0) {
                item.quantity++;
            }
        });
    }
}


//function to empty out cart
function emptyOutCart() {
    'use strict';

    builtCart.innerHTML = "";
    productsInCart = [];
}

//add event listeners to addToCart buttons
function addListeners() {
    'use strict';

    button1.addEventListener('click', addToCart, false);
    button2.addEventListener('click', addToCart, false);
    button3.addEventListener('click', addToCart, false);
    button4.addEventListener('click', addToCart, false);
    emptyCartButton.addEventListener('click', emptyOutCart, false);
}

//use function
addListeners();
