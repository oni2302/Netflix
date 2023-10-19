# [Netflix](https://github.com/oni2302/Netflix)

- Đầu tiên là tất cả đường link nó sẽ vào index.php.
  - index.php sẽ gọi boot.php
  - boot.php sẽ cài đặt những thứ cần thiết cho web trong đó có App.php

- Tiếp theo
  - App.php sẽ xử lí đường link được lưu trong Configs/routes.php
  - Nếu có thay đối đường link trong routes thì sẽ dùng link còn không sẽ dùng link mặc định.
  - App.php xử lí xong nếu lấy được đúng Controller Action và Params thì sẽ trỏ vào 
    Controller/<Tên Controller.php => Action trong controller đó => nếu action có tham số thì sẽ tự đưa Params vào tham số.

- Phần viết code
  - Controller sẽ viết trong thư mục App/Controllers
  - Controller sẽ xử lí các yêu cầu của người dùng và gọi View nếu cần.
  - View sẽ viết trong thư mục App/Views
    - Trong View sẽ viết html, css, js, php(nếu cần) trong này
  - Model viết trong thư mục App/Models
    - Model là các hàm xử lí công việc liên quan đến database.

- Đặt tên Controller, Model, View 
    - Ví dụ Controller là Home.php có các hàm cần view như index() create() thì:
        - Model sẽ là HomeModel.php
        - View sẽ lưu như sau
            - App/Views/Home/index.php
            - App/View/Home/create.php


- Xử lí POST/GET
  - Nếu gửi một form từ html lên server
  - Lấy data từ form bằng lớp Request
    - $request = new Request();
      $data = $request->getField();
    - Hàm getField() sẽ lấy data theo dạng array
      - Ví dụ $data['username']

# ! Lưu ý, mọi người không code trên nhánh master.
- Khi bắt đầu task của mình mọi người tự tạo một nhánh riêng cho mình, làm xong mọi người gửi Pull request mình sẽ kiểm tra rồi nhập vào nhánh Master.
