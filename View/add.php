<?php require_once 'header.php'; ?>
<div class="container">
    <div class="row">
        <h1 class="text-center">THÊM THÍ SINH</h1>
        
        <div class="col-sm-12">
            <form method="POST" action="index.php?controller=index&action=setinsert">
                <div class="form-group">
                  <label for="exampleInputEmail1">Số báo danh</label>
                  <input type="number" name="id" class="form-control" id="exampleInputEmail1" placeholder="Nhập số báo danh">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Họ và tên</label>
                  <input type="text" name="fullname" class="form-control" id="exampleInputPassword1" placeholder="Nhập họ tên">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Địa chỉ</label>
                  <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Nhập địa chỉ">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Diện ưu tiên</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="prioritize" id="optionsRadios1" value="1" checked>
                      Diện ưu tiên
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="prioritize" id="optionsRadios2" value="0">
                      Diện không ưu tiên
                    </label>
                  </div>

                </div>
                
                <button type="submit" class="btn btn-default">Thêm thí sinh</button>
              </form>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>