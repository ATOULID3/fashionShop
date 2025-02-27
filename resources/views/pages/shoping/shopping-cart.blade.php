@extends('layouts.app')
@section('title', 'shopping-cart')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <style>
        .product__cart__item__pic img {
    max-width: 100px; /* Adjust the size as needed */
    height: auto; /* Maintain aspect ratio */
    border-radius: 5px; /* Optional: Add rounded corners */
}
    </style>
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="cart-items">
                                <template id="cart-item-template">
                                <tr>
                                    <td class="product__cart__item">
                                        <div class="product__cart__item__pic">
                                            <img src="" alt="">
                                        </div>
                                        <div class="product__cart__item__text">
                                            <h6></h6>
                                            <h5></h5>
                                        </div>
                                    </td>
                                    <td class="quantity__item">
                                        <div class="quantity">
                                            <div class="pro-qty-2">
                                                <input type="text" value="">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart__price"></td>
                                    <td class="cart__close"><i class="fa fa-close"></i></td>
                                </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="#">Continue Shopping</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn update__btn">
                                <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart__discount">
                        <h6>Discount codes</h6>
                        <form action="#">
                            <input type="text" placeholder="Coupon code">
                            <button type="submit">Apply</button>
                        </form>
                    </div>
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Subtotal <span id="cart-subtotal">$ 0.00</span></li>
                            <li>Total <span id="cart-total">$ 0.00</span></li>
                        </ul>
                        <a href="./checkout" class="primary-btn">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    // Render the cart items and summary when the page loads
    renderCart();

    // Set up event listeners for quantity inputs and remove buttons
    setupQuantityInputs();
    setupRemoveItemButtons();
});

// Function to render the cart items and summary
function renderCart() {
    // Retrieve the cart from session storage
    const cart = JSON.parse(sessionStorage.getItem('cart')) || {};

    // Get the container for cart items
    const cartItemsContainer = document.getElementById('cart-items');

    // Variables to calculate subtotal and total
    let subtotal = 0;

    // Clear the container before rendering
    cartItemsContainer.innerHTML = '';

    // Loop through the cart items and render them
    for (const [id, item] of Object.entries(cart)) {
        const total = item.price * item.quantity;
        subtotal += total;

        // Create a table row for the cart item
        const row = document.createElement('tr');
        row.dataset.productId = id; // Add a data attribute for the product ID

        // Create and populate the product column
        const productColumn = document.createElement('td');
        productColumn.className = 'product__cart__item';

        const productImageDiv = document.createElement('div');
        productImageDiv.className = 'product__cart__item__pic';
        const productImage = document.createElement('img');
        productImage.src = item.image;
        productImage.alt = item.title;
        productImageDiv.appendChild(productImage);

        const productTextDiv = document.createElement('div');
        productTextDiv.className = 'product__cart__item__text';
        const productTitle = document.createElement('h6');
        productTitle.textContent = item.title;
        const productPrice = document.createElement('h5');
        productPrice.textContent = `$${item.price.toFixed(2)}`;
        productTextDiv.appendChild(productTitle);
        productTextDiv.appendChild(productPrice);

        productColumn.appendChild(productImageDiv);
        productColumn.appendChild(productTextDiv);

        // Create and populate the quantity column
        const quantityColumn = document.createElement('td');
        quantityColumn.className = 'quantity__item';

        const quantityDiv = document.createElement('div');
        quantityDiv.className = 'quantity';
        const quantityInputDiv = document.createElement('div');
        quantityInputDiv.className = 'pro-qty-2';
        const quantityInput = document.createElement('input');
        quantityInput.type = 'text';
        quantityInput.value = item.quantity;
        quantityInputDiv.appendChild(quantityInput);
        quantityDiv.appendChild(quantityInputDiv);
        quantityColumn.appendChild(quantityDiv);

        // Create and populate the total column
        const totalColumn = document.createElement('td');
        totalColumn.className = 'cart__price';
        totalColumn.textContent = `$${total.toFixed(2)}`;

        // Create and populate the close column
        const closeColumn = document.createElement('td');
        closeColumn.className = 'cart__close';
        const closeIcon = document.createElement('i');
        closeIcon.className = 'fa fa-close';
        closeColumn.appendChild(closeIcon);

        // Append all columns to the row
        row.appendChild(productColumn);
        row.appendChild(quantityColumn);
        row.appendChild(totalColumn);
        row.appendChild(closeColumn);

        // Append the row to the cart items container
        cartItemsContainer.appendChild(row);
    }

    // Update the cart summary
    updateCartSummary();
}

// Function to update the cart summary (total items and total price)
function updateCartSummary() {
    const cart = JSON.parse(sessionStorage.getItem('cart')) || {};
    let totalItems = 0;
    let subtotal = 0;

    for (const [id, item] of Object.entries(cart)) {
        totalItems += item.quantity;
        subtotal += item.price * item.quantity;
    }

    // Update the cart summary in the HTML
    document.getElementById('cart-count').textContent = totalItems;
    document.getElementById('cart-subtotal').textContent = `$${subtotal.toFixed(2)}`;
    document.getElementById('cart-total').textContent = `$${subtotal.toFixed(2)}`;
}

// Function to set up quantity inputs
function setupQuantityInputs() {
    document.querySelectorAll('.pro-qty-2 input').forEach(input => {
        input.addEventListener('change', function () {
            const newQuantity = parseInt(this.value, 10);
            if (newQuantity > 0) {
                updateCartItemQuantity(input, newQuantity);
            } else {
                this.value = 1; // Reset to minimum quantity
            }
        });
    });
}

// Function to update the cart item quantity
function updateCartItemQuantity(input, newQuantity) {
    const row = input.closest('tr');
    const productId = row.dataset.productId;
    const price = parseFloat(row.querySelector('.product__cart__item__text h5').textContent.replace('$', ''));
    const totalColumn = row.querySelector('.cart__price');

    // Update the total price for the item
    const total = price * newQuantity;
    totalColumn.textContent = `$${total.toFixed(2)}`;

    // Update the cart in sessionStorage
    const cart = JSON.parse(sessionStorage.getItem('cart')) || {};
    if (cart[productId]) {
        cart[productId].quantity = newQuantity;
        sessionStorage.setItem('cart', JSON.stringify(cart));
    }

    // Update the cart summary
    updateCartSummary();
}

// Function to set up remove item buttons
function setupRemoveItemButtons() {
    document.querySelectorAll('.cart__close').forEach(button => {
        button.addEventListener('click', function () {
            // Show a confirmation dialog
            Swal.fire({
                title: 'Are you sure?',
                text: 'This product will be removed from your cart.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, remove it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Get the row containing the product
                    const row = this.closest('tr');
                    const productId = row.dataset.productId;

                    // Remove the item from the cart in sessionStorage
                    const cart = JSON.parse(sessionStorage.getItem('cart')) || {};
                    if (cart[productId]) {
                        delete cart[productId];
                        sessionStorage.setItem('cart', JSON.stringify(cart));
                    }

                    // Remove the row from the DOM
                    row.remove();

                    // Update the cart summary
                    updateCartSummary();

                    // Show a success message
                    Swal.fire({
                        icon: 'success',
                        title: 'Product Removed',
                        text: 'The product has been removed from your cart.',
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            });
        });
    });
}
    </script>
    <!-- Shopping Cart Section End -->
@endsection
