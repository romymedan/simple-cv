<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		 <link href="css/bootstrap.css" rel="stylesheet">
		 <link href="css/custom.css" rel="stylesheet">
	</head>
	<body>
		<a href="https://github.com/romymedan/simple-cv"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>
		<div class="container" id="container">
			<div class="content">
			<div class="row">
				<div class="span4">&nbsp;</div>
				<div class="hero-unit span5">
					<div class="arrow-right"></div>
					
                    <h1>Hello, my name is Romy,<br/>
					and I'm a web designer</h1>
                    
                </div>
				<ul class="relations span11">
				<li><a href="mailto:romy.medan@gmail.com" class="btn "><img src="./img/glyphicons_contact.png"/></a></li>
				<li><a href="#" target="_blank" class="btn "><img src="./img/glyphicons_tw.png"/></a></li>
				<li><a href="http://www.facebook.com/romy.lazarev" target="_blank" class="btn "><img src="./img/glyphicons_fb.png"/></a></li>
				<li><a href="http://www.linkedin.com/in/romymedan/" target="_blank" class="btn "><img src="./img/glyphicons_linked_in.png"/></a></li>
				</ul>
							
			</div>
			
			
			<div class="row">		
				<div class="span11 main">
				<div class="content">
				
					<ul class="nav nav-pills">
						<li class="active"><a  class="anchorLink"  href="#ref">References</a></li>
						<li><a  class="anchorLink" href="#need">Need a Web Designer?</a></li>
						<li><a  class="anchorLink" href="#who">Who am I ?</a></li>
						<li><a  class="anchorLink"  href="#contact">Contact Me</a></li>
					</ul>	
				
					<div class="tab-pane" id="ref">
						<h2>Portfolio</h2>
						<ul class="thumbnails">
							<li class="span4">
							  <a class="thumbnail" target="_blank" href="./website/index.html">
								<img alt="" src="./website/img/screenshot.jpg">
							  </a>
							</li>
							<!--<li class="span2">
							  <a class="thumbnail" target="_blank" href="./handyman/index.html">
								<img alt="" src="./handyman/screenshots/Handyman_b.jpg">
							  </a>
							</li>
							<li class="span2">
							  <a class="thumbnail" href="#">
								<img alt="" src="./img/smpl.jpg">
							  </a>
							</li>
							<li class="span2">
							  <a class="thumbnail" href="#">
								<img alt="" src="./img/whitelight.jpg">
							  </a>
							</li>
							<li class="span2">
							  <a class="thumbnail" href="#">
								<img alt="" src="./img/wikeasi.jpg">
							  </a>
							</li>
							<li class="span2">
							  <a class="thumbnail" href="#">
								<img alt="" src="./img/smpl.jpg">
							  </a>
							</li>
							<li class="span2">
							  <a class="thumbnail" href="#">
								<img alt="" src="./img/whitelight.jpg">
							  </a>
							</li>
							<li class="span2">
							  <a class="thumbnail" href="#">
								<img alt="" src="./img/wikeasi.jpg">
							  </a>
							</li>
							<li class="span2">
							  <a class="thumbnail" href="#">
								<img alt="" src="./img/whitelight.jpg">
							  </a>
							</li> -->
							
						  </ul>
					</div>
					<hr/>
					<div class="tab-pane" id="need">
						<p class="top"><a class="anchorLink" href="#container"><i class="icon-hand-up"></i> top</a></p>
						<h2>Looking for Junior Front End Developer / Web Designer?</h2>
						<p>Just let me know! </br>
						 I have experience with HTML, CSS, bootstap, jQuery, Photoshop and more.</p>
					</div>	
					<hr/>
					<div class="tab-pane" id="who">
						<p class="top"><a class="anchorLink" href="#container"><i class="icon-hand-up"></i> top</a></p>
						<h2>Who am I ?</h2>
						<p>My name is <a href="mailto:romy.medan@gmail.com"><strong>Romy Medan</strong></a>
						young Web Designer,<br/>
						If I have to describe myself in 3 words:<br/>
						Creative, passionate & dynamic. <br/>
						Add to that a great sense of humor and a good spirit!</p>
						<h2>Address</h2>
						<p>
							<i class="icon-map-marker"></i>
							Alpharetta , Georgia, US
						</p>
						
					</div>
					<hr/>					
					
					<div class="tab-pane " id="contact">
						<p class="top"><a class="anchorLink" href="#container"><i class="icon-hand-up"></i> top</a></p>
							<h2>Contact Me</h2>
								<p><i class="icon-envelope"></i> <a href="mailto:romy.medan@gmail.com">romy.medan@gmail.com</a></p>
								<p><i class="icon-bullhorn"></i> +1404.402.4509</p>
							<!-- <form class="form-horizontal"> -->
							<form id="contactForm" class="form-horizontal" method="post" name="contact_form" action="./php/contact-form-handler.php">
								<fieldset>
									
								
								  <div class="control-group">
									<label for="name" class="control-label">Your Name</label>
									<div class="controls">
									  <input type="text" id="name" class="input-xlarge required" name="name">
									  
									</div>
								  </div>
								  <div class="control-group">
									<label for="email" class="control-label">Your Email</label>
									<div class="controls">
									  <input type="text" id="email" class="input-xlarge required email" name="email">
									  
									</div>
								  </div> <div class="control-group">
									<label for="message" class="control-label">Message</label>
									<div class="controls">
									  <textarea rows="3" id="message" class="input-xlarge required" name="message"></textarea>
									</div>
								  </div>
								  <div class="form-actions">
									<button class="btn btn-primary" type="submit" value="submit"><i class=" icon-envelope icon-white"></i> Send</button>
									
								  </div>
								 
								</fieldset>
							<!-- </form> -->
							</form>
						</div>
				
				
					</div>
				</div>
			</div>
		</div>
		</div>
	</body>	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.js"></script>
	<script src="http://malsup.github.com/jquery.form.js"></script>

	<script src="./js/anchor.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
    		$("#contactForm").validate();
    		$('#contactForm').ajaxForm(function(responseText) {
    			//console.log(arguments); 
                alert(responseText); 
            }); 
  		});
	</script>
	
</html>	