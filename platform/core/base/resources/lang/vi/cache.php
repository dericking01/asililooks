<?php

return  [
  'cache_management' => 'Quản lý bộ nhớ đệm',
  'cache_management_description' => 'Xóa bộ nhớ đệm để cập nhật trang web của bạn.',
  'cache_commands' => 'Các lệnh xoá bộ nhớ đệm cơ bản',
  'commands' =>
   [
    'clear_cms_cache' =>
     [
      'title' => 'Xóa tất cả bộ đệm hiện có của ứng dụng',
      'description' => 'Xóa các bộ nhớ đệm của ứng dụng: cơ sở dữ liệu, nội dung tĩnh... Chạy lệnh này khi bạn thử cập nhật dữ liệu nhưng giao diện không thay đổi',
      'success_msg' => 'Bộ đệm đã được xóa',
    ],
    'refresh_compiled_views' =>
     [
      'title' => 'Làm mới bộ đệm giao diện',
      'description' => 'Làm mới bộ đệm giao diện giúp phần giao diện luôn mới nhất',
      'success_msg' => 'Bộ đệm giao diện đã được làm mới',
    ],
    'clear_config_cache' =>
     [
      'title' => 'Xóa bộ nhớ đệm của phần cấu hình',
      'description' => 'Bạn cần làm mới bộ đệm cấu hình khi bạn tạo ra sự thay đổi nào đó ở môi trường thành phẩm.',
      'success_msg' => 'Bộ đệm cấu hình đã được xóa',
    ],
    'clear_route_cache' =>
     [
      'title' => 'Xoá cache đường dẫn',
      'description' => 'Cần thực hiện thao tác này khi thấy không xuất hiện đường dẫn mới.',
      'success_msg' => 'Bộ đệm điều hướng đã bị xóa',
    ],
    'clear_log' =>
     [
      'description' => 'Xoá lịch sử lỗi',
      'success_msg' => 'Lịch sử lỗi đã được làm sạch',
      'title' => 'Xoá lịch sử lỗi',
    ],
  ],
  'optimization' =>
   [
    'title' => 'Tối ưu hiệu suất',
    'optimize' =>
     [
      'title' => 'Tối ưu hiệu suất trang web',
      'description' => 'Lưu cache cấu hình, routes và views để tăng tốc độ tải trang.',
      'button' => 'Tối ưu',
      'success_msg' => 'Tối ưu hóa đã hoàn thành thành công',
    ],
    'clear' =>
     [
      'title' => 'Xóa cache tối ưu',
      'description' => 'Xóa cache tối ưu để cho phép thay đổi cấu hình.',
      'button' => 'Xóa',
      'success_msg' => 'Cache tối ưu đã được xóa thành công',
    ],
    'messages' =>
     [
      'config_cached' => 'Cấu hình đã được lưu cache',
      'routes_cleared' => 'Routes đã được xóa (cần dòng lệnh để cache)',
      'views_compiled' => 'Views đã được biên dịch',
      'framework_cache_cleared' => 'Cache framework đã được xóa',
      'optimization_completed' => 'Tối ưu hoàn thành: :details',
      'optimization_failed' => 'Tối ưu thất bại: :error',
      'clear_failed' => 'Xóa cache tối ưu thất bại: :error',
    ],
  ],
  'type' => 'Loại',
  'description' => 'Mô tả',
  'action' => 'Hành động',
  'current_size' => 'Kích thước hiện tại',
  'clear_button' => 'Xóa',
  'refresh_button' => 'Làm mới',
  'cache_size_warning' => 'Kích thước bộ nhớ đệm CMS của bạn khá lớn (>50MB). Xóa nó có thể cải thiện hiệu suất hệ thống.',
  'footer_note' => 'Xóa bộ nhớ đệm sau khi thực hiện thay đổi trên trang web của bạn để đảm bảo chúng hiển thị chính xác.',
];
