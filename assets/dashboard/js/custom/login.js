
      $(document).ready(function(){
        passg=$(this).find('#lpass-group');
        emailg=$(this).find('#lemail-group');
        passin=passg.find('input');
        emailin=emailg.find('input');
        loginr=$(this).find('#loginr');
        alert(passin.val()+emailin.val());
        if(passin.val()!=''){
            passg.find('label').addClass('active');
        }
        if(emailin.val()!=''){
            emailg.find('label').addClass('active');
        }
        //password checker
        passin.on('ready change blur',function(){
          if(passin.val()!=''){
              passg.find('label').addClass('active');
              //alert('added');
          }
          $.ajax({
                  url: '<?php echo base_url();?>company/check',
                  type: "POST",
                  data: {
                    lpass: $(this).val(),
                    lemail: emailin.val()
                  },
                  dataType: 'json',
                  success: function(data){
                    //alert(data['error'])
                    passg.find('small').html('');
                    emailg.find('small').html('');
                    if(data['lpass']==''&&data['lemail']==''){
                      loginr.attr('type','submit');
                    }
                    else{
                      loginr.attr('type','button');
                      if(data['lpass']!=''){
                          passg.find('small').html(data['lpass']);
                      }

                      if(data['lemail']!=''){
                          emailg.find('small').html(data['lemail']);
                      }
                      return false;
                    }
                  },
                  error: function(xhr, textStatus, errorThrown){
                         alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                         return false;
                  }
          });
        });
        emailin.on('ready change blur',function(){
          if(emailin.val()!=''){
              emailg.find('label').addClass('active');
              //alert('added');
          }
          $.ajax({
                  url: '<?php echo base_url();?>company/check',
                  type: "POST",
                  data: {
                    lpass: passin.val(),
                    lemail: emailin.val()
                  },
                  dataType: 'json',
                  success: function(data){
                    //alert(data['error']);
                    emailg.find('small').html('');
                    passg.find('small').html('');

                    if(data['lpass']==''&&data['lemail']==''){
                      loginr.attr('type','submit');
                    }
                    else{
                      loginr.attr('type','button');
                      if(data['lpass']!=''){
                        //alert(data['lpass']);
                          passg.find('small').html(data['lpass']);
                      }
                      if(data['lemail']!=''){
                          emailg.find('small').html(data['lemail']);
                      }
                      return false;
                    }
                  },
                  error: function(xhr, textStatus, errorThrown){
                         alert('request failed '+xhr+' '+textStatus+' '+errorThrown);
                         return false;
                  }
          });
        });
      });