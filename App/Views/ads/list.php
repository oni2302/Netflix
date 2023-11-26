<?php
if (empty($ads)) {
    $ads = [];
}
?>

<div class="card px-4 pb-4">
    <h5 class="card-header">Danh sách quảng cáo</h5>
    <div class="table-responsive text-nowrap">
        <table class="table" id="adsTable">
            <thead>
                <tr class="text-nowrap">
                    <th>Mã</th>
                    <th>Đường dẫn</th>
                    <th>Lượt xem</th>
                    <th>Ngày thêm</th>
                    <th>Trạng thái</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ads as $key => $value) { ?>
                    <tr>
                        <th scope="row"> <?php echo $value['id']; ?></th>
                        <td><?php echo $value['adsLink']; ?></td>
                        <td><?php echo $value['watchedTimes']; ?></td>
                        <td><?php echo $value['addDate']; ?></td>
                        <td><?php echo $value['statusTitle']; ?></td>
                        <th><?php if($value['statusTitle']=="Chờ thanh toán"||$value['statusTitle']=="Chờ gia hạn"){ ?><a href="<?php echo _WEB."/ads/Advertisement/purchase/".$value['id']?>" class="btn btn-success">Thanh toán</a><?php }else{?> <button class="btn btn-success" disabled>Thanh toán</button><?php }?></th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    let table = new DataTable('#adsTable', {
        paging: true,
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