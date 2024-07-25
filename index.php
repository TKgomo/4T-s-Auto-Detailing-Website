<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4T's Auto Detailing</title>
    <link rel="shortcut icon" type="image/jpg" href="4T's/4T's final logo[300dpi].png"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c8e4d183c3.js" crossorigin="anonymous"></script>
</head>
<body>
    <section id="header">
        <a href="index.php">
            <img src="4T's/4T's final logo[300dpi].png" height="150" width="200" alt="This is the logo" title="4T's logo">
        </a>
        <div>
            <ul id="navigationBar">
                <li><a href="index.php">Home</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="booking.php">Book A Service</a></li>
                <li><a class="active" href="Shop.php">Shop</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container">
            <div class="pro" data-id="1" data-name="Interior Spray" data-price="180" data-image="C:/Users/tsheg/OneDrive/Pictures/Saved Pictures/startlight.jpeg">
                <img src="C:/Users/tsheg/OneDrive/Pictures/Saved Pictures/startlight.jpeg" alt="Interior Spray">
                <div class="des">
                    <span>Available</span>
                    <h5>The Last Starfall</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>R180</h4>
                </div>
                <button class="add-to-cart">Add to Cart</button>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <!-- Add more product cards here if needed -->
        </div>
    </section>

    <br>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cartButtons = document.querySelectorAll('.add-to-cart');

            cartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const productElement = this.closest('.pro');
                    const productId = productElement.getAttribute('data-id');
                    const productName = productElement.getAttribute('data-name');
                    const productPrice = productElement.getAttribute('data-price');
                    const productImage = productElement.getAttribute('data-image');

                    const cartItem = {
                        id: productId,
                        name: productName,
                        price: productPrice,
                        image: productImage
                    };

                    addToCart(cartItem);
                });
            });
        });

        function addToCart(item) {
            // Send AJAX request to add item to the cart
            fetch('add_to_cart.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(item)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // alert('Product added to cart successfully!');
                } else {
                    alert('Failed to add product to cart.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
    <script src="shop.js"></script>
</body>
</html>
