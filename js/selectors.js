//focus in
$(':input').focusin(function() {

  $(this).css('background-color','#BDF1F1');

});
//focus out
$(':input').focusout(function() {

  $(this).css('background-color','white');

});
//even odd selector
$(document).ready(function(){

  $('table tr:even').addClass('highlight');
  
});
//attribute selector
$(document).ready(function() {
  var email_default='Enter email here';

  $('input[type="email"]').attr('value',email_default).focusin(function() {
  
     if($(this).val()==email_default) {
	         $(this).attr('value','');
	 }
  }).focusout(function() {
  
    if($(this).val()=='') {
	
	    $(this).attr('value',email_default);
	}
  
  
  });


});
//contains selector
$(document).ready(function() {
  $('#search_name').keyup(function() {
    search_name=$(this).val();
	
	$('#names li').removeClass('search_highlight');
	
	if(jQuery.trim(search_name)!='') {
    $("#names li:contains('"+search_name+"')").addClass('search_highlight');
  
        }
  });


});
//Font size switcher

function change_size(element,size) {

var current = parseInt(element.css('font-size'));
		if(size=='smaller') {
		  new_size = current-2;

		}else if(size=='bigger') {
		  new_size = current+2;

		}
  element.css('font-size',new_size+'px');

};


$('#smaller').click(function() {
  change_size($('p'),'smaller');

});
$('#larger').click(function() {
   change_size($('p'),'bigger');

});

//Enable submit button after file selected

/* $(document).ready(function(){
	  $('#file').change(function(){
	  
	  $('#submit').removeAttr('disabled');
	  
	  });


}); */

/*Ifyou always have upload button after choose file ,
 use this way , it works globally for all file uploader*/
 $(document).ready(function(){
 
  $('input[type="file"]').change(function(){
  
  $(this).next().removeAttr('disabled');
  
  }).next().attr('disabled','disabled');
 
 
 
 });

//hide and show my style

 $('#hide_show').click(function(){

var value = $('#hide_show').val();

	if(value=='hide') {

	$('#text').hide();
	$('#hide_show').attr('value','show');

	}

   if(value=='show') {
   
    $('#text').show();
    $('#hide_show').attr('value','hide');
   
   }


});
//toggle
/*
$('#hide_show').toggle(function(){
 $('#text').html('I like it');

} ,function(){

$('#text').html('I don\'t like it');

});
*/

// scroll
$('#some_text').scroll(function(){
  var count =$('#some_text').scrollTop()+1;
  
  $('#count_area').html('You are at line '+count);

});

//bind

$('a').bind('mouseenter mouseleave',function(){

  $(this).toggleClass('bold')

});

//duplicate using live event handler,also useful to make html functionality using jquery

$(document).ready(function(){
 $('.duplicate').live({
 
 click:function(){
 
  $(this).after('<input type="file" class="file" />');
 
 }
 
 
 
 });

});

//character remaining in text area
$(document).ready(function(){
 var max_character = $('#textarea').attr('maxlength');
 $('#textfeedback').html('Remaining character: '+max_character);
 
 $('#textarea').keyup(function(){
 
  var character_length = $(this).val().length;
  var character_remaining =max_character-character_length;
  
  $('#textfeedback').html('Remaining character: '+character_remaining);
 
 });
 
 });
//Hide/Show a DIV
$('#hideshow').toggle(function(){
  $(this).text('show');
  $('#message').hide();

},function(){
 $(this).text('hide');
  $('#message').show();

});


//coordination if mouse pointer

$('#colink').mousemove(function(e) {//hover function will not work here because it is a moving mouse pointer funcrion

$('#coordination').text('x: '+e.clientX+' y: '+e.clientY);

});


//Hover over(moving mouse) description
$('.hover').mousemove(function(e) {
  var hovertext = $(this).attr('hovertext');
  
  $('#hoverdiv').text(hovertext).show();
  $('#hoverdiv').css('top',e.pageY+10).css('left',e.pageX+10);//page. is relative to the enitre webpage ,clien.is relative only to the viewable part of the webpage


}).mouseout(function(){
$('#hoverdiv').hide();

});

//removeAttr
$(document).ready(function(){

$('#agree').change(function(){

var state = $(this).is(':checked'); //$(this).attr('value') is not browser compatible
//true and false can not be written as 'true' and 'false' becasue it is a boolean operation
//if/else statement below can also be written as if(state){}else{}
if(state==true){
$('#continue').removeAttr('disabled');

}else if(state==false){

$('#continue').attr('disabled','disabled');

}



});

});

