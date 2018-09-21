<div class="page-content">
  <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

  <div class="clearfix"></div>
  <div class="content sm-gutter">
    <div class="page-title">

      <h3>เพิ่มวิทยากร</h3>

    </div>
    <!-- BEGIN DASHBOARD TILES -->
    <div class="row">
      <div class="col-md-12">
        <div class="grid simple">
          <div class="grid-body no-border">
            <div class="row">
              <div class="col-md-12">

                <?php echo form_open('Team/teamInsert',array('id'=>'form_iconic_validation')); ?>

                <!-- <form id="form_iconic_validation" action="#"> -->
                  <div class="form-group">
                    <label class="form-label">ชื่อ-นามสกุล</label>
                    <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                    <div class="input-with-icon  right">
                      <!-- <i class=""></i> -->
                      <input type="text" name="team_fullname" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="form-label">รายละเอียด</label>
                    <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                    <div class="input-with-icon  right">
                    <textarea id="text-editor" placeholder="Enter text ..." class="form-control" rows="10" required></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="form-label">อีเมล์</label>
                    <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                    <div class="input-with-icon  right">
                      <!-- <i class=""></i> -->
                      <input type="text" name="team_email" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="form-label">เบอร์โทร</label>
                    <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                    <div class="input-with-icon  right">
                      <!-- <i class=""></i> -->
                      <input type="text" name="team_tel" class="form-control" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="form-label">ลำดับในการแสดงผล</label>
                    <!-- <span class="help">e.g. "Jonh Smith"</span> -->
                    <div class="input-with-icon  right">
                      <!-- <i class=""></i> -->
                      <input type="text" name="team_order" class="form-control" required>
                    </div>
                  </div>


                  <div class="form-actions">
                    <div class="pull-right">
                      <button type="submit" class="btn btn-danger btn-cons"><i class="icon-ok"></i> Save</button>
                    </div>
                  </div>
                <!-- </form> -->

                <?php echo form_close(); ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END DASHBOARD TILES -->
  </div>
</div>
