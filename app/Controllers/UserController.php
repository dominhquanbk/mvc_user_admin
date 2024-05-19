<?php

// Khởi tạo cái Controller nè
namespace App\Controller;

// thêm cái Model dô nè, xử lý dữ liệu
use App\Models\User;

// tạo route nè
use Symfony\Component\Routing\RouteCollection;

class UserController
{
    // Show the product attributes based on the id.
	public function showAction(int $id, RouteCollection $routes)
	{
        // gọi Obj từ Model nè
        $user = new User();
        $user->read($id);


        // Sau đó gọi cái view ra nè, render cái html nè
        require_once APP_ROOT . '/views/user.php';
	}
}