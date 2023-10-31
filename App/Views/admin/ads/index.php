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
                    <th>Thời Lượng</th>
                    <th>Ngày Tạo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ads_list as $key => $value) { ?>
                    <tr>
                        </th>
                        <th scope="row"><?php echo $value['id']; ?>
                        <td><?php echo $value['adsFrom']; ?></td>
                        <td><?php echo $value['adsLink']; ?></td>
                        <td><?php echo $value['watchedTimes'] ; ?> phút</td>
                        <td><?php echo $value['addDate']; ?></td>
                        <td>
                            <a class="btn" href="<?php echo _WEB ?>/admin/Ads/deleteAds/<?php echo $value['id'] ?>">Delete</a>
                            <a class="btn" href="<?php echo _WEB ?>/admin/Ads/xulieditAds/<?php echo $value['id'] ?>">Edit</a>
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