<?php

return [
    'login' => [
        'username' => 'Email/Tên truy cập',
        'email' => 'Email',
        'password' => 'Mật khẩu',
        'title' => 'Đăng nhập người dùng',
        'remember' => 'Nhớ mật khẩu?',
        'login' => 'Đăng nhập',
        'placeholder' => [
            'username' => 'Nhập tên đăng nhập hoặc địa chỉ email',
            'email' => 'Nhập địa chỉ email của bạn',
            'password' => 'Nhập mật khẩu của bạn',
        ],
        'success' => 'Đăng nhập thành công!',
        'fail' => 'Sai tên đăng nhập hoặc mật khẩu.',
        'not_active' => 'Tài khoản của bạn chưa được kích hoạt!',
        'banned' => 'Tài khoản này đã bị khóa.',
        'logout_success' => 'Đăng xuất thành công!',
        'dont_have_account' => 'Bạn không có tài khoản trong hệ thống này, vui lòng liên hệ quản trị viên để biết thêm thông tin!',
    ],
    'forgot_password' => [
        'title' => 'Quên mật khẩu',
        'message' => '<p>Bạn đã quên mật khẩu?</p><p>Vui lòng nhập địa chỉ email của tài khoản. Hệ thống sẽ gửi một email với liên kết kích hoạt để khôi phục mật khẩu của bạn.</p>',
        'submit' => 'Gửi',
    ],
    'reset' => [
        'new_password' => 'Mật khẩu mới',
        'password_confirmation' => 'Xác nhận mật khẩu mới',
        'email' => 'Email',
        'title' => 'Khôi phục mật khẩu của bạn',
        'update' => 'Cập nhật',
        'wrong_token' => 'Liên kết này không hợp lệ hoặc đã hết hạn. Vui lòng thử sử dụng biểu mẫu khôi phục lại.',
        'user_not_found' => 'Tên đăng nhập này không tồn tại.',
        'success' => 'Khôi phục mật khẩu thành công!',
        'fail' => 'Token không hợp lệ, liên kết khôi phục mật khẩu đã hết hạn!',
        'reset' => [
            'title' => 'Email khôi phục mật khẩu',
        ],
        'send' => [
            'success' => 'Một email đã được gửi đến tài khoản email của bạn. Vui lòng kiểm tra và hoàn thành hành động này.',
            'fail' => 'Không thể gửi email vào lúc này. Vui lòng thử lại sau.',
        ],
        'new-password' => 'Mật khẩu mới',
        'placeholder' => [
            'new_password' => 'Nhập mật khẩu mới của bạn',
            'new_password_confirmation' => 'Xác nhận mật khẩu mới của bạn',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'Email khôi phục mật khẩu',
        ],
    ],
    'password_confirmation' => 'Xác nhận mật khẩu',
    'failed' => 'Thất bại',
    'throttle' => 'Giới hạn',
    'not_member' => 'Chưa là thành viên?',
    'register_now' => 'Đăng ký ngay',
    'lost_your_password' => 'Quên mật khẩu?',
    'login_title' => 'Quản trị',
    'login_via_social' => 'Đăng nhập với mạng xã hội',
    'back_to_login' => 'Quay lại trang đăng nhập',
    'sign_in_below' => 'Đăng nhập bên dưới',
    'languages' => 'Ngôn ngữ',
    'reset_password' => 'Khôi phục mật khẩu',
    'deactivated_message' => 'Tài khoản của bạn đã bị vô hiệu hóa. Vui lòng liên hệ quản trị viên.',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'Cấu hình email ACL',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Khôi phục mật khẩu',
                    'description' => 'Gửi email cho người dùng khi yêu cầu khôi phục mật khẩu',
                    'subject' => 'Khôi phục mật khẩu',
                    'reset_link' => 'Liên kết khôi phục mật khẩu',
                    'email_title' => 'Hướng dẫn khôi phục mật khẩu',
                    'email_message' => 'Bạn nhận được email này vì chúng tôi đã nhận được yêu cầu khôi phục mật khẩu cho tài khoản của bạn.',
                    'button_text' => 'Khôi phục mật khẩu',
                    'trouble_text' => 'Nếu bạn gặp khó khăn khi nhấp vào nút "Khôi phục mật khẩu", hãy sao chép và dán URL bên dưới vào trình duyệt web của bạn: <a href=":reset_link">:reset_link</a>. Nếu bạn không yêu cầu khôi phục mật khẩu, vui lòng bỏ qua tin nhắn này hoặc liên hệ với chúng tôi nếu bạn có bất kỳ câu hỏi nào.',
                ],
            ],
        ],
    ],
];
