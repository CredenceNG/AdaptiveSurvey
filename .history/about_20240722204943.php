<?php 
	/* Copyright 2018 Atos SE and Worldline
	 * Licensed under MIT (https://github.com/atosorigin/DevOpsMaturityAssessment/blob/master/LICENSE) */
	
	$isForm = FALSE;
	$activePage = 'About';
	
	require 'header.php';

	function RenderTwitterLink($URL)
	{
		?>
		<a style="color:#00A3F3" href="<?=$URL?>" target="_blank">
			<span class="fa-stack fa-1x">
				<i class="fas fa-square fa-stack-2x"></i>
				<i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
			</span>
		</a>
		<?php
	}
	
	function RenderLinkedInLink($URL)
	{
		?>
		<a style="color:#0078B5" href="<?=$URL?>" target="_blank">
			<span class="fa-stack fa-1x">
				<i class="fas fa-square fa-stack-2x"></i>
				<i class="fab fa-linkedin-in fa-stack-1x fa-inverse"></i>
			</span>
		</a>  
		<?php
	}
	
?>

	<div class="container-fluid">
	<div class="row">
	<div class="col-xl-9 col-lg-11 m-2 pb-4 rounded text-center text-light mx-auto">
	

			<section class="jumbotron text-center bg-dark border-primary border">
				<div class="container">
					<h1 class="jumbotron-heading">Improve Your Teams Adaptability</h1>
					<p class="lead">This online Survey will help you understand your current strengths and weaknesses and then recommend resources that can support you in taking the next steps on your journey.</p>
					<p>
						<a href="<?='section-' . SectionNameToURLName($survey->sections[0]['SectionName'])?>" class="btn btn-primary">Start the Questionnaire</a>
					</p>
				</div>
			</section>
		

			<div class="row mt-4">
				
				<div class="col-lg-2"></div>
				<div class="col-lg-8">
					
				</div><!-- /.col-lg-12 -->
				<div class="col-lg-2"></div>
			</div><!-- /.row -->
		
		
	
	</div><!-- /.col-lg-8 -->
	
	</div><!-- /.row -->
	
	</div><!-- /.container -->
	
<?php
	
	require 'footer.php';
	
?>		

	