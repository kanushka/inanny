<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>iNanny</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->load->view('common/commonHeader'); ?>
</head>

<style>
	.firstContent {
			margin-top: 150px;
		}

	</style>

<body>
	<?php $this->load->view('common/commonTopNav.php'); ?>

	<!-- preloader -->
	<?php $this->load->view('common/roundPreloader.php');?>

	<div class="container firstContent">

		<div class="row">

			<div class="col s12 m4">
				<div class="center-align" id='infoContainer'>

					<!-- info card -->
					<div class="col s12">
						<div class="card-panel grey lighten-5 z-depth-1">
							<div class="row valign-wrapper">
								<div class="col s2">
									<i id="alertIcon" class="small material-icons">photo_size_select_large</i>
								</div>
								<div class="col s10 left-align">
									<span class="black-text">
										Click outside the green box and drag pointer to resize the safe zone
									</span>
								</div>
							</div>
						</div>
					</div>

					<!-- info card -->
					<div class="col s12">
						<div class="card-panel grey lighten-5 z-depth-1">
							<div class="row valign-wrapper">
								<div class="col s2">
									<i id="alertIcon" class="small material-icons">fullscreen</i>
								</div>
								<div class="col s10 left-align">
									<span class="black-text">
										Click inside the green box and drag pointer to move safe zone
									</span>
								</div>
							</div>
						</div>
					</div>

					<!-- info card -->
					<div class="col s12">
						<div class="card-panel grey lighten-5 z-depth-1">
							<div class="row valign-wrapper">
								<div class="col s2">
									<i id="alertIcon" class="small material-icons">fullscreen</i>
								</div>
								<div class="col s10 left-align">
									<span class="black-text">
										Click inside the green box and drag pointer to move safe zone
									</span>
								</div>
							</div>
						</div>
					</div>

					<!-- info card -->
					<div class="col s12">
						<div class="card-panel grey lighten-5 z-depth-1">
							<div class="row valign-wrapper">
								<div class="col s4">
									<a id="resetBtn" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">games</i></a>
								</div>
								<div class="col s8 left-align">
									<span class="black-text">
										Reset safe zone to default positions
									</span>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
			<div class="col s12 m8">
				<div class="z-depth-4 responsive-video center-align" id='videoContainer'></div>
			</div>

		</div>

	</div>

</body>

<?php $this->load->view('common/commonFooter'); ?>

<script type="text/javascript">
	$(document).ready(function () {

	});

</script>

<!-- libraries for view skeleton adn identify face -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/p5/p5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/p5/addons/p5.dom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/p5/addons/p5.sound.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/ml5/ml5.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/libs/fabric/fabric.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>js/user/playground-video.js?<?=$this->config->item('js_version');?>"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/user/playground.js?<?= $this->config->item('js_version'); ?>"></script>

</html>