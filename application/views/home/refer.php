<div style="height:50px;width: 100%;background: blueviolet;line-height: 50px;text-align: center;color:#fff;font-weight: bold;">
	Refer and Earn
</div>
<div class="container-fluid">
	<div class="row mb-5">
		<div class="col-md-6 mx-auto">
			<center><img src="<?php echo base_url('assets/img/refer.png');?>" class="img-fluid">
			<img src="https://chart.apis.google.com/chart?cht=qr&chs=150x150&chl=<?php echo base_url('home/index/'.$profile[0]->invitation_code);?>" class="d-block">
			
                <div class="input-group mb-3">
              <button class="btn btn-outline-secondary" onclick="copyText()" id="button-addon1" style="background: deeppink;color:#fff;">Copy</button>
              <input type="text" id="myInput" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" value="<?php echo base_url('home/index/'.$profile[0]->invitation_code);?>" readonly>
            </div>
			</center>	
		</div>
	</div>
</div>