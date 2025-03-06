<?php
session_start();
include("Menu_Conn.php");

$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
    die(json_encode(['success' => false, 'message' => 'No data received.']));
}

if (!isset($_SESSION['user_id'])) {
    die(json_encode(['success' => false, 'message' => 'User not logged in.']));
}

$user_id = $_SESSION['user_id'];
$restaurant_id = 1;
$food_name = $data['food_name'];
$description = $data['description'];
$price = $data['price'];
$image = $data['image'];
$quantity = $data['quantity'];

$order_items = [[
    'name' => $food_name,
    'description' => $description,
    'price' => $price,
    'image' => $image,
    'quantity' => $quantity
]];

$total_price = $price * $quantity;

$stmt = $conn->prepare("INSERT INTO orders (user_id, restaurant_id, order_items, total_price) VALUES (?, ?, ?, ?)");
$stmt->bind_param("iisd", $user_id, $restaurant_id, json_encode($order_items), $total_price);

if ($stmt->execute()) {
    $order_id = $stmt->insert_id;
    echo json_encode(['success' => true, 'order_id' => $order_id]);
} else {
    echo json_encode(['success' => false, 'message' => 'Error creating order: ' . $stmt->error]);
}

$stmt->close();
$conn->close();
?>