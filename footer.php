

<!-- </section> -->


<input type="hidden" value="<?php echo $_SERVER['REQUEST_URI']; ?>" id="url_hidden">
<?php
	if( strpos( $_SERVER['REQUEST_URI'], 'home.php' ) == false ) { ?>
		<div class="fix-box">
			<button type="button" class="btn btn-info btn-lg button" data-toggle="modal" data-target="#myModal"><img src="tution.png" class="img-btn"> Need Home Tutor?
			</button>
		</div>
		<div class="row">
			<div class="col-md-12 text-right ">
			  <div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog home-tutor-modal">
				  		<div class="modal-content">
					  		<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"></button>
								<h4 class="modal-title text-left">Form</h4>
					 		 </div>
					 		<div class="modal-body text-left model">
								<form action="home.php" method="post" >
									<h6>First Name </h6>  
									<input type="text" name="fname"  id="fname" required>

								 	<h6>Subject </h6>
								  	<input type="text" name="lname" id="lname" required>
				   
								 	<h6>Location</h6>
									<input type="text" name="pass1" id="pass1" required>

									<h6>Contact no</h6>
									<input type="tel" name="pass1" id="phone" required>
					
									<h6>Email id </h6>
								  	<input type="text" name="email" id="email" required><br><br>
					  

								 	<input type="submit" value="Submit" id="register">
								 	<button type="button" class="modal_form_btn modal_close_btn btn-right" data-dismiss="modal">
									Close
								</button>
							   </form>
					  		</div>
					  		<!-- <div class="modal-footer">
								<button type="button" class="btn btn-info btn-right" data-dismiss="modal">
									Close
								</button>
							</div> -->
						</div>
					</div>
			  	</div>
			</div>
		</div>
<?php } ?>
  <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	  <script src="js/jquery.validate.min.js"></script>
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
