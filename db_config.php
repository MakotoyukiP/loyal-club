<?php
// ข้อมูลสำหรับเชื่อมต่อฐานข้อมูล
$db_host = 'localhost';
$db_name = 'cenfinity';
$db_user = 'username'; // เปลี่ยนเป็นชื่อผู้ใช้ MySQL ของคุณ
$db_pass = 'password'; // เปลี่ยนเป็นรหัสผ่าน MySQL ของคุณ

try {
    $pdo = new PDO("mysql:host={$db_host};dbname={$db_name};charset=utf8mb4", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    error_log("Database connection error: " . $e->getMessage());
    die("ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้ กรุณาติดต่อผู้ดูแลระบบ");
}
?>
