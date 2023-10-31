<?php
if (empty($adsPartner_list)) {
    $adsPartner_list = [];
}
?>
<a class="mb-3 btn btn-primary" href="<?php echo _WEB ?>/admin/adsPartner/add">Thêm đối tác</a>
<div class="card px-4 pb-4">
    <h5 class="card-header">Danh sách đối tác quảng cáo</h5>
    <div class="table-responsive text-nowrap">
        <table class="table" id="UseraccountTable">
            <thead>
                <tr class="text-nowrap">
                    <th>#Mã</th>
                    <th>Tên đối tác</th>
                    <th>Tài Khoản</th>
                    <th>Email</th>
                    <th>Mật Khẩu</th>
                    <th>Địa Chỉ</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($adsPartner_list as $key => $value) { ?>
                    <tr>
                        </th>
                        <th scope="row"><?php echo $value['id']; ?>
                        <td><?php echo $value['fullname']; ?></td>
                        <td><?php echo $value['username']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                        <td><?php echo $value['pass']; ?></td>
                        <td><?php echo $value['address']; ?></td>
                        <td>
                            <a class="btn btn-danger" href="<?php echo _WEB ?>/admin/adsPartner/delete/<?php echo $value['id'] ?>">Xóa</a>
                            <a class="btn btn-success" href="<?php echo _WEB ?>/admin/adsPartner/edit/<?php echo $value['id'] ?>">Sửa</a>
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