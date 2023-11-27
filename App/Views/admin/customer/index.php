<?php
if (empty($customer_list)) {
    $customer_list = [];
}
?>
<a class="mb-3 btn btn-primary" href="<?php echo _WEB ?>/admin/customer/ViewAdd">Thêm Khách Hàng</a>
<div class="card px-4 pb-4">
    <h5 class="card-header">Danh sách Khách Hàng</h5>
    <div class="table-responsive text-nowrap">
        <table class="table" id="UseraccountTable">
            <thead>
                <tr class="text-nowrap">
                    <th>#Mã</th>
                    <th>Tài Khoản</th>
                    <th>Mật Khẩu</th>
                    <th>Email</th>
                    <th>Ngày Tạo</th>
                    <th>Tên Đầy Đủ</th>
                    <th>Ngày Sinh</th>
                    <th>Địa Chỉ</th>
                    <th>Gói Dịch Vụ</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customer_list as $key => $value) { ?>
                    <tr>
                        </th>
                        <th scope="row"><?php echo $value['id']; ?>
                        <td><?php echo $value['username']; ?></td>
                        <td><?php echo $value['pass']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                        <td><?php echo $value['registerDate']; ?></td>
                        <td><?php echo $value['fullname']; ?></td>
                        <td><?php echo $value['birth']; ?></td>
                        <td><?php echo $value['address']; ?></td>
                        <td><?php echo $value['currentService']; ?> </td>
                        <td>
                            <a class="btn" href="<?php echo _WEB ?>/customer/deletecustomer/<?php echo $value['id'] ?>">Delete</a>
                            <a class="btn" href="<?php echo _WEB ?>/admin/customer/xulieditcustomer/<?php echo $value['id'] ?>">Edit</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    let table = new DataTable('#videoTable', {
        paging: true,
        scrollX: 12000,
        language: {
            emptyTable: "Không có dữ liệu!",
            infoEmpty: "Hiện tại không có dữ liệu!",
            infoFiltered: "Lọc dữ liệu từ _MAX_ kết quả.",
            loadingRecords: "Đang tải...",
            lengthMenu: "Hiển thị _MENU_ kết quả.",
            info: "Hiển thị từ _START_ đến _END_ của _TOTAL_ kết quả.",
            paginate: {
                first: "Trang đầu",
                last: "Trang cuối",
                next: "Tiếp theo",
                previous: "Quay lại"
            },
            search: "Tìm kiếm"
        }
    });
</script>