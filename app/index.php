<?php
$host = getenv('DB_HOST') ?: 'db';
$user = getenv('DB_USER') ?: 'inventory_user';
$pass = getenv('DB_PASSWORD') ?: 'InventoryPass123!';
$dbname = getenv('DB_NAME') ?: 'inventory_db';

// Kết nối CSDL MySQL
$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("<h2 style='color:red;'>Kết nối Database thất bại: " . $conn->connect_error . "</h2>");
}

echo "<h1>HỆ THỐNG QUẢN LÝ KHO HÀNG (INVENTORY SYSTEM)</h1>";
echo "<p style='color:green;'><b>Trạng thái:</b> Kết nối CSDL MySQL thành công!</p>";
echo "<hr>";
echo "<h3>Chức năng chính:</h3>";
echo "<ul>
        <li>Nhập / Xuất hàng hóa</li>
        <li>Báo cáo tồn kho</li>
        <li>Quản lý nhà cung cấp</li>
      </ul>";
?>