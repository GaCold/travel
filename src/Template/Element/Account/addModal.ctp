<!-- Modal -->
<div class="modal fade" id="addModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thêm thông tin</h4>
      </div>
      <div class="modal-body">
        <form class="form-group">
          <table class="table table-striped" id="data-table">
            <!-- dòng 1 -->
            <tr>
              <th width="200px">Tên Đầy Đủ</th>                
              <td><input type="text" class="form-control" name="" placeholder="Ví dụ: Tam Nguyen"></td>
            </tr>
            <tr>
              <th>Giới tính</th>
              <td>
                <label class="checkbox-inline">
                <input type="checkbox" id="inlineCheckbox1" value="nam"> Nam
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="nữ"> Nữ
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox3" value="khách"> Khác
                </label>
              </td>
            </tr>
            <tr>
              <th>Tên Đăng Nhập</th>
              <td><input type="text" class="form-control" name="" placeholder="Ví dụ: ngtambt94"></td>
            </tr>
            <tr>
             <th>Mật Khẩu</th>
             <td><input type="text" class="form-control" name="" placeholder="Ít nhất 6 ký tự"></td>
           </tr>
           <tr>
             <th>Email</th>
             <td><input type="text" class="form-control" name="" placeholder="Ví dụ: ngtambt94@gmail.com"></td>
           </tr>
           <tr>
            <th>Địa Chỉ</th>
            <td><input type="text" class="form-control" name="" placeholder="Ví dụ: Bến Tre"></td>
          </tr>
          <tr>
            <th>Ngày Tạo</th>
            <td class="no-edit">20/6/2017</td>
          </tr>
        </table>
      </form>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Thêm</button>
      <button type="button" class="btn btn-warning" data-dismiss="modal">Hủy</button>
    </div>
  </div>
  <!-- xong modal dialog -->
</div>
<!-- xong modal -->
</div>