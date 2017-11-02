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
        <form>
          <table class="table table-striped" id="data-table">
            <!-- dòng 1 -->
            <tr>
              <th width="200px">Tên Tour</th>                
              <td><input type="text" class="form-control" name="" placeholder="Ví dụ: Cần Thơ"></td>
            </tr>
            <tr>
              <th>Giá (VND)</th>
              <td><input type="text" class="form-control" name="" placeholder="Ví dụ: 1.000.000"></td>
            </tr>
            <tr>
             <th>Giá Cũ (VND)</th>
             <td><input type="text" class="form-control" name="" placeholder="Ví dụ: 1.000.000"></td>
           </tr>
           <tr>
             <th>Mô Tả</th>
             <td><input type="text" class="form-control" name="" placeholder="Nhập mô tả"></td>
           </tr>
           <tr>
            <th>Điểm Đến</th>
            <td>
              <div class="col-md-5">
                <label for="search">Search</label>
                <input id="search" class="form-control" type="text" placeholder="Nhập điểm đến">
              </div>
              <div class="col-md-5">
                <label>Thời gian</label>
                <input id="basicExample" type="text" class="time form-control" />
                <script>
                  $(function() {
                    $('#basicExample').timepicker();
                  });
                </script>
              </div>                      
              <div class="col-md-2" style="padding-top: 25px">
                <button type="button" class="btn btn-warning">Thêm</button>
              </div>
              <div class="col-md-12" style="margin-top: 20px;">
                <table class="table table-bordered">
                  <tr>
                    <th width="50px">Check</th>
                    <th>Điểm đến</th>
                    <th>Thời gian</th>
                    <th>Quản lý</th>
                  </tr>
                  <tr>
                    <td><input type="checkbox" name=""></td>
                    <td>Cầu đi bộ</td>
                    <td>18:00</td>
                    <td>
                      <a><span class="glyphicon glyphicon-trash" title="delete" data-toggle="modal" data-target="#deleteModal"></span></a>
                    </td>
                  </tr>
                </table>  
              </div>
              <!-- col-md-12 -->
            </td>
          </tr>
          <tr>
            <th>Người Tạo</th>
            <td class="no-edit">Tam Nguyen</td>
          </tr>
          <tr>
            <th>Ngày Tạo</th>
            <td class="no-edit">7/6/2017</td>
          </tr>
          <tr>
            <th>Ngày Cập Nhật</th>
            <td class="no-edit">17/6/2017</td>
          </tr>
          <tr>
            <th>Người Cập Nhập</th>
            <td class="no-edit">Admin</td>
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