<?php require_once 'header.php'; ?>
<div class="container">
    <div class="row">
        <h1 class="text-center">QUẢN LÝ THÍ SINH</h1>
        
        <div class="col-sm-12">
            <a href="index.php?controller=index&action=insert" class="btn btn-success"> THÊM THÍ SINH </a>
            <table class="table table-bordered ">
                <tr>
                    <th>STT</th>
                    <th>SBD</th>
                    <th>HỌ TÊN</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ƯU TIÊN</th>
                    <th class="text-center">HÀNH ĐỘNG</th>
                </tr>
                <?php
                    $stt = 0;
                    foreach($this->data as $v){
                    $stt++;
                ?>

                <tr>
                    <td><?php echo $stt; ?></td>
                    <td><?php echo $v->id; ?></td>
                    <td><?php echo $v->fullname; ?></td>
                    <td><?php echo $v->address; ?></td>
                    <td><?php echo ($v->prioritize == 1) ? 'Ưu tiên' : 'Không ưu tiên'; ?></td>
                    <td class="text-center">
                        <a href="index.php?controller=score&action=score&id=<?php echo $v->id ?>"><i class="fa fa-file-archive-o" aria-hidden="true" title="Nhập điểm"></i></a>
                        <a href="index.php?controller=index&action=remove&id=<?php echo $v->id ?>"><i class="fa fa-trash" aria-hidden="true" title="Xóa thí sinh"></i></a>
                        <a href="index.php?controller=index&action=edit&id=<?php echo $v->id ?>"><i class="fa fa-pencil" aria-hidden="true" title="Sửa thông tin thí sinh"></i></a>
                    </td>
                </tr>

                <?php
                    }

                 ?>
            </table>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>