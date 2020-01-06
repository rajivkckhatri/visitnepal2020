
<?php include ('index/header.php'); ?>


<!-- subscription section-->
		<section id="subscription" class=" subscription">
			<div class="py-5">
				<h2>News letter</h2>
			<p>Get our news letter, latest packages and offer in your email deliverd.</p></div>
			
			<div class="w-50 m-auto">
			<form action="js/info.php" method="post">
				  <div class="form-group">
				    <label>Fullname:</label>
				    <input type="text" name="user" autocomplete="off" class="form-control" placeholder="your fullname" required="required">
				    <div class="valid-feedback">Valid.</div>
				    <div class="invalid-feedback">Please fill out this field.</div>
				  </div>

				  <div class="form-group">
				    <label>Email Id:</label>
				    <input type="email" name="email" autocomplete="off" class="form-control" placeholder="your email" required="required">
				    <div class="valid-feedback">Valid.</div>
				    <div class="invalid-feedback">Please fill out this field.</div>
				</div>

				<div class="form-group">
				    <label>Mobile Number:</label>
				    <input type="Number" name="mobile" autocomplete="off" class="form-control" placeholder="your number" required="required">
				    <div class="valid-feedback">Valid.</div>
				    <div class="invalid-feedback">Please fill out this field.</div>
				  </div>

				  <div class="form-group">
				    <label>comment:</label>
				    <textarea type="text" name="comment" autocomplete="off" class="form-control" required="required" ></textarea>
				 	 </div>
				  	<button type="submit" class="btn btn-success">Submit</button>
					</form>
			</div>
</section>
<?php include ('index/footer.php'); ?>