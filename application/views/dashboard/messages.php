  
  <script>
        $("#d_messages").addClass("active");
  </script>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Messages</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>dashboard">Home</a></li>
              <li class="breadcrumb-item active">Messages</li>
            </ul>
          </div>
          <?php if($this->session->userdata('type')=='Admin'):?>
            <section class="tables">   
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12" id="onemsg">
                    <div class="card">
                      <div class="card-header d-flex align-items-center">

                        <h3 class="h4">Message</h3>
                      </div>
                      <div class="card-body">
                        <p>Message details</p>
                          <form method="post" action="" id="formmsgs">
                            
                    <?php echo validation_errors(); ?>
                            <div class="form-group" >       
                              <label class="form-control-label">Sender Name</label>
                              <input type="text" value="<?php echo $mdata['amname'];?>" name="amname" class="form-control" disabled id="amname">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label">Email</label>
                              <input type="text" value="<?php echo $mdata['amemail']; ?>" name="amemail" class="form-control" disabled id="amemail">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label">Subject</label>
                              <input type="text" value="<?php echo $mdata['amsubject']; ?>" name="amsubject" class="form-control" disabled id="amsubject">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label">Message</label>
                              <textarea id="ammsg" name="ammsg" class="form-control" disabled rows='5'><?php echo $mdata['ammsg']; ?></textarea>
                            </div>
                            <input type="hidden" name="amid" value="<?php echo $mdata['amid'];?>" id="amid">
                            <div class="form-group"> 
                                <input type="button" value="delete" class="btn btn-danger btn-xs" id="delete1msg">
                                <input type="button" value="close" class="btn btn-danger btn-xs" id="close1msg">
                            </div>
                          </form>
                      </div>
                    </div>
                  </div>
 <!--                 <div class="col-lg-12" id="allmsg">
                    <div class="card">
                      <div class="card-header d-flex align-items-center">
                        <h3 class="h4">Messages</h3>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">                       
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Sender Email</th>
                                <th>Subject</th>
                                <th>Modify Message</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php foreach($message as $num=>$msgs){
                                echo "
                              <tr>
                                <th scope='row'>".($num+1)."</th>
                                <td>".$msgs['amemail']."</td>
                                <td>".$msgs['amsubject']."</td>
                                <td>
                                <div class='btn-group'>
                                    <form action='".base_url()."dashboard/messages' method='post'>
                                      <input type='hidden' value='".$msgs['amid']."' name='amid'>
                                      <input type='hidden' value='dashboard/company' name='comp'>
                                      <input type='submit' value='View' class='btn btn-success'>
                                    </form>
                                    <form action='".base_url()."messages/delete' method='post'>
                                      <input type='hidden' value='".$msgs['amid']."' name='amid'>
                                      <input type='hidden' value='dashboard/company' name='comp'>
                                      <input type='submit' value='Delete' class='btn btn-danger'>
                                    </form>
                                  </div>
                                </td>
                              </tr>";
                              }?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
