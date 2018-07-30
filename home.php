<?php include "header.php" ?>
<div class="spacer"></div>
   
	<section class="search">

		<div class="hero"></div>
      
  		<div class="container">
            <div class="row">
  			    <div class="col-md-12 text-center">

				    <h1 class="heading">Swami Vivekananda Jnana Kendra</h1>
			    </div>	
			</div>

			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<h3 class="needs">For all your coaching needs!</h3>
				</div>	
			</div>
			

			<div class="row">
				<div class="col-md-12 find text-center">

					
						<!-- <div class="logo"><img src="Near coach.jpg" class="img-fluid img-responsive" ></div> -->
                    	<label for="categories">Choose<br>
							<select class="categories" name="categories" id="categories">
								<option value="student" selected="selected">Student</option>
								<option value="teacher">Faculty</option>
								<option value="institute">Institute</option>
							</select>
						</label>

					    <label for="place">Location<br>
							<input type="text" name="place" placeholder="Where" id="places">
                    <!--  <select  name="location" class="places">
                        <option value="place">Hennur Cross</option>
                        <option value="place">Nagawara</option>
                        <option value="place">Manyata Tech Park</option>
                        <option value="place">Hebbal</option>
                        <option value="place">Ramamurtynagar</option>
                        <option value="place">JP Nagar</option>
                  </select> -->
                     
						</label>
						
                        <label for="subject" id="sub">Subject<br>
							<select class="subject" name="subject" id="subject">
						  		<option value="time">Science</option>
						  		<option value="time">Math</option>
						  		<option value="time">S.std</option>
						  		<option value="time">C lang</option>
							</select>
						</label>
                        <button data-target="#get_info"  data-toggle="modal" class="btn_get_info">Search</button>	
   						<!-- <input type="submit" name="submit" value="Search"> -->
					
			   </div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<p class="talents">Connecting Talents....</p>
				</div>	
			</div>
		</div>
   </section>
   <section class="how-it-works">
   		<div class="container">
   			<div class="row">
   				<div class="col-md-8 col-md-offset-2 text-center">
   					<span class="looking-for">Looking For</span>
	   				<select class="selectpicker">
	   			  		<option value="1">Home Tutor</option>
	   			  		<option value="2">Tution Jobs</option>
	   			  		<option value="3">Institute</option>
	   				</select>
   				</div>
   			</div>
   			<div class="row">
   				<div class="col-md-8 col-md-offset-2 text-center">
   					<div id="student">
   						<div class="row">
   							<div class="col-md-4">
   								<div class="tell-us-need">
   									<div class="content">
   								 		<p>Tell Us Your</p>
   								 		<h3>NEEDS</h3>
   								 		<img src="images/one.png">
   								 	</div>	
   								</div>
   								
   						    </div>
   							<div class="col-md-4">
   								<div class="free-demo">
   									<div class="content">
   										<p>Get A Free </p>
   										<h3>Demo</h3>
   										<img src="images/two.png">
   									</div>
   									
   								</div>
   							</div>
   							<div class="col-md-4">
   								<div class="confirm-if-like">
   									<div class="content">
   										<p>Confirm If You</p>
   										<h3>Like</h3>
   										<img src="images/three.png">
   									</div>

   								</div>
   							</div>     							
   						</div>
   						<div class="row">
   							<div class="col-md-6 col-md-offset-3">
   								<div class="button-content">
   									<a href="register.php" class="how-it-works-button">Post tution needs for free</a>
   								</div>
   							</div>
   						</div>
   					</div>
   					<div id="faculty">
   						<div class="row">
   							<div class="col-md-4">
   								<div class="tell-us-need">
   									<div class="content">
   								 		<p>Create</p>
   								 		<h3>Profile</h3>
   								 		<img src="images/one.png">
   								 	</div>	
   								</div>
   								
   						    </div>
   							<div class="col-md-4">
   								<div class="free-demo">
   									<div class="content">
   										<p>Get </p>
   										<h3>Students</h3>
   										<img src="images/two.png">
   									</div>
   									
   								</div>
   							</div>
   							<div class="col-md-4">
   								<div class="confirm-if-like">
   									<div class="content">
   										<p>Start</p>
   										<h3>Earning</h3>
   										<img src="images/three.png">
   									</div>

   								</div>
   							</div>     							
   						</div>
   						<div class="row">
   							<div class="col-md-6 col-md-offset-3">
   								<div class="button-content">
   									<a href="register.php" class="how-it-works-button">Join as a tutor for free</a>
   								</div>
   							</div>
   						</div>
   					</div>
   					<div id="institute">
   						<div class="row">
   							<div class="col-md-4">
   								<div class="tell-us-need">
   									<div class="content">
   								 		<p>Create </p>
   								 		<h3>Profile</h3>
   								 		<img src="images/one.png">
   								 	</div>	
   								</div>
   								
   						    </div>
   							
   							<div class="col-md-4">
   								<div class="confirm-if-like">
   									<div class="content">
   										<p>Tell Us Your Free</p>
   										<h3>Time</h3>
   										<img src="images/two.png">
   									</div>

   								</div>
   							</div> 

                        <div class="col-md-4">
                           <div class="confirm-if-like">
                              <div class="content">
                                 <p>Get Student &</p>
                                 <h3>Faculty</h3>
                                 <img src="images/three.png">
                              </div>

                           </div>
                        </div>    							
   						</div>
   						<div class="row">
   							<div class="col-md-6 col-md-offset-3">
   								<div class="button-content">
   									<a href="register.php" class="how-it-works-button">Join for free</a>
   								</div>
   							</div>
   						</div>
   					</div>
   				</div>
   			</div>
   		</div>
   	</section>

   <div class="home-tutor">
   	<div class="home-tutor-content">
   		<div class="home-tutor-image">
   			<a href="register.php">
   				<img src="images/need-home-tutor.png" class="img-responsive">
   			</a>
   			<div class="home-tutor-close">
   				<i class="fa fa-times"></i>
   			</div>
   		</div>
   	</div>
   </div>
   <footer>
      <section class="home_footer">
         <div class="container">
            <div class="col-md-4">
               <i class="fa fa-location-arrow"></i>
               <span>#184, Hennur Cross, Near Indian Academy College,<br> Off Ring Road, Bengaluru-560043 Karnataka, India.</span>
            </div>
            <div class="col-md-4">
               <i class="fa fa-phone"></i>
               <span>080-41722223,9741264243,9731663600</span>
            </div>
            <div class="col-md-4">
               <i class="fa fa-envelope"></i>
               <span>svj.kendra@gmail.com</span>
               <span>write2svjk@svjnanakendra.com</span>
            </div>

         </div>
      </section>
   </footer>
   <?php  include_once 'inc/enquiry-form.php'; ?>
   <?php include_once "inc/get_information.php" ?>	


<?php include "footer.php" ?>
   	
	







