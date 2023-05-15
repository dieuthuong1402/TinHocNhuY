<?php
    session_start();
    define("DATABASE", "tin-hoc-nhu-y");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("LOCALHOST", "localhost");
    $conn = new mysqli(LOCALHOST, USERNAME, PASSWORD, DATABASE);
    
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    } 
    
    date_default_timezone_set('Asia/Ho_Chi_Minh'); 
    $date_current = '';
    $date_current = date("Y-m-d H:i:s");

    if (!function_exists('currency_format')) {
        function currency_format($number, $suffix = 'đ') {
            if (!empty($number)) {
                return number_format($number, 0, ',', '.') . "{$suffix}";
            }
        }
    }


    $userlogged = isset($_SESSION['user_logged']) ? $_SESSION['user_logged'] : array();
    $adminlogged = isset($_SESSION['admin_logged']) ? $_SESSION['admin_logged'] : array();

    // get cart product
    function get_cart($conn, $user_id) {
        $data = array();

        $sql = "SELECT gio_hang.so_luong, san_pham.id, san_pham.ten_sp, san_pham.don_gia_ban, san_pham.hinh_anh
                FROM gio_hang, san_pham
                WHERE gio_hang.id_san_pham = san_pham.id AND gio_hang.id_khach_hang = {$user_id}";

        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }
?>