-->
                <div class="col-lg-12" id="allmsg">
                  <div class="daily-feeds card"> 
                    <div class="card-header">
                      <h3 class="h4 card-title">Messages</h3>
                    </div>
                    <div class="card-body no-padding"  style="overflow-x: scroll;">
                        <!-- Item-->
                        <?php $x=0; foreach ($message as $no => $msgs):?>
                          <?php if($msgs['amstatus']==1){
                            $x=$x+1;?>
                            <div class="item"> 
                              <div class="feed d-flex justify-content-between">
                                <div class="feed-body d-flex justify-content-between"><div class="feed-profile"><i class="icon-mail" style="font-size: 3em;line-height: 0.75em;vertical-align: -15%;color: grey;"></i></div>
                                  <div class="content">
                                    <h5><?=$msgs['amemail']?></h5><span style="font-size: 12px;"><?=$msgs['amsubject']?></span>
                                    <div class="full-date"><small  style="font-size: 12px;"><?=(date('F d, Y l',strtotime($msgs['amcreated'])))?></small></div>
                                    <div class="CTAs">
                                        <a style="color: white; font-size: 10px;" class="btn btn-xs btn-secondary mview"><i class="fa fa-eye"> </i><input type="hidden" value="<?=$msgs['amid']?>">View</a>
                                        <a style="color: white; font-size: 10px;" class="btn btn-xs btn-danger mdelete"><i class="fa fa-trash"> </i><input type="hidden" value="<?=$msgs['amid']?>">Delete</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="date text-right"><small><?php
                                $numdays= (time()-strtotime($msgs['amcreated']));
                                $numdays=round($numdays/(60*60*24));
                                if($numdays==0){
                                  echo 'today';
                                }
                                else if($numdays==1){
                                  echo 'yesterday';
                                }
                                else{
                                  echo $numdays.' days ago';
                                }
                                ?></small></div>
                              </div>
                            </div>
                          <?php }?>
                        <?php endforeach;
                        if($x==0){
                          echo "<h3 class='text-danger' style='padding: 10px 20px 10px 30px'>No messages</h3>";
                        }
                            ?>
                        <div class="text-center pagination">
                        <?php echo $this->pagination->create_links();?>
                        </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </section>
          <?php endif;?>

          <?php if($this->session->userdata('type')=='Company'):?>
            <section class="tables">   
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-12" id="c_onemsg">
                    <div class="card">
                      <div class="card-header d-flex align-items-center">

                        <h3 class="h4">Message</h3>
                      </div>
                      <div class="card-body">
                        <p>Message details</p>
                          <form method="post" action="" id="c_formmsgs">
                            
                    <?php echo validation_errors(); ?>
                            <div class="form-group" >       
                              <label class="form-control-label">Sender Name</label>
                              <input type="text" value="<?php echo $mdata['cmname'];?>" name="cmname" class="form-control" disabled id="cmname">
                            </div>
                            <div class="form-group">
                              <label class="form-control-label">Email</label>
                              <input type="text" value="<?php echo $mdata['cmemail']; ?>" name="cmemail" class="form-control" disabled id="cmemail">
                            </div><!--
                            <div class="form-group">
                              <label class="form-control-label">Subject</label>
                              <input type="text" value="<?php echo $mdata['amsubject']; ?>" name="amsubject" class="form-control" disabled id="amsubject">
                            </div>-->
                            <div class="form-group">
                              <label class="form-control-label">Message</label>
                              <textarea id="cmmsg" name="cmmsg" class="form-control" disabled rows='5'><?php echo $mdata['cmmsg']; ?></textarea>
                            </div>
                            <input type="hidden" name="cmid" value="<?php echo $mdata['cmid'];?>" id="cmid">
                            <div class="form-group"> 
                                <input type="button" value="delete" class="btn btn-danger" id="c_delete1msg">
                                <input type="button" value="close" class="btn btn-danger" id="c_close1msg">
                            </div>
                          </form>
                      </div>
                    </div>
                  </div>
                <div class="col-lg-12" id="c_allmsg">
                  <div class="daily-feeds card"> 
                    <div class="card-header">
                      <h3 class="h4 card-title">Messages</h3>
                    </div>
                    <div class="card-body no-padding"  style="overflow-x: scroll;">
                        <!-- Item-->
                        <?php $i=0;
                        foreach ($message as $no => $msgs):?>
                          <?php if($msgs['cmstatus']==1){
                            $i++?>
                            <div class="item"> 
                              <div class="feed d-flex justify-content-between">
                                <div class="feed-body d-flex justify-content-between"><div class="feed-profile"><i class="icon-mail" style="font-size: 3em;line-height: 0.75em;vertical-align: -15%;color: grey;"></i></div>
                                  <div class="content">
                                    <h5><?=$msgs['cmemail']?></h5><span style="font-size: 12px;"></span>
                                    <div class="full-date"><small  style="font-size: 12px;"><?=(date('F d, Y l',strtotime($msgs['cmcreated'])))?></small></div>
                                    <div class="CTAs">
                                        <a style="color: white; font-size: 10px;" class="btn btn-xs btn-secondary c_mview"><i class="fa fa-eye"> </i><input type="hidden" value="<?=$msgs['cmid']?>">View</a>
                                        <a style="color: white; font-size: 10px;" class="btn btn-xs btn-danger c_mdelete"><i class="fa fa-trash"> </i><input type="hidden" value="<?=$msgs['cmid']?>">Delete</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="date text-right"><small><?php
                                $numdays= (time()-strtotime($msgs['cmcreated']));
                                $numdays=round($numdays/(60*60*24));
                                if($numdays==0){
                                  echo 'today';
                                }
                                else if($numdays==1){
                                  echo 'yesterday';
                                }
                                else{
                                  echo $numdays.' days ago';
                                }
                                ?></small></div>
                              </div>
                            </div>
                          <?php }?>

                        <?php endforeach;
                        if($i==0){
                          echo "<h3 class='text-danger' style='padding: 10px 20px 10px 30px'>No messages</h3>";
                        }
                        ?>
                        <div class="text-center pagination">
                        <?php echo $this->pagination->create_links();?>
                        </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
          <?php endif;?>
          <script type="text/javascript">
            $(document).ready(function(){
              amid=$('#amid');
              amname=$('#amname');
              amemail=$('#amemail');
              amsubject=$('#amsubject');
              ammsg=$('#ammsg');
              msgs=$('#onemsg');
              msgs.hide();
              one=$('#onemsg');
              all=$('#allmsg');

                cmid=$('#cmid');
                cmname=$('#cmname');
                cmemail=$('#cmemail');
                cmsubject=$('#cmsubject');
                cmmsg=$('#cmmsg');
                c_msgs=$('#c_onemsg');
                c_msgs.hide();
                c_one=$('#c_onemsg');
                c_all=$('#c_allmsg');
              $('.CTAs .mview').click(function(e){
                //alert($(this).find('input').val());
                e.preventDefault();
                $.ajax({
                  url: '<?php echo base_url()?>dashboard/messages',
                  type: "POST",
                  data: {
                    amid: $(this).find('input').val()
                  },
                  dataType: 'json',
                  success: function(data){
                    one.show();
                    all.hide();
                    amid.val(data['amid']);
                    amname.val(data['amname']);
                    amemail.val(data['amemail']);
                    amsubject.val(data['amsubject']);
                    ammsg.html(data['ammsg']);
                  }
                });
              });
              $('.CTAs .mdelete').click(function(e){
                //alert($(this).find('input').val());
                e.preventDefault();
                $.ajax({
                  url: '<?php echo base_url()?>amessage/delete',
                  type: "POST",
                  data: {
                    amid: $(this).find('input').val()
                  },
                  dataType: 'json',
                  success: function(data){
                    location.reload();
                  }
                });
              });
              $('#close1msg').click(function(){
                one.hide();
                all.show();
              });
              $('#delete1msg').click(function(){ 
                $.ajax({
                  url: '<?php echo base_url()?>amessage/delete',
                  type: "POST",
                  data: {
                    amid: amid.val()
                  },
                  dataType: 'json',
                  success: function(data){
                    location.reload();
                  }
                });
              });
              $('.CTAs .c_mview').click(function(e){
                //alert($(this).find('input').val());
                e.preventDefault();
                $.ajax({
                  url: '<?php echo base_url()?>dashboard/messages',
                  type: "POST",
                  data: {
                    cmid: $(this).find('input').val()
                  },
                  dataType: 'json',
                  success: function(data){
                    c_one.show();
                    c_all.hide();
                    cmid.val(data['cmid']);
                    cmname.val(data['cmname']);
                    cmemail.val(data['cmemail']);
                    cmsubject.val(data['cmsubject']);
                    cmmsg.html(data['cmmsg']);
                  }
                });
              });
              $('.CTAs .c_mdelete').click(function(e){
                //alert($(this).find('input').val());
                e.preventDefault();
                $.ajax({
                  url: '<?php echo base_url()?>cmessage/delete',
                  type: "POST",
                  data: {
                    cmid: $(this).find('input').val()
                  },
                  dataType: 'json',
                  success: function(data){
                    location.reload();
                  }
                });
              });
              $('#c_close1msg').click(function(){
                c_one.hide();
                c_all.show();
              });
              $('#c_delete1msg').click(function(){ 
                $.ajax({
                  url: '<?php echo base_url()?>cmessage/delete',
                  type: "POST",
                  data: {
                    cmid: cmid.val()
                  },
                  dataType: 'json',
                  success: function(data){
                    location.reload();
                  }
                });
              });
            });
          </script>