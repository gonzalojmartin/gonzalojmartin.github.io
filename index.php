<?php $year=date("Y"); ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Gonzalo J. Mart&iacute;n</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Website landing Page for Developers">
    <meta name="author" content="3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
	   
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">

    <!-- github acitivity css -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">
    <link rel="stylesheet" href="http://caseyscarborough.github.io/github-activity/github-activity-0.1.0.min.css">
    <!-- github activity plugin -->
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js"></script>
    <script type="text/javascript" src="http://caseyscarborough.github.io/github-activity/github-activity-0.1.0.min.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">

    <!-- jQuery & bootstrap -->
    <script type="text/javascript" src="assets/plugins/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-rss/dist/jquery.rss.min.js"></script>

    <!-- i18n Library -->
    <script src="assets/plugins/i18n/libs/CLDRPluralRuleParser/src/CLDRPluralRuleParser.js"></script>
    <script src="assets/plugins/i18n/libs/jquery.i18n.js"></script>
    <script src="assets/plugins/i18n/libs/jquery.i18n.messagestore.js"></script>
    <script src="assets/plugins/i18n/libs/jquery.i18n.fallbacks.js"></script>
    <script src="assets/plugins/i18n/libs/jquery.i18n.parser.js"></script>
    <script src="assets/plugins/i18n/libs/jquery.i18n.emitter.js"></script>
    <script src="assets/plugins/i18n/libs/jquery.i18n.language.js"></script>

    <!-- i18n Init script -->
    <script src="assets/plugins/i18n/i18n.js"></script>

    <!-- Custom js -->
    <script type="text/javascript" src="assets/js/main.js"></script> 
    <script type="text/javascript" src="assets/js/email.js"></script> 
</head> 

