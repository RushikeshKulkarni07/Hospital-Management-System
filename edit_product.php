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

// --- HELPER FUNCTIONS ---
function remove_junk($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function display_msg($msg) {
    if (!empty($msg)) {
        return '<div class="alert alert-info">' . $msg . '</div>';
    }
    return '';
}

// --- GET PRODUCT ---
$product_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$product = null;

if ($product_id > 0) {
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
    $stmt->close();
}

if (!$product) {
    die("Missing product id or product not found.");
}

// --- UPDATE PRODUCT ---
$msg = "";
if (isset($_POST['product'])) {
    $p_name = remove_junk($_POST['product-title']);
    $p_qty = (int)$_POST['product-quantity'];
    $p_buy = (float)$_POST['buying-price'];
    $p_sale = (float)$_POST['saleing-price'];

    if ($p_name && $p_qty >= 0 && $p_buy >= 0 && $p_sale >= 0) {
        $stmt = $conn->prepare("UPDATE products SET name = ?, quantity = ?, buy_price = ?, sale_price = ? WHERE id = ?");
        $stmt->bind_param("sdddi", $p_name, $p_qty, $p_buy, $p_sale, $product_id);
        if ($stmt->execute()) {
            header("Location: product.php?msg=Product+updated+successfully");
            exit();
        } else {
            $msg = "Update failed!";
        }
        $stmt->close();
    } else {
        $msg = "All fields are required and must be valid.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Product</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    .panel {
      margin-top: 30px;
    }
  </style>
</head>
<body>
<div class="container">
  <h2 class="text-center" style="margin-top: 30px;">Edit Product</h2>
  <?php echo display_msg($msg); ?>

  <div class="panel panel-default">
    <div class="panel-body">
      <form method="post" action="edit_product.php?id=<?php echo $product_id; ?>">
        <div class="form-group">
          <label>Product Title</label>
          <input type="text" name="product-title" class="form-control" value="<?php echo remove_junk($product['name']); ?>" required>
        </div>

        <div class="form-group">
          <label>Quantity</label>
          <input type="number" name="product-quantity" class="form-control" value="<?php echo (int)$product['quantity']; ?>" required>
        </div>

        <div class="form-group">
          <label>Buying Price</label>
          <input type="number" step="0.01" name="buying-price" class="form-control" value="<?php echo (float)$product['buy_price']; ?>" required>
        </div>

        <div class="form-group">
          <label>Selling Price</label>
          <input type="number" step="0.01" name="saleing-price" class="form-control" value="<?php echo (float)$product['sale_price']; ?>" required>
        </div>

        <button type="submit" name="product" class="btn btn-success">Update</button>
        <a href="product.php" class="btn btn-default">Back</a>
      </form>
    </div>
  </div>
</div>
</body>
</html>
