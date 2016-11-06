<?php
$rambo_theme_options = theme_data_setup();
  $current_options = wp_parse_args(  get_option( 'rambo_theme_options', array() ), $rambo_theme_options );
if($current_options['home_projects_enabled']==true)
{
?>
<div class="portfolio_main_content">	
	<div class="container">	
		<div class="row-fluid featured_port_title">
			<?php if($current_options['project_heading_one']) { ?>
			<h1><?php echo $current_options['project_heading_one']; ?></h1>
			<?php } ?>
			<?php if($current_options['project_tagline']) { ?>
			<p><?php echo $current_options['project_tagline']; ?></p>
			<?php } ?>
		</div>
	
		<div class="row-fluid">
			
			<div class="span3 featured_port_projects">
				<div class="thumbnail">
				<?php if($current_options['project_one_thumb']) { ?>
					  <img class="img-projects" src="<?php echo $current_options['project_one_thumb']; ?>">
				<?php } ?>
					
					  <div class="featured_service_content">
						<?php if($current_options['project_one_title']) { ?>
						<h3><a href="#"><?php echo $current_options['project_one_title']; ?></a></h3>
						<?php } ?>
						<?php if($current_options['project_one_text']) { ?>
						<p><?php echo $current_options['project_one_text']; ?></p>
						<?php } ?>
					  </div>
				</div>
			</div>
			<div class="span3 featured_port_projects">
				<div class="thumbnail">
				<?php if($current_options['project_two_thumb']) { ?>
					  <img class="img-projects" src="<?php echo $current_options['project_two_thumb']; ?>">
				<?php } ?>
					
					  <div class="featured_service_content">
						<?php if($current_options['project_two_title']) { ?>
						<h3><a href="#"><?php echo $current_options['project_two_title']; ?></a></h3>
						<?php } ?>
						<?php if($current_options['project_two_text']) { ?>
						<p><?php echo $current_options['project_two_text']; ?></p>
						<?php } ?>
					  </div>
				</div>
			</div>
			<div class="span3 featured_port_projects">
				<div class="thumbnail">
				<?php if($current_options['project_three_thumb']) { ?>
					  <img class="img-projects" src="<?php echo $current_options['project_three_thumb']; ?>">
				<?php } ?>
					
					  <div class="featured_service_content">
						<?php if($current_options['project_three_title']) { ?>
						<h3><a href="#"><?php echo $current_options['project_three_title']; ?></a></h3>
						<?php } ?>
						<?php if($current_options['project_three_text']) { ?>
						<p><?php echo $current_options['project_three_text']; ?></p>
						<?php } ?>
					  </div>
				</div>
			</div>
			<div class="span3 featured_port_projects">
				<div class="thumbnail">
				<?php if($current_options['project_four_thumb']) { ?>
					  <img class="img-projects" src="<?php echo $current_options['project_four_thumb']; ?>">
				<?php } ?>
					
					  <div class="featured_service_content">
						<?php if($current_options['project_four_title']) { ?>
						<h3><a href="#"><?php echo $current_options['project_four_title']; ?></a></h3>
						<?php } ?>
						<?php if($current_options['project_four_text']) { ?>
						<p><?php echo $current_options['project_four_text']; ?></p>
						<?php } ?>
					  </div>
				</div>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span3 featured_port_projects">
				<div class="thumbnail">
					<img id="img-project-1" class="img-projects" src="" />
				</div>
				<div class="featured_service_content">
					<h3>COMPANY VISIT</h3>
				</div>
			</div>
			<div class="span3 featured_port_projects">
				<div class="thumbnail">
					<img id="img-project-2" class="img-projects" src="" />
				</div>
				<div class="featured_service_content">
					<h3>BENCHMARKING</h3>
				</div>
			</div>
			<div class="span3 featured_port_projects">
				<div class="thumbnail">
					<img id="img-project-3" class="img-projects" src="" />
				</div>
				<div class="featured_service_content">
					<h3>PELATIHAN CV DAN INTERVIEW</h3>
				</div>
			</div>
			<div class="span3 featured_port_projects">
				<div class="thumbnail">
					<img id="img-project-4" class="img-projects" src="" />
				</div>
				<div class="featured_service_content">
					<h3>I-CSR</h3>
				</div>
			</div>

		</div>
	</div>
</div>
<?php } ?>