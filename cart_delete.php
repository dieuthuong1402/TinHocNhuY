<?php 
    require('./admin/config/config.php');

    if(!empty($userlogged)) {
        $id = isset($_GET['id']) ? $_GET['id'] : '';

        if(!empty($id)) {
            
            $stmt = $conn->prepare("DELETE FROM `gio_hang` WHERE id_khach_hang = ? AND id_san_pham = ?");
            $stmt->bind_param("ii", $userlogged['id'], $id);
            if($stmt->execute()) {
                echo json_encode(array("title" => "Thành công", "message" => "Đã thêm sản phẩm vào giỏ hàng!", "type" => "success", "cart_products" => $cart_products));
            } else {
                echo json_encode(array("title" => "Thất bại", "message" => "Đã xảy lỗi, vui lòng thử lại sau ít phút!", "type" => "error"));
            }
           
        }

    } else {
        header('location: ./login.php');
    }
?>
