$(document).ready(function() {
    var shoppingCart = (function() {
        var cart = [];

        function Item(name, price, count, image, size, color) {
            this.name = name;
            this.price = price;
            this.count = count;
            this.image = image;
            this.size = size;
            this.color = color;
        }

        function saveCart() {
            localStorage.setItem('shoppingCart', JSON.stringify(cart));
        }

        function loadCart() {
            cart = JSON.parse(localStorage.getItem('shoppingCart')) || [];
        }

        if (localStorage.getItem("shoppingCart") != null) {
            loadCart();
        }

        var obj = {};

        obj.addItemToCart = function(name, price, count, image, size, color) {
            for (var item of cart) {
                if (item.name === name && item.size === size && item.color === color) {
                    item.count += count;
                    saveCart();
                    return;
                }
            }
            var newItem = new Item(name, price, count, image, size, color);
            cart.push(newItem);
            saveCart();
        };

        obj.setCountForItem = function(name, size, color, count) {
            for (var item of cart) {
                if (item.name === name && item.size === size && item.color === color) {
                    item.count = count;
                    break;
                }
            }
            saveCart();
        };

        obj.removeItemFromCart = function(name, size, color) {
            for (var item of cart) {
                if (item.name === name && item.size === size && item.color === color) {
                    item.count--;
                    if (item.count === 0) {
                        cart = cart.filter(cartItem => !(cartItem.name === name && cartItem.size === size && cartItem.color === color));
                    }
                    break;
                }
            }
            saveCart();
        };

        obj.removeItemFromCartAll = function(name, size, color) {
            cart = cart.filter(item => !(item.name === name && item.size === size && item.color === color));
            saveCart();
        };

        obj.clearCart = function() {
            cart = [];
            saveCart();
        };

        obj.totalCount = function() {
            return cart.reduce((total, item) => total + item.count, 0);
        };

        obj.totalCart = function() {
            return cart.reduce((total, item) => total + item.price * item.count, 0).toFixed(2);
        };

        obj.listCart = function() {
            return cart.map(item => {
                var itemCopy = { ...item };
                itemCopy.total = (item.price * item.count).toFixed(2);
                return itemCopy;
            });
        };

        return obj;
    })();

    function displayCart() {
        var cartArray = shoppingCart.listCart();
        var output = "";
        var totalQuantity = 0;
        var totalPrice = 0;

        for (var item of cartArray) {
            totalQuantity += item.count;
            totalPrice += item.price * item.count;

            output += "<tr>"
                + "<td><img src='" + item.image + "' alt='" + item.name + "' style='width: 50px; height: 50px;'></td>"
                + "<td>" + item.name + "</td>"
                + "<td>" + item.size + "</td>"
                + "<td>" + item.color + "</td>"
                + "<td>" + item.price + "</td>"
                + "<td><div class='input-group'>"
                + "<input type='number' class='item-count form-control' data-name='" + item.name + "' data-size='" + item.size + "' data-color='" + item.color + "' value='" + item.count + "'>"
                + "</div></td>"
                + "<td>" + item.total + "</td>"
                + "<td><button class='delete-item btn btn-danger' data-name='" + item.name + "' data-size='" + item.size + "' data-color='" + item.color + "'>X</button></td>"
                + "</tr>";
        }

        $('.show-cart tbody').html(output);
        $('.total-cart').html(totalPrice.toFixed(2));
        $('.total-count').html(totalQuantity);
    }

    // Add to cart button functionality
    $('.add-to-cart-btn').click(function(event) {
        event.preventDefault();
        var name = $(this).data('name');
        var price = Number($(this).data('price'));
        var image = $(this).data('image');
        var size = $(this).data('size');
        var color = $(this).data('color');
        shoppingCart.addItemToCart(name, price, 1, image, size, color);
        displayCart();
    });

    // View item details in modal and handle add to cart from modal
    $('.view-item-btn').click(function(e) {
        e.preventDefault();

        // Retrieve data attributes
        var name = $(this).data('name');
        var price = $(this).data('price');
        var image = $(this).data('image');
        var subtitle = $(this).data('subtitle');
        var description = $(this).data('description');
        var information = $(this).data('information');
        var sizes = $(this).data('sizes') || [];  // Ensure it's an array
        var colors = $(this).data('colors') || [];  // Ensure it's an array

        // Update modal content
        $('#itemModalImage').attr('src', image);
        $('#itemModalName').text(name);
        $('#itemModalPrice').text(`${price}`);
        $('#itemModalSubtitle').text(subtitle);
        $('#itemModalDescription').text(description);
        $('#itemModalInformation').text(information);

        // Clear previous selections
        $('#itemModalSizeForm').empty();
        $('#itemModalColorForm').empty();

        // Handle sizes
        if (sizes.length > 0) {
            $('#itemModalSizesContainer').show();
            sizes.slice(0, 6).forEach((size, index) => {
                if (size) {
                    var sizeInput = `
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="size-${index + 1}" name="size" value="${size}">
                            <label class="custom-control-label" for="size-${index + 1}">${size}</label>
                        </div>
                    `;
                    $('#itemModalSizeForm').append(sizeInput);
                }
            });
        } else {
            $('#itemModalSizesContainer').hide();
        }

        // Handle colors
        if (colors.length > 0) {
            $('#itemModalColorsContainer').show();
            colors.slice(0, 6).forEach((color, index) => {
                if (color) {
                    var colorInput = `
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" id="color-${index + 1}" name="color" value="${color}">
                            <label class="custom-control-label" for="color-${index + 1}">${color}</label>
                        </div>
                    `;
                    $('#itemModalColorForm').append(colorInput);
                }
            });
        } else {
            $('#itemModalColorsContainer').hide();
        }

        // Open the modal
        $('#itemModal').modal('show');

        // Add to cart from modal
        $('.add-to-cart-from-modal-btn').off('click').on('click', function() {
            var size = $('#itemModalSizeForm input[name=size]:checked').val();
            var color = $('#itemModalColorForm input[name=color]:checked').val();
            var quantity = Number($('#itemModalQuantity').val());

            if (!size || !color) {
                alert('Please select size and color.');
                return;
            }

            shoppingCart.addItemToCart(name, price, quantity, image, size, color);
            displayCart();
            $('#itemModal').modal('hide');

            // Show success message modal
            $('#successModal').modal('show');

            // Auto-hide the success modal after 5 seconds
            setTimeout(function() {
                $('#successModal').modal('hide');
            }, 3000);
        });

    });

    // Shopping cart display and functionality
    $('.show-cart').on("click", ".delete-item", function(event) {
        var name = $(this).data('name');
        var size = $(this).data('size');
        var color = $(this).data('color');
        shoppingCart.removeItemFromCartAll(name, size, color);
        displayCart();
    });

    $('.show-cart').on("change", ".item-count", function(event) {
        var name = $(this).data('name');
        var size = $(this).data('size');
        var color = $(this).data('color');
        var count = Number($(this).val());
        shoppingCart.setCountForItem(name, size, color, count);
        displayCart();
    });

    displayCart();
});
