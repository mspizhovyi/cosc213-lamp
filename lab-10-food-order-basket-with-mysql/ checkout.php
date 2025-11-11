<?php
session_start();
require __DIR__ . '/db.php';

$basket = $_SESSION['basket'] ?? [];

if (!$basket) {
    header('Location: cart.php'); exit;
}

$total = 0.0;
foreach ($basket as $row) {
    $total += $row['price'] * $row['qty'];
}

$pdo = get_pdo();
$pdo->beginTransaction();

try {
    // Create order
    $stmt = $pdo->prepare("INSERT INTO orders (total) VALUES (?)");
    $stmt->execute([$total]);
    $orderId = (int)$pdo->lastInsertId();

    // Insert items
    $stmtItem = $pdo->prepare("INSERT INTO order_items (order_id, product_id, qty, price_at_purchase) VALUES (?, ?, ?, ?)");
    foreach ($basket as $productId => $row) {
        $stmtItem->execute([$orderId, (int)$productId, (int)$row['qty'], (float)$row['price']]);
    }

    $pdo->commit();
    // Clear basket after successful order
    unset($_SESSION['basket']);

} catch (Throwable $e) {
    $pdo->rollBack();
    // In a real app, log the error
    header('Location: cart.php'); exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Checkout Complete</title>
  <style> body { font-family: Arial, sans-serif; margin: 30px; } </style>
</head>
<body>
  <h1>Order Placed</h1>
  <p>Your order has been saved with total $<?php echo number_format($total, 2); ?>.</p>
  <p><a href="index.php">Back to Menu</a></p>
</body>
</html>