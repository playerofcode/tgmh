<div style="height:50px;width: 100%;background: blueviolet;line-height: 50px;text-align: center;color:#fff;font-weight: bold;">
	Create Post
</div>
<div class="container-fluid">
	<div class="row mt-1">
		<div class="col-md-12 col-12">
			<form action="<?php echo base_url('home/create_post');?>" method="POST">
			<textarea name="content"  cols="30" rows="10" class="form-control" placeholder="Express Yourself... (Max Length 255)" style="resize:none;"></textarea>
			<span><?php echo form_error('content');?></span>
			<div class="form-group mt-3 text-center">
				<input type="submit" value="Publish" class="btn" style="background: #1A2980;background: -webkit-linear-gradient(to right, #26D0CE, #1A2980);background: linear-gradient(to right, #26D0CE, #1A2980);width:200px;border-radius: 20px;border:none;color:#fff;">
			</div>
			</form>
		</div>
	</div>
</div>