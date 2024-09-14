document.querySelectorAll('.btn-add-to-cart').forEach(button => {
    button.addEventListener('click', function() {
        let productId = this.getAttribute('data-product-id');
        
        fetch('/cart/add', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                product_id: productId,
                quantity: 1
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Producto añadido al carrito');
            } else {
                alert('Hubo un problema al añadir el producto al carrito.');
            }
        })
        .catch(error => console.error('Error:', error));
    });
});
