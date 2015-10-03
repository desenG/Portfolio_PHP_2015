function addProfile(element)
{
	var profilehtml = function(){/*

  <!-- .title -->
  <h1 class="h-bloc">Profile - About Me</h1> 
  <div class="row top-p">
    <div class="col-md-6 profile-l">
 		
        <!--About me-->
        <div class="title_content">
            <div class="text_content">Desen Guo</div>
            <div class="clear"></div>
        </div>

		   <ul class="about">

            <li>
                <i class="glyphicon glyphicon-user"></i>
                <label>Name</label>
                <span class="value">Desen Guo</span>
                <div class="clear"></div>
            </li>

            <li>
                <i class="glyphicon glyphicon-calendar"></i>
                <label>Date of birth</label>
                <span class="value">March 23, 1985</span>
                <div class="clear"></div>
            </li>

            <li> 
                <i class="glyphicon glyphicon-map-marker"></i>
                <label>Adress</label>
                <span class="value">Ottawa, ON, CA</span>
                <div class="clear"></div>
            </li>

            <li>
                <i class="glyphicon glyphicon-envelope"></i>
                <label>Email</label>
                <span class="value">jason.desen.guo@gmail.com</span>
                <div class="clear"></div>
            </li>

            <li>
                <i class="glyphicon glyphicon-phone"></i>
                <label>Phone</label>
                <span class="value">+1 613 406 3813</span>
                <div class="clear"></div>
            </li>

            <li>
                <i class="glyphicon glyphicon-globe"></i>
                <label>Website</label>
                <span class="value"><a href="index.php" target="_blank">www.desenguo.com</a></span>
                <div class="clear"></div>
            </li>

        </ul>


        <p style="margin-bottom:20px">
            <i class="fa fa-quote-left"></i>       
				Life isn't about finding yourself. Life is about creating yourself.
				--George Bernard Shaw
        </p>
        
         <p style="margin-bottom:20px">
            <i class="fa fa-quote-left"></i>       
				Stay hungry, stay foolish.--steve jobs
        </p>

    </div>
    <!-- End left-wrap -->

    <div class="col-md-6 profile-r">

        <div class="cycle-slideshow">
            <img src="images/img-profile/about_1.jpg" alt="" />
        </div>

    </div>

</div>

    <div class="clear"></div>


    <div class="row" id="services">
		<div class="col-md-12">
            <div class="title_content">
                <div class="text_content">Hightlight</div>
                <div class="clear"></div>
            </div>
    
    
            <div class="col-md-4 pack-service">
                <div class="service">
                    <div class="service-icon"><i class="fa fa-tag"></i></div>
                    <div class="service-detail">
                        <h6>Energitic! Creative!</h6>
                        <p>
							I always want to be remarkable and outstanding in the enviroment of working and living, instand of being a regular person. I keep improving myself by learning new technology, new skills and new ideas. I enjoy thinking and speaking out my idea. But meanwhile, I am openning to any feedback from others.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pack-service">
                <div class="service">
                    <div class="service-icon"><i class="fa fa-cogs"></i></div>
                    <div class="service-detail">
                        <h6>MY FAVORETE QUOTES</h6>
        <p style="margin-bottom:20px">
            <i class="fa fa-quote-left"></i>       
				Life isn't about finding yourself. Life is about creating yourself.
				--George Bernard Shaw
        </p>
        
         <p style="margin-bottom:20px">
            <i class="fa fa-quote-left"></i>       
				Stay hungry, stay foolish.--steve jobs
        </p>
                    
                    </div>
                </div>
            </div>
            <div class="col-md-4 pack-service">
                <div class="service">
                    <div class="service-icon"><i class="fa fa-arrows-alt"></i></div>
                    <div class="service-detail">
                        <h6>RECENT PROJECT</h6>
			                <p>
				            	ASP.NET MVC project.<a href="http://aspspider.info/jasondesenguo">link to the project</a>
				            </p>
			            	<p>
				            	Jave EE web project with JBoss Enterprise application server in openshift.<a href="http://desen-j2eepro.rhcloud.com/">link to the project</a>
				            </p>
				            <p>
				            	Design and implement the Blog module feature with PHP in this web site.<a href="blog.php">link to the project</a>
				            </p>
				            <p>
				            	Made Document conversion tools with VS 2013, asp.net MVC, entity framework database first, JQuery, bootstrap.
				            </p>
                    </div>
                </div>
            </div>
         </div> 
    </div><!-- End Services -->
<div class="copyrights">Desen Guo</div>

    <div class="clear"></div>
 
    <div class="clear"></div>

                                            
	*/}.toString().slice(14,-3)

	element.append(profilehtml);

};
function addResume(element){
	var resumeHTML = function(){/*

<!-- .title -->
<h1 class="h-bloc">Resume - Personal Info</h1> 

<div class="row">

   <!-- .resume-right -->
    <div class="col-md-6">

        <!-- .title_content -->
        <div class="title_content" style="float: none;">
            <div class="text_content">Designs skills</div>
            <div class="clear"></div>
        </div>
        <!-- /.title_content -->
        
        <div class="skills">
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="65%">
                <div class="skillbar-title"><span>Photoshop</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">65%</div>
            </div>
    
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="50%">
                <div class="skillbar-title"><span>Illustrateur</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">50%</div>
            </div>
            <!-- /.skillbar -->

        </div>
        
        
        <!-- .title_content -->
        <div class="title_content" style="float: none;">
            <div class="text_content">Programming Skills</div>
            <div class="clear"></div>
        </div>
        <!-- /.title_content -->
        
        <div class="skills">
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="90%">
                <div class="skillbar-title"><span>ASP.NET C#</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">85%</div>
            </div>
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="85%">
                <div class="skillbar-title"><span>JAVA SE, JAVA EE 6</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">75%</div>
            </div>
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="85%">
                <div class="skillbar-title"><span>PHP</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">60%</div>
            </div>
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="65%">
                <div class="skillbar-title"><span>C, C++</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">65%</div>
            </div>
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="50%">
                <div class="skillbar-title"><span>Objective-C, Swift</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">50%</div>
            </div>
            <!-- /.skillbar --> 
            
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="60%">
                <div class="skillbar-title"><span>Python</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">60%</div>
            </div>
            <!-- /.skillbar -->
            
             <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="80%">
                <div class="skillbar-title"><span>Javascript, JQuery</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">80%</div>
            </div>
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="90%">
                <div class="skillbar-title"><span>SQL</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">90%</div>
            </div>
            <!-- /.skillbar --> 
            
            

        </div>
        
         
        <!-- .title_content -->
        <div class="title_content" style="float: none;">
            <div class="text_content">Office Skills</div>
            <div class="clear"></div>
        </div>
        <!-- /.title_content -->
            
        <div class="skills">       
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="85%">
                <div class="skillbar-title"><span>MS Excel</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">85%</div>
            </div>
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix " data-percent="95%">
                <div class="skillbar-title"><span>MS Word</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">95%</div>
            </div>
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix " data-percent="60%">
                <div class="skillbar-title"><span>Powerpoint</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">60%</div>
            </div>
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix " data-percent="40%">
                <div class="skillbar-title"><span>SharePoint</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">40%</div>
            </div>
            <!-- /.skillbar -->   
		</div>
        
        
        <!-- .title_content -->
        <div class="title_content" style="float: none;">
            <div class="text_content">Hobbies Skills</div>
            <div class="clear"></div>
        </div>
        <!-- /.title_content -->
        
        <div class="skills">
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="50%">
                <div class="skillbar-title"><span>Music</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">50%</div>
            </div>
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix " data-percent="95%">
                <div class="skillbar-title"><span>Sport</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">95%</div>
            </div>
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix " data-percent="85%">
                <div class="skillbar-title"><span>Reading</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">85%</div>
            </div>
            <!-- /.skillbar -->
            
            <!-- .skillbar -->
            <div class="skillbar clearfix " data-percent="60%">
                <div class="skillbar-title"><span>Travelling</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">60%</div>
            </div>
            <!-- /.skillbar -->
        </div>
        
        
        <!-- .title_content -->
        <div class="title_content" style="float: none;">
            <div class="text_content">Language Skills</div>
            <div class="clear"></div>
        </div>
        <!-- /.title_content -->
        
       <!-- .skillbar -->
        <div class="skillbar clearfix " data-percent="100%">
            <div class="skillbar-title"><span>Chinese</span></div>
            <div class="skillbar-bar"></div>
            <div class="skill-bar-percent">100%</div>
        </div>
        <!-- /.skillbar -->
        <!-- .skillbar -->
        <div class="skills">
            <!-- .skillbar -->
            <div class="skillbar clearfix" data-percent="90%">
                <div class="skillbar-title"><span>English</span></div>
                <div class="skillbar-bar"></div>
                <div class="skill-bar-percent">90%</div>
            </div>
            <!-- /.skillbar -->
            

            
        </div>
        
        
        <!-- .title_content -->
        <div class="title_content" style="float: none;">
            <div class="text_content">My Resume</div>
            <div class="clear"></div>
        </div>
        <!-- /.title_content -->
        
        <!-- .download_resume -->
        <a class="download" style="margin:0;float: left;" href="downloadFile.php">
            <span data-hover="Download My Resume"><i class="glyphicon glyphicon-download-alt"></i> Download My Resume</span>
        </a>
        <!-- /.download_resume -->

<br>
        
        <!-- .title_content -->
        <div class="title_content">
            <div class="text_content">Education</div>
            <div class="clear"></div>
        </div>
        <!-- /.title_content -->
        
        <!-- .attributes -->
        <ul class="attributes">
            <li class="first">
                <h5>Computer Programming, Diploma <span class="duration"><i class="fa fa-calendar color"></i> 2011 - 2013</span></h5>
                <h6><span class="fa fa-book"></span> Algonquin College, Ottawa ON</h6>
                <p>
                	GPA 3.76 / 4.0 
                </p>
            </li>
            <li>
                <h5>Electron Engineering, Bachelor’s Degree	 <span class="duration"><i class="fa fa-calendar color"></i> 2005 – 2009</span></h5>
                <h6><span class="fa fa-book"></span> Sanming University, China Fujian</h6>
                <p>
					GPA 3.2/4.0
                </p>
            </li>
        </ul>
        <!-- /.attributes -->
        <br>  
        
        
          <!-- .title_content -->
        <div class="title_content">
            <div class="text_content">Awards</div>
            <div class="clear"></div>
        </div>
        <!-- /.title_content -->
        
        <!-- .attributes -->
        <ul class="attributes">
            <li class="first">
                <h5>Dean’s Honours List <span class="duration"><i class="fa fa-calendar color"></i> 2011 - 2013</span></h5>
                <h6><span class="fa fa-trophy"></span> Algonquin College, Ottawa ON</h6>
                <p>
					Dean’s Honours List - Term G.P.A. 3.77 out of 4 in 2013F
				</p>
				<p>	
					Dean’s Honours List - Term G.P.A. 3.88 out of 4 in 2012W
				</p>
				<p>	
					Dean’s Honours List - Term G.P.A. 3.97 out of 4 in 2011F

                </p>
            </li>
  
        </ul>
        <!-- /.attributes -->
        <br>  


    </div>
     <!-- /.resume-right -->
     
     
     
     <!-- .resume-left -->
    <div class="col-md-6 resume-left">    
        <!-- .title_content -->
        <div class="title_content" style="margin-bottom:5px">
            <div class="text_content">Experience</div>
            <div class="clear"></div>
        </div>
        <!-- /.title_content -->
        
        <!-- .attributes -->
        <ul class="attributes">
            <li class="first">
                <h5>Web Developer <span class="duration"><i class="fa fa-calendar color"></i> 2015.05 - present</span></h5>
                <h6><span class="fa fa-briefcase"></span> Freelancer</h6>
                <p>
					•	Web application and Restful web service development with JAVA EE framework, JBoss Enterprise Application platform 6, JBoss Developer studio.
				</p>
				<p>
					•	Designed and implemented professional portfolio online with PHP, html5, CSS, sass and JQuery.
                </p>
            </li>
            <li>
                <h5>Software QA specialist <span class="duration"><i class="fa fa-calendar color"></i> 2015.03 - 2015.04</span></h5>
                <h6><span class="fa fa-briefcase"></span> Immigration and Refugee Board </h6>
                <p>
                •	Wrote, maintained and conducted test cases of new IRB intranet system, which had been updated from share point 2003 to 2013.
				</p>
				<p>
				•	Maintained and updated IRB HR tracking system with MS Access.
				</p>
				<p>
				•	Developed 2 new document conversion tools for RIR system with VS 2013, asp.net MVC, entity framework database first, JQuery, bootstrap.
                </p>
            </li>
            <li>
                <h5>Software QA specialist <span class="duration"><i class="fa fa-calendar color"></i> 2015.03 - 2015.04</span></h5>
                <h6><span class="fa fa-briefcase"></span> YOU.I Labs Corporation </h6>
                <p>
                •	Involved in an agile development of a mobile application, which provides the service for watching TV episodes and movies on mobile devices.
				</p>
				<p>
				•	Conducted manual testing on UI and usability of product, Logging defects in Confluence JIRA.Completed 80+% test cases. Found and logged 200+ critical defects.
				</p>
				<p>
				•	Troubleshoot on Jenkins that is a build server.
                </p>
                <p>
                •	Built automation testing infrastructure by using “monkey talk”.
                </p>
                <p>
                •	Unit tested “You. I Engine” by using Google test.
                </p>
            </li>
            <li>
                <h5>Web Developer <span class="duration"><i class="fa fa-calendar color"></i> 2013.09 - 2013.11</span></h5>
                <h6><span class="fa fa-briefcase"></span> Algonquin College </h6>
                <p>
				•	Involved in an agile development of a web application of processing Trademark registration. 				
				</p>
				<p>
				•	Developed and improved ERD, use case diagram, class diagram with Microsoft Visio.				
				</p>
				<p>
				•	Implemented a component to extract, transform and load CIPO data from a plain-text file to MySQL database table with 5 features completed by using JAVA hibernate framework.                </p>
                <p>
				•	Implemented models including CIPO data model and user model by using PHP.                
				</p>
                <p>
				•	Implemented User Account Management module (12 features) and completed by PHP, JAVASCRIPT, HTML and CSS.                
				</p>
            </li>
            <li>
                <h5>ASP.NET developer <span class="duration"><i class="fa fa-calendar color"></i> 2013.05-2013.08</span></h5>
                <h6><span class="fa fa-briefcase"></span> CaseWare IDEA Corporation </h6>
                <p>
				•	Involved in an agile development of an internal website – “Test run history tracking”, used by manager to track testing history. 				
				</p>
				<p>
				•	Implement back-end service application with C#, ASP.NET MVC 4. Create 20+ functions responding Ajax requests.				
				</p>
				<p>
				•	Implemented 4 interactive pages with html, CSS, JAVASCRIPTS, JQuery, EXTJS 3.  
				</p>               
				<p>
				•	Designed 4 data models and created 4 tables in Microsoft SQL server.				</p>
                <p>
				•	Implemented User Account Management module (12 features) and completed by PHP, JAVASCRIPT, HTML and CSS.                
				</p>
            </li>
            <li>
                <h5>Software QA Specialist <span class="duration"><i class="fa fa-calendar color"></i> 2013.01-2013.04</span></h5>
                <h6><span class="fa fa-briefcase"></span> CaseWare IDEA Corporation </h6>
                <p>
				•	Involved in agile testing on a web application product: Monitor 4.0. Ensured successful delivery of a high-quality product on time.  
				</p>
				<p>
				•	Tested on UI and usability of product. Edited test case in Test Track Pro. Writing/Logging defects in Team Foundation Server.
				</p>
				<p>
				•	Completed 350+ test cases and created 180+ defects.
				</p>               
				<p>
				•	Participated daily scrum meeting. Reported status and discussed solutions of unsolved issues with team leader and project manager. 
                <p>
				•	Interacted with developers to investigate defects and verify bug-fixing.
				</p>
            </li>
            <li>
                <h5>Assistant Engineer  <span class="duration"><i class="fa fa-calendar color"></i> 2009.07-2011.01</span></h5>
                <h6><span class="fa fa-briefcase"></span> Troika Technology Co. Ltd </h6>
                <p>
				•	Involved in a development of a large scale Industrial automation control PLC system and DCS. The system is used in an air separation plant to monitor and auto controlling air separation process.				</p>
				<p>
				•	Created CAD drawings for assembly and wiring control panels.
				</p>
				<p>
				•	Perform software installation including Operation system, Siemens PCS 7 and driver of Industrial network card.
				</p>               
				<p>
				•	Perform hardware installation, configuration and testing including Siemens s7 400 PLC and Distributed I/O (ET200).
                <p>
				•	Assist in development of PLC programs by using CFC, SCL, SFC and STL in Siemens PCS 7, and implemented 20+ function blocks
				</p>
				<p>
				•	Experienced with HMI programs using cscript and vbscript in Siemens WinCC, and implemented 2 HMI operation screens.	
				</p>
				<p>
				•	Performed unit testing during development and feature-testing during system delivery.Electrical troubleshooting by using multi-meter. Wrote and updated technical documentation. Provided technical support services for our client including answering questions via phone and email, and resolving problems via remote assistance.
				</p>
            </li>
        </ul>
        <!-- /.attributes -->
        
        
    </div>
    <!-- /.resume-left -->
</div>

  <div style="clear: both"></div>  
  
  
<!-- my references -->
<div class="row">
    <div class="col-md-12">   
    
<div class="reference clearfix"> 
            
         <!-- .title_content -->
        <div class="title_content" style="margin-bottom:5px">
            <div class="text_content">Client reference</div>
            <div class="clear"></div>
        </div>
        <!-- /.title_content -->
        

        <ul>
            <li class="clearfix">
                <img src="https://media.licdn.com/mpr/mpr/shrinknp_100_100/p/3/005/0a3/2a2/307b510.jpg" class="img_reference" width="100" height="100" alt="">
                <p>“
						Desen is very detail oriented, punctual and friendly. Always willing to lend a hand, he tackled his job as QA specialist with enthusiasm and vigour. I sincerely appreciated his contributions to the team.                
				”</p>
                <span>geoff brown, UX production manager at YOU.i</span>
            </li>
            <li class="clearfix">
                <img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/p/3/000/03c/2ad/2244405.jpg" class="img_reference" width="100" height="100" alt="">
                <p>“
					I have had the pleasure of working with Desen at both CaseWare and You.i. At You.i, Desen was our primary Tester on Shomi. This was a huge difference for him, since at CaseWare he was part of the QA team, testing desktop/web applications, but at You.i he focused on mobile (Phone, Tablet). 
					
					He was responsible for writing, updating and exercising all our test cases for our Tablet, Phone, Android and iOS applications. He tested on multiple devices from running full regressions tests, to feature testing as part of our agile development process, and sanity testing for internal releases and store submissions. 
					
					Desen was critical to the success of the first launch of Shomi. He worked, at times, with a team of up to 10 developers, one or two QA, but was often relied on as the primary QA Tester. He worked very closely with the developers, reporting bugs and verifying bugs quickly, helping them diagnose issues. Shomi had a lot of changing priorities, and Desen showed his versatility by being able o adjust to changes quickly. 
					
					I would highly recommend Desen as QA Tester for any organization.
                ”</p>
                
                <p>“
					At CaseWare, I was Desen's team lead. Originally, Desen joined the Automation Team to help build and create Automation test cases, and provide support for our Automation Test System, but he was soon moved on to an internal project for viewing old test cases. This was a huge learning opportunity for Desen, who was co-op at the time. As we were transitioning from one system to another, we need a way to view the data from the old system that was exported. He wrote MVC .Net application that imported the data into SQL database and provided a means for users to sort their data, view test case details and so on. This experience gave him first experience dealing with designing the system, planning the work and meeting deadlines and milestones. But, most importantly, this was all new for Desen, so he did a lot of research on how to implement various components of the system, demonstrating his ability to learn, resolve difficult issues on his own and so on. 

					Honestly, I admired Desen for the work that he did on this project. I was extremely impressed, and I believe that he would be an asset as Software Developer for any company. Having a QA background makes Desen even more valuable, especially when working in an Agile environment.

                ”</p>
                <span>Mark Leyden, Software Manager</span>
            </li>
            <li class="clearfix">
                <img src="https://media.licdn.com/mpr/mpr/shrinknp_100_100/p/4/005/02d/10f/08a3365.jpg" class="img_reference" width="100" height="100" alt="">
                <p>“
					Desen works really hard and alway eagers to learn. He was always trying to collect as much information as he can, other than just simply pass the defect to designers. He won't miss any detail in this testing area. He is the one you can rely on.
                ”</p>
                <span>Jun Cao, Software Technologist at Ciena</span>
            </li>
        </ul>
</div>
 </div>
     
     <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >免费模板</a></div>
     
     
     <div style="clear: both"></div>   
</div>
	*/}.toString().slice(14,-3)
		element.append(resumeHTML);
};
function addPortfolio(element){
	var portfolioHTML = function(){/*


    <!-- .title -->
    <h1 class="h-bloc">Portfolio - My Works</h1>

    <!-- .container-portfolio -->
    <div class="container-portfolio">

        <!-- #filters -->
        <ul id="filters" class="clearfix">
            <li><span class="filter active" data-filter="catWeb catGraphic catMotion logo">All</span></li>
            <li><span class="filter" data-filter="catWeb">Web Design</span></li>
            <li><span class="filter" data-filter="catGraphic">Graphic Design</span></li>
            <li><span class="filter" data-filter="catMotion">Motion Graphic</span></li>
            <li><span class="filter" data-filter="logo">Logo</span></li>
        </ul>
        <!-- /#filters -->

        <!-- #portfoliolist -->
        <div id="portfoliolist">

            <!-- .portfolio -->
            <div class="portfolio logo" data-cat="logo">	
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">		
                    <a href="images/portfolio/1.jpg" rel="portfolio" title="Lorem ipsum dolor sit amet, consectetur adipiscing Vivamus sit amet ligula non lectus.consectetur adipiscingVivamus sit amet">
                        <img src="images/portfolio/1.jpg" alt="Visual Infography" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Logo</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>		
            <!-- /.portfolio -->



            <!-- .portfolio -->
            <div class="portfolio catWeb" data-cat="catWeb">	
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">		
                    <a href="http://www.youtube.com/watch?v=c9MnSeYYtYY" rel="portfolio">

                        <img src="images/portfolio/2.jpg" alt="Visual Infography" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Web Design</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>		
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio catWeb" data-cat="catWeb">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">			
                    <a href="images/portfolio/3.jpg" rel="portfolio">
                        <img src="images/portfolio/3.jpg" alt="Sonor's Design" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Web design</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>				
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio catMotion" data-cat="catMotion">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">			
                    <a href="images/portfolio/4.jpg" rel="portfolio">
                        <img src="images/portfolio/4.jpg" alt="Typography Company" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Motion Graphic</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>	
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio catWeb" data-cat="catWeb">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">
                    <a href="images/portfolio/5.jpg" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien." rel="portfolio">
                        <img src="images/portfolio/5.jpg" alt="Weatherette" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Web Design</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>	
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio catMotion" data-cat="catMotion">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">		
                    <a href="images/portfolio/6.jpg" rel="portfolio">				
                        <img src="images/portfolio/6.jpg" alt="BMF" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Motion Graphic</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>	
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio catGraphic" data-cat="catGraphic">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">		
                    <a href="images/portfolio/7.jpg" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien." rel="portfolio">				
                        <img src="images/portfolio/7.jpg" alt="Techlion" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Graphic Design</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio logo" data-cat="logo">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">		
                    <a href="images/portfolio/8.jpg" rel="portfolio" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien.">
                        <img src="images/portfolio/8.jpg" alt="KittyPic" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Logo</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>	
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio catWeb" data-cat="catWeb">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">			
                    <a href="images/portfolio/9.jpg" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien." rel="portfolio">
                        <img src="images/portfolio/9.jpg" alt="Graph Plotting" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Web Design</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>	
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio catGraphic" data-cat="catGraphic">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">	
                    <a href="images/portfolio/10.jpg" rel="portfolio">
                        <img src="images/portfolio/10.jpg" alt="QR Quick Response" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Graphic Design</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>	
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio logo" data-cat="logo">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">	
                    <a href="images/portfolio/11.jpg" title="Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien." rel="portfolio">
                        <img src="images/portfolio/11.jpg" alt="Mobi Sock" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Logo</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>	
            <!-- /.portfolio -->

            <!-- .portfolio -->
            <div class="portfolio logo" data-cat="logo">
                <!-- .portfolio-wrapper -->
                <div class="portfolio-wrapper">
                    <a href="images/portfolio/12.jpg" rel="portfolio">
                        <img src="images/portfolio/12.jpg" alt="Village Community Church" />
                        <div class="label">
                            <div class="label-text">
                                <a class="text-title">Project Name</a>
                                <span class="text-category">Logo</span>
                            </div>
                            <div class="label-bg"></div>
                        </div>
                    </a>
                </div>
                <!-- /.portfolio-wrapper -->
            </div>	
            <!-- /.portfolio -->

            <div class="clear"></div>

        </div>
        <!-- #portfoliolist -->
    </div>
    <!-- /.container-portfolio -->

                                            
	*/}.toString().slice(14,-3)

	element.append(portfolioHTML);
}
function addBlog(element){
	var blogHTML = function(){/*
                                               <h1 class="h-bloc">Blog - My Blog</h1><br> 

<div class="col-md-12">
    <div class="row">

        <!-- Page Blog -->
        <div class="col-md-12" id="blog_page">
            <!-- start Page Blog -->
            <section id="blog-page">

                <!-- Post 1 -->	
                <article id="post-1" class="blog-article">                    

                    <div class="col-md-12">

                        <div class="row">

                            <div class="col-md-12 post_media">
                                <div class="post-format-icon">
                                    <a href="#" class="item-date"><span class="fa fa-picture-o"></span></a>
                                </div>
                                <div class="media">
                                    <div class="he-wrap tpl2">
                                        <div id="carousel-1" class="carousel slide" data-ride="carousel">

                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-1" data-slide-to="1"></li>
                                                <li data-target="#carousel-1" data-slide-to="2"></li>
                                            </ol>

                                            <div class="carousel-inner">

                                                <div class="item active">
                                                    <img src="images/blog/blog-1.jpg" alt="" />
                                                    <div class="carousel-caption">
                                                        <h4>First Thumbnail label</h4>
                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                    </div>
                                                </div>


                                                <div class="item">
                                                    <img src="images/blog/blog-2.jpg" alt="" />
                                                    <div class="carousel-caption">
                                                        <h4>First Thumbnail label</h4>
                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <img src="images/blog/blog-3.jpg" alt="" />
                                                    <div class="carousel-caption">
                                                        <h4>First Thumbnail label</h4>
                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                    </div>
                                                </div>

                                            </div>

                                            <a class="left carousel-control" href="#carousel-1" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                            </a>

                                            <a class="right carousel-control" href="#carousel-1" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                            </a>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 post_content">
                                <div class="content post_format_standart">
                                    <div class="top_c ">

                                        <div class="title_content">
                                            <div class="text_content"><a href="#post-1" class="read_more">Blog Post Gallery</a></div>
                                            <div class="clear"></div>
                                        </div>

                                        <ul class="info">
                                            <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                            <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                            <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                            <li><i class="glyphicon glyphicon-tag"></i> jquery, slider, web design</li>
                                        </ul>

                                        <div class="blog-content">
                                            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo...</p></div>
                                    </div>
                                </div>	

                                <a href="#post-1" class="read_m pull-right">Read More <i class='glyphicon glyphicon-chevron-right'></i></a>

                            </div>
                        </div>

                    </div>
                </article>
                <!-- End Post 1 -->

                <div class="clear"></div>

                <!-- Post 2 -->
                <article id="post-2" class="blog-article">                    

                    <div class="col-md-12">

                        <div class="row">

                            <div class="col-md-12 post_media">

                                <div class="post-format-icon">
                                    <a href="#" class="item-date"><span class="fa fa-pencil"></span></a>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 post_content">
                                <div class="content post_format_standart">
                                    <div class="top_c ">

                                        <div class="title_content">
                                            <div class="text_content"><a href="#post-2" class="read_more">Blog Aside post</a></div>
                                            <div class="clear"></div>
                                        </div>

                                        <ul class="info">
                                            <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                            <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                            <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                            <li><i class="glyphicon glyphicon-tag"></i> php, web design</li>
                                        </ul>

                                        <div class="blog-content">
                                            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo...</p></div>
                                    </div>
                                </div>	

                                <a href="#post-2" class="read_m pull-right">Read More <i class='glyphicon glyphicon-chevron-right'></i></a>

                            </div>
                        </div>

                    </div>
                </article>
                <!-- End Post 2 -->

                <div class="clear"></div>

                <!-- Post 3 -->
                <article id="post-3" class="blog-article">                    

                    <div class="col-md-12">

                        <div class="row">

                            <div class="col-md-12 post_media">

                                <div class="post-format-icon">
                                    <a href="#" class="item-date"><span class="fa fa-picture-o"></span></a>
                                </div>

                                <div class="media">
                                    <div class="he-wrap tpl2">
                                        <img src="images/blog/blog-4.jpg" class="img-hover" alt="" />
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 post_content">
                                <div class="content post_format_standart">
                                    <div class="top_c ">

                                        <div class="title_content">
                                            <div class="text_content"><a href="#post-3" class="read_more">Blog Post Image</a></div>
                                            <div class="clear"></div>
                                        </div>

                                        <ul class="info">
                                            <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                            <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                            <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                            <li><i class="glyphicon glyphicon-tag"></i> php, web design</li>
                                        </ul>

                                        <div class="blog-content">
                                            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo...</p></div>
                                    </div>
                                </div>	

                                <a href="#post-3" class="read_m pull-right">Read More <i class='glyphicon glyphicon-chevron-right'></i></a>

                            </div>
                        </div>

                    </div>
                </article>

                <!-- End Post 3 -->

            </section>

            <!-- End Page Blog -->



            <!-- Page Blog - Post 1 -->
            <section id="post-1-page" class="content-post" style="display: none">
                <div class="row inner">

                    <div class="col-md-12" style="width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;float: left;background: rgba(255, 255, 255, 0.8);padding-bottom: 15px;padding-top: 15px;">

                        <article class="postPage">

                            <div class="col-md-12 post_media">
                                <div class="post-format-icon">
                                    <a href="#" class="item-date"><span class="fa fa-picture-o"></span></a>
                                </div>
                                <div class="media">
                                    <div class="he-wrap tpl2">
                                        <div id="carousel-2" class="carousel slide" data-ride="carousel">

                                            <ol class="carousel-indicators">
                                                <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                                                <li data-target="#carousel-2" data-slide-to="1"></li>
                                                <li data-target="#carousel-2" data-slide-to="2"></li>
                                            </ol>

                                            <div class="carousel-inner">

                                                <div class="item active">
                                                    <img src="images/blog/blog-1.jpg" alt="">
                                                    <div class="carousel-caption">
                                                        <h4>First Thumbnail label</h4>
                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                    </div>
                                                </div>


                                                <div class="item">
                                                    <img src="images/blog/blog-2.jpg" alt="">
                                                    <div class="carousel-caption">
                                                        <h4>First Thumbnail label</h4>
                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                    </div>
                                                </div>

                                                <div class="item">
                                                    <img src="images/blog/blog-3.jpg" alt="">
                                                    <div class="carousel-caption">
                                                        <h4>First Thumbnail label</h4>
                                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="title_content">
                                <div class="text_content">Blog Post Gallery</div>
                                <div class="clear"></div>
                            </div>

                            <p class="caps">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with.</p>

                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                            <div class="col-md-12 first">
                                <div class="info">
                                    <div>
                                        <span class="tag">#php</span>
                                        <span class="tag">#web</span>
                                        <span class="tag">#web design</span>
                                    </div>


                                    <ul class="info-post">
                                        <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                        <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                        <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                        <li><i class="glyphicon glyphicon-tag"></i> jquery, slider, web design</li>
                                    </ul>
                                </div>

                                <div class="clear"></div>      


                                <div class="about_author">
                                    <div class="title_content" style="margin-bottom:10px">
                                        <div class="text_content">BILL GATES</div>
                                        <div class="clear"></div>
                                    </div>

                                    <div class="clear"></div>

                                    <div class="prg_content">
                                        <img src="http://placehold.it/100x100" width="100" height="100" alt="img">

                                        <div class="text">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Praesent condimentum sed elit
                                            vitae tristique. Aliquam erat volutpat. Nunc sit
                                            amet cursus libero. In fringilla egestas ornare.
                                        </div>

                                        <div class="nb_post" style="margin-top: 10px;">
                                            <b id="nb_post"> 15 posts</b> created by author
                                        </div>
                                    </div>

                                    <div class="clear"></div>
                                </div>

                                <div class="clear"></div>      


                                <div class="post_comments">

                                    <div class="title_content">
                                        <div class="text_content">7 Comments</div>
                                        <div class="clear"></div>
                                    </div>

                                    <div class="clear"></div>

                                    <div class="comments">

                                        <div class="comment">
                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">John Doe <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">John Smith <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->



                                    </div><!-- .post_comments -->

                                    <div class="clear"></div>      


                                    <div class="comment_form">
                                        <div class="title_content">
                                            <div class="text_content">Leave A Comment</div>
                                            <div class="clear"></div>
                                        </div>


                                        <form method="post" id="comment_form">
                                            <p class="form-group" id="contact-name">
                                                <label for="name">Your Name</label>
                                                <input type="text" name="name" class="form-control" id="inputSuccess" placeholder="Name*...">
                                            </p>
                                            <p class="form-group" id="contact-email"> 
                                                <label for="email">Your Email</label>
                                                <input type="text" name="email" class="form-control" id="inputSuccess" placeholder="Email*...">
                                            </p>

                                            <p class="form-group" id="contact-message">
                                                <label for="message">Your Message</label>
                                                <textarea name="message" cols="88" rows="6" class="form-control" id="inputError" placeholder="Your Comment..."></textarea>
                                            </p>
                                            <input type="reset" name="reset" value="CLEAR" class="reset">
                                            <!--<input type="submit" name="submit" value="Post Comment" class="submit">-->
                                            <button class="submit" data-toggle="modal" data-target=".bs-example-modal-sm">Post Comment</button>
                                        </form>                        
                                        <div class="clear"></div>

                                    </div>
                                </div>



                                <div class="col-md-12" style="margin-top: 20px;">
                                    <a href="#post-2" class="readmore" id="pagination"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                    <a href="#" class="readmore disabled" id="pagination"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                    <a href="#blog" class="readmore"><i class="glyphicon glyphicon-chevron-left"></i> All Posts</a>
                                </div>

                                <div class="clear"></div>

                        </article>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
            <!-- End Page Blog - Post 1 -->

            <!-- Page Blog - Post 2 -->
            <section id="post-2-page" class="content-post" style="display: none">
                <div class="row inner">

                    <div class="col-md-12" style="width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;float: left;background: rgba(255, 255, 255, 0.8);padding-bottom: 15px;padding-top: 15px;">

                        <article class="postPage">

                            <div class="col-md-12 post_media">

                                <div class="post-format-icon">
                                    <a href="#" class="item-date"><span class="fa fa-pencil"></span></a>
                                </div>

                            </div>

                            <div class="title_content">
                                <div class="text_content">BLOG ASIDE POST</div>
                                <div class="clear"></div>
                            </div>


                            <p class="caps">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with.</p>

                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                            <div class="col-md-12 first">
                                <div class="info">
                                    <div>
                                        <span class="tag">#php</span>
                                        <span class="tag">#web</span>
                                        <span class="tag">#web design</span>
                                    </div>


                                    <ul class="info-post">
                                        <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                        <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                        <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                        <li><i class="glyphicon glyphicon-tag"></i> php, web design</li>
                                    </ul>
                                </div>

                                <div class="clear"></div>      


                                <div class="about_author">
                                    <div class="title_content" style="margin-bottom:10px">
                                        <div class="text_content">BILL GATES</div>
                                        <div class="clear"></div>
                                    </div>

                                    <div class="clear"></div>


                                    <div class="prg_content">
                                        <img src="http://placehold.it/100x100" width="100" height="100" alt="img">

                                        <div class="text">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Praesent condimentum sed elit
                                            vitae tristique. Aliquam erat volutpat. Nunc sit
                                            amet cursus libero. In fringilla egestas ornare.
                                        </div>

                                        <div class="nb_post" style="margin-top: 10px;">
                                            <b id="nb_post"> 15 posts</b> created by author
                                        </div>
                                    </div>

                                    <div class="clear"></div>
                                </div>

                                <div class="clear"></div>      


                                <div class="post_comments">

                                    <div class="title_content">
                                        <div class="text_content">7 Comments</div>
                                        <div class="clear"></div>
                                    </div>

                                    <div class="clear"></div>

                                    <div class="comments">

                                        <div class="comment">
                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">John Doe <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">John Smith <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->



                                    </div><!-- .post_comments -->

                                    <div class="clear"></div>      


                                    <div class="comment_form">

                                        <div class="title_content">
                                            <div class="text_content">Leave A Comment</div>
                                            <div class="clear"></div>
                                        </div>


                                        <form method="post" id="comment_form">
                                            <p class="form-group" id="contact-name">
                                                <label for="name">Your Name</label>
                                                <input type="text" name="name" class="form-control" id="inputSuccess" placeholder="Name*...">
                                            </p>
                                            <p class="form-group" id="contact-email"> 
                                                <label for="email">Your Email</label>
                                                <input type="text" name="email" class="form-control" id="inputSuccess" placeholder="Email*...">
                                            </p>

                                            <p class="form-group" id="contact-message">
                                                <label for="message">Your Message</label>
                                                <textarea name="message" cols="88" rows="6" class="form-control" id="inputError" placeholder="Your Comment..."></textarea>
                                            </p>
                                            <input type="reset" name="reset" value="CLEAR" class="reset">
                                            <!--<input type="submit" name="submit" value="Post Comment" class="submit">-->
                                            <button class="submit" data-toggle="modal" data-target=".bs-example-modal-sm">Post Comment</button>
                                        </form>                        
                                        <div class="clear"></div>

                                    </div>
                                </div>



                                <div class="col-md-12"  style="margin-top: 20px;">
                                    <a href="#post-3" class="readmore" id="pagination"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                    <a href="#post-1" class="readmore" id="pagination"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                    <a href="#blog" class="readmore"><i class="glyphicon glyphicon-chevron-left"></i> All Posts</a>
                                </div>

                                <div class="clear"></div>

                        </article>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
            <!-- End Page Blog - Post 2 -->

            <!-- Page Blog - Post 3 -->
            <section id="post-3-page" class="content-post" style="display: none">
                <div class="row inner">

                    <div class="col-md-12" style="width: 100%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;float: left;background: rgba(255, 255, 255, 0.8);padding-bottom: 15px;padding-top: 15px;">

                        <article class="postPage">


                            <div class="col-md-12 post_media">

                                <div class="post-format-icon">
                                    <a href="#" class="item-date"><span class="fa fa-picture-o"></span></a>
                                </div>

                                <div class="media">
                                    <div class="he-wrap tpl2">
                                        <img src="images/blog/blog-2.jpg" class="img-hover" alt="">
                                    </div>

                                </div>
                            </div>

                            <div class="title_content">
                                <div class="text_content">BLOG POST IMAGE</div>
                                <div class="clear"></div>
                            </div>


                            <p class="caps">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with.</p>

                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>

                            <div class="col-md-12 first">
                                <div class="info">
                                    <div>
                                        <span class="tag">#php</span>
                                        <span class="tag">#web</span>
                                        <span class="tag">#web design</span>
                                    </div>


                                    <ul class="info-post">
                                        <li><i class="glyphicon glyphicon-comment"></i> 2 Comments</li>
                                        <li><i class="glyphicon glyphicon-time"></i> January 31, 2014</li>
                                        <li><i class="glyphicon glyphicon-user"></i> by Jane Doe</li>
                                        <li><i class="glyphicon glyphicon-tag"></i> Photoshop</li>
                                    </ul>
                                </div>

                                <div class="clear"></div>      


                                <div class="about_author">
                                    <div class="title_content" style="margin-bottom:10px">
                                        <div class="text_content">BILL GATES</div>
                                        <div class="clear"></div>
                                    </div>

                                    <div class="clear"></div>


                                    <div class="prg_content">
                                        <img src="http://placehold.it/100x100" width="100" height="100" alt="img">

                                        <div class="text">
                                            Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Praesent condimentum sed elit
                                            vitae tristique. Aliquam erat volutpat. Nunc sit
                                            amet cursus libero. In fringilla egestas ornare.
                                        </div>

                                        <div class="nb_post" style="margin-top: 10px;">
                                            <b id="nb_post"> 15 posts</b> created by author
                                        </div>
                                    </div>

                                    <div class="clear"></div>
                                </div>

                                <div class="clear"></div>      


                                <div class="post_comments">

                                    <div class="title_content">
                                        <div class="text_content">7 Comments</div>
                                        <div class="clear"></div>
                                    </div>

                                    <div class="clear"></div>

                                    <div class="comments">

                                        <div class="comment">
                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">John Doe <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">John Smith <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="comment sub">
                                                <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                                <div class="text">
                                                    <div class="name">Bill Gates <a class="reply" href="#">Reply</a></div>
                                                    <div class="date">12, September, 2013</div>
                                                    Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Praesent condimentum sed elit
                                                    vitae tristique. Aliquam erat volutpat. Nunc sit
                                                    amet cursus libero. In fringilla egestas ornare.
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->

                                        <div class="comment">
                                            <img src="http://placehold.it/100x100" width="100" height="100" alt="img" />
                                            <div class="text">
                                                <div class="name">Andrian Robert <a class="reply" href="#">Reply</a></div>
                                                <div class="date">12, September, 2013</div>
                                                Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Praesent condimentum sed elit
                                                vitae tristique. Aliquam erat volutpat. Nunc sit
                                                amet cursus libero. In fringilla egestas ornare.
                                            </div>
                                            <div class="clear"></div>
                                        </div><!-- .comments -->



                                    </div><!-- .post_comments -->

                                    <div class="clear"></div>      


                                    <div class="comment_form">

                                        <div class="title_content">
                                            <div class="text_content">Leave A Comment</div>
                                            <div class="clear"></div>
                                        </div>


                                        <form method="post" id="comment_form">
                                            <p class="form-group" id="contact-name">
                                                <label for="name">Your Name</label>
                                                <input type="text" name="name" class="form-control" id="inputSuccess" placeholder="Name*...">
                                            </p>
                                            <p class="form-group" id="contact-email"> 
                                                <label for="email">Your Email</label>
                                                <input type="text" name="email" class="form-control" id="inputSuccess" placeholder="Email*...">
                                            </p>

                                            <p class="form-group" id="contact-message">
                                                <label for="message">Your Message</label>
                                                <textarea name="message" cols="88" rows="6" class="form-control" id="inputError" placeholder="Your Comment..."></textarea>
                                            </p>
                                            <input type="reset" name="reset" value="CLEAR" class="reset">
                                            <!--<input type="submit" name="submit" value="Post Comment" class="submit">-->
                                            <button class="submit" data-toggle="modal" data-target=".bs-example-modal-sm">Post Comment</button>
                                        </form>                        
                                        <div class="clear"></div>

                                    </div>
                                </div>


                                <div class="col-md-12" style="margin-top: 20px;">
                                    <a href="#" class="readmore disabled" id="pagination"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                    <a href="#post-2" class="readmore" id="pagination"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                    <a href="#blog" id="blog" class="readmore"><i class="glyphicon glyphicon-chevron-left"></i> All Posts</a>
                                </div>

                                <div class="clear"></div>

                        </article>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
            <!-- End Page Blog - Post 3 -->


        </div>


        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title h3_modal" style="color: #fff !important;">FlexyVcard - Responsive Vcard Template</h3>
                    </div>
                    <div class="modal-body">
                        <p>FlexyVcard is an impressive and professional online vcard, a beautiful portfolio with sliding effect, resume and contact information with Google map.</p>
                        <p>It’s simple! Just download and install in a few minutes, you can show your online card to your friend, customer or employer in an interview by phone or tablet. Because FlexyVcard is a responsive template, you can view your website on pc as well as handheld devices. You can also link to your social profiles, display your portfolio in many media format such as image, youtube video, flash...</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
                                      
	*/}.toString().slice(14,-3)

	element.append(blogHTML);

}
function addContact(element){
	var contactHTML = function(){/*


<h1 class="h-bloc">Contact - Contact Me</h1>


                                        <div class="row">

                                            <div class="col-lg-12">
                                                <div id="map"></div>
                                            </div>  

                                            <div class="col-lg-12">
                                                <div class="row" id="contact-user">
                                                    <div class="col-md-5">
                                                        <div class="contact-info">
                                                            <!--<h3 class="main-heading"><span>Contact info</span></h3>-->

                                                            <div class="title_content" style="float: none;">
                                                                <div class="text_content">Contact info</div>
                                                                <div class="clear"></div>
                                                            </div>

                                                            <ul>
                                                                <li><span class="span-info"><i class="glyphicon glyphicon-map-marker"></i> Adress:</span> Ottawa, ON, CA.<br /><br /></li>
                                                                <li><span class="span-info"><i class="glyphicon glyphicon-envelope"></i> Email:</span> <a href="mailto:jason.desen.guo@gmail.com">jason.desen.guo@gmail.com</a></li>
                                                                <li><span class="span-info"><i class="glyphicon glyphicon-phone"></i> Phone:</span> +1 613 406 3813</li>
                                                                <li><span class="span-info"><i class="glyphicon glyphicon-globe"></i> Website:</span> www.desenguo.com</li>
                                                                <li><span class="span-info"><i class="glyphicon glyphicon-comment"></i> Skype:</span> jason.desen.guo</li>
                                                                <li><span class="span-info"><i class="glyphicon glyphicon-thumbs-up"></i> G. Drive:</span> Jason.desen.guo@gmail.com</li>
                                                                <li><span class="span-info"><i class="glyphicon glyphicon-unchecked"></i> Skydrive:</span> Jason.desen.guo@gmail.com</li>
                                                            </ul>
                                                        </div>
                                                        <!-- /Contact Info -->
                                                        <div class="clear"></div>

                                                        <!--<h3 class="main-heading" style="margin-left: 22px;"><span>Follow me</span></h3>-->

                                                        <div class="title_content tiltle_contacts" style="float: none;">
                                                            <div class="text_content">Follow me</div>
                                                            <div class="clear"></div>
                                                        </div>

                                                    

                                                            <div id="profile_social">
                                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                <a href="#"><i class="fa fa fa-dribbble"></i></a>
                                                                <a href="#"><i class="fa fa-foursquare"></i></a>
                                                                <div class="clear"></div>
                                                            </div>
                                              


                                                    </div>

                                                    <div class="col-md-7">
                                                        <!-- Contact Form -->
                                                        <div class="title_content" style="float: none;">
                                                            <div class="text_content">Let's keep in touch</div>
                                                            <div class="clear"></div>
                                                        </div>

                                                        <div class="contact-form">
                                                            <!--<h3 class="main-heading"><span>Let's keep in touch</span></h3>-->



                                                            <div id="contact-status"></div>

                                                            <form action="#" id="contactform">
                                                                <p class="form-group" id="contact-name">
                                                                    <label for="name">Your Name</label>
                                                                    <input type="text" name="name" class="form-control name-contact" id="inputSuccess" placeholder="Name..." />
                                                                </p>
                                                                <p class="form-group" id="contact-email"> 
                                                                    <label for="email">Your Email</label>
                                                                    <input type="text" name="email" class="form-control email-contact" id="inputSuccess" placeholder="Email..." />
                                                                </p>

                                                                <p class="form-group" id="contact-message">
                                                                    <label for="message">Your Message</label>
                                                                    <textarea name="message" cols="88" rows="6" class="form-control message-contact" id="inputError" placeholder="Message..."></textarea>
                                                                </p>
                                                                <input type="reset" name="reset" value="CLEAR" class="reset">
                                                                <!-- <input type="submit" name="submit" value="SEND MESSAGE" class="submit">-->

                                                                <section class="button-demo" style="display: inline-block;">
                                                                    <button class="ladda-button submit send_email" name="submit" data-color="green" data-style="expand-left">SEND MESSAGE</button>
                                                                </section>

                                                            </form>
                                                        </div>
                                                        <!-- /Contact Form -->
                                                    </div>
                                                </div>
                                            </div>  



                                        </div>                                                                                     

                                          
	*/}.toString().slice(14,-3)

	element.append(contactHTML);

}


