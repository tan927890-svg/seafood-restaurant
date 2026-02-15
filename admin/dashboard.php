<?php
session_start();

// Check if logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit();
}

require_once '../config/database.php';

// Get statistics
$conn = getDBConnection();

// Total bookings
$totalBookings = $conn->query("SELECT COUNT(*) as count FROM bookings")->fetch_assoc()['count'];

// Today's bookings
$todayBookings = $conn->query("SELECT COUNT(*) as count FROM bookings WHERE booking_date = CURDATE()")->fetch_assoc()['count'];

// Pending bookings
$pendingBookings = $conn->query("SELECT COUNT(*) as count FROM bookings WHERE status = 'pending'")->fetch_assoc()['count'];

// Get recent bookings
$recentBookings = $conn->query("SELECT * FROM bookings ORDER BY created_at DESC LIMIT 10");

?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Trị - Biển Xanh</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
        }

        .header {
            background: linear-gradient(135deg, #006994 0%, #0a4d68 100%);
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header h1 {
            font-size: 1.5rem;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .btn-logout {
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .btn-logout:hover {
            background: rgba(255,255,255,0.3);
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 2rem;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .stat-card h3 {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .stat-card .number {
            font-size: 2.5rem;
            color: #006994;
            font-weight: bold;
        }

        .bookings-section {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .bookings-section h2 {
            color: #0a4d68;
            margin-bottom: 1.5rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background: #f5f5f5;
            color: #0a4d68;
            font-weight: 600;
        }

        .status {
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        .status-pending {
            background: #fff3cd;
            color: #856404;
        }

        .status-confirmed {
            background: #d4edda;
            color: #155724;
        }

        .status-cancelled {
            background: #f8d7da;
            color: #721c24;
        }

        .actions {
            display: flex;
            gap: 0.5rem;
        }

        .btn-action {
            padding: 0.3rem 0.8rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.85rem;
            text-decoration: none;
            display: inline-block;
        }

        .btn-confirm {
            background: #4CAF50;
            color: white;
        }

        .btn-cancel {
            background: #f44336;
            color: white;
        }

        @media (max-width: 768px) {
            table {
                font-size: 0.85rem;
            }

            th, td {
                padding: 0.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🦞 Quản Trị Nhà Hàng Biển Xanh</h1>
        <div class="user-info">
            <span>Xin chào, <?php echo htmlspecialchars($_SESSION['admin_username']); ?></span>
            <a href="logout.php" class="btn-logout">Đăng Xuất</a>
        </div>
    </div>

    <div class="container">
        <div class="stats">
            <div class="stat-card">
                <h3>Tổng Đặt Bàn</h3>
                <div class="number"><?php echo $totalBookings; ?></div>
            </div>
            <div class="stat-card">
                <h3>Đặt Bàn Hôm Nay</h3>
                <div class="number"><?php echo $todayBookings; ?></div>
            </div>
            <div class="stat-card">
                <h3>Chờ Xác Nhận</h3>
                <div class="number"><?php echo $pendingBookings; ?></div>
            </div>
        </div>

        <div class="bookings-section">
            <h2>Đặt Bàn Gần Đây</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên Khách</th>
                        <th>SĐT</th>
                        <th>Ngày</th>
                        <th>Giờ</th>
                        <th>Số Khách</th>
                        <th>Trạng Thái</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($booking = $recentBookings->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $booking['id']; ?></td>
                        <td><?php echo htmlspecialchars($booking['name']); ?></td>
                        <td><?php echo htmlspecialchars($booking['phone']); ?></td>
                        <td><?php echo date('d/m/Y', strtotime($booking['booking_date'])); ?></td>
                        <td><?php echo date('H:i', strtotime($booking['booking_time'])); ?></td>
                        <td><?php echo htmlspecialchars($booking['guests']); ?></td>
                        <td>
                            <span class="status status-<?php echo $booking['status']; ?>">
                                <?php 
                                    $statusLabels = [
                                        'pending' => 'Chờ xác nhận',
                                        'confirmed' => 'Đã xác nhận',
                                        'cancelled' => 'Đã hủy'
                                    ];
                                    echo $statusLabels[$booking['status']];
                                ?>
                            </span>
                        </td>
                        <td>
                            <div class="actions">
                                <?php if ($booking['status'] === 'pending'): ?>
                                <a href="update-booking.php?id=<?php echo $booking['id']; ?>&status=confirmed" 
                                   class="btn-action btn-confirm">Xác nhận</a>
                                <a href="update-booking.php?id=<?php echo $booking['id']; ?>&status=cancelled" 
                                   class="btn-action btn-cancel">Hủy</a>
                                <?php endif; ?>
                            </div>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<?php $conn->close(); ?>