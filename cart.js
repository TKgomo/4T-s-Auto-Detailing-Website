document.addEventListener('DOMContentLoaded', () => {
    const cart = JSON.parse(localStorage.getItem('cart')) || [];
    const cartTableBody = document.querySelector('#cart-table tbody');
    const totalPriceElement = document.getElementById('total-price');
    const checkoutButton = document.getElementById('checkout');

    function updateCart() {
        cartTableBody.innerHTML = '';
        let total = 0;
        let productNames = [];

        cart.forEach(item => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td><img src="${item.image}" alt="${item.name}" style="width:50px;"></td>
                <td>${item.name}</td>
                <td>R${item.price}</td>
                <td><input type="number" value="${item.quantity}" min="1" data-id="${item.id}" class="quantity-input"></td>
                <td>R${item.price * item.quantity}</td>
                <td><button class="remove" data-id="${item.id}">Remove</button></td>
            `;
            cartTableBody.appendChild(row);
            total += item.price * item.quantity;
            productNames.push(item.name);
        });

        totalPriceElement.textContent = total;
        checkoutButton.addEventListener('click', () => {
            const total = totalPriceElement.textContent;
            const products = productNames.join(", ");
            window.location.href = `card.html?total=${total}&products=${encodeURIComponent(products)}`;
        });
    }

    cartTableBody.addEventListener('click', (e) => {
        if (e.target.classList.contains('remove')) {
            const productId = e.target.getAttribute('data-id');
            const cartIndex = cart.findIndex(item => item.id === productId);
            if (cartIndex > -1) {
                cart.splice(cartIndex, 1);
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCart();
            }
        }
    });

    cartTableBody.addEventListener('change', (e) => {
        if (e.target.classList.contains('quantity-input')) {
            const productId = e.target.getAttribute('data-id');
            const newQuantity = parseInt(e.target.value);
            const cartItem = cart.find(item => item.id === productId);
            if (cartItem && newQuantity > 0) {
                cartItem.quantity = newQuantity;
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCart();
            }
        }
    });

    updateCart();
});
