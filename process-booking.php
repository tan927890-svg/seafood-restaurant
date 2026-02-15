<?php
session_start();
require_once 'config/database.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get and sanitize form data
    $name = sanitizeInput($_POST['name']);
    $phone = sanitizeInput($_POST['phone']);
    $email = sanitizeInput($_POST['email']);
    $date = sanitizeInput($_POST['date']);
    $time = sanitizeInput($_POST['time']);
    $guests = sanitizeInput($_POST['guests']);
    $notes = sanitizeInput($_POST['notes']);
    
    // Validate required fields
    if (empty($name) || empty($phone) || empty($date) || empty($time) || empty($guests)) {
        $_SESSION['message'] = '⚠️ Vui lòng điền đầy đủ thông tin bắt buộc!';
        header("Location: index.php#booking");
        exit();
    }
    
    // Validate phone number
    if (!preg_match("/^[0-9]{10,11}$/", $phone)) {
        $_SESSION['message'] = '⚠️ Số điện thoại không hợp lệ!';
        header("Location: index.php#booking");
        exit();
    }
    
    // Validate date (must be today or future)
    $bookingDate = strtotime($date);
    $today = strtotime(date('Y-m-d'));
    
    if ($bookingDate < $today) {
        $_SESSION['message'] = '⚠️ Vui lòng chọn ngày từ hôm nay trở đi!';
        header("Location: index.php#booking");
        exit();
    }
    
    // Get database connection
    $conn = getDBConnection();
    
    // Prepare SQL statement
    $sql = "INSERT INTO bookings (name, phone, email, booking_date, booking_time, guests, notes, created_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, NOW())";
    
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("sssssss", $name, $phone, $email, $date, $time, $guests, $notes);
        
        if ($stmt->execute()) {
            $_SESSION['message'] = '✅ Đặt bàn thành công! Chúng tôi sẽ liên hệ với bạn sớm nhất.';
            
            // Optional: Send email notification (requires mail configuration)
            // sendBookingEmail($email, $name, $date, $time);
            
        } else {
            $_SESSION['message'] = '❌ Có lỗi xảy ra. Vui lòng thử lại!';
        }
        
        $stmt->close();
    } else {
        $_SESSION['message'] = '❌ Lỗi hệ thống. Vui lòng thử lại sau!';
    }
    
    $conn->close();
    
} else {
    $_SESSION['message'] = '⚠️ Truy cập không hợp lệ!';
}

// Redirect back to home page
header("Location: index.php#booking");
exit();
?>