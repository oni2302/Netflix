<?php
if (empty($voucher_list)) {
    $vocher_list = [];
}
?>
<div class="card px-4 pb-4">
    <h5 class="card-header">Danh sách Voucher</h5>
    <div class="table-responsive text-nowrap">
        <table class="table" id="VoucherTable">
            <thead>
                <tr class="text-nowrap">
                    <th>#Mã</th>
                    <th>Tên Voucher</th>
                    <th>Mã Code</th>
                    <th>Giam Gía</th>
                    <th>Thời Gian Duy Trì</th>
                    <th>Ngày Tạo</th>
                    <th>Ngày Đóng</th>
                    <th>Sở Hữu</th>
                    <th>Ngày Thực Tế Được Tạo</th>
                </tr>
            </thead>
            <tbody> 
                    <?php foreach ($voucher_list as $key => $value) { ?>
                        <tr>
                </th>
                <th scope="row"><?php echo $value['id']; ?>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['code']; ?></td>
                <td><?php echo $value['discount']; ?></td>
                <td><?php echo $value['remaining']; ?></td>
                <td><?php echo $value['startDate']; ?></td>
                <td><?php echo $value['endDate']; ?></td>
                <td><?php echo $value['specificFor']; ?></td>
                <td><?php echo $value['createDate']; ?></td>
                <td>
                  <a class="btn" href="/netflix/admin/voucher/deletevoucher/<?php echo $value['id'] ?>" >Delete</a>
                  <a class="btn" href="/netflix/admin/voucher/xulieditVoucher/<?php echo $value['id'] ?>" >Edit</a>
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