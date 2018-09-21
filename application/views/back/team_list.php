<div class="page-content">
  <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

  <div class="clearfix"></div>
  <div class="content sm-gutter">
    <div class="page-title">
      <h3>รายชื่อวิทยากร</h3>
      <div class="pull-right actions">
        <a href="<?php echo base_url(); ?>Admin/teamInsert" class="btn btn-primary btn-cons">เพิ่มวิทยากร</a>
        <!-- <button  type="button">เพิ่มวิทยากร</button> -->
      </div>
    </div>
    <!-- BEGIN DASHBOARD TILES -->
    <div class="row">
      <div class="col-md-12">
        <div class="grid simple">
          <div class="grid-body no-border">
            <div class="row">
              <div class="col-md-12">
                <table class="table table-hover no-more-tables">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>ชื่อ-นามสกุล</th>
                      <th>รายละเอียด</th>
                      <th>อีเมล์</th>
                      <th>เบอร์โทร</th>
                      <th>จัดการ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($teamlist as $key => $value): ?>
                      <tr>
                        <td><?php echo $key+1 ?></td>
                        <td><?php echo $value['team_fullname'] ?></td>
                        <td><?php echo $value['team_detail'] ?></td>
                        <td><?php echo $value['team_email'] ?></td>
                        <td><?php echo $value['team_tel'] ?></td>
                        <td>
                          <a href="#" class="btn btn-warning btn-cons">แก้ไข</a>
                          <a href="#" class="btn btn-warning btn-cons">แก้ไขรูป</a> 
                          <a href="JavaScript:if(confirm('ยืนยันการลบ?') == true){window.location='<?php echo site_url('Team/teamDelete/'.$value['team_id']); ?>';}" class="btn btn-danger btn-cons">ลบ</a></td>
                      </tr>
                    <?php endforeach; ?>


                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END DASHBOARD TILES -->
  </div>
</div>
