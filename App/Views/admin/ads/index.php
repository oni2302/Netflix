<?php
if (empty($ads_list)) {
    $ads_list = [];
}
?>
<a class="mb-3 btn btn-primary" href="<?php echo _WEB ?>/admin/ads/taoviewadd">Thêm Quảng Cáo</a>
<div class="card px-4 pb-4">
    <h5 class="card-header">Danh sách Quảng Cáo</h5>
    <div class="table-responsive text-nowrap">
        <table class="table" id="AdsTable">
            <thead>
                <tr class="text-nowrap">
                    <th>#Mã</th>
                    <th>Bên Cung Cấp</th>
                    <th>Đường Dẫn</th>
                    <th>Lượt xem</th>
                    <th>Ngày Tạo</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ads_list as $key => $value) { ?>
                    <tr>
                        </th>
                        <th scope="row"><?php echo $value['id']; ?>
                        <td><?php echo $value['adsFrom']; ?></td>
                        <td><?php echo $value['adsLink']; ?></td>
                        <td><?php echo $value['watchedTimes']; ?></td>
                        <td><?php echo $value['addDate']; ?></td>
                        <td><?php echo $value['statusTitle']; ?></td>
                        <td>
                        <th><?php if ($value['statusTitle'] == "Chờ xác nhận") { ?><a href="<?php echo _WEB . "/admin/Ads/confirmAds/" . $value['id'] ?>" class="btn btn-success">Xác nhận</a><?php } else { ?> <button class="btn btn-success" disabled>Xác nhận</button><?php } ?>
                            <a class="btn btn-danger" href="<?php echo _WEB ?>/admin/Ads/lockAds/<?php echo $value['id'] ?>">Khóa quảng cáo</a>
                        </th>
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