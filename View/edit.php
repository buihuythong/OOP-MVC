<?php require_once 'header.php'; ?>
<div class="container">
    <div class="row">
        <h1 class="text-center">SỬA THÔNG TIN THÍ SINH</h1>
        
        <div class="col-sm-12">
            <form method="POST" action="index.php?controller=index&action=setEdit">
                <div class="form-group">
                  <input type="hidden" name="id" class="form-control" id="exampleInputEmail1" placeholder="Nhập số báo danh" value="<?php echo $this->data->id ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Họ và tên</label>
                  <input type="text" name="fullname" class="form-control" id="exampleInputPassword1" placeholder="Nhập họ tên" value="<?php echo $this->data->fullname ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Địa chỉ</label>
                  <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Nhập địa chỉ" value="<?php echo $this->data->address ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Diện ưu tiên</label>
                  <div class="radio">
                    <?php
                      $ut = null;
                      $kut = null;
                      if($this->data->prioritize == 1){
                        $ut = "checked";
                      }else{
                        $kut = "checked";
                      }
                     ?>
                    <label>
                      <input type="radio" name="prioritize" id="optionsRadios1" value="1" <?php echo $ut; ?>>
                      Diện ưu tiên
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="prioritize" id="optionsRadios2" value="0" <?php echo $kut; ?>>
                      Diện không ưu tiên
                    </label>
                  </div>

                </div>
                
                <button type="submit" class="btn btn-default">Sửa thí sinh</button>
              </form>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>