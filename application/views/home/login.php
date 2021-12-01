<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url('assets/img/final2.png');?>">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link type="text/css"  rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>"/>
    <title>The Great Motivational Hub</title>
    <meta  name="description" content="आप सभी अवगत हैं कि हर कोई अपने जीवन में कुछ न कुछ करने की चाह रखता है, हर कोई अपने जीवन में बेहतर करना चाहता है, हर कोई जीवन का वास्तविक आनंद लेना चाहता है, हर कोई दुनिया की तमाम सुख को पाना चाहता है लेकिन कई बार आप विपरीत परिस्थितियों के चलते अपने जीवन के उन तमाम समस्याओं में उलझ कर अपने मूल लक्ष्यों से ही भटक जाते हैं। आप के जीवन में जब कुछ अच्छा नहीं होता और एक के बाद एक नकारात्मक चीजें होने लगती हैं तो आप एकदम निराश से हो जाते हैं। फिर आप अपने कर्तव्यों के प्रति भी लापरवाह हो जाते हैं। बस यहीं चीजें आपके जीवन की दिशा को ही पूरी तरह से मोड़ देती है। फिर आप अपने जीवन में आगे बढ़ने की जगह पीछे होने लगते हैं। आपका सपना सिर्फ सपना बनकर ही रह जाता है।">
    <style>
      .login input[type='text'],input[type='password'],input[type='tel']{
        border: none;
        border-bottom: 2px solid blueviolet;
        border-radius: 0;
      }
    </style>
  </head>
  <body>
   <div class="container">
     <div class="row my-5">
       <div class="col-md-6 mx-auto">
           <?php if($this->session->flashdata('msg')): ?>
            <div class="alert alert-success text-capitalize"><?php echo $this->session->flashdata('msg');?></div>
         <?php endif;?>
          <div class="card shadow">
            <div class="card-header text-center bg text-white">
              <div class="box">
                <img src="<?php echo base_url('assets/img/final2.png');?>">
              </div>
              <h3 class="text_style">The Great Motivational Hub</h3>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url('home/auth');?>" method="POST" class="login">
              <div class="form-group">
                <label>Email Address</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Email Address" value="<?php echo set_value('email'); ?>"/>
                <span><?php echo form_error('email'); ?></span>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" value="<?php echo set_value('password'); ?>"/>
                <span><?php echo form_error('password'); ?></span>
              </div>
              <div class="form-group text-center mt-2">
                <center><input type="submit" class="form-control bg text-white" value="Login" style="width:200px;border-radius: 20px;" /></center>  
              </div>
            </div>
            </form>
            <div class="card-footer">
                Don't have Account? <a href="<?php echo base_url();?>" class="text-decoration-none">Register</a>
            </div>
          </div>
       </div>
     </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>