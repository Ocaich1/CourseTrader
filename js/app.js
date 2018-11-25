/*jslint browser, es6, single, for, devel, this */

var ShoppingCart = (function ($) {
    "use strict";

    //create variables
    var badgeQuantity = document.getElementById("my-cart-badge"),
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
                price: 25,
                productNum: "product1",
                productCode: '<div class="row no-gutters"><div class="col-md-3"><img class="img-fluid" src="img/product/small/1.jpg" alt="book1 description"></div><!-- /.col-md-4 --><div class="col-md-9"><i class="fa fa-times close-item" aria-hidden="true"></i><h2>Portable Bluetooth Speaker</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>$25.00</strong></p></div><div class="col-md-4"><p class="qty">QTY: 1</p></div></div></div><!-- /.col-md-8 --></div><!-- /.row -->'
    },
            {
                id: 2,
                name: "book2",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "../img/product/small/2.jpg",
                price: 25,
                productNum: "product2",
                productCode: '<div class="row no-gutters"><div class="col-md-3"><img class="img-fluid" src="img/product/small/2.jpg" alt="book2 description"></div><!-- /.col-md-4 --><div class="col-md-9"><i class="fa fa-times close-item" aria-hidden="true"></i><h2>Portable Bluetooth Speaker</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>$25.00</strong></p></div><div class="col-md-4"><p class="qty">QTY: 1</p></div></div></div><!-- /.col-md-8 --></div><!-- /.row -->'
    },
            {
                id: 3,
                name: "book3",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "../img/product/small/3.jpg",
                price: 50,
                productNum: "product3",
                productCode: '<div class="row no-gutters"><div class="col-md-3"><img class="img-fluid" src="img/product/small/3.jpg" alt="book3 description"></div><!-- /.col-md-4 --><div class="col-md-9"><i class="fa fa-times close-item" aria-hidden="true"></i><h2>Portable Bluetooth Speaker</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>$25.00</strong></p></div><div class="col-md-4"><p class="qty">QTY: 1</p></div></div></div><!-- /.col-md-8 --></div><!-- /.row -->'
    },
            {
                id: 4,
                name: "book4",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "../img/product/small/4.jpg",
                price: 50,
                productNum: "product4",
                productCode: '<div class="row no-gutters"><div class="col-md-3"><img class="img-fluid" src="img/product/small/4.jpg" alt="book4 description"></div><!-- /.col-md-4 --><div class="col-md-9"><i class="fa fa-times close-item" aria-hidden="true"></i><h2>Portable Bluetooth Speaker</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>$50.00</strong></p></div><div class="col-md-4"><p class="qty">QTY: 1</p></div></div></div><!-- /.col-md-8 --></div><!-- /.row -->'
    },
            {
                id: 5,
                name: "book5",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "../img/product/small/5.jpg",
                price: 25,
                productNum: "product5",
                productCode: '<div class="row no-gutters"><div class="col-md-3"><img class="img-fluid" src="img/product/small/5.jpg" alt="book5 description"></div><!-- /.col-md-4 --><div class="col-md-9"><i class="fa fa-times close-item" aria-hidden="true"></i><h2>Portable Bluetooth Speaker</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>$25.00</strong></p></div><div class="col-md-4"><p class="qty">QTY: 1</p></div></div></div><!-- /.col-md-8 --></div><!-- /.row -->'
    },
            {
                id: 6,
                name: "book6",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "../img/product/small/6.jpg",
                price: 50,
                productNum: "product6",
                productCode: '<div class="row no-gutters"><div class="col-md-3"><img class="img-fluid" src="img/product/small/6.jpg" alt="book6 description"></div><!-- /.col-md-4 --><div class="col-md-9"><i class="fa fa-times close-item" aria-hidden="true"></i><h2>Portable Bluetooth Speaker</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>$25.00</strong></p></div><div class="col-md-4"><p class="qty">QTY: 1</p></div></div></div><!-- /.col-md-8 --></div><!-- /.row -->'
    },
            {
                id: 7,
                name: "book7",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "../img/product/small/7.jpg",
                price: 50,
                productNum: "product7",
                productCode: '<div class="row no-gutters"><div class="col-md-3"><img class="img-fluid" src="img/product/small/7.jpg" alt="book7 description"></div><!-- /.col-md-4 --><div class="col-md-9"><i class="fa fa-times close-item" aria-hidden="true"></i><h2>Portable Bluetooth Speaker</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>$25.00</strong></p></div><div class="col-md-4"><p class="qty">QTY: 1</p></div></div></div><!-- /.col-md-8 --></div><!-- /.row -->'
    },
            {
                id: 8,
                name: "book8",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "../img/product/small/8.jpg",
                price: 50,
                productNum: "product8",
                productCode: '<div class="row no-gutters"><div class="col-md-3"><img class="img-fluid" src="img/product/small/8.jpg" alt="book8 description"></div><!-- /.col-md-4 --><div class="col-md-9"><i class="fa fa-times close-item" aria-hidden="true"></i><h2>Portable Bluetooth Speaker</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>$25.00</strong></p></div><div class="col-md-4"><p class="qty">QTY: 1</p></div></div></div><!-- /.col-md-8 --></div><!-- /.row -->'
    },
            {
                id: 9,
                name: "book9",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "../img/product/small/9.jpg",
                price: 50,
                productNum: "product9",
                productCode: '<div class="row no-gutters"><div class="col-md-3"><img class="img-fluid" src="img/product/small/9.jpg" alt="book9 description"></div><!-- /.col-md-4 --><div class="col-md-9"><i class="fa fa-times close-item" aria-hidden="true"></i><h2>Portable Bluetooth Speaker</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>$25.00</strong></p></div><div class="col-md-4"><p class="qty">QTY: 1</p></div></div></div><!-- /.col-md-8 --></div><!-- /.row -->'
    },
            {
                id: 10,
                name: "book10",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "../img/product/small/10.jpg",
                price: 50,
                productNum: "product10",
                productCode: '<div class="row no-gutters"><div class="col-md-3"><img class="img-fluid" src="img/product/small/10.jpg" alt="book10 description"></div><!-- /.col-md-4 --><div class="col-md-9"><i class="fa fa-times close-item" aria-hidden="true"></i><h2>Portable Bluetooth Speaker</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>$25.00</strong></p></div><div class="col-md-4"><p class="qty">QTY: 1</p></div></div></div><!-- /.col-md-8 --></div><!-- /.row -->'
    },
            {
                id: 11,
                name: "book11",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "../img/product/small/11.jpg",
                price: 50,
                productNum: "product11",
                productCode: '<div class="row no-gutters"><div class="col-md-3"><img class="img-fluid" src="img/product/small/11.jpg" alt="book11 description"></div><!-- /.col-md-4 --><div class="col-md-9"><i class="fa fa-times close-item" aria-hidden="true"></i><h2>Portable Bluetooth Speaker</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>$25.00</strong></p></div><div class="col-md-4"><p class="qty">QTY: 1</p></div></div></div><!-- /.col-md-8 --></div><!-- /.row -->'
    },
            {
                id: 12,
                name: "book12",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "../img/product/small/12.jpg",
                price: 50,
                productNum: "product12",
                productCode: '<div class="row no-gutters"><div class="col-md-3"><img class="img-fluid" src="img/product/small/12.jpg" alt="book12 description"></div><!-- /.col-md-4 --><div class="col-md-9"><i class="fa fa-times close-item" aria-hidden="true"></i><h2>Portable Bluetooth Speaker</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>$25.00</strong></p></div><div class="col-md-4"><p class="qty">QTY: 1</p></div></div></div><!-- /.col-md-8 --></div><!-- /.row -->'
    },
            {
                id: 13,
                name: "book13",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "../img/product/small/13.jpg",
                price: 50,
                productNum: "product13",
                productCode: '<div class="row no-gutters"><div class="col-md-3"><img class="img-fluid" src="img/product/small/13.jpg" alt="book1 description"></div><!-- /.col-md-4 --><div class="col-md-9"><i class="fa fa-times close-item" aria-hidden="true"></i><h2>Portable Bluetooth Speaker</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>$25.00</strong></p></div><div class="col-md-4"><p class="qty">QTY: 1</p></div></div></div><!-- /.col-md-8 --></div><!-- /.row -->'
    },
            {
                id: 14,
                name: "book14",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "../img/product/small/14.jpg",
                price: 50,
                productNum: "product14",
                productCode: '<div class="row no-gutters"><div class="col-md-3"><img class="img-fluid" src="img/product/small/14.jpg" alt="book14 description"></div><!-- /.col-md-4 --><div class="col-md-9"><i class="fa fa-times close-item" aria-hidden="true"></i><h2>Portable Bluetooth Speaker</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>$25.00</strong></p></div><div class="col-md-4"><p class="qty">QTY: 1</p></div></div></div><!-- /.col-md-8 --></div><!-- /.row -->'
    },
            {
                id: 15,
                name: "book15",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "../img/product/small/15.jpg",
                price: 50,
                productNum: "product15",
                productCode: '<div class="row no-gutters"><div class="col-md-3"><img class="img-fluid" src="img/product/small/15.jpg" alt="book15 description"></div><!-- /.col-md-4 --><div class="col-md-9"><i class="fa fa-times close-item" aria-hidden="true"></i><h2>Portable Bluetooth Speaker</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>$25.00</strong></p></div><div class="col-md-4"><p class="qty">QTY: 1</p></div></div></div><!-- /.col-md-8 --></div><!-- /.row -->'
    }
  ],
        productsInCart = [];

    //create functions
    // Pretty much self explanatory function. NOTE: Here I have used template strings (ES6 Fea
    var generateProduct = function (id) {
        productsInCart.forEach(function (item) {
            var al = item;
            var productEl = document.createElement("div");
            productEl.className = "cart-product-list";
            productEl.innerHTML = `<div class="row no-gutters"><div class"col-med-3"><img class="img-fluid" src="${item.imageUrl}" alt="${item.name}"></div><div class="col-md-9"><i class="fa fa-times close-item" aria-hidden="true"></i><h2>${item.name}</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>${item.price}</strong></p></div><div class="col-md-4"><p class="qty">Qty: ${item.price} $</p></div></div></div></div>`;

            builtCart.appendChild(productEl);
        });
    }

    //add event listeners to addToCart buttons
    function addListeners() {
        /*productsEl.addEventListener("click", function (event) {
            var el = event.target;
            if (el.classList.contains("add-to-cart")) {
                var elId = el.dataset.id;
                addToCart(elId);
            }
        });*/

        var els = document.getElementsByClassName('add-to-cart');

        for (var i = 0; i <= els.length; i++) {
            els[i].onclick = function (event) {
                var el = event.target;
                var elId = el.dataset.id;
                addToCart(elId);
                console.log(elId);
            };
        }

        emptyCartButton.addEventListener('click', emptyOutCart, false);

    }

    // Adds new items or updates existing one in productsInCart array
    var addToCart = function (id) {
        var obj = products[id];
        if (productsInCart.length === 0 || productFound(obj.id) === undefined) {
            productsInCart.push({
                product: obj,
                quantity: 1,
            });
            emptyCartBoxFull = false;
            emptyCartBox.style.display = "none";
            generateProduct();
        } else {
            productsInCart.forEach(function (item) {

                item.quantity++;
                console.log('hello');
                updateQuantity();
                console.log(productsInCart);

            });
        }
        updateQuantity();
    }

    // This function checks if project is already in productsInCart array
    function productFound(productId) {
        'use strict';
        return productsInCart.find(function (item) {
            return item.product.id === productId;
        });

    }


    //function to empty out cart
    function emptyOutCart() {
        builtCart.innerHTML = "";
        productsInCart = [];
        updateQuantity();
    }

    //function that updates quantity
    function updateQuantity() {
        cartQuantity.innerHTML = productsInCart.length;
        badgeQuantity.innerHTML = productsInCart.length;
    }


    // This functon starts the whole application
    var init = function () {
        //use function
        addListeners();
    }

    // Exposes just init function to public, everything else is private
    return {
        init: init
    };

    // I have included jQuery although I haven't used it
})(jQuery);

ShoppingCart.init();
