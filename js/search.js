/*jslint browser, es6, single, for, devel, this */

var ShoppingCart = (function ($) {
    "use strict";

    //create variables initialize them with element. Cahe elements.
    var badgeQuantity = document.getElementById("my-cart-badge"),
        emptyCartBox = document.getElementById('empty-cart-body'),
        emptyCartBoxFull = false,
        builtCart = document.getElementById("products-in-cart"),
        cartQuantity = document.getElementById("offcanvas-cart-number"),
        badgeQuantity = document.getElementById('my-cart-badge'),
        emptyButton = document.getElementById("empty-cart-button"),

        // Fake JSON data array here should be an API call. This contains the products information stored in an array JSON format. need more updated info plugged in for details. 
        products = [
            {
                id: 1,
                name: "Managerial Accounting",
                description: "Introduction to managerial accounting",
                imageUrl: "img/book/ACC2203.PNG",
                price: 25,
                productNum: "product1"
    },
            {
                id: 2,
                name: "book2",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "img/book/CIS4800.PNG",
                price: 25,
                productNum: "product2"
    },
            {
                id: 3,
                name: "book3",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "img/book/ECO1001.PNG",
                price: 50,
                productNum: "product3"
    },
            {
                id: 4,
                name: "book4",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "img/book/ENG2800.PNG",
                price: 50,
                productNum: "product4"
    },
            {
                id: 5,
                name: "book5",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "img/book/MTH2003.PNG",
                price: 25,
                productNum: "product5"
    },
            {
                id: 6,
                name: "book6",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "img/book/POL1101.PNG",
                price: 50,
                productNum: "product6"
    },
            {
                id: 7,
                name: "book7",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "img/book/STA2000.PNG",
                price: 50,
                productNum: "product7"
    },
            {
                id: 8,
                name: "book8",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "img/book/ACC%202101.png",
                price: 50,
                productNum: "product8"
    },
            {
                id: 9,
                name: "book9",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "img/book/CIS%203400.jpg",
                price: 50,
                productNum: "product9"
    },
            {
                id: 10,
                name: "book10",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "img/book/ECO%203220.jpg",
                price: 50,
                productNum: "product10"
    },
            {
                id: 11,
                name: "book11",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "img/book/HIS%201005.jpg",
                price: 50,
                productNum: "product11"
    },
            {
                id: 12,
                name: "book12",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "img/book/RES%203100.jpg",
                price: 50,
                productNum: "product12"
    },
            {
                id: 13,
                name: "book13",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "img/book/LAW%204900.jpg",
                price: 50,
                productNum: "product13"
    },
            {
                id: 14,
                name: "book14",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "img/book/STA%203920.jpg",
                price: 50,
                productNum: "product14"
    },
            {
                id: 15,
                name: "book15",
                description: "Kogi skateboard tattooed, whatever portland fingerstache coloring book mlkshk leggings flannel dreamcatcher.",
                imageUrl: "img/book/FIN%203710.jpg",
                price: 50,
                productNum: "product15"
    }
  ],
        //array that hols the products once they are added to the cart. Will also be
        productsInCart = [];
    //create functions

    /*I have used template strings (ES6 Feature) to build the html. 
    I have used an onclick event on this button to close it out but 
    i still cannot delete the instance from the div it leaves behind 
    something and disrupts the onclick process. possibly better to 
    turn into alert but same risidual problem. 
    I would prefer to put on click events and use a remove mothod and update*/

    //Function that creates a new product img in the sidebar of the html when add to acrt is pushed.
    var generateProduct = function (id) {
        productsInCart.forEach(function (item) {
            var al = item.product;
            var productEl = document.createElement("div");
            productEl.className = "cart-product-list";
            productEl.innerHTML = `<div class="row no-gutters"><div class="col-md-3"><img class="img-fluid" src="${item.product.imageUrl}" alt="${item.product.name}"></div><!-- /.col-md-4 --><div class="col-md-9"><i onclick="this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode); return false;" class="fa fa-times close-item" aria-hidden="true"></i><h2>Portable Bluetooth Speaker</h2><div class="row no-gutters cpl-footer"><div class="col-md-8"><p class="pricing"><strong>$${item.product.price}</strong></p></div><div class="col-md-4"><p class="qty">QTY:${item.quantity}</p></div></div></div><!-- /.col-md-8 --></div><!-- /.row -->`;
            builtCart.appendChild(productEl);
        });
    }

    //function that adds event listeners to buttons
    function addListeners() {
        //adds listeners to add to cart buttons. sometimes button function is disrupted by offcanvas.js possibly
        var els = document.getElementsByClassName("add-to-cart");
        for (var i = 0; i < els.length; i++) {
            els[i].onclick = function (event) {
                var el = event.target;
                var elId = el.dataset.id;
                addToCart(elId);
            };
        }

        //function that changes states and clears contents of cart. Currently when buttons are pushed they will create one item in cart. although it is not reflected the item amount goes up in the products array. Just need to find a way to accurately remove item and be able to remove it from array as well.
        var exs = emptyButton;
        exs.onclick = function () {
            emptyCartBox.style.display = "block";
            builtCart.innerHTML = "";
            productsInCart = [];
            updateQuantity();
        };
    }

    // Adds new items or updates existing one in productsInCart array
    var addToCart = function (id) {
        var obj = products[[id] - 1];
        if (productsInCart.length === 0 || productFound(obj.id) === undefined) {
            productsInCart.push({
                product: obj,
                quantity: 1,
                id: obj.id
            });
            emptyCartBoxFull = true;
            emptyCartBox.style.display = "none";
            generateProduct(id);
        } else {
            productsInCart.forEach(function (item) {
                item.quantity++;
            });
        }
        updateQuantity();
        badgeQuantity.innerHTML = productsInCart.length;
    }

    // This function checks if project is already in productsInCart array through its id.
    function productFound(productId) {
        return productsInCart.find(function (item) {
            return item.product.id === productId;
        });

    }

    //function that updates quantity. also want it to update other quantities
    function updateQuantity() {
        cartQuantity.innerHTML = productsInCart.length;
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

    // I have included jQuery although I haven't used much of it
})(jQuery);

ShoppingCart.init();
