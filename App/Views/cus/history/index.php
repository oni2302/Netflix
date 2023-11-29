<?php
if (empty($history)) {
    $history = [];
}
?>
<div class="card px-4 pb-4">
    <h5 class="card-header">Lịch sử mua hàng</h5>
    <div class="table-responsive text-nowrap">
        <table class="table" id="puschareHistoryTable">
            <thead>
                <tr class="text-nowrap">
                    <th>Tên gói</th>
                    <th>Ngày đăng ký gói</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($history as $key => $value) { ?>
                    <tr>
                        </th>
                        <th scope="row"><?php echo $value['serviceName']; ?>
                        <td><?php echo $value['purchaseDate']; ?></td>
                        <td><?php echo $value['price']; ?></td>       
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<br>
<a style="font-weight: bolder; color:dimgray; text-decoration:underline;" href="<?php echo _WEB ?>/manageInfor/index">Quay lại</a>

<script>
    let table = new DataTable('#historyTable', {
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