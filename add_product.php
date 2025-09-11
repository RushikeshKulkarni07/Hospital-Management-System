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

function make_date() {
    return date("Y-m-d H:i:s");
}

// --- HANDLE FORM SUBMISSION ---
$msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_product'])) {
    $p_name  = remove_junk($_POST['product-title']);
    $p_qty   = (int)$_POST['product-quantity'];
    $p_buy   = (float)$_POST['buying-price'];
    $p_sale  = (float)$_POST['saleing-price'];
    $date    = make_date();

    // Prepare statement
    $stmt = $conn->prepare(
        "INSERT INTO products (name, quantity, buy_price, sale_price, date) 
         VALUES (?, ?, ?, ?, ?)"
    );
    $stmt->bind_param("sidds", $p_name, $p_qty, $p_buy, $p_sale, $date);

    if ($stmt->execute()) {
        $msg = '<div class="alert alert-success">Product added successfully.</div>';
    } else {
        $msg = '<div class="alert alert-danger">Error: ' . $stmt->error . '</div>';
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Product</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    .panel { margin-top: 30px; }
  </style>
</head>
<body>
<div class="container">
  <h2 class="text-center">Add Product</h2>
  <?php echo $msg; ?>
  <div class="panel panel-default">
    <div class="panel-heading">
      <strong><span class="glyphicon glyphicon-th"></span> New Product</strong>
    </div>
    <div class="panel-body">
      <form method="post" action="add_product.php" class="clearfix">
        <div class="form-group">
          <label>Product Title</label>
          <input type="text" class="form-control" name="product-title" required>
        </div>

        <div class="form-group">
          <label>Product Quantity</label>
          <input type="number" class="form-control" name="product-quantity" required>
        </div>

        <div class="form-group">
          <label>Buying Price</label>
          <input type="number" step="0.01" class="form-control" name="buying-price" required>
        </div>

        <div class="form-group">
          <label>Selling Price</label>
          <input type="number" step="0.01" class="form-control" name="saleing-price" required>
        </div>

        <button type="submit" name="add_product" class="btn btn-success">Add Product</button>
        <div class="pull-right">
        <a href="product.php" class="btn btn-primary">Products</a>
      </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>