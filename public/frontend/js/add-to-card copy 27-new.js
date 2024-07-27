$(document).ready(function() {
    // View item modal
    $('.view-item-btn').on('click', function() {
        // Get data from the button
        const id = $(this).data('id');
        const name = $(this).data('name');
        const price = $(this).data('price');
        const image = $(this).data('image');
        const subtitle = $(this).data('subtitle');
        const description = $(this).data('description');
        const information = $(this).data('information');

        // Set data to the modal
        $('#itemModalName').text(name);
        $('#itemModalPrice').text('$' + price);
        $('#itemModalImage').attr('src', image);
        $('#itemModalSubtitle').text(subtitle);
        $('#itemModalDescription').text(description);
        $('#itemModalInformation').text(information);

        // Clear previous selections
        $('#itemModalSizeForm input[type=radio]').prop('checked', false);
        $('#itemModalColorForm input[type=radio]').prop('checked', false);
        $('#itemModalQuantity').val('1');
    });

    // Add to cart from product modal
    $('.add-to-cart-from-modal-btn').on('click', function() {
        const name = $('#itemModalName').text();
        const price = $('#itemModalPrice').text().replace('$', '');
        const image = $('#itemModalImage').attr('src');
        const size = $('#itemModalSizeForm input[name=size]:checked').val();
        const color = $('#itemModalColorForm input[name=color]:checked').val();
        const quantity = $('#itemModalQuantity').val();

        if (!size || !color) {
            alert('Please select size and color.');
            return;
        }

        // Add to cart logic
        const cartItem = `
            <tr>
                <td><img src="${image}" alt="${name}" style="width: 50px;"></td>
                <td>${name}</td>
                <td>${size}</td>
                <td>${color}</td>
                <td>${quantity}</td>
                <td>$${price * quantity}</td>
                <td><button class="btn btn-danger btn-sm remove-item-btn">Remove</button></td>
            </tr>
        `;

        $('.show-cart').append(cartItem);

        // Update total
        let total = 0;
        $('.show-cart tr').each(function() {
            const price = parseFloat($(this).find('td:eq(5)').text().replace('$', ''));
            total += price;
        });
        $('.total-cart').text(total.toFixed(2));

        // Clear selections
        $('#itemModal').modal('hide');
    });

    // Remove item from cart
    $(document).on('click', '.remove-item-btn', function() {
        $(this).closest('tr').remove();

        // Update total
        let total = 0;
        $('.show-cart tr').each(function() {
            const price = parseFloat($(this).find('td:eq(5)').text().replace('$', ''));
            total += price;
        });
        $('.total-cart').text(total.toFixed(2));
    });
});
