$(document).ready(function($)
{
	$("select.categories").change(function()
	{

		var select=$(this);
		var value=select.val();
		// if(value == 'student' || value == 'teacher')
		// {
		// 	$("#sub").css('display','inline-block');
		// }
		// else{
		// 	$("#sub").css('display','none');
		// }

		if(value=='student' || value=='teacher')
		{
			$("#sub").css('display','inline-block');
		}
		else if(value=='institute')
		{
			$("#sub").css('display','none');
		}
	});

	$("select.selectpicker").change(function()
	{
		var select=$(this);
		var value=select.val();

		if(value == "2")
		{
			$("#student").hide().fadeOut(300);
			$("#institute").hide().fadeOut(300);
			$("#faculty").show().fadeIn(300);
		}
		else if(value=="3")
		{
           $("#faculty").hide().fadeOut(300);
           $("#student").hide().fadeOut(300);
           $("#institute").show().fadeIn(300);
		}
		else if(value == "1")
		{
			$("#faculty").hide().fadeOut(300);
			$("#institute").hide().fadeOut(300);
			$("#student").show().fadeIn(300);
		}
		
	});

	function toggleIcon(e) 
	{
    	$(e.target).prev('.panel-heading').find(".more-less").toggleClass('glyphicon-plus glyphicon-minus');
	}

	$('.panel-group').on('hidden.bs.collapse', toggleIcon);
	$('.panel-group').on('shown.bs.collapse', toggleIcon);

		var main_nav = $('#SV-main-nav');

		// $(window).on('scroll',function()
		// {
		// 	var st=$(window).scrollTop();
		// 	if(st > 60)
		// 	{
		// 		main_nav.addClass("fixed-navigation");
		// 	}
		// 	else
		// 	{
		// 		main_nav.removeClass("fixed-navigation");
		// 	}
		// });
		$("input[name=signup_form_select]").on('click',function()
		{
			var value=$("input[name=signup_form_select]:checked").val();
				if (value == 1) 
				{
           			$("#change_placeholder").attr("placeholder", "Enter Full Name");
           		}
           		else if (value == 2) 
           		{
           		    $("#change_placeholder").attr("placeholder", "Enter Full Name ");
           		}
           		else if (value == 3)
           		{
           			$("#change_placeholder").attr("placeholder", "Enter Institute Name ");
           		}
		});

		$(".home-tutor-close").on("click",function()
		{
			$(".home-tutor-image").toggleClass("home-tutor-hidden");
			$(".home-tutor-close").toggleClass("home-tutor-close-visible");
			if($(".home-tutor-close").hasClass("home-tutor-close-visible"))
			{	
				setTimeout(function()
				{
					$(".home-tutor-close i").removeClass("fa-times").addClass("fa-angle-double-right");
				}, 600);
			}
			else
			{
				setTimeout(function()
				{
				    $(".home-tutor-close i").addClass("fa-times").removeClass("fa-angle-double-right");
				}, 100);
			}
		});

		$(".enquiry-form-close").on("click",function()
		{
			$(".enquiry-form-content").toggleClass("enquiry-form-hidden");
			$(".enquiry-form-close").toggleClass("enquiry-form-close-visible");
			if($(".enquiry-form-close").hasClass("enquiry-form-close-visible"))
			{	
				setTimeout(function()
				{
					$(".enquiry-form-close i").removeClass("fa-times").addClass("fa-angle-double-left");
				}, 600);
				
			}
			else
			{
				setTimeout(function()
				{
				   $(".enquiry-form-close i").addClass("fa-times").removeClass("fa-angle-double-left");
				}, 100);
			}
		});
		   
		

		// choosing photo for profile photo submission
		$("#choose-file").click(function()
		{
			$('input[type=file]').change(function() 
			{
			    var filename = $(this)[0].files[0];
			    console.log(filename.name);
			    $('#file').html(filename.name);
			});
		});
		// Profile Completion Steps

		$(".next").click(function(e)
		{
			var count=0;
			var this_ele=$(this).parent().parent();
			var fields = this_ele.find('div .text-field');
			fields.each(function() 
			{
		 		var value = $(this).val();
		        if(value == '')
		        {
		        	count++;
		        }
		        console.log(value);
		    });
			var next_ele=$(this_ele).next();
			
			if(count==0)
			{
				this_ele.hide();
				next_ele.show();
			}
			else
			{
				e.preventDefault();
			}
		});
		
		// $(function()
  //   {
            
    //   $( "#locality" ).autocomplete(
    //   	{
    //   		minLength: 3,
    //   		classes: 
    //   		{
    //       		"ui-autocomplete": "highlight"
    //     	},
    //    			autoFocus: true,
				// source: 'js/location.json'
    // 	});
    // });
	$('.ui-menu li div').on( 'click',function() 
	{
		 // $.getJSON("demo_ajax_json.js",
		 // });
		 console.log(1);

	});


	$(".previous").click(function(e)
	{
		var this_ele=$(this).parent().parent();
		var prev_ele=$(this_ele).prev();
		this_ele.hide();
		prev_ele.show();
	});
	$("#skip").click(function(e)
	{
		var this_ele=$(this).parent().parent();
		var next_ele=$(this_ele).next();
		this_ele.hide();
		next_ele.show();
	});
	$("#ms-form").submit(function(e)
	{
		var count=0;
		var this_ele1=$('.profile-submit').parent().parent();
		var fields1 = this_ele1.find('div .text-field');
		fields1.each(function(e) 
		{
		  var value = $(this).val();
		  if(value == '')
		  {
		    count++;
		  }
		});
		    
		if(count != 0)
		{
			e.preventDefault();
		}
	});
		
	function get_info(){
		console.log('hello');
	}
		
	// $(".get_start_btn").click(function()
	// {
	// 	$(".get_info_intro").hide();
	// 	$(".get_start_btn").hide();
	// 	$(".get_info_student_1").show();
	// 	$(".next-modal").show();
	// 	$(".back-modal").show();
	// });
	// $(".back-modal").click(function()
	// {
	// 	$(".get_info_student_1").hide();
	// 	$(".next-modal").hide();
	// 	$(".back-modal").hide();
	// 	$(".get_info_intro").show();
	// 	$(".get_start_btn").show();


	// });
	// $(".next-modal").click(function()
	// {
	// 	$(".get_info_intro").hide();
	// 	$(".get_start_btn").hide();
	// 	$(".get_info_student_1").hide();
	// 	$(".next-modal").hide();
	// 	$(".back-modal").hide();
	// 	$(".get_info_student_2").show();
	// 	$(".next-modal1").show();
	// 	$(".back-modal1").show();
	// });

	// $(".back-modal1").click(function()
	// {   
	// 	$(".get_info_intro").hide();
	// 	$(".get_start_btn").hide();
	// 	$(".get_info_student_2").hide();
	// 	$(".next-modal1").hide();
	// 	$(".back-modal1").hide();
	// 	$(".next-modal2").show();
	// 	$(".get_info_student_1").show();
	// 	$(".next-modal").show();
	// 	$(".back-modal").show();
	// });

	// $(".next-modal1").click(function()
	// {
	// 	$(".get_info_intro").hide();
	// 	$(".get_start_btn").hide();
	// 	$(".get_info_student_1").hide();
	// 	$(".next-modal").hide();
	// 	$(".get_info_student_2").hide();
	// 	$(".next-modal1").hide();
	// 	$(".back-modal1").hide();
	// 	$(".get_info_student_3").show();
	// 	$(".next-modal2").show();
	// 	$(".back-modal2").show();
	// });
	// $(".back-modal2").click(function()
	// {
	// 	$(".get_info_student_3").hide();
	// 	$(".next-modal2").hide();
	// 	$(".back-modal2").hide();
	// 	$(".get_info_student_2").show();
	// 	$(".next-modal1").show();
	// 	$(".back-modal1").show();

	// });
	// $(".next-modal2").click(function()
	// {
	// 	$(".get_info_intro").hide();
	// 	$(".get_start_btn").hide();
	// 	$(".get_info_student_1").hide();
	// 	$(".next-modal").hide();
	// 	$(".get_info_student_2").hide();
	// 	$(".next-modal1").hide();
	// 	$(".get_info_student_3").hide();
	// 	$(".next-modal2").hide();
	// 	$(".get_info_student_4").show();
	// 	$(".next-modal3").show();
	// 	$(".back-modal3").show();
	// });
	// $(".back-modal3").click(function()
	// {
	// 	$(".get_info_student_4").hide();
	// 	$(".next-modal3").hide();
	// 	$(".back-modal2").hide();
	// 	$(".next-modal2").show();
	// 	$(".back-modal2").show();
	// 	$(".get_info_student_3").show();
	// });
	// $(".next-modal3").click(function()
	// {
	// 	$(".get_info_intro").hide();
	// 	$(".get_start_btn").hide();
	// 	$(".get_info_student_1").hide();
	// 	$(".next-modal").hide();
	// 	$(".get_info_student_2").hide();
	// 	$(".next-modal1").hide();
	// 	$(".get_info_student_3").hide();
	// 	$(".next-modal2").hide();
	// 	$(".get_info_student_4").hide();
	// 	$(".next-modal3").hide();
	// 	$(".get_info_student_5").show();
	// 	$(".next-modal4").show();
	// });
	// $(".next-modal4").click(function()
	// {
	// 	$(".get_info_intro").hide();
	// 	$(".get_start_btn").hide();
	// 	$(".get_info_student_1").hide();
	// 	$(".next-modal").hide();
	// 	$(".get_info_student_2").hide();
	// 	$(".next-modal1").hide();
	// 	$(".get_info_student_3").hide();
	// 	$(".next-modal2").hide();
	// 	$(".get_info_student_4").hide();
	// 	$(".next-modal3").hide();
	// 	$(".get_info_student_5").hide();
	// 	$(".next-modal4").hide();
	// 	$(".get_info_student_6").show();
	// 	$(".next-modal5").show();
	// });
	// $(".next-modal5").click(function()
	// {
	// 	$(".get_info_intro").hide();
	// 	$(".get_start_btn").hide();
	// 	$(".get_info_student_1").hide();
	// 	$(".next-modal").hide();
	// 	$(".get_info_student_2").hide();
	// 	$(".next-modal1").hide();
	// 	$(".get_info_student_3").hide();
	// 	$(".next-modal2").hide();
	// 	$(".get_info_student_4").hide();
	// 	$(".next-modal3").hide();
	// 	$(".get_info_student_5").hide();
	// 	$(".next-modal4").hide();
	// 	$(".get_info_student_6").hide();
	// 	$(".next-modal5").hide();
	// 	$(".get_info_student_7").show();
	// 	$(".next-modal6").show();
	// });

	// $(".next-modal6").click(function()
	// {
	// 	$(".get_info_intro").hide();
	// 	$(".get_start_btn").hide();
	// 	$(".get_info_student_1").hide();
	// 	$(".next-modal").hide();
	// 	$(".get_info_student_2").hide();
	// 	$(".next-modal1").hide();
	// 	$(".get_info_student_3").hide();
	// 	$(".next-modal2").hide();
	// 	$(".get_info_student_4").hide();
	// 	$(".next-modal3").hide();
	// 	$(".get_info_student_5").hide();
	// 	$(".next-modal4").hide();
	// 	$(".get_info_student_6").hide();
	// 	$(".next-modal5").hide();
	// 	$(".get_info_student_7").hide();
	// 	$(".next-modal6").hide();
	// 	$(".get_info_student_8").show();
	// 	$(".next-modal7").show();
	// });
	// $(".next-modal7").click(function()
	// {
	// 	$(".get_info_intro").hide();
	// 	$(".get_start_btn").hide();
	// 	$(".get_info_student_1").hide();
	// 	$(".next-modal").hide();
	// 	$(".get_info_student_2").hide();
	// 	$(".next-modal1").hide();
	// 	$(".get_info_student_3").hide();
	// 	$(".next-modal2").hide();
	// 	$(".get_info_student_4").hide();
	// 	$(".next-modal3").hide();
	// 	$(".get_info_student_5").hide();
	// 	$(".next-modal4").hide();
	// 	$(".get_info_student_6").hide();
	// 	$(".next-modal5").hide();
	// 	$(".get_info_student_7").hide();
	// 	$(".next-modal6").hide();
	// 	$(".get_info_student_8").hide();
	// 	$(".next-modal7").hide();
	// 	$(".get_info_student_9").show();
	// 	$(".next-modal8").show();
	// });

	var state=1;
	$(".get_start_btn").click(function(e)
	{
		var this_ele=$(this).parent().parent().parent().find(".modal-body .active");
		var next_ele=$(this_ele).next();
		this_ele.removeClass("active");
		 next_ele.addClass("active");
		 state++;
		 if(state==11)
		 {
		 	$(this).addClass("hidden");
		 	$(".modal-submit").addClass("active");
		 }
		 if(state==2)
		 {
		 	$(this).text('Next');
		 	$(".pre_btn").addClass("active");
		 }
	});
	 $(".pre_btn").click(function(e)
	{
		var this_ele=$(this).parent().parent().parent().find(".modal-body .active");
		var prev_ele=$(this_ele).prev();
		console.log(state);
		state--;
		 this_ele.removeClass("active");
		 prev_ele.addClass("active");
		 if (state==1) 
		 {
		 	$(".get_start_btn").text("Get Started");
		 	$(this).removeClass("active");
		 }
	});
	// $('.form-name').keypress(function(e)

	// {
	// 	var keyCode = e.which;
	// 	var name = $(this).val();
 //        var filter = /[A-Z][a-zA-Z][^#&<>\"~;$^%{}?]{1,25}$/;

 

	// 	if ( !( (keyCode >= 65 && keyCode <= 90) ||(keyCode >= 97 && keyCode <= 122) || (keyCode == 8 || keyCode == 32))) 
	// 	{
	//   		 // e.preventDefault();
	// 		    // if ( filter.test(name)) 
	// 		    if(name.length>25)
	// 		    {
	// 		        //$(this).removeClass("valid");
	// 		        $(this).addClass("invalid");
	// 		        return false;
	// 		    }

	// 		    else
	// 		    {
	// 		    	$(this).removeClass("invalid");
	// 		     	$(this).addClass("valid");
	// 		    	return true;
	// 			}
	// 	}
	// });
	$(".form-name").on("blur", function() 
	{
    if ( $(this).val().match('^[a-zA-Z]{3,16}$') ) 
    {
    	$(this).removeClass("invalid");
       $(this).addClass("valid");
    } 
    else 
    {
    	$(this).removeClass("valid");
         $(this).addClass("invalid");
    }
});
	$('.form-phoneno').keypress(function(e) 
	{ 
		
		var keyCode=e.which;
		var phone_number=$(this).val();

		if((e.keyCode>=48 && e.keyCode<=57)|| (e.keyCode>=96 && e.keyCode <=105)||(e.keyCode==8))
		{
			
			if(phone_number.length==9)
			{
				$(this).removeClass("invalid");
				$(this).addClass("valid");
			}
			else
			{
				$(this).removeClass("valid");
				$(this).addClass("invalid");
			}

		}
		else
		{
			$(this).removeClass("valid");
			$(this).addClass("invalid");
		}
	});
		
	
	
	  $(".form-emailid").on("blur", function()
	 {
        var email = $(this).val();
        var filter = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  		if(filter.test(email))
  		{
  			$(this).removeClass("invalid");
            $(this).addClass("valid");
  		}
  		else
  		{
  			$(this).removeClass("valid");
            $(this).addClass("invalid");
            return false;
  		}
  	});
	  var counter=0;
	  $(".form-password").on("blur",function()
	  {
	  	// $(".tooltip_text").show();
	  	var password=$(this).val();
	  	var filter=/((?=.*\d)(?=.*[A-Z])(?=.*\W).{8,8})/;
	  	
	  	if(filter.test(password))
	  	{
	  		$(this).removeClass("invalid");
	  		$(this).addClass("valid");

	  	}
	  	else
	  	{
	  		$(this).removeClass("valid");
	  		$(this).addClass("invalid");
	  		counter=1;
	  	}
	  });
	 $(".form-password").focus(function()
	 { 

	 	$(".tooltip_text").show();
	 	
	 });

	  $(".form-confrmpass").on("blur",function()
	  {
	  	 var password = $(".form-password").val();
	  	 console.log(counter);
            var confirmPassword = $(".form-confrmpass").val();
            if (password != confirmPassword) 
            {
                $(this).removeClass("valid");
	  			$(this).addClass("invalid");
                 $('#register_form_submit').attr('disabled',true);
                
            }
      //       else if(counter=1)
      //       {

      //       	$(this).removeClass("valid");
	  			// $(this).addClass("invalid");
      //            $('#register_form_submit').attr('disabled',true);
      //       }
            else
            {
            	$(this).removeClass("invalid");
	  		$(this).addClass("valid");	
	  		 $('#register_form_submit').attr('disabled',false);
            }
            
	  });

	   $(".register-submit").click(function () 
	   {
	   	alert("absh");
            var password = $(".form-password").val();
            var confirmPassword = $(".form-confrmpass").val();
            var name=$(".form-name");
            var email=$(".form-emailid");
            var phone_number=$(".form-phoneno");	
            if (password != confirmPassword) 
            {
                alert("Passwords do not match.");
                
            }
            
            else if(name.val()=='' && name.val() == null)
            {
            	 $('#register_form_submit').attr('disabled',true);
            }
             else if(email.val()=='' && email.val()==null)
             {
             	 $('#register_form_submit').attr('disabled',true);
             }
             else if(phone_number.val()=='' && phone_number.val() == null)
             {
             	 $('#register_form_submit').attr('disabled',true);
             }
             else
             {

              $('#register_form_submit').attr('disabled',false);
       		 }
        });
	   
	    $(".enquiry-submit").click(function() 
	   {
	   		
	   	 	var name_enquiry = $(".name-enquiry");

	   	 	var subject_enquiry = $(".subject-enquiry");
            var location_enquiry=$(".location-enquiry");
            var phone_enquiry=$(".phone-enquiry");
           console.log(phone_enquiry.val());
          //   if(name_enquiry.val()=='' && name_enquiry.val() == null)
          //   {
          //   	 $('#enquiry_form_submit').attr('disabled',true);
          //   }
          //    else if(subject_enquiry.val()=='' && subject_enquiry.val()==null)
          //    {
          //    	 $('#enquiry_form_submit').attr('disabled',true);
          //    }
          //    else if(location_enquiry.val()=='' && location_enquiry.val() == null)
          //    {
          //    	 $('#enquiry_form_submit').attr('disabled',true);
          //    }
          //    else if(phone_enquiry.val()=='' && phone_enquiry.val()==null)
          //    {
          //    	$('#enquiry_form_submit').attr('disabled',true);
          //    }
          //    else
          //    {

          //     $('#enquiry_form_submit').attr('disabled',false);
       		 // }
       		 if (name_enquiry.val()=='' && subject_enquiry.val()=='' &&  location_enquiry.val()=='' && phone_enquiry.val()=='') 
       		 {
       		 	console.log(8);
       		 	$('#enquiry_form_submit').attr('disabled','disabled');
       		 }
       		 else
       		 {
       		 	$('#enquiry_form_submit').removeAttr('disabled');
       		 }
		});

		$(".name-enquiry").keyup(function() 
		{
			var enquiry_name=$(this).val();
			var icon=$(this).next();
		    if (enquiry_name.match('^[a-zA-Z ]{3,16}$')) 
		    {
		    	icon.removeClass("glyphicon-remove");
		      	icon.addClass("glyphicon-ok").css("color","green");
		    } 
		    else 
		    {

		    	icon.removeClass("glyphicon-ok");
		    	icon.addClass("glyphicon-remove").css("color","red");
		         
		    }
		});
		$(".subject-enquiry").keyup(function() 
		{
			var enquiry_name=$(this).val();
			var icon=$(this).next();
		    if (enquiry_name.match('^[a-zA-Z ]{3,16}$')) 
		    {
		    	icon.removeClass("glyphicon-remove");
		      	icon.addClass("glyphicon-ok").css("color","green");
		    } 
		    else 
		    {

		    	icon.removeClass("glyphicon-ok");
		    	icon.addClass("glyphicon-remove").css("color","red");
		         
		    }
		});
		$(".location-enquiry").keyup(function() 
		{
			var enquiry_name=$(this).val();
			var icon=$(this).next();
		    if (enquiry_name.match('^[a-zA-Z ]{3,16}$')) 
		    {
		    	icon.removeClass("glyphicon-remove");
		      	icon.addClass("glyphicon-ok").css("color","green");
		    } 
		    else 
		    {

		    	icon.removeClass("glyphicon-ok");
		    	icon.addClass("glyphicon-remove").css("color","red");
		         
		    }
		});



		$('.phone-enquiry').keyup(function(e) 
		{ 
			
			var keyCode=e.which;
			var phone_number=$(this).val();
			var icon=$(this).next();
			console.log(phone_number.length);
			

			if((e.keyCode>=48 && e.keyCode<=57)|| (e.keyCode>=96 && e.keyCode <=105)||(e.keyCode==8)||(e.keyCode==46))
			{
					
				if(phone_number.length==10)
				{

					icon.removeClass("glyphicon-remove").css("color","red");
					icon.addClass("glyphicon-ok").css("color","green");
				}
				else
				{
					icon.removeClass("glyphicon-ok").css("color","green");
					icon.addClass("glyphicon-remove").css("color","red");
				}

			}
			else
			{
				icon.removeClass("glyphicon-ok").css("color","green");
				icon.addClass("glyphicon-remove").css("color","red");
			}

		}).keydown(function(event) 
		{
			// var phone_number=$(this).val();
			// var icon=$(this).next();
			// const key = event.key; // const {key} = event; ES6+
   //  		if (key === "Backspace" || key === "Delete") 
   //  		{
   //    		   if(phone_number.length==10)
			// 	{

			// 		icon.removeClass("glyphicon-remove").css("color","red");
			// 		icon.addClass("glyphicon-ok").css("color","green");
			// 	}
			// 	else
			// 	{
			// 		icon.removeClass("glyphicon-ok").css("color","green");
			// 		icon.addClass("glyphicon-remove").css("color","red");
			// 	}

   //  		}
		});


	});


