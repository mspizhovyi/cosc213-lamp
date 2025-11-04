<?php
session_start();
$basket = $_SESSION['basket'] ?? [];
$total = 0.0;
foreach ($basket as $row) {
    $total += $row['price'] * $row['qty'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Your Basket</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 30px; }
    table { border-collapse: collapse; width: 100%; }
    th, td { border: 1px solid #ddd; padding: 8px; }
    th { background-color: #f0f0f0; }
    input[type=number] { width: 70px; }
  </style>
</head>
<body>
  <h1>Your Basket</h1>
  <p><a href="index.php">Continue Ordering</a> | <a href="clear_cart.php">Clear Basket</a> | <a href="checkout.php">Checkout</a></p>

  <?php if (!$basket): ?>
    <p>Your basket is empty.</p>
  <?php else: ?>
    <table>
      <thead>
        <tr>
          <th>Item</th><th>Price</th><th>Qty</th><th>Line Total</th><th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($basket as $id => $row): ?>
          <tr>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td>$<?= number_format($row['price'], 2) ?></td>
            <td>
              <form method="post" action="update_item.php">
                <input type="hidden" name="id" value="<?= (int)$id ?>">
                <input type="number" name="qty" value="<?= (int)$row['qty'] ?>" min="1" max="99" required>
                <button type="submit">Update</button>
              </form>
            </td>
            <td>$<?= number_format($row['price'] * $row['qty'], 2) ?></td>
            <td>
              <form method="post" action="remove_item.php" onsubmit="return confirm('Remove this item?');">
                <input type="hidden" name="id" value="<?= (int)$id ?>">
                <button type="submit">Remove</button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="3" style="text-align:right;">Total:</th>
          <th colspan="2">$<?= number_format($total, 2) ?></th>
        </tr>
      </tfoot>
    </table>
  <?php endif; ?>
</body>
</html>