<body>
    <!-- ******HEADER****** --> 
    <header class="header">
        <div class="container">                       
            <img class="profile-image img-circle img-responsive pull-left" src="assets/images/profile.jpg" alt="James Lee" />
            <div class="profile-content pull-left">
                <h1 class="name">Gonzalo Mart&iacute;n</h1>
                <h2 class="desc i18n" data-i18n="sub-header"></h2>   
                <ul class="social list-inline">
                    <li><a href="http://www.facebook.com/gonzalo.albamonte" target="_blank"><i class="fa fa-facebook"></i></a></li>    
                    <li><a href="https://twitter.com/gonzajmartin" target="_blank"><i class="fa fa-twitter"></i></a></li>                   
                    <li><a href="https://plus.google.com/104858043310922512019/posts" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://ar.linkedin.com/in/gonzalojmartin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/gonzalojmartin" target="_blank"><i class="fa fa-github-alt"></i></a></li>                  
                    <li id="lang" class="language-en"><a href="#" title="Translate this page"><i class="fa fa-language"></i></a></li>                      
                </ul> 
            </div><!--//profile-->
            <a class="btn btn-cta-primary pull-right" href="#contact-me" target="_blank"><i class="fa fa-paper-plane"></i> <span class="i18n" data-i18n="contact-me"></span></a>              
        </div><!--//container-->
    </header><!--//header-->
    
    <div class="container sections-wrapper">
        <div class="row">
            <div class="primary col-md-8 col-sm-12 col-xs-12">
                <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading i18n" data-i18n="about-me"></h2>
                        <div class="content">
                            <p class="i18n" data-i18n="about-me-1"></p>
                            <p class="i18n" data-i18n="about-me-2"></p>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->
				
				<!--
				<section class="latest section">
                    <div class="section-inner">
                        <h2 class="heading">Latest Projects</h2>
                        <div class="content">    
                                               
                            <div class="item featured text-center">
                                <h3 class="title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-products-velocity/" target="_blank">KickStarter - Velocity</a></h3>
                                <p class="summary">A responsive Bootstrap template designed for digital products</p>
                                <div class="featured-image">
                                    <a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-products-velocity/" target="_blank">
                                    <img class="img-responsive project-image" src="assets/images/projects/project-featured.png" alt="project name" />
                                    </a>
                                    <div class="ribbon">
                                        <div class="text">New</div>
                                        </div>
                                    </div>
                                    
                                <div class="desc text-left">                                    
                                    <p>You can promote your main project here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                                    <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                                </div>
                                <a class="btn btn-cta-secondary" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-products-velocity/" target="_blank"><i class="fa fa-thumbs-o-up"></i> Back my project</a>                 
                            </div>
                            <hr class="divider" />
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/project-5.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank">Atom - Designed for Mobile Apps</a></h3>
                                    <p>You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                                    <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-mobile-apps-atom/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                                </div>
                            </div>
                            
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/project-4.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/" target="_blank">DevStudio - Designed for Web Development Agencies</a></h3>
                                    <p>You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                                    <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-web-development-agencies-devstudio/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                                </div>                       
                            </div>
                            
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/project-1.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/" target="_blank">Tempo - Designed for Startups</a></h3>
                                    <p>You can put one of your secondary projects here. Suspendisse in tellus dolor. Vivamus a tortor eu turpis pharetra consequat quis non metus. Aliquam aliquam, orci eu suscipit pellentesque, mauris dui tincidunt enim, eget iaculis ante dolor non turpis.</p>
                                    <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-startups-tempo/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                                </div>
                            </div>
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank">
                                <img class="img-responsive project-image" src="assets/images/projects/project-2.png" alt="project name" />
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank">Delta - Designed for Mobile Apps</a></h3>
                                    <p> You can put one of your secondary projects here. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                                    <p><a class="more-link" href="http://themes.3rdwavemedia.com/website-templates/responsive-bootstrap-theme-for-mobile-apps-delta/" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                                </div>                    
                            </div>
                            
                        </div>
                    </div>            
                </section><!--//section-->
                
                <section class="projects section">
                    <div class="section-inner">
                        <h2 class="heading i18n" data-i18n="training"></h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title i18n" data-i18n="training-1-title"></h3>
                                <p class="summary i18n" data-i18n="training-1-desc"></p>
                                <p><a class="more-link" href="http://www.adistec.com/ar/" target="_blank"><i class="fa fa-external-link"></i> Adistec</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title i18n" data-i18n="training-2-title"></h3>
                                <p class="summary i18n" data-i18n="training-2-desc"></p>
                                <p><a class="more-link" href="http://www.tecnologiabi.com/" target="_blank"><i class="fa fa-external-link"></i> Tecnologia BI</a></p>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title i18n" data-i18n="training-3-title"></h3>
                                <p class="summary i18n" data-i18n="training-3-desc"></p>
                                <p><a class="more-link" href="http://www.tecnologiabi.com/" target="_blank"><i class="fa fa-external-link"></i> Tecnologia BI</a></p>
                            </div><!--//item-->                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section><!--//section-->
                
                <section class="experience section">
                    <div class="section-inner">
                        <h2 class="heading i18n" data-i18n="work-experience"></h2>
                        <div class="content">
                            
                            <div class="item">
                                <h3 class="title"><span class="i18n" data-i18n="work-experience-1"></span> - <span class="place"><a href="#">Bavosi S.A.</a></span> <span class="year">(2011 - Present)</span></h3>
                                <p class="i18n" data-i18n="work-experience-1-desc-1"></p>
                                <p class="i18n" data-i18n="work-experience-1-desc-2"></p>
                            </div><!--//item-->

                            <div class="item">
                                <h3 class="title"><span class="i18n" data-i18n="work-experience-2"></span> - <span class="place"><a href="#">Play City</a></span> <span class="year">(2009 - 2011)</span></h3>
                                <p class="i18n" data-i18n="work-experience-2-desc-1"></p>
                                <p class="i18n" data-i18n="work-experience-2-desc-2"></p>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </section><!--//section-->
				
							  
                <section class="github section">
                    <div class="section-inner">
                        <h2 class="heading i18n" data-i18n="my-github"></h2>
                        <div id="ghfeed" class="ghfeed"></div><!--//ghfeed-->
                    </div><!--//secton-inner-->
                </section><!--//section-->
				
            </div><!--//primary-->
			
            <div class="secondary col-md-4 col-sm-12 col-xs-12">
                 <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading sr-only">Basic Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>Buenos Aires, Argentina</li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span><a href="#">gonzalojavimartin@gmail.com</a></li>
                                <li><i class="fa fa-skype"></i><span class="sr-only">User Skype:</span><a href="#">gonzalojavimartin</a></li>
                            </ul>
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//aside-->
                
                <aside class="skills aside section">
                    <div class="section-inner">
                        <h2 class="heading i18n" data-i18n="skills"></h2>
                        <div class="content">
                            <p class="intro"></p>
                            <div class="skillset">
                               
                                <div class="item">
                                    <h3 class="level-title">SQL<span class="level-label i18n" data-i18n="skills-over-<?php echo $year-2011; ?>-years-experiences"></span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="90%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">PHP<span class="level-label i18n" data-i18n="skills-over-<?php echo $year-2012; ?>-years-experiences"></span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="80%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
								
                                <div class="item">
                                    <h3 class="level-title">HTML5, CSS3<span class="level-label  i18n" data-i18n="skills-over-<?php echo $year-2012; ?>-years-experiences"></span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="70%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
								
                                <div class="item">
                                    <h3 class="level-title">Javascript &amp; jQuery<span class="level-label i18n" data-i18n="skills-over-<?php echo $year-2012; ?>-years-experiences"></span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="60%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
                                
                                <div class="item">
                                    <h3 class="level-title">VMware ESXi<span class="level-label i18n" data-i18n="skills-over-<?php echo $year-2013; ?>-years-experiences"></span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="55%">
                                        </div>                                      
                                    </div><!--//level-bar-->                                 
                                </div><!--//item-->
								<!--
                                <div class="item">
                                    <h3 class="level-title">GIT<span class="level-label i18n" data-i18n="skills-over-<?php echo $year-2014; ?>-years-experiences"></span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="45%">
                                        </div>                                      
                                    </div>
                                </div>
									-->
                                
                                <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> <span class="i18n" data-i18n="view-more-linkedin"></span></a></p> 
                            </div>              
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </aside><!--//section-->
				
				<!--
                <aside class="testimonials aside section">
                    <div class="section-inner">
                        <h2 class="heading">Testimonials</h2>
                        <div class="content">
                            <div class="item">
                                <blockquote class="quote">                                  
                                    <p><i class="fa fa-quote-left"></i>James is an excellent software engineer and he is passionate about what he does. You can totally count on him to deliver your projects!</p>
                                </blockquote>                
                                <p class="source"><span class="name">Tim Adams</span><br /><span class="title">Curabitur commodo</span></p>
							</div>
                            <p><a class="more-link" href="#"><i class="fa fa-external-link"></i> More on Linkedin</a></p> 
                        </div>
                    </div>
                </aside>-->
                
                <aside class="education aside section">
                    <div class="section-inner">
                        <h2 class="heading i18n" data-i18n="education"></h2>
                        <div class="content">
                            <div class="item">                      
                                <h3 class="title"><i class="fa fa-graduation-cap"></i> <span class="i18n" data-i18n="education-title-1"></span></h3>
                                <h4 class="university">UNLaM <span class="year">(2009-2020)</span></h4>
                            </div><!--//item-->
                            <div class="item">
                                <h3 class="title"><i class="fa fa-graduation-cap"></i> <span class="i18n" data-i18n="education-title-2"></span></h3>
                                <h4 class="university">UNLaM <span class="year">(2009-2017)</span></h4>
                            </div><!--//item-->
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
                            
                <aside class="languages aside section">
                    <div class="section-inner">
                        <h2 class="heading i18n" data-i18n="languages"></h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li class="item">
                                    <span class="title"><strong class="i18n" data-i18n="languages-1-title"></strong></span>
                                    <span class="level"><span class="i18n" data-i18n="languages-1-desc"></span> <br class="visible-xs"/><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </span>
                                </li><!--//item-->
                                <li class="item">
                                    <span class="title"><strong class="i18n" data-i18n="languages-2-title"></strong></span>
                                    <span class="level"><span class="i18n" data-i18n="languages-2-desc"></span> <br class="visible-sm visible-xs"/><i class="fa fa-star"></i> <i class="fa fa-star"></i></span>
                                </li><!--//item-->
                            </ul>
                        </div><!--//content-->
                    </div><!--//section-inner-->
                </aside><!--//section-->
					
				<aside id="contact-me" class="aside section">
					<div class="section-inner">
						<h2 class="heading i18n" data-i18n="contact-me"></h2>
                        <div class="content">
							
							<div id="alertEmailError" class="alert alert-danger" style="display: none" role="alert">
								<span class="fa fa-exclamation" aria-hidden="true"></span>&nbsp;
								<span class="i18n" data-i18n="contact-me-alert-error"></span>
							</div>
							<div id="alertEmailOK" class="alert alert-success" style="display: none" role="alert">
								<span class="fa fa-check" aria-hidden="true"></span>&nbsp;
								<span class="i18n" data-i18n="contact-me-alert-ok"></span>
							</div>
							<form class="" method="post" action="index.php">
								<div class="form-group">
									<label class="" for="name"><span class="i18n" data-i18n="contact-me-name"></span></label>
									<input type="text" id="name" name="name" class="form-control" required>
								</div>	
								<div class="form-group">
									<label class="" for="name"><span class="i18n" data-i18n="contact-me-email"></span></label>
									<input type="email" id="email" name="email" class="form-control" required>
								</div>	
								<div class="form-group">
									<label class="" for="name"><span class="i18n" data-i18n="contact-me-message"></span></label>
									<textarea class="form-control" id="message" name="message" rows="7" style="resize:none"  required></textarea>
								</div>	
								<div class="form-group">
									<button onClick="sendEmail()" type="button" id="buttonSend" class="btn btn-primary btn-cta-primary  btn-block"><span class="i18n" data-i18n="contact-me-send"></span></button>
									<button type="button" id="buttonLoading" class="btn btn-primary btn-cta-primary  btn-block disabled" style="display: none"><i class='fa fa-spinner fa-spin'></i> <span class="i18n" data-i18n="contact-me-send-loading"></span></button>
								</div>
							</form>	
						</div>	
					</div>
				</aside>
            </div><!--//secondary-->    
        </div><!--//row-->
    </div><!--//masonry-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
         <div class="container text-right">
                <ul class="list-inline" style="margin:0">
                    <li><a href="http://www.facebook.com/gonzalo.albamonte" target="_blank"><i class="fa fa-facebook"></i></a></li>    
                    <li><a href="https://twitter.com/gonzajmartin" target="_blank"><i class="fa fa-twitter"></i></a></li>                   
                    <li><a href="https://plus.google.com/104858043310922512019/posts" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="https://ar.linkedin.com/in/gonzalojmartin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/gonzalojmartin" target="_blank"><i class="fa fa-github-alt"></i></a></li>                  
                </ul>
        </div><!--//container-->
    </footer><!--//footer-->
	
	<script>
		$(document).ready(function(){
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				  var target = $(this.hash);
				  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				  if (target.length) {
					$('html,body').animate({
					  scrollTop: target.offset().top - 50
					}, 1000);
					return false;
				  }
				}
			});
		});
	</script>
</body>
</html> 