jQuery(document).ready(function($) {
	//body background color 
    //$('body').css('backgroundColor', "#F8F8F8").css('backgroundImage', 'none');
    // Custumize Color

    //$("#colors-style").attr("href", "OtherAssets/FlexyCard/css/colors/DarkBlue.css");
    //$.cookie('layout_color', 'css/colors/DarkBlue.css');
    
    //$("#pic_prof_2").css('display', 'block').css("background-image", "url(./img/me.jpg)");
    //$("#pic_prof_1").css('display', 'none');
	
	$('.content_2').empty();

	addProfile($('#profile'));
	

	
	
    /* ---------------------------------------------------------------------- */
    /*	------------------------------- Loading ----------------------------- */
    /* ---------------------------------------------------------------------- */

    /*Page Preloading*/
    $(window).load(function() {
        $('#spinner').fadeOut(200);
        $('#preloader').delay(200).fadeOut('slow');
        $('.wrapper').fadeIn(200);
        $('#custumize-style').fadeIn(200);
    });

    /* ---------------------------------------------------------------------- */
    /* ------------------------------- Taps profile ------------------------- */
    /* ---------------------------------------------------------------------- */

    $('.collapse_tabs').click(function() {

        if ($(this).hasClass('collapsed')) {
            $(this).find('i.glyphicon').removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");
        } else {
            $(this).find('i.glyphicon').removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down");
        }

    });
    /* ---------------------------------------------------------------------- */
    /* -------------------------- easyResponsiveTabs ------------------------ */
    /* ---------------------------------------------------------------------- */

    $('#verticalTab').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
    });

    $("h2.resp-accordion").click(function() {
    	
        $(this).find(".icon_menu").addClass("icon_menu_active");
        $("h2.resp-accordion").not(this).find(".icon_menu").removeClass("icon_menu_active");

        /*	Scroll To */
        $('html, body').animate({scrollTop: $('h2.resp-accordion').offset().top - 50}, 600);
        
        
        var tab_name = $(this).next().attr('id');
        
        updateContent(tab_name);
    });
    function updateContent(tab_name)
    {
    	$('.content_2').empty();

    	switch(tab_name)
        {
        	case "profile":
        		addProfile($('#profile'));
        	break;
        	case "resume":
        		addResume($('#resume'));
            break;
        	case "portfolio":
        		addPortfolio($('#portfolio'));
        	    // Run the show!
        	    filterList.init();
        	    break;
            break;
        	case "blog":
        		addBlog($('#blog'));
        		break;
            break;
        	case "contact": 
        		addContact($('#contact'));
        		//initialize();
        } 
    };
	   $(".resp-tabs-list li").click(function() {
		   var tab_name = $(this).attr('data-tab-name');
		   updateContent(tab_name);
	        
	    });
    

    
    $(".resp-tabs-list li").click(function() {
        $(this).find(".icon_menu").addClass("icon_menu_active");
        $(".resp-tabs-list li").not(this).find(".icon_menu").removeClass("icon_menu_active");
        
        
    });


    $(".resp-tabs-list li").hover(function() {
        $(this).find(".icon_menu").addClass("icon_menu_hover");
    }, function() {
        $(this).find(".icon_menu").removeClass("icon_menu_hover");
    });

    $("h2.resp-accordion").hover(function() {
        $(this).find(".icon_menu").addClass("icon_menu_hover");
    }, function() {
        $(this).find(".icon_menu").removeClass("icon_menu_hover");
    });


    /* ---------------------------------------------------------------------- */
    /* --------------------------- Scroll tabs ------------------------------ */
    /* ---------------------------------------------------------------------- */

    $(".content_2").mCustomScrollbar({
        theme: "dark-2",
        contentTouchScroll: true,
        advanced: {
            updateOnContentResize: true,
            updateOnBrowserResize: true,
            autoScrollOnFocus: false
        }
    });

    /* ---------------------------------------------------------------------- */
    /* ------------------------- Effect tabs -------------------------------- */
    /* ---------------------------------------------------------------------- */

    var animation_style = 'bounceIn';

    $('ul.resp-tabs-list li[class^=tabs-]').click(function() {
    	
        var tab_name = $(this).attr('data-tab-name');

        
        $('.resp-tabs-container').addClass('animated ' + animation_style);
        $('.resp-tabs-container').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $('.resp-tabs-container').removeClass('animated ' + animation_style);
        });

        $(".content_2").mCustomScrollbar("destroy");
        $(".content_2").mCustomScrollbar({
            theme: "dark-2",
            contentTouchScroll: true,
            advanced: {
                updateOnContentResize: true,
                updateOnBrowserResize: true,
                autoScrollOnFocus: false
            }
        });

            

        return false;
    });


    /* ---------------------------------------------------------------------- */
    /* ---------------------- redimensionnement ----------------------------- */
    /* ---------------------------------------------------------------------- */

    function redimensionnement() {

        if (window.matchMedia("(max-width: 800px)").matches) {
            $(".content_2").mCustomScrollbar("destroy");
            $(".resp-vtabs .resp-tabs-container").css("height", "100%");
            $(".content_2").css("height", "100%");
 
            
        } else {

            $(".resp-vtabs .resp-tabs-container").css("height", "580px");
            $(".content_2").css("height", "580px");
            $(".content_2").mCustomScrollbar("destroy");
            $(".content_2").mCustomScrollbar({
                theme: "dark-2",
                contentTouchScroll: true,
                advanced: {
                    updateOnContentResize: true,
                    updateOnBrowserResize: true,
                    autoScrollOnFocus: false
                }
            });

        }

    }

    // On lie l'événement resize à la fonction
    window.addEventListener('load', redimensionnement, false);
    window.addEventListener('resize', redimensionnement, false);



    /* ---------------------------------------------------------------------- */
    /* -------------------------- Contact Form ------------------------------ */
    /* ---------------------------------------------------------------------- */

    // Needed variables
    var $contactform = $('#contactform'),
            $success = ' Your message has been sent. Thank you!';

    $contactform.submit(function() {
        $.ajax({
            type: "POST",
            url: "php/contact.php",
            data: $(this).serialize(),
            success: function(msg)
            {
                var msg_error = msg.split(",");
                var output_error = '';

                if (msg_error.indexOf('error-message') != -1) {
                    $("#contact-message").addClass("has-error");
                    $("#contact-message").removeClass("has-success");
                    output_error = 'Please enter your message.';
                } else {
                    $("#contact-message").addClass("has-success");
                    $("#contact-message").removeClass("has-error");
                }

                if (msg_error.indexOf('error-email') != -1) {

                    $("#contact-email").addClass("has-error");
                    $("#contact-email").removeClass("has-success");
                    output_error = 'Please enter valid e-mail.';
                } else {
                    $("#contact-email").addClass("has-success");
                    $("#contact-email").removeClass("has-error");
                }

                if (msg_error.indexOf('error-name') != -1) {
                    $("#contact-name").addClass("has-error");
                    $("#contact-name").removeClass("has-success");
                    output_error = 'Please enter your name.';
                } else {
                    $("#contact-name").addClass("has-success");
                    $("#contact-name").removeClass("has-error");
                }


                if (msg == 'success') {

                    response = '<div class="alert alert-success success-send">' +
                            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
                            '<i class="glyphicon glyphicon-ok" style="margin-right: 5px;"></i> ' + $success
                            + '</div>';


                    $(".reset").trigger('click');
                    $("#contact-name").removeClass("has-success");
                    $("#contact-email").removeClass("has-success");
                    $("#contact-message").removeClass("has-success");

                } else {

                    response = '<div class="alert alert-danger error-send">' +
                            '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
                            '<i class="glyphicon glyphicon-remove" style="margin-right: 5px;"></i> ' + output_error
                            + '</div>';

                }
                // Hide any previous response text
                $(".error-send,.success-send").remove();
                // Show response message
                $contactform.prepend(response);
            }
        });
        return false;
    });

    /* ---------------------------------------------------------------------- */
    /* ----------------------------- Portfolio ------------------------------ */
    /* ---------------------------------------------------------------------- */


    var filterList = {
        init: function() {

            // MixItUp plugin
            // http://mixitup.io
            $('#portfoliolist').mixitup({
                targetSelector: '.portfolio',
                filterSelector: '.filter',
                effects: ['fade'],
                easing: 'snap',
                // call the hover effect
                onMixEnd: filterList.hoverEffect()
            });

        },
        hoverEffect: function() {

            // Simple parallax effect
            $('#portfoliolist .portfolio').hover(
                    function() {
                        $(this).find('.label').stop().animate({bottom: 0}, 200);
                        $(this).find('img').stop().animate({top: -30}, 500);
                    },
                    function() {
                        $(this).find('.label').stop().animate({bottom: -40}, 200);
                        $(this).find('img').stop().animate({top: 0}, 300);
                    }
            );

        }

    };

    // Run the show!
    filterList.init();

    /* ---------------------------------------------------------------------- */
    /* ----------------------------- prettyPhoto ---------------------------- */
    /* ---------------------------------------------------------------------- */

    $("a[rel^='portfolio']").prettyPhoto({
        animation_speed: 'fast', /* fast/slow/normal */
        social_tools: '',
        theme: 'pp_default',
        horizontal_padding: 5,
        deeplinking: false,
    });



    /* ---------------------------------------------------------------------- */
    /* ------------------------------ Google Maps --------------------------- */
    /* ---------------------------------------------------------------------- */

    var map;
    function initialize() {
        map = new GMaps({
            div: '#map',
            lat: -37.817917,
            lng: 144.965065,
            zoom: 16

        });
        map.addMarker({
            lat: -37.81792,
            lng: 144.96506,
            title: 'Marker with InfoWindow',
            icon: 'images/pins-map/map-marker.png',
            infoWindow: {
                content: '<p>Melbourne Victoria, 300, Australia</p>'
            }
        });
    	
    }

    /* ---------------------------------------------------------------------- */
    /* --------------------------------- Blog ------------------------------- */
    /* ---------------------------------------------------------------------- */

    // More blog
    $('a.read_m').click(function() {
        var pagina = $(this).attr('href');
        var postdetail = pagina + '-page';

        if (pagina.indexOf("#post-") != -1) {

            $('#blog-page').hide();

            $(postdetail).show();
            $(".tabs-blog").trigger('click');
        }

        return false;

    });

    // More blog
    $('a.read_more').click(function() {
        var pagina = $(this).attr('href');
        var postdetail = pagina + '-page';

        if (pagina.indexOf("#post-") != -1) {

            $('#blog-page').hide();

            $(postdetail).show();
            $(".tabs-blog").trigger('click');
        }

        return false;

    });

    //pagination All
    $('.content-post a').click(function() {
        var pagina = $(this).attr('href');

        if (pagina == "#blog") {

            $('.content-post').hide();
            $('#blog-page').show();
            $(".tabs-blog").trigger('click');

        }

        return false;

    });

    //pagination blog
    $('.content-post #pagination').click(function() {


        var pagina = $(this).attr('href');
        var postdetail = pagina + '-page';

        if (pagina.indexOf("#post-") != -1) {

            $('#blog-page').hide();
            $('.content-post').hide();

            $(postdetail).show();
            $(".tabs-blog").trigger('click');
        }

        return false;

    });


    /* ---------------------------------------------------------------------- */
    /* ---------------------------- icon menu ------------------------------- */
    /* ---------------------------------------------------------------------- */

    $(".resp-tabs-container h2.resp-accordion").each(function(){
			 
			if($(this).hasClass('resp-tab-active')){
				$(this).append("<i class='glyphicon glyphicon-chevron-up arrow-tabs'></i>");
			}else {
				$(this).append("<i class='glyphicon glyphicon-chevron-down arrow-tabs'></i>");
			}
	  });
	  
	   $(".resp-tabs-container h2.resp-accordion").click(function(){
			if($(this).hasClass('resp-tab-active')){
				$(this).find("i.arrow-tabs").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-up");
			}
			
			$(".resp-tabs-container h2.resp-accordion").each(function(){
		 
				if(!$(this).hasClass('resp-tab-active')){
					$(this).find("i.arrow-tabs").removeClass("glyphicon-chevron-up").addClass("glyphicon-chevron-down");
				}
		  });
	  
			
	  });


    /* ---------------------------------------------------------------------- */
    /* -------------------------------- skillbar ---------------------------- */
    /* ---------------------------------------------------------------------- */

    $('.tabs-resume').click(function() {

        $('.skillbar').each(function() {
            $(this).find('.skillbar-bar').width(0);
        });

        $('.skillbar').each(function() {
            $(this).find('.skillbar-bar').animate({
                width: $(this).attr('data-percent')
            }, 2000);
        });

    });

    $('#resume').prev('h2.resp-accordion').click(function() {

        $('.skillbar').each(function() {
            $(this).find('.skillbar-bar').width(0);
        });

        $('.skillbar').each(function() {
            $(this).find('.skillbar-bar').animate({
                width: $(this).attr('data-percent')
            }, 2000);
        });
    });
	
		
	//Change for demo page
    $('input:radio[name=page_builder]').on('change', function() {
		
		$('input:radio[name=page_builder]').each(function () {

			var $this = $(this);
	
			if ($(this).prop('checked')) {
				window.location.replace($this.val());
			}
		});
		
        return false;
    });



});