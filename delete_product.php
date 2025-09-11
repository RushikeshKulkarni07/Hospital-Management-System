<?php
// --- DB CONNECTION ---
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'hospital';

$conn = new mysqli($host, $user, $password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// --- HELPER FUNCTION ---
function redirect($url) {
    header("Location: {$url}");
    exit();
}

// --- VALIDATE AND DELETE PRODUCT ---
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $product_id = (int)$_GET['id'];

    // Check if product exists
    $result = $conn->query("SELECT * FROM products WHERE id = $product_id");
    if ($result && $result->num_rows > 0) {
        // Delete it
        $delete = $conn->query("DELETE FROM products WHERE id = $product_id");
        if ($delete) {
            redirect('product.php?msg=Product+deleted+successfully');
        } else {
            redirect('product.php?msg=Failed+to+delete+product');
        }
    } else {
        redirect('product.php?msg=Product+not+found');
    }
} else {
    redirect('product.php?msg=Invalid+product+ID');
}
?>