//each
$(document).ready(function() {
 $('#combine').click(function(){
 
  var combined_text = '';
  
  $('input[type="text"]').each(function(){
  
    combined_text += $(this).val() + ' ';
  
  });
  
   $('#combined_text').text(combined_text);
 
 });


});

//Checking all form fields using each:
$(document).ready(function() {

	$('#submit').click(function() {

    var failed = false;
	$('.each').each(function(){
	  if($(this).val() == '') {
	  
	    failed = true;
	  
	  };
	if(failed==true) {
	alert('Fill out all fields');
	
	}else{
	
	alert('Thanks for filling out all fiends');
	
	}
	
	
	});



	});

});

//next/nextAll  prev/prevAll

$(document).ready(function(){

$('.menu').find('li').first().addClass('bold').click(function(){

	$(this).nextAll().toggle();


	}).nextAll().hide();

});

//fadeIn and fadeOut effect my style


	  
function fadeEffect(selector){

 selector.fadeIn(10000,'linear',function(){
 
  selector.fadeOut(10000,'linear',fadeEffect(selector));
 
 
 });


};

$(document).ready(fadeEffect($('#fadeInImage')));


//SlideUp/Down  slideToggle can't make animation stop when mouseleave

$(document).ready(function(){

	$('#slide_text').mouseenter(function(){
	
	 
	 $('#slide_div').slideDown(200);
	
	});
	
	$('#slide_container').mouseleave(function(){
	
	$('#slide_div').stop();
	$('#slide_div').slideUp(200);
	
	});

});

//Gallery effect
$(document).ready(function(){
 
 $('.gallery').css('opacity', 0.4);
 
	 $('.gallery').mouseenter(function(){
	 
	  $(this).css('opacity', 1);
	 
	 
	 }).mouseleave(function(){
	 
	 $(this).css('opacity', 0.4);
	 
	 
	 });
	 

});
/* we can also use .fadeTo() and .not() to make this programme
$(document).ready(function() {
 $('.gallery').css('opacity', 0.4);
 $('.gallery').mouseover(function(){
  $(this).fadeTo(100, 1);
  $('.gallery').not(this).fadeTo(100, 0.4);
 
 //we can not use call back function of .fadeTo() here , because
 callback function waits for the primary function to finish.
 to get instant effect we need to make a seperate function , instead of
 callback.
 
 });

});
*/

//append
$(document).ready(function(){
 $('#append').click(function(){
  
  var append = $('#name').val();
  
  $('#append_para').append(append);
 
 
 
  });


});

//Adding to a dropdown menu
$('.item').click(function(){

 var item = $(this).text();
 $('#select_item').append('<option>'+item+'</option>');


});

//Placting the div in the very center of the window

$(document).ready(function(){

	function move_div(){
	
	window_width = $(window).width();
	window_height = $(window).height();
	
	obj_width = $('#very_center').width();
	obj_height = $('#very_center').height();
	
    $('#very_center').css('top', (window_height / 2) - (obj_height / 2)).css('left', (window_width / 2) - (obj_width/2));

	
	}
	
	move_div();
	$(window).resize(function(){
	
	move_div();
	
	});


});

//minlength
$(document).ready(function(){
        
		$('.input').focus(function(){
		
		minlength = $(this).attr('minlength');
		inputlength = $(this).val().length;
		
			if(minlength!=0 && minlength>0 && inputlength<minlength ){
			
			 $(this).after('<span class="alert">'+minlength+' characters required.</span>');
			
			
			}


		}).keyup(function(){
		    inputlength = $(this).val().length;
			if(inputlength>=minlength){
			
			$('.alert').remove();
			
			  }
		
		  }).blur(function(){
		
		 $('.alert').remove();
		
		});


});
//go to top

$(document).ready(function(){

	 $('.top').click(function(){
	 
	    $('html,body').animate({scrollTop: 0},3000);
	 
	 
	 });


});
//enabling checkbox after scrolling:(not working)
$(document).ready(function(){

$('#agree').attr('disabled', true);




});
//inArray
$(document).ready(function(){

var memberlist = ['bishan','alex','billy'];

$('#username').focus(function(){

	if($(this).val()=='Enter your name'){

	  $(this).val(''); // or this.value='';
	}


}).blur(function(){

    if($(this).val()==''){

	$(this).val('Enter your name'); // or this.value='Enter your name';
	}


 });


	$('#check').click(function(){
      var username1 = $('#username').val().trim();
	  var username2 = username1.toLowerCase();
	  
	  
	  if(username1!=0 && username1!='Enter your name'){
			  if(jQuery.inArray(username2,memberlist) !='-1'){
			  
				 alert(username2+' is already in the memberlist');
			  
			  
			  }else{
			  
			  alert(username2+' is not a member')
			  
			  }
		  
		  }else{
		  
		    alert('Please fill out the username');
		  
		  }
	});


 });

 //each (seems like some other functin is conflicting with this one)
 $(document).ready(function(){
 
	 function display(){
	 
	  $('#display_list').text('');
	  
		  $.each(names, function(index,value){
		  
			$('#display_list').append(index+1+'. '+ value +'<br/>');
		  
		  
		  
		  });
	 
	 } 
	 
	 
	 var names=['cow', 'alex','ram'];
	 display();
	 
	 $('#insert').click(function(){
	 
	   var name=$('#name').val();
	   names.push(name);
	   display();
	   
	 });
	 
 
 });

