<!doctype html>

<html lang="en">

<head>
     <meta charset="utf-8">
	 <script type="text/javascript"	 src="js/jquery.js"></script>
     <script type="text/javascript"	 src="js/hide.js"></script>
     <script type="text/javascript"	 src="js/fadeIn.js"></script>
     <link rel="stylesheet" type="text/css" href="css/style.css" />
	 
	 <title>jquery example</title>
</head>

<body>
    <div id="area">
	
     <p id="paragraph" style="display: none"> this is a paragraph </p>
	 <p id="hide"> this text will be hidden </p>
	 
	 <br/><br/>
	 
	 <input type="text"/>
	 <input type="submit" value="Submit" />
	 <input type="button" value="Button"/>
	 <textarea></textarea>
	 
	 <br/><br/>
	 
	 </div>
	 
	 <table class="area" style="float:right;">
	 <tr><td>first</td></tr>
	 <tr><td>second</td></tr>
	 <tr><td>third</td></tr>
	 <tr><td>fourth</td></tr>
	 </table>
	 
	 <br/><br/>
	 
	 Name: <input type="text" /><br/>
	 Email:<input type="email"/>
	 
	 <br/><br/>
	 
	 <p><input id="search_name" type="text" /></p>
	 
	 <ul id="names">
	     <li>Bishan Ghosal</li>
 	     <li>Jyotsna Ghosal</li>
		 <li>Padmalata Dalui</li>
	     <li>Trishan Shee</li>
	 </ul>
	 
	 <br/>
	 
	 Text size: <a href="#" id="smaller">Smaller</a>
	            <a href="#" id="larger">Larger</a>
	 
	 <p>This is some text</p>
	 <p>This is some more text</p>
	 
	 <br/>
	 
	 <form style="float:right;" action="#" method="POST" enctype="multipart/form-data">
	   
	   <input type="file" />
	   <input type="submit" value="upload"  />
	 
	 </form>
	 <br/>
	 <input id="hide_show" type="button" value="hide" />
	 <br/>
	 <div id="text">This is some text</div>
	 <br/><br/>
	 
	 <textarea style="float:right;" id="some_text" rows="10" cols="20">
	 During the 1968 recording sessions for The Beatles (also referred to as the White Album), Harrison began working on a song that eventually became known as "Something". The song's first lyrics were adapted from the title of an unrelated song by fellow Apple artist James Taylor called "Something in the Way She Moves" and used as filler while the melody was being developed.[6] The song's second line, "Attracts me like no other lover," was the last to be written; during early recording sessions for "Something", Harrison alternated between two placeholder lyrics: "Attracts me like a cauliflower" and "Attracts me like a pomegranate."[7]
	 
	 </textarea>
	 
	 <br/><br/>
	 
	 <div  id="count_area"></div>
	 <br/>
	 <a href="#">bind</a>
	 <br/><br/>
	 <input class="duplicate" type="button" value="duplicate" />
	 <br/>
	 character remaining in text area:
	 <br/>
	 <textarea  id="textarea" rows="10" cols="20" maxlength="55">
	 </textarea>
	 <br/>
	 <div id="textfeedback"></div>
	 <br/>
	 Hide/Show a DIV:
	 <br/>
	 <a style="float:right;"href="#" id="hideshow">Hide</a>
	 <div style="float:right;" id="message">
	 	 During the 1968 recording sessions for The Beatles (also referred to as the White Album), Harrison began working on a song that eventually became known as "Something". The song's first lyrics were adapted from the title of an unrelated song by fellow Apple artist James Taylor called "Something in the Way She Moves" and used as filler while the melody was being developed.[6] The song's second line, "Attracts me like no other lover," was the last to be written; during early recording sessions for "Something", Harrison alternated between two placeholder lyrics: "Attracts me like a cauliflower" and "Attracts me like a pomegranate."[7]
     </div>
	 
	<br/><br/>
	
	coordination of mouse pointer:
	<br/>
	<a href="http://www.google.com" id="colink">Google</a>
	<div id="coordination"></div>
	
	<br/><br/>
	
	
	Hover over(moving mouse) description:
	<br/>
	<div id="hoverdiv"></div>
	<a class="hover" href="http://www.google.com" hovertext="Search engine">Google</a>
	<br/><br/>
	removeAttr:
	<br/>
	<p><input type="checkbox" id="agree" />i agree</p> 
	<input id="continue" type="submit" value="Continue" disabled="disabled" />
	<br/><br/>
	each:
	<br/>
	<input type="text" /><input type="text" /><input type="button" value="Combine" id="combine" />
	<div id="combined_text"></div>
	<br/><br/>
	Checking all form fields using each:
	<br/>
	<input class="each" type="text" /><input class="each" type="text" /><input id="submit" type="submit" value="Submit" />
	
	<br/><br/>
	
	next/nextAll  prev/prevAll:
	<br/>
	
	<ul class="menu">
	
	  <li>User<li>
	  <li>Account<li>
	  <li>Privacy<li>
	  <li>Logout<li>
	
	</ul>
	<br/><br/>
	fadeIn and fadeOut:
	<br/>
	
	<div style="float:right;" id="fadeContainer">
	<div id="fadeInImage" ><img src="image/India.jpg" /></div>
	</div>

	<br/><br/>
	
	slideUp/Down(slideToggle won't work in this situation)
	
	<div style="clear:both;" id="slide_container">
		<p id="slide_text">User Guide</p>
		<div id="slide_div">
			<ul>
			
			   <li><a href="http://www.google.com" target="_blank">Google</a></li>
			   
			   <li><a href="http://www.youtube.com">Youtube</a></li>
			   
			   <li><a href="http://www.facebook.com">Facebook</a></li>
			   
			   <li><a href="#">Account information</a></li>
			   
			   <li><a href="index.php">Log out</a></li>
			
			</ul>
		</div>
	</div>
	<br/><br/>
	
	Gallery effect:
	<br/><br/>
	<img class="gallery" src="smallPic.jpg" />
	<img class="gallery" src="smallPic.jpg" />
	<img class="gallery" src="smallPic.jpg" />
	<img class="gallery" src="smallPic.jpg" />
	<br/><br/>
    
	append:
	<br/>
	<input id="name" type="text"><input id="append" type="button" value="append"/>
	<p id="append_para">User name: </p>
    <br/><br/>
	
	Adding to a dropdown menu:
	<br/>
	<a class="item" href="#">Bread</a><a class="item" href="#">Sugar</a><a class="item" href="#">Milk</a>
	<select id="select_item" /></select>
	<br/><br/>
	
	Placing the div in the very center of the window:
	<br/>
	
	<div id="very_center"></div>
	<br/><br/>
	minlength:
	<br/>
	<div id="container">
	
		
		
		Username:<br/>
		<input type="text" class="input" minlength="5" />
		<br/><br/><br/>
		
		Password:<br/>
		<input type="text" class="input" minlength="10" />
		<br/><br/><br/>
		
		<input type="submit" class="login" value="Login" />
		
	
	
	</div>
	<br/><br/>
	Scroll to top:
	<br/>
	<p><a herf="#" class="top">Go to top</a></p>
	
	<br/><br/>
	
	Enabling checkbox after scrolling:
	<br/>
	<p><textarea id="terms">
	Cage was born Nicolas Kim Coppola[2] on January 7, 1964[1][3][4][5] in Long Beach, California. His father, August Floyd Coppola, a professor of literature, and his mother, Joy Vogelsang, a dancer and choreographer, divorced in 1976. He was raised in a Catholic family.[6][7] Cage's father was of Italian descent and his mother is of German and Polish descent.[8] His paternal grandparents were composer Carmine Coppola and actress Italia Pennino, and his paternal great-grandparents were immigrants from Bernalda, Basilicata.[9] Through his father, Cage is the nephew of director Francis Ford Coppola and actress Talia Shire, and the cousin of directors Roman Coppola and Sofia Coppola, film producer Gian-Carlo Coppola, and actors Robert Carmine and Jason Schwartzman. Cage's two brothers are New York radio personality Marc "The Cope" Coppola and director Christopher Coppola. He attended Beverly Hills High School, which is known for its many alumni who became entertainers. He aspired to act from an early age and also attended UCLA School of Theatre, Film and Television. His first non-cinematic acting experience was in a school production of Golden Boy.
	</textarea>
	</p>
	<p>
	<input id="agree" type="checkbox"  />I agree to the terms and conditions
	</p>
	<br/><br/>
	inArray:<br/>
	Username:
	<input type="text" value="Enter your name" id="username" /><input type="button" id="check" value="Check"/>
    <br/><br/>
	each:
	<br/>
	<input type="text" id="name" /><input type="button" id="insert" value="Insert" />
	<div id="display_list"></div>
	<br/><br/>
	now:
	<br/>
	<div id="now"></div>
	
	<br/><br/>
	
	days left:
	<br/>
	<div id="day"></div>
    
    <br/><br/>
    
    loading another page:
    <br/>
    <input type="button" id="button" value="Load" /><br/>
    <div id="load" ></div>
    
	<br/><br/>
    
    GET HTTP request:
    
    <br/>
    <input id="get" type="text" /><input id="go" type="button" value="Button" />
    <div id="holder"></div>
    <br/><br/>
    
    POST HTTP request:
    <br/>
   <p><input type="text" id="post1" /></p>
   <p><textarea id="post2" rows="10" cols="30" ></textarea></p>
   <input type="button" value="Submit" id="post3"/><br/>
   <div id="post4" style="background:#9C9 ; width:200px;" ></div>
    <br/><br/>
    ajax load:
    <br/>
    <input type="button" id="ajaxLoad" value="Load" />
    <div id="ajaxFeedback"></div>
    <br/><br/>
    ajax send:
    <br/>
    Name:<br/>
    <input id="ajaxInput1" type="text" /><br/><br/>
    Feedback:<br/>
    <textarea id="ajaxInput2" rows="10" cols="30"></textarea><br/>
    <input id="ajaxSend" type="button" value="Send" />
    <div id="ajaxSendFeedback"></div>
    <br/><br/>
    ajax status code:
    <br/>
    <input type="button" id="ajaxStatus" value="Load" />
    <div id="statusContainer"></div>
    <br/><br/>
    <form>
    Email:<input type="email"/><input type="submit" value="Submit" />
    </form>
	
	


	
	
	
	 <br/><br/><br/><br/><br/> <br/><br/><br/><br/><br/><br/> <br/><br/><br/><br/><br/><br/>

	 
	 
     <script type="text/javascript"	 src="js/selectors.js"></script>
</body>

</html>