 <style type="text/css">
   .footer_row{
    height: 60px;
    width: 100%;
    background: blueviolet;
    bottom: 0;
    left: 0 ;
    position: fixed;
    line-height: 60px;
    text-align: center;
    z-index: 99;
    color: #fff;
    cursor: pointer;
    transition: 0.6s;
   }
   .footer_box:hover{
    background: #FF416C;
    transition: 0.6s;
   }
   .footer_row .active{
    background: #FF416C;
    transition: 0.6s;
   }
   .footer_box
   {
    height: 60px;
    width: 20%;
    background: blueviolet;
    float: left;
   }
   .footer_box a{
    color: #fff;
    text-decoration: none;
   }
   .footer_icon{
    height: 40px;
    width: 100%;
    //background: green;
    text-align: center;
    line-height: 40px;
   }
   .footer_text{
    height: 20px;
    width: 100%;
    line-height: 20px;
    text-align: center;
    //background: deeppink;
   }
 </style>
 <div class="footer_row">
    <div class="footer_box <?php if($this->uri->segment(1)=='welcome'):echo 'active';endif;?>" >
      <a href="<?php echo base_url('welcome');?>">
        <div class="footer_icon">
          <i class="fas fa-home"></i>
        </div>
        <div class="footer_text">
            Home
        </div>
        </a>
    </div>
     <div class="footer_box <?php if($this->uri->segment(1)=='task'):echo 'active';endif;?>">
      <a href="<?php echo base_url('task');?>">
        <div class="footer_icon">
          <i class="fas fa-search"></i>
        </div>
        <div class="footer_text">
            Search
        </div>
      </a>
    </div>
    <div class="footer_box <?php if($this->uri->segment(1)=='post'):echo 'active';endif;?>">
      <a href="<?php echo base_url('post');?>">
        <div class="footer_icon">
          <i class="fas fa-plus-circle"></i>
        </div>
        <div class="footer_text">
            Post
        </div>
      </a>
    </div>
    <div class="footer_box <?php if($this->uri->segment(1)=='my-task'):echo 'active';endif;?>">
        <a href="<?php echo base_url('my-task');?>">
        <div class="footer_icon">
          <i class="fas fa-bell"></i>
        </div>
        <div class="footer_text">
            Notification
        </div>
        </a>
    </div>
    <div class="footer_box <?php if($this->uri->segment(1)=='profile'):echo 'active';endif;?>">
      <a href="<?php echo base_url('profile');?>">
        <div class="footer_icon">
          <i class="fas fa-user-circle"></i>
        </div>
        <div class="footer_text">
            Profile
        </div>
      </a>
    </div>

 </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      function copyText() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  alert("Copied");
}
    </script>
    <script>
      const btn1=document.getElementById('btn1');
      const btn2=document.getElementById('btn2');
      const btn3=document.getElementById('btn3');
      const btn4=document.getElementById('btn4');
      const amount=document.getElementById('amount');
      btn1.addEventListener('click',(e)=>{
        e.preventDefault();
       var a=btn1.dataset.value;
        amount.value="1000";
      });
       btn2.addEventListener('click',(e)=>{
        e.preventDefault();
       var a=btn1.dataset.value;
        amount.value="2000";
      });
       btn3.addEventListener('click',(e)=>{
        e.preventDefault();
       var a=btn1.dataset.value;
        amount.value="5000";
      });
       btn4.addEventListener('click',(e)=>{
        e.preventDefault();
       var a=btn1.dataset.value;
        amount.value="10000";
      });
    </script>
  </body>
</html>