//now
$(document).ready(function(){

	 setInterval(function(){
	  var timestamp = jQuery.now();
	  
	  $('#now').text(timestamp);
	 
	 },1);

});

//days left
$(document).ready(function(){

 var eventTime = Math.floor(Date.parse('15 August 2012')/1000); //D in date must be in capital , a  in August may or may not be capital

 var currentTime = Math.floor($.now()/1000); //M in Math must be in capital
 
 var secondsLeft = eventTime-currentTime;
 
 var daysLeft = Math.floor(secondsLeft/(60*60*24));
 
 

 
 
 $('#day').text(daysLeft+' days remaining');

 
 
});

//loading another page

 $(document).ready(function(){
	
	$('#button').click(function(){
		
		$('#load').load('load.php');
		
		
		});
	
	
	
	});
	
	//GET HTTP request
	
	$(document).ready(function(e) {
        $('#go').click(function(){
			
			
			var string = $('#get').val();
			
			$.get('php/reverse.php',{input:string},function(data){
				
				$('#holder').text(data);
				
				
				});
			
			
			
			});
    });

//POST HTTP request

$(document).ready(function(){
 $('#post3').click(function(){
	 
 var name = $('#post1').val();
 var string = $('#post2').val();
 
 $('#post4').text('loading...');	
 
 $.post('php/post.php',{name:name, string:string}, function(data){
	$('#post4').html(data);				
	
			
			}).error(function(){
				//messages
				
				}).complete(function(){
					//message
					
					}).success(function(){
						
						//messages
						
						});
			
			
		
		});
	
	});

//ajax load:
$(document).ready(function(){
	
	$('#ajaxLoad').click(function(){
		
		$.ajax({
			url:'load.php',
			success:function(data){
				$('#ajaxFeedback').html(data);
				
				}
			
			});
		
		});
	
	});

//ajax send

$(document).ready(function(){
	
 $('#ajaxSend').click(function(){
	 
	 var ajaxInput1 = $('#ajaxInput1').val();
	 var ajaxInput2 = $('#ajaxInput2').val();
	 
	 $.ajax({
		 type:'GET', //if type is not mentioned , by default it is GET
		 url:'php/ajaxSend.php',
		 data:'name='+ajaxInput1+'&feedback='+ajaxInput2,
		 //data:{name:ajaxInput1,feedback:ajaxInput2}, can be done also
		 success:function(data){
			 
			 $('#ajaxSendFeedback').html(data);
			 }
		 }).error(function(){
			 alert('an error occured');
				 
			}).complete(function(){
				$('#ajaxSendFeedback').append('<br/> request complete');
				
				}).success(function(){
					
					$('#ajaxSendFeedback').append('<br/> Success');
					
					});
					
	 });	
	});
	
	//ajax status code
	
	$(document).ready(function(){
		$('#ajaxStatus').click(function(){
			$.ajax({
				url:'load.php',
				statusCode:{
					404: function(){
						$('#statusContainer').text('Page not found.');
						},
					000: function(){
						$('#statusContainer').text('Page not found.');
						}	
					},
				success: function(data){
					$('#statusContainer').html(data);
					},
				
				});
			
			
			});
		
		
		});

//ajax index

$(document).ready(function(){
   
	 $('#asubmit').click(function(){
	     
		var username = $('#ausername').val();
		var password = $('#apassword').val();
		var repassword = $('#arepassword').val();
		var firstname = $('#afirstname').val();
		var lastname = $('#alastname').val();
		 
		 $.ajax({
		   type:'POST',
		   url:'ajaxIndexProcess.php',
		   data:{username:username,
		         password:password,
				 repassword:repassword,
				 firstname:firstname,
				 lastname:lastname,
		   
		   
		   
		        },
		   success:function(data){
		   
		   $('#ajaxIndexFeedback').html(data);
		   
		   }
		 
		 });
		  
       });    

});




