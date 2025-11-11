<?php
session_start();
require __DIR__ . '/db.php';

$pdo = get_pdo();
$products = $pdo->query("SELECT id, name, price FROM products WHERE is_active = 1 ORDER BY name")->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Food Basket (DB)</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 30px; }
    .grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(220px, 1fr)); gap: 16px; }
    .card { border: 1px solid #ddd; padding: 16px; border-radius: 8px; }
    .price { font-weight: bold; }
    .actions { margin-top: 8px; }
    input[type=number] { width: 80px; }
    .topnav { margin-bottom: 16px; }
  </style>
</head>
<body>
  <div class="topnav">
    <a href="cart.php">View Basket</a>
  </div>
  <h1>Menu</h1>

  <div class="grid">
    <?php foreach ($products as $p): ?>
      <div class="card">
        <h3><?php echo htmlspecialchars($p['name']); ?></h3>
        <p class="price">$<?php echo number_format($p['price'], 2); ?></p>
        <form class="actions" method="post" action="add_item.php">
          <input type="hidden" name="id" value="<?php echo (int)$p['id']; ?>">
          <label>
            Qty:
            <input type="number" name="qty" value="1" min="1" max="99" required>
          </label>
          <button type="submit">Add to Basket</button>
        </form>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>