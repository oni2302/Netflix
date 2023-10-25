<?php
if (empty($video_list)) {
    $video_list = [];
}
?>
<div class="col-2 mb-3 rounded-3">
    <a href="<?php echo _WEB ?>/admin/video/add" class="btn btn-primary">Thêm phim</a>
</div>

<div class="card px-4 pb-4">

    <h5 class="card-header">Danh sách phim</h5>
    <div class="table-responsive text-nowrap">
        <table class="table" id="videoTable">
            <thead>
                <tr class="text-nowrap">
                    <th>#Sửa</th>
                    <th>Mã</th>
                    <th>Tên phim</th>
                    <th>Mô tả</th>
                    <th>Thời lượng</th>
                    <th>Đường dẫn</th>
                    <th>Banner</th>
                    <th>Ngôn ngữ</th>
                    <th>Giá bản quyền</th>
                    <th>Ngày phát hành</th>
                    <th>Ngày mua</th>
                    <th>Lượt xem</th>
                    <th>Nhà cung cấp</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($video_list as $key => $value) { ?>
                    <tr>
                        <th><a href="<?php echo _WEB."/admin/video/edit/".$value['id'] ?>" class="btn btn-success py-1 px-2 mx-2"><i class='bx bxs-edit'></i></a></th>
                        <th scope="row"> <?php echo $value['id']; ?></th>
                        <td><?php echo $value['videoName']; ?></td>
                        <td><?php echo $value['description']; ?></td>
                        <td><?php echo $value['videoLength']; ?></td>
                        <td><?php echo $value['link']; ?></td>
                        <td><?php echo $value['banner']; ?></td>
                        <td><?php echo $value['videoLanguage']; ?></td>
                        <td><?php echo $value['licenseCost']; ?></td>
                        <td><?php echo $value['releaseDate']; ?></td>
                        <td><?php echo $value['purchaseDate']; ?></td>
                        <td><?php echo $value['watchedTimes']; ?></td>
                        <td><?php echo $value['supplier']; ?></td>
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