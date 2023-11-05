<?php
if (empty($supplier_list)) {
    $supplier_list = [];
}
?>
<a class="btn btn-primary mb-3" href="<?php echo _WEB ?>/admin/supplier/viewAdd/">Thêm nhà cung cấp</a><div class="card px-4 pb-4">
    <h5 class="card-header">Danh sách nhà cung cấp</h5>
    <div class="table-responsive text-nowrap">
        <table class="table" id="videoTable">
            <thead>
                <tr class="text-nowrap">
                    <th>#Mã</th>
                    <th>Tên nhà cung cấp</th>
                    <th>Ngày thêm</th>
                    <th>Tổng thanh toán</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($supplier_list as $key => $value) { ?>
                    <tr>
                        <th scope="row"><?php echo $value['id']; ?></th>
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['addDate']; ?></td>
                        <td><?php echo $value['totalPaying']; ?></td>
                        <td>
                            <a class="btn" href="<?php echo _WEB ?>/admin/supplier/viewEdit/<?php echo $value['id'] ?>">Edit</a>
                            <a class="btn" href="<?php echo _WEB ?>/admin/supplier/deleteSupplier/<?php echo $value['id'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    let table = new DataTable('#serviceTable', {
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