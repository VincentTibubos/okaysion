
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>OKAYsion &copy; 2018</p>
                </div>

               <!--
 <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Hi Admin!</h2>
            </div>
          </header>

                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Bootstrapious</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's 
				  development at https://bootstrapious.com/donate. It is part of the license conditions.
				  Thank you for understanding :)
                </div>-->
              </div>
            </div>
          </footer>
          
        </div>
      </div>
    </div>

  <!-- Modal -->
  <div class="modal fade" id="logoutm" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Logout</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Do you really want to logout?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal"  onclick="redirout();">Yes</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        </div>
      </div>
      
    </div>
  </div>
  

    <!-- Javascript files-->
    <script src="<?php echo base_url();?>/assets/lib/jquery/jquery.min.js"> </script>
    <script src="<?php echo base_url();?>/assets/ajax/jquery.min.js"> </script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url();?>/assets/dashboard/js/front.js"></script>


    <script>
      function redirout(){
              window.location="<?php echo base_url()?>logout";
      }
    </script>
    <script>
      $(document).ready(function(){
        var eid;
      details=$(this).offsetParent().find('#edform').val();
        $('.content').click(function(e){
          eid=$(this).find('.id_num').html();
          if(eid!=''){
              $.ajax({
                url: '<?php echo base_url();?>calendar',
                type: "POST",
                data: {
                    eid: eid
                },
                dataType: 'json',
                success: function(data){
                  $(this).offsetParent().find('#sform').val(data['sid']);
                  $(this).offsetParent().find('#cuform').val(data['cuid']);
                  $(this).offsetParent().find('#dform').val(data['edate']);
                  $(this).offsetParent().find('#tform').val(data['etime']);
                  $(this).offsetParent().find('#edform').val(data['edetails']);
                  $(this).offsetParent().find('#eventid').val(data['eid']);
                  return true;
                },//function(data){
                     //location.reload();
                      //alert('request success'+data);
                   //},
                error: function(xhr, textStatus, errorThrown){
                       alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                       e.preventDefault();
                       return false;
                }
              });
        }
        });
      });
    </script>

  </body>
</html>