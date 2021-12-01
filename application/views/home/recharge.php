<style>
	input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
<div style="height:50px;width: 100%;background: blueviolet;line-height: 50px;text-align: center;color:#fff;font-weight: bold;">
	Recharge
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 mx-auto">
					<center><img src="<?php echo base_url('assets/img/wallet.png');?>" class="img-fluid mt-3"></center>
					<form action="<?php echo base_url('home/rechargeProcess');?>" method="POST">
					<div class="form-group mb-3">
						<label>Enter Amount</label>
						<input type="number" id="amount" name="amount" class="form-control" placeholder="Min Amount 500" min="500" required style="border: none;
    border-bottom: 2px solid #ccc;
    border-radius: 0;
    outline: none;">
					</div>
					<button class="btn btn-sm" data-value="1000" id="btn1" style="border-radius:0;background: #25C315;color: #fff;">+1000</button>
					<button class="btn btn-sm" data-value="2000" id="btn2" style="border-radius:0;background: #25C315;color: #fff;">+2000</button>
					<button class="btn btn-sm" data-value="5000" id="btn3" style="border-radius:0;background: #25C315;color: #fff;">+5000</button>
					<button class="btn btn-sm" data-value="10000" id="btn4" style="border-radius:0;background: #25C315;color: #fff;">+10000</button>
					<div class="form-group my-4 text-center">
						<input type="submit" class="btn text-white shadow" value="Add Money" style="background: #1A2980;background: -webkit-linear-gradient(to right, #26D0CE, #1A2980);background: linear-gradient(to right, #26D0CE, #1A2980);width:200px;border-radius: 20px;border:none;" >
					</div>
					</form>
		</div>
	</div>
</div>