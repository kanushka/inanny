<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$CI =& get_instance();
if( ! isset($CI))
{
    $CI = new CI_Controller();
}
$CI->load->helper('url');

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>404 Page Not Found</title>

	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/materialize.css" media="screen,projection" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
		.primary-btn-color {
			background-color: #388e3c;
		}

		.primary-btn-color:hover {
			background-color: #2e7d32;
		}

	</style>
</head>

<body>
	<div class="row" style="margin-bottom: 0px;">
		<div class="col s12" style="height: 50vh;  background-image: radial-gradient(50% 100%, #4caf50,50%, #388e3c 69%, #2e7d32 100%); display: flex; align-items: center; justify-content: center; flex-direction: column;">
			<p style="font-size: 120px; color: #fff; margin-top: 10px; margin-bottom: 0px;">404</p>
			<p style="font-size: 48px; color: #fff; margin-top: -20px; margin-bottom: 0px;">OOPS,</p>
			<p style="font-size: 24px; color: #fff; margin-top: 10px; text-align:center;">Sorry, we can't seem to find the page
				you're looking for</p>
		</div>
	</div>
	<div class="row" style="margin-bottom: 0px;">
		<div class="col s12 m12 l10 offset-l1 xl6 offset-xl3" style="height: 50vh; display: flex; align-items: center;  flex-direction: column;">
			<p style="font-size: 18px; margin-top: 60px; color: #4A4A4A; text-align: center;">You may have typed the address
				incorrectly or you may have used an outdated link. Not to worry you can go back to our home page by clicking the
				below button</p>
			<a class="waves-effect waves-light btn-large primary-btn-color" href="<?php echo base_url(); ?>">Back to home page</a>
		</div>
	</div>
</body>

</html>
