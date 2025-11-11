<?php
session_start();
require __DIR__ . '/db.php';

$id  = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
$qty = filter_input(INPUT_POST, 'qty', FILTER_VALIDATE_INT, ['options' => ['min_range' => 1, 'max_range' => 99]]);

if (!$id || !$qty) {
    header('Location: index.php'); exit;
}

$pdo = get_pdo();
$stmt = $pdo->prepare("SELECT id, name, price FROM products WHERE id = ? AND is_active = 1");
$stmt->execute([$id]);
$product = $stmt->fetch();

if (!$product) {
    header('Location: index.php'); exit;
}

if (!isset($_SESSION['basket'])) {
    $_SESSION['basket'] = [];
}

if (isset($_SESSION['basket'][$id])) {
    $_SESSION['basket'][$id]['qty'] += $qty;
} else {
    $_SESSION['basket'][$id] = [
        'name'  => $product['name'],
        'price' => (float)$product['price'],
        'qty'   => $qty
    ];
}

header('Location: cart.php'); exit;