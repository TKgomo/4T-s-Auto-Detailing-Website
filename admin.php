<?php
session_start();
include 'config.php';

// Check if the user is logged in as an admin
if(!isset($_SESSION['user_name'])) {
    header('Location: admin_login.php'); // Redirect to the admin login page
    exit;
}

$admin_name = $_SESSION['user_name'];

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_product'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_POST['image'];

        $query = "INSERT INTO products (name, price, image) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }
        $stmt->bind_param("sds", $name, $price, $image);
        if ($stmt->execute() === false) {
            die('Execute failed: ' . htmlspecialchars($stmt->error));
        }
        $stmt->close();
    } elseif (isset($_POST['delete_product'])) {
        $id = $_POST['id'];

        $query = "DELETE FROM products WHERE id = ?";
        $stmt = $conn->prepare($query);
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }
        $stmt->bind_param("i", $id);
        if ($stmt->execute() === false) {
            die('Execute failed: ' . htmlspecialchars($stmt->error));
        }
        $stmt->close();
    } elseif (isset($_POST['update_product'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_POST['image'];

        $query = "UPDATE products SET name = ?, price = ?, image = ? WHERE id = ?";
        $stmt = $conn->prepare($query);
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }
        $stmt->bind_param("sdsi", $name, $price, $image, $id);
        if ($stmt->execute() === false) {
            die('Execute failed: ' . htmlspecialchars($stmt->error));
        }
        $stmt->close();
    } elseif (isset($_POST['delete_admin'])) {
        $id = $_POST['id'];
        // Prevent deleting the currently logged-in admin
        if ($id == $_SESSION['admin_id']) {
            die('You cannot delete yourself.');
        }

        $query = "DELETE FROM admins WHERE id = ?";
        $stmt = $conn->prepare($query);
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($conn->error));
        }
        $stmt->bind_param("i", $id);
        if ($stmt->execute() === false) {
            die('Execute failed: ' . htmlspecialchars($stmt->error));
        }
        $stmt->close();
    }
}

// Fetch products
$query = "SELECT * FROM products";
$result = $conn->query($query);
$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

// Fetch admins
$query = "SELECT * FROM admins";
$result = $conn->query($query);
$admins = [];
while ($row = $result->fetch_assoc()) {
    $admins[] = $row;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin - 4T's Auto Detailing</title>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>
    <h1>Welcome to Admin Panel, <?= htmlspecialchars($admin_name) ?></h1>

    <section id="header">
        <a href="#"><img src="4T's/4T's final logo[300dpi].png" height="130" width="200" alt="This is the logo" title="4T's logo"></a>
        <div id="nav-buttonad">
            <ul id="navigationBarad"> 
                <li><a class="active" href="Project.php">Home</a></li>
                <li><a href="Services.html">Services</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="Blog.html">Blog</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="Contact.html">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>   
            </ul>
        </div>
    </section>

    <section id="product-management">
        <h2>Manage Products</h2>
        <form method="POST" action="">
            <input type="hidden" name="id" id="product-id">
            <input type="text" name="name" id="product-name" placeholder="Product Name" required>
            <input type="text" name="price" id="product-price" placeholder="Product Price" required>
            <input type="text" name="image" id="product-image" placeholder="Product Image URL" required>
            <button type="submit" name="add_product">Add Product</button>
            <button type="submit" name="update_product">Update Product</button>
        </form>
        
        <h2>Product List</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product['id']) ?></td>
                    <td><?= htmlspecialchars($product['name']) ?></td>
                    <td><?= htmlspecialchars($product['price']) ?></td>
                    <td><img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" width="50"></td>
                    <td>
                        <button class="edit" data-id="<?= htmlspecialchars($product['id']) ?>" data-name="<?= htmlspecialchars($product['name']) ?>" data-price="<?= htmlspecialchars($product['price']) ?>" data-image="<?= htmlspecialchars($product['image']) ?>">Edit</button>
                        <form method="POST" action="" style="display:inline;">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($product['id']) ?>">
                            <button type="submit" name="delete_product">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

    <section id="admin-management">
        <h2>Manage Admins</h2>
        <h3>Admin List</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($admins as $admin): ?>
                <tr>
                    <td><?= htmlspecialchars($admin['id']) ?></td>
                    <td><?= htmlspecialchars($admin['username']) ?></td>
                    <td>
                        <form method="POST" action="" style="display:inline;">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($admin['id']) ?>">
                            <button type="submit" name="delete_admin">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <p>To add a new admin, please <a href="register_admin.php">register here</a>.</p>
    </section>

    <script>
        document.querySelectorAll('.edit').forEach(button => {
            button.addEventListener('click', () => {
                document.getElementById('product-id').value = button.getAttribute('data-id');
                document.getElementById('product-name').value = button.getAttribute('data-name');
                document.getElementById('product-price').value = button.getAttribute('data-price');
                document.getElementById('product-image').value = button.getAttribute('data-image');
            });
        });
    </script>
</body>
</html>
