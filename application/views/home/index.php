<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url('assets/img/final2.png');?>">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>The Great Motivational Hub</title>
    <meta  name="description" content="आप सभी अवगत हैं कि हर कोई अपने जीवन में कुछ न कुछ करने की चाह रखता है, हर कोई अपने जीवन में बेहतर करना चाहता है, हर कोई जीवन का वास्तविक आनंद लेना चाहता है, हर कोई दुनिया की तमाम सुख को पाना चाहता है लेकिन कई बार आप विपरीत परिस्थितियों के चलते अपने जीवन के उन तमाम समस्याओं में उलझ कर अपने मूल लक्ष्यों से ही भटक जाते हैं। आप के जीवन में जब कुछ अच्छा नहीं होता और एक के बाद एक नकारात्मक चीजें होने लगती हैं तो आप एकदम निराश से हो जाते हैं। फिर आप अपने कर्तव्यों के प्रति भी लापरवाह हो जाते हैं। बस यहीं चीजें आपके जीवन की दिशा को ही पूरी तरह से मोड़ देती है। फिर आप अपने जीवन में आगे बढ़ने की जगह पीछे होने लगते हैं। आपका सपना सिर्फ सपना बनकर ही रह जाता है।">
    <link type="text/css"  rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>"/>
    <style>
      .reg input[type='text'],input[type='password'],input[type='tel']{
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
                <img src="<?php echo base_url('assets/img/final2.png');?>" style="height: 50px;" alt="The Great Motivational Hub">
              </div>
              <h3 class="text_style">TGMH</h3>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url('home/handleRegister');?>" method="POST" class="reg">
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo set_value('name'); ?>"/>
                <span><?php echo form_error('name'); ?></span>
              </div>
              <div class="form-group">
                <label>Mobile Number</label>
                <input type="tel" name="mobno" class="form-control" placeholder="Enter Mobile Number" value="<?php echo set_value('mobno'); ?>"/>
                <span><?php echo form_error('mobno'); ?></span>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Enter Email Address" value="<?php echo set_value('email'); ?>"/>
                <span><?php echo form_error('email'); ?></span>
              </div>
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter Username" value="<?php echo set_value('username'); ?>"/>
                <span><?php echo form_error('username'); ?></span>
              </div>
              <div class="form-group">
                <label>Invitation Code</label>
                <input type="text" name="invitation_code" class="form-control" placeholder="Invitation Code" value="<?php echo set_value('invitation_code'); ?>"/>
                <span><?php echo form_error('invitation_code'); ?></span>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter Password" value="<?php echo set_value('password'); ?>"/>
                <span><?php echo form_error('password'); ?></span>
              </div>
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" placeholder="Enter Confirm Password" value="<?php echo set_value('cpassword'); ?>"/>
                <span><?php echo form_error('cpassword'); ?></span>
              </div>
              
              <div class="form-group mt-2">
                  <input class="form-check-input" type="checkbox" name="declear" id="checkbox" value="yes" <?php echo set_checkbox('declear', 'yes'); ?>>
                  <label for="checkbox">I have read to the <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#exampleModal" class="text-decoration-none">terms & conditions</a> and the <a href="javascript:void(0);" class="text-decoration-none">Privacy Policy</a></label>
                   <span><?php echo form_error('declear'); ?></span>
              </div>  
              <div class="form-group text-center mt-2">
                <center><input type="submit" class="form-control bg text-white" value="Register" style="width:200px;border-radius: 20px;" /></center>
              </div>  
              </form>
            </div>
            <div class="card-footer">
                Already Account? <a href="<?php echo base_url('login');?>" class="text-decoration-none">Login Immediately</a>
            </div>
          </div>
       </div>
     </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">स्व-घोषणा/Self Declarations</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p><b>मैं घोषणा करता हूँ कि-</b></p>
        <ol>
          <li>सदैव केवल मोटिवेशनल पोस्ट ही करूँगा/करूँगी ।</li>
          <li>कभी भी किसी प्रकार की धार्मिक पोस्ट नहीं करूँगा/करूँगी ।</li>
          <li> कभी भी किसी प्रकार की जातिगत पोस्ट नहीं करूँगा/करूँगी ।</li>
          <li>कभी भी किसी प्रकार की आपत्तिजनक चीजें पोस्ट नहीं करूँगा/करूँगी ।</li>
          <li>अगर भविष्य में कभी भी मेरे द्वारा कोई गलत चीजें पोस्ट की जाती है तो हमारी आईडी ब्लॉक कर दी जाये, इसमें हमें कोई आपत्ति नहीं होगी।</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>