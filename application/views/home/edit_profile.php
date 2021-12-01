<div style="height:50px;width: 100%;background: blueviolet;line-height: 50px;text-align: center;color:#fff;font-weight: bold;">
	Update Profile
</div>
<div class="container">
	<div class="row my-2">
		<div class="col-md-6 col-12 mx-auto">
			<?php foreach($profile as $key): ?>
			<form action="<?php echo base_url('update-profile');?>" method="POST">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" value="<?php echo set_value('name',$key->name); ?>" placeholder="Name" class="form-control">
					<span><?php echo form_error('name'); ?></span>
				</div>
				<div class="form-group">
					<label>Mobile Number</label>
					<input type="text" name="mobno" value="<?php echo set_value('mobno',$key->mobno); ?>" placeholder="Mobile Number" class="form-control">
					<span><?php echo form_error('mobno'); ?></span>
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" value="<?php echo set_value('username',$key->username); ?>" placeholder="Username" class="form-control">
					<span><?php echo form_error('username'); ?></span>
				</div>
				<div class="form-group">
					<label>Bio</label>
					<input type="text" name="bio" value="<?php echo set_value('bio',$key->bio); ?>" placeholder="Bio" class="form-control">
					<span><?php echo form_error('bio'); ?></span>
				</div>
				<div class="form-group text-center mt-2">
					<input type="submit" class="btn btn-danger" value="Update Profile"/>
				</div>
			</form>
		<?php endforeach;?>
		</div>
	</div>
</div>