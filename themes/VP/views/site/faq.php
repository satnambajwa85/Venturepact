<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet" type="text/css" />

<script>
	$(function() {
		
		$( ".accordion" ).accordion({heightStyle: "content" });
		$( ".tabs" ).tabs();
		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});
	</script>
<!-- Top outer -->
        <div id="top_outer">
            <div id="top_wrapper">
                <div class="banner">
                    <div class="logo_outer"><a href="<?php echo $this->createUrl('site/index');?>"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/vp-logo.png" alt="Vp_Logo" border="0" /></a></div>
                    <div class="top_menu_outer">
                     <!--  <ul class="top_nav_faq">
                            <li><a href="<?php echo $this->createUrl('site/index');?>">For Developers </a></li>
                            <li><span>|</span></li>
                            <li><a href="<?php echo $this->createUrl('site/companies');?>">For Companies</a></li>
                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Top outer end -->     
        
        <!-- mid form outer  --> 
        <!--<div class="dashprofile_main_outer">
            <div class="dashprofile_main_inner">
                <div class="dashprofile_text"> Welcome User</div>
            </div>
        </div>
        <div class="color_strip_outer">
        	<div class="color_strip_inner"></div>
        </div> -->
        
        <!-- content outer  -->
        <div class="wrap_color">
        <div class="faq_main">
            <div class="faq_main_inner">
                <div class="faq_main_inner_content">
                    <div class="faq_title">FAQ's</div>
                    <div style=" float:left; width:100%;">
<div class="tabs">
	<ul>
        <li><a href="#tabs-2">For Developers</a></li>
		<li><a href="#tabs-1">For Companies</a></li>
		
		
	</ul>
	<div id="tabs-1">
   
    <h2>Overview of VenturePact</h2>
   
    <div class="accordion">
    <h3>Can you give me a quick overview of the process?</h3>
	<div>
   	<ol> 
<li>Once you are listed as an employer, developers will start applying to your listed jobs. We will screen these applications and forward you the most promising candidates. We screen thoroughly for background, technical and communication proficiency and fitness to work with a western team. </li>
<li>Once you get the screened leads, you can interview them on Skype/hangout and further assess using your company's interview practices.</li>
<li>Once you accept a developer, you can work with him risk free for 2 weeks. Meaning the developer has 2 weeks to truly prove his worth.
Thereafter, you can work with him/her as you would with any developer on-site.</li>
</ol>
    </div>
	<h3>Can I hire developers part time or on a contractual basis?</h3>
	<div>
   	 While we are a platform for a full time hiring, we understand that sometimes your needs may be different. We are happy to work with you to figure out how we can be helpful in those scenarios since many of the developers who apply are flexible.
    </div>
	<h3>Where are the developers located? What about equipment?</h3>
	<div>The developers can be located anywhere in the world and can choose to work from our partner coworking spaces or from home. The rent for co-working spaces (which is nominal) will be paid along with the salary.<br/>
    <br/>
    While remote developers will usually have their own equipment, we suggest you provide them the same kind of equipment allowances that you would to an on-site employee.

</div>
	<h3>What happens after you send me leads?</h3>
	<div>After we vet the candidates, you can invite the developers we approved to an interview. You may interview the candidates as you wish. Once they accept the offer, we will integrate with your payroll system and the developer can start work immediately.</div>
    <h3>How does the trial period work? Is it truly risk free?</h3>
	<div>
   	 During the first 2 weeks you can work with a developer that you choose at no risk. Meaning if you don't have a good experience you neither pay for those 2 weeks nor our fee. If you do choose to continue working with the developer, only then will we bill you for that period and you can continue the engagement long term. Also, there is no fee for posting a job or receiving the leads. 

    </div>
    <h3>What happens if I don't want the developer anymore?</h3>
	<div>
   	 It usually takes between 1-3 months for a remote developer to really settle into your organization's practices and culture. So, it's good to see him or her through the first three months, even if the remote developer's productivity is not as high as expected early on. After that period, if it is still not working out, you may relieve the developer as you would relieve any other employee. <br/>

Finding the right formula and building the right habits for remote work takes effort and time. You and the company have to embrace the remote employees and communicate well and often for this to work especially during the first few weeks. After you figure out how to work with remote developers it can become extremely valuable and a competitive advantage for your company as you'll be able to hire much faster and on board new developers quicker than most companies. The additional time investment during the first few months with the first remote developer will pay off in the future!

    </div>
    <h3>How do we onboard remote developers to my team and work culture?</h3>
	<div>
   	 Essentially the same way you on-board your local employees. From this perspective, we suggest you don't differentiate your onsite employees with the remote ones at all.<br/>

For technical onboarding, we have a time tested process that many of our companies have used in the past. Its optimized so that training the developers and bringing them up to speed is efficient and less time consuming for your lead developer.

    </div>
    <h3>Can I bring a developer on-site?</h3>
	<div>
   	 Yes, very much. We actually recommend that remote developers meet their on site counterparts every few months and especially in the beginning stages. However, there has hardly been any instance where a company has felt the need to retain the developer permanently on-site. 
    </div>
    <h3>What kind of jobs are posted on VenturePact?</h3>
	<div>
   	 For now, we are only accepting web design and software development jobs. In the future, we may support other job profiles as well. 

    </div>
    <h3>How many developers can I hire? What if a position opens up in the future?</h3>
	<div>
   	 You can hire as many remote developers as you wish. If you have a new opening, add information regarding your new opening on the VenturePact site and you will go through a similar vetting and onboarding process.  

    </div>
    <h3>How do I propagate culture?</h3>
	<div>
   	 Since you are hiring the developer full time it is very important that the developer feel that he or she is part of your company culture. This keeps them motivated and excited to work with you. We recommend various communication processes that are included in onboarding to help manage and build relationships. You can also fly remote developers to visit your local team and build a stronger relationship.  

    </div>
    <h3>Why VenturePact?</h3>
	<div>
   	 We help you benefit from the great advantages of global talent without having to deal with the overhead that comes with remote work. The main challenge that we focus on is finding and vetting developers to find the right talent for your company efficiently. 
    </div>
    <h3>How do you screen the inbound applications? What criteria do you assess on?</h3>
	<div>
   	Before inviting anyone to the marketplace, we vet for:
<ul> 
<li><strong>Technical Talent:</strong> We use a mixture of coding challenges, exploratory debugging, code reviews and paired programming interviews to screen for technical and analytical skills. We also assess their open source contributions and check their references.
</li>
<li><strong>English:</strong> Our application consists of a few video questions. We also conduct interviews to ensure fluency in spoken and written English.
</li>
<li><strong>Remote work and Startup culture:</strong> We believe its important to ensure that a developer can work effectively as a remote employee. By reviewing candidate's past work experience, conducting interviews, and, working with them on paired programming tasks we judge whether a developer is confident, motivated and a good candidate for remote work. 
</li>
</ul>
    </div>
    
</div>
<h2>Payments and Legal</h2>
<div class="accordion">
	<h3>How do payments work?</h3>
	<div>
   	 VenturePact facilitates payments so you do not have to worry about the logistics of paying your international remote employees. You pay us either by check or online and our payment infrastructure will dispense the payments to the employees right away. We can even integrate with your payroll service provider. We currently accept all major credit cards, bank accounts (with ABA routing), bank wires, and PayPal.<br/>

You pay VenturePact the developers salary plus 1% of their annual salary each month that you employ the developer for the first 2 years. Thereafter, we facilitate payments for no additional fee. 

    </div>
	<h3>You said you make the payments to the developers. Are they our employee or yours?</h3>
	<div>The developers hired on the platform are solely your employees. While we help manage the logistics i.e finding, vetting, paying and housing the developer, for all management purposes, the developers are part of your team.
</div>
	<h3>Who owns the legal rights to technology developed by an engineer hired on VenturePact?</h3>
	<div>The client. Any engineer hired on VenturePact is not different from an engineer already on your team.
</div>
    <h3>How do you ensure that IP is protected?</h3>
	<div>
   	An engineer hired on VenturePact is no different from any engineer on your team in terms of legal status and their ownership of the technology you create. Any non compete or non disclosure agreements are made between you and the developer. We do provide forms and legal documents in order to facilitate and streamline these processes. You're welcome to use your own when entering into an agreement with an engineer.
</div>
   
</div>

<h2>Remote work</h2>
<div class="accordion">
	<h3>Why should I hire remotely?</h3>
	<div>
   	 Because the best people are not necessarily living in a 20 mile radius of your HQ and many talented people cannot easily move. Through remote work, you can access global talent markets and can find the right person for the job much faster.<br/><br/>

Many tech companies like StackOverflow, Automattic, Github etc all employ cross border remote talent and they believe that not only does it allow them to hire the best people, but it also leads to a better culture and a more productive workforce.<br/><br/>

No one can argue the case for remote work better than Stack Overflow:<br/>
<a href="http://blog.stackoverflow.com/2013/02/why-we-still-believe-in-working-remotely/" id="docs-internal-guid-33765566-664f-2392-307a-2a427f022004" target="_blank">http://blog.stackoverflow.com/2013/02/why-we-still-believe-in-working-remotely/</a></div>
	<h3>When should I hire a remote developer?</h3>
	<div>Generally speaking if you are looking to hire developers, you can hire remotely. If you are not sure that this is the right decision for your company, then try hiring one developer and test it out because our first two weeks are risk free.<br/><br/>

If you have no prior experience managing remote teams then it will take some time, usually a few weeks for your team to get used to it and incorporate the right habits. In this case, we recommend you start off with one developer. Once you feel comfortable with one remote developer, then you can start hiring more. To help accelerate the onboarding phase, we have documentation and training material that discusses best practices and our past experiences with remote work. 
<br/><br/>
If you are hiring your CTO remotely, you have to be very careful. You need to have a strong personal relationship with your CTO and you need to be able to easily communicate and speak to them at any time. It is possible, companies have done it successfully, but you need to pay extra special attention here. 

</div>
	
   
</div>


</div>
<div id="tabs-2">
<div class="accordion">
	<h3>Why should I work remotely?</h3>
	<div>You can work for the best companies in the world and no longer have to limit yourself to local companies. You get to work on cutting edge technologies with the best entrepreneurs and hackers in the world.<br/><br/>

Working remotely also gives you the flexibility to work from home. This provides for a better work life balance, no harsh commute, no office politics and a better lifestyle in general.
</div>
	<h3>How do salary payments work? Who pays me and when do I get paid?</h3>
	<div>You get paid every month that you are employed full time by a company on our platform. We help facilitate the international payments made by the company. Salaries are extremely competitive. 

</div>
	<h3>How long am I employed for?</h3>
	<div>After the initial testing stages, you will be employed permanently and full time. In the past, the best developers have remained with the companies for many years. These are the developers who are self motivated, respect deadlines, communicate well and consistently deliver quality work.
</div>
	<h3>How long is the interview process and how does it work?</h3>
	<div>Since you are working with some of the best companies in the world, the interview process is thorough. After a few technical and fluency tests, you may receive an interview. The best hackers will then join the marketplace and receive a final interview from the startup. 

</div>
	<h3>Does it cost me anything to use VenturePact?</h3>
	<div>Not a dime. You don't pay VenturePact either for the placement or for the monthly payment transactions. All expenses are covered by the employer.
</div>
	<h3>Why VenturePact?</h3>
	<div>VenturePact gives you access to the best companies in the world. You are guaranteed secure, timely and highly competitive salaries and enjoy the flexibility of working anywhere in the world. 

</div>
	<h3>What kind of jobs are posted on VenturePact?</h3>
	<div>For now, we are only accepting web design and software development jobs. In the future, we may support other job profiles as well. 

</div>
</div></div>

	
</div>
</div>
                </div> 
            </div>
        </div>
        </div>
        <!-- content outer end -->
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/modernizr.custom.29473.js"></script>