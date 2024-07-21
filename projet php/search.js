        document.getElementById('searchForm').addEventListener('submit', function(event) {
            event.preventDefault(); 

            const searchQuery = document.getElementById('searchInput').value.toLowerCase();

            const products = document.querySelectorAll('.product');

            let productsVisible = false;
            products.forEach(product => {
                const name = product.dataset.name.toLowerCase();
                const type = product.dataset.type.toLowerCase();

                if (name.includes(searchQuery) || type.includes(searchQuery)) {
                    product.style.display = 'block'; 
                    productsVisible = true;
                } else {
                    product.style.display = 'none';
                }
            });
            document.getElementById('mainContent').style.display = productsVisible ? 'block' : 'none';
        });
