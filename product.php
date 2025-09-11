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

function read_date($str) {
    return date("F j, Y", strtotime($str));
}

function count_id() {
    static $count = 1;
    return $count++;
}

// --- FETCH PRODUCTS ---
function fetch_products($conn) {
    $sql = "SELECT id, name, quantity, buy_price, sale_price, date FROM products ORDER BY id DESC";
    $result = $conn->query($sql);
    $products = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
    }
    return $products;
}

$products = fetch_products($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All Products</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <style>
    .panel {
      margin-top: 30px;
    }
  </style>
</head>
<body>
<div class="container">
  <h2 class="text-center" style="margin-top: 30px;">All Products</h2>

  <div class="clearfix" style="margin-bottom: 15px;">
    <div class="pull-right">
      <a href="add_product.php" class="btn btn-primary">Add New</a>
      <a href="index.html" class="btn btn-danger">Logout</a>
    </div>
  </div>

  <?php if (isset($_GET['msg'])): ?>
    <div class="alert alert-info text-center">
      <?php echo htmlspecialchars($_GET['msg']); ?>
    </div>
  <?php endif; ?>

  <div class="panel panel-default">
    <div class="panel-body">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th class="text-center" style="width: 50px;">#</th>
            <th>Product Title</th>
            <th class="text-center" style="width: 10%;">In-Stock</th>
            <th class="text-center" style="width: 10%;">Buying Price</th>
            <th class="text-center" style="width: 10%;">Selling Price</th>
            <th class="text-center" style="width: 15%;">Product Added</th>
            <th class="text-center" style="width: 100px;">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
              <tr>
                <td class="text-center"><?php echo count_id(); ?></td>
                <td><?php echo remove_junk($product['name']); ?></td>
                <td class="text-center"><?php echo remove_junk($product['quantity']); ?></td>
                <td class="text-center"><?php echo remove_junk($product['buy_price']); ?></td>
                <td class="text-center"><?php echo remove_junk($product['sale_price']); ?></td>
                <td class="text-center"><?php echo read_date($product['date']); ?></td>
                <td class="text-center">
                  <div class="btn-group">
                    <a href="edit_product.php?id=<?php echo (int)$product['id']; ?>" class="btn btn-info btn-xs" title="Edit">
                      <span class="glyphicon glyphicon-edit"></span>
                    </a>
                    <a href="delete_product.php?id=<?php echo (int)$product['id']; ?>" class="btn btn-danger btn-xs" title="Delete" onclick="return confirm('Are you sure?');">
                      <span class="glyphicon glyphicon-trash"></span>
                    </a>
                  </div>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
            <tr><td colspan="7" class="text-center">No products found</td></tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>
