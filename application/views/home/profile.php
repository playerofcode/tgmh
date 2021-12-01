 <style type="text/css">
   .my_row{
    height: 100px;
    width: 100%;
    background: red;
    text-align:center;
    margin-bottom: 100px!important;
   }
   .my_row a{
    color: #fff;
   }
   .my_box{
    height: 100px;
    width: 33.33%; /* as @passatgt mentioned in the comment, for the older browsers fallback */
    width: calc(100% / 3);
    float: left;
   }
   .my_box:hover{
    background:pink;
   }
   .my_icon
   {
    height: 40px;
    line-height: 40px;
    width: 100%;
   }
   .my_text
   {
    height: 60px;
    line-height: 60px;
    width: 100%;
   }
    @media (max-width:480px)  {
     .my_box{
    height: 100px;
    width: 50%; 
    float: left;
   } 
    }
 </style>
 <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 p-0">
            <?php if($this->session->flashdata('msg')): ?>
            <div class="alert alert-success text-capitalize font-weight-bold"><?php echo $this->session->flashdata('msg');?></div>
         <?php endif;?>
            <div class="card shadow">
              <div class="card-header bg-danger">
                  <a href="<?php echo base_url('logout');?>" class="text-white text-decoration-none" title="Sign Out" style="float: right;"> <i class="fas fa-sign-out-alt"></i></a>
              </div>  
              <div class="card-body">
                <i class="fas fa-user-circle" style="font-size:46px;float:left;padding-right: 10px;color:#302b63;drop-shadow: 0 5px 10px rgba(0,0,0,0.4);"></i> <b> <?php echo $profile[0]->name; ?></b>
                <br><b>@<?php echo $profile[0]->username; ?></b>
                <br><?php echo $profile[0]->bio; ?><br>
                Joined <?php echo date('d M, Y',strtotime($profile[0]->created_at)) ?>
              </div>
              <div class="card-footer text-white text-center" style="
background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29);
background: linear-gradient(to right, #24243e, #302b63, #0f0c29);">
                <b>Post 0 | Follower 25 | Following 70</b>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="my_row">
         <a href="#" >
          <div class="my_box" style="background: #ec008c;
background: -webkit-linear-gradient(to right, #fc6767, #ec008c); 
background: linear-gradient(to right, #fc6767, #ec008c);">
            <div class="my_icon">
              Rs <?php echo $profile[0]->wallet ?>
            </div>
            <div class="my_text">
              Balance
            </div>
          </div>
        </a>
        <a href="#" >
          <div class="my_box" style="background: #DA22FF;
background: -webkit-linear-gradient(to right, #9733EE, #DA22FF); 
background: linear-gradient(to right, #9733EE, #DA22FF); ">
            <div class="my_icon">
              <i class="fas fa-search-dollar"></i>
            </div>
            <div class="my_text">
              Revenue
            </div>
          </div>
        </a>
        <a href="<?php echo base_url('recharge');?>" >
          <div class="my_box" style="background: #02AAB0;
background: -webkit-linear-gradient(to right, #00CDAC, #02AAB0); 
background: linear-gradient(to right, #00CDAC, #02AAB0); ">
            <div class="my_icon">
              <i class="fas fa-mobile-alt"></i>
            </div>
            <div class="my_text">
              Recharge
            </div>
          </div>
        </a>
        <a href="<?php echo base_url('edit-profile/');?>" >
          <div class="my_box" style="background: #314755;
background: -webkit-linear-gradient(to right, #26a0da, #314755); 
background: linear-gradient(to right, #26a0da, #314755); 
">
            <div class="my_icon">
              <i class="fas fa-user"></i>
            </div>
            <div class="my_text">
              Update Profile
            </div>
          </div>
        </a>
        <a href="#" >
          <div class="my_box" style="background: #2193b0; 
background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0);
background: linear-gradient(to right, #6dd5ed, #2193b0);
">
            <div class="my_icon">
             <i class="fas fa-tasks"></i>
            </div>
            <div class="my_text">
             Total Task
            </div>
          </div>
        </a>
         <a href="<?php echo base_url('invite-friend');?>" >
          <div class="my_box" style="background: #1488CC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #2B32B2, #1488CC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #2B32B2, #1488CC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
            <div class="my_icon">
             <i class="fas fa-user-plus"></i>
            </div>
            <div class="my_text">
             Invite Friends
            </div>
          </div>
        </a>
        <a href="#" >
          <div class="my_box" style="background: #FF416C;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FF4B2B, #FF416C); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
            <div class="my_icon">
              <i class="fas fa-download"></i>
            </div>
            <div class="my_text">
              App Download
            </div>
          </div>
        </a>
        <a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal">
          <div class="my_box" style="background: #0F2027; 
background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);
background: linear-gradient(to right, #2C5364, #203A43, #0F2027);
">
            <div class="my_icon">
              <i class="fas fa-envelope-open-text"></i>
            </div>
            <div class="my_text">
              Company Profile
            </div>
          </div>
        </a>
        </div>

        <!-- Company Profile Start -->
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><img src="<?php echo base_url('assets/img/final2.png');?>" height="30px"/>&nbsp; The Great Motivational Hub</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p style="text-align:justify;"><b>प्रिय रीडर,</b>
<p class="text-justify">आप सभी अवगत हैं कि हर कोई अपने जीवन में कुछ न कुछ करने की चाह रखता है, हर कोई अपने जीवन में बेहतर करना चाहता है, हर कोई जीवन का वास्तविक आनंद लेना चाहता है, हर कोई दुनिया की तमाम सुख को पाना चाहता है लेकिन कई बार आप विपरीत परिस्थितियों के चलते अपने जीवन के उन तमाम समस्याओं में उलझ कर अपने मूल लक्ष्यों से ही भटक जाते हैं। आप के जीवन में जब कुछ अच्छा नहीं होता और एक के बाद एक नकारात्मक चीजें होने लगती हैं तो आप एकदम निराश से हो जाते हैं। फिर आप अपने कर्तव्यों के प्रति भी लापरवाह हो जाते हैं। बस यहीं चीजें आपके जीवन की दिशा को ही पूरी तरह से मोड़ देती है। फिर आप अपने जीवन में आगे बढ़ने की जगह पीछे होने लगते हैं। आपका सपना सिर्फ सपना बनकर ही रह जाता है। </p>


<p class="text-justify">ऐसे में हम आपको आपके लक्ष्यों के प्रति सदैव प्रेरित करने का प्रयास करेंगे। आप जब भी निराशा के जाल में फंसकर खुद को अकेला व निराश पाएंगे तो आपके यहां आ जाने मात्र से अपने आपको पुनः पहले से भी ज्यादा ऊर्जावान पाएंगे, आपका आत्मविश्वास प्रबल हो जायेगा, आपके अंदर इस कदर आग लगेगी कि आपकी हर बड़ी समस्या आपको नगण्य लगने लगेगी। अब आप अपनी पूरी शक्ति को अपने काम में झोंकने में सक्षम हो जाएंगे। फिर आपने जो सोच रखा है, वो आपको अवश्य प्राप्त होगा।</p>

<p class="text-justify">हम आपको सदैव प्रेरित करने का प्रयास करेंगे। आप अपनी जीवन से जुड़ी समस्याओं/प्रश्नों को हेल्पडेस्क के माध्यम से हमें भेजे। हम उसका समुचित जवाब देने का प्रयास करेंगे।</p>

<p class="text-justify">👉 आप विजेता हैं और आपको हर हाल में जीतना है।

                        धन्यवाद !!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


