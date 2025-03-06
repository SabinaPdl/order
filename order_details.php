<?php
session_start();
include("Menu_Conn.php");

if (!isset($_SESSION['user_id'])) {
    header("Location: Login.php");
    exit();
}

if (!isset($_GET['order_id'])) {
    die("Order ID not provided.");
}

$order_id = $_GET['order_id'];

$stmt = $conn->prepare("SELECT * FROM orders WHERE id = ? AND user_id = ?");
$stmt->bind_param("ii", $order_id, $_SESSION['user_id']);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    die("Order not found.");
}

$order = $result->fetch_assoc();
$order_items = json_decode($order['order_items'], true);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
</head>
<body>

    <h1>Order Details</h1>

    <?php foreach ($order_items as $item): ?>
        <div>
            <h3><?php echo $item['name']; ?></h3>
            <p><?php echo $item['description']; ?></p>
            <p>Price: <?php echo $item['price']; ?></p>
            <p>Quantity: <?php echo $item['quantity']; ?></p>
        </div>
    <?php endforeach; ?>

    <p>Total Price: <?php echo $order['total_price']; ?></p>

    <a href="checkout.php?order_id=<?php echo $order_id; ?>">Checkout</a>

</body>
</html>