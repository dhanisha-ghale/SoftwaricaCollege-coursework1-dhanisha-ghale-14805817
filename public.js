document.addEventListener("DOMContentLoaded", function() {
    fetch('products.json')
        .then(response => response.json())
        .then(data => {
            const productList = document.getElementById('product-list');
            data.products.forEach(product => {
                const productItem = document.createElement('div');
                productItem.className = 'product-item';
                productItem.innerHTML = `
                    <img src="${product.image}" alt="${product.name}">
                    <h3>${product.name}</h3>
                    <p>${product.description}</p>
                    <p>Price: $${product.price}</p>
                `;
                productList.appendChild(productItem);
            });
        })
        .catch(error => console.error('Error fetching products:', error));
});

