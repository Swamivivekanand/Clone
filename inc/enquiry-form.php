<div class="enquiry-form-content">
   		<div class="enquiry-form">
   			<div class="inner-body">
   				<!-- <form action="services.php" > -->
     				<h4>Enquiry Form</h4>
      				<div class="input--with-icon">
     					<i class="fa fa-user"></i>
      					<input type="text" placeholder="Name" class="name-enquiry" >
                         <span class="form-control-feedback glyphicon "></span>
   					</div>

    
 						<div class="input--with-icon">
 	 						<i class="fa fa-book"></i>
 	  						<input type="text" placeholder="Subject" class="subject-enquiry" >
                            <span class="form-control-feedback glyphicon "></span>
 						</div>

 						<div class="input--with-icon">
    						<i class="fa fa-location-arrow"></i>
     						<input type="text" placeholder="Location" class="location-enquiry" >
                            <span class="form-control-feedback glyphicon "></span>
  					    </div>
    
 
 						<div class="input--with-icon">
  							<i class="fa fa-phone"></i>
   							<input type="text" placeholder="Contact Number" class="phone-enquiry">
                            <span class="form-control-feedback glyphicon "></span>
 						</div>
 						<!-- <button type="submit" class="btn">Get Free Demo</button> -->
                        <div class="enquiry-submit">
                            <input type="submit" name="" value="Get Free Demo" id="enquiry_form_submit">
                        </div>
 					<!-- </form> -->
 					<div class="enquiry-form-close">
 						<i class="fa fa-times"></i>
 						
 					</div>
 				</div>
   			</div>
		</div>
      <!--  <script src="jquery-3.3.1.min.js">
            $(".enquiry-submit").click(function () 
       {
            
            var name_enquiry = $(".name-enquiry").val();
            console.log(name_enquiry);
            var subject_enquiry = $(".subject-enquiry").val();
            var location_enquiry=$(".location-enquiry").val();
            var phone_enquiry=$(".phone-enquiry").val();
           
            if(name_enquiry.val()=='' && name_enquiry.val() == null)
            {
                 $('#enquiry_form_submit').attr('disabled',true);
            }
             else if(subject_enquiry.val()=='' && subject_enquiry.val()==null)
             {
                 $('#enquiry_form_submit').attr('disabled',true);
             }
             else if(location_enquiry.val()=='' && location_enquiry.val() == null)
             {
                 $('#enquiry_form_submit').attr('disabled',true);
             }
             else if(phone_enquiry.val()=='' && phone_enquiry.val()==null)
             {
                $('#enquiry_form_submit').attr('disabled',true);
             }
             else
             {

              $('#enquiry_form_submit').attr('disabled',false);
             }
        });
       </script> -->