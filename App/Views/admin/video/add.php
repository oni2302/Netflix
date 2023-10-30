<div class="row">
    <form action="<?php echo _WEB; ?>/admin/video/addHandle" method="post" enctype="multipart/form-data">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Thêm phim</h5>
                <small class="text-muted float-end">Netflix</small>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label" for="videoName">Tên phim</label>
                    <input type="text" class="form-control" id="videoName" placeholder="Nhập tên phim" name="videoName">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="description">Mô tả</label>
                    <textarea id="description" class="form-control" placeholder="Nhập mô tả phim" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="licenseCost">Giá bản quyền</label>
                    <input type="text" id="licenseCost" class="form-control" placeholder="Giá mua phim" name="licenseCost"></input>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="releaseDate">Ngày phát hành</label>
                    <input type="date" id="releaseDate" class="form-control" name="releaseDate"></input>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="videoLength">Thời lượng phim</label>
                    <input type="text" id="videoLength" class="form-control" placeholder="Phút" name="videoLength">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="link">File phim</label>
                    <input type="file" id="link" class="form-control" name="link" accept="video/*" data-title="Chọn file phim">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="banner">File banner</label>
                    <input type="file" id="banner" class="form-control" placeholder="URL banner" name="banner" accept="image/*" data-title="Chọn banner">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image1">File hình Mobile</label>
                    <input type="file" id="image1" class="form-control" name="image1" accept="image/*" data-title="Chọn ảnh">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="image2">File hình tên phim</label>
                    <input type="file" id="image2" class="form-control" name="image2" accept="image/*" data-title="Chọn ảnh">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="videoLanguage">Ngôn ngữ</label>
                    <select id="videoLanguage" class="form-select" name="videoLanguage">
                        <?php
                        foreach ($lang as $key => $value) { ?>
                            <option value="<?php echo $value['id'] ?>"><?php echo $value['lang'] ?></option>
                        <?php
                        } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="supplier">Ngôn ngữ</label>
                    <select id="supplier" class="form-select" name="supplier">
                        <?php
                        foreach ($supplier as $key => $value) { ?>
                            <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                        <?php
                        } ?>
                    </select>
                </div>
                <!-- Các trường còn lại -->
                <button type="submit" class="btn btn-primary">Thêm phim</button>
            </div>
        </div>
    </form>
</div>