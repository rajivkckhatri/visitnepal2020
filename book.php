
	<?php include ('index/header.php'); ?>
	<style>
		/* ---- Subscription ---- */
.booking{
	text-align: center;
	background: #C54855 ;

	</style>
<!-- subscription section-->
		<section id="booking" class=" booking">
			<div class="py-5">
				<h2>Book Your Holiday With Us</h2>
			<p>We travel not to escape life, but for life not to escape us... We deliver...... what we promise .... with a good guide, hotels, transportation, and foods.....</p></div>
			
			<div class="w-50 m-auto">
			<form action="js/booking.php" method="post">
				  <div class="form-group">
				    <label>Fullname:</label>
				    <input type="text" name="user" autocomplete="off" class="form-control" required="required" placeholder="Fullname">
				    <div class="valid-feedback">Valid.</div>
				    <div class="invalid-feedback">Please fill out this field.</div>
				  </div>

				  <div class="form-group">
				    <label>Email Id:</label>
				    <input type="email" name="email" autocomplete="off" class="form-control" required="required" placeholder="Email">
				    <div class="valid-feedback">Valid.</div>
				    <div class="invalid-feedback">Please fill out this field.</div>
				</div>

				<div class="form-group">
				    <label>Contact Number:</label>
				    <input type="Number" name="contact" autocomplete="off" class="form-control" required="required" placeholder="Mobile Number">
				    <div class="valid-feedback">Valid.</div>
				    <div class="invalid-feedback">Please fill out this field.</div>
				  </div>

				  <div class="form-group">
				    <label>Full Address:</label>
				    <textarea type="text" name="address" autocomplete="off" class="form-control" required="required" placeholder="Living Address" ></textarea>
				 	 </div>

				 	   <div class="form-group">
				    <label>Tour Plan:</label>
				    <input type="text" name="plan" autocomplete="off" class="form-control" required="required">
				    <div class="valid-feedback">Valid.</div>
				    <div class="invalid-feedback">Please fill out this field.</div>
				  </div>

				  <div class="form-group">
				    <label>Booking Date:</label>
				    <input type="Date" name="bookingdate" autocomplete="off" class="form-control" required="required">
				    <div class="valid-feedback">Valid.</div>
				    <div class="invalid-feedback">Please fill out this field.</div>
				</div>

				<div class="form-group">
				    <label>Number of people:</label>
				    <input type="Number" name="numberofpeople" autocomplete="off" class="form-control" required="required">
				    <div class="valid-feedback">Valid.</div>
				    <div class="invalid-feedback">Please fill out this field.</div>
				  </div>

				  <div class="form-group">
				    <label>Massage if Any:</label>
				    <textarea type="text" name="message" autocomplete="off" class="form-control" required="required"></textarea>
				 	 </div>
				  	<button type="submit" class="btn btn-success">Processed Booking!</button>
					</form>
			</div>
</section>
<?php include ('index/footer.php'); ?>