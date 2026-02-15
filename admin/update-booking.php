<?php
session_start();

// Check if logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

require_once '../config/database.php';

// Get parameters
$bookingId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$status = isset($_GET['status']) ? $_GET['status'] : '';

// Validate status
$allowedStatuses = ['pending', 'confirmed', 'cancelled'];
if (!in_array($status, $allowedStatuses)) {
    header("Location: dashboard.php");
    exit();
}

// Update booking status
$conn = getDBConnection();
$sql = "UPDATE bookings SET status = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $status, $bookingId);

if ($stmt->execute()) {
    $_SESSION['dashboard_message'] = 'Cập nhật trạng thái thành công!';
} else {
    $_SESSION['dashboard_message'] = 'Có lỗi xảy ra khi cập nhật!';
}

$stmt->close();
$conn->close();

header("Location: dashboard.php");
exit();
?>