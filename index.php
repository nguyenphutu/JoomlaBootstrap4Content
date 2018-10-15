<?php
	defined('_JEXEC') or die;
	$document = JFactory::getDocument();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">    
    <jdoc:include type="head"/>
	<!-- Bootstrap Core CSS -->
	<?php 
		$document->addStyleSheet('templates/' . $this->template .'/css/bootstrap.min.css');
		$document->addStyleSheet('templates/' . $this->template .'/css/font-awesome/css/font-awesome.min.css');
		$document->addStyleSheet('templates/' . $this->template .'/css/style.css');
	?>
</head>
<body>
    <div class="container">
		<!-- top logo and banner -->
		<div class="row justify-content-between">
			<div class="col-3">
				<jdoc:include type="modules" name="logo" style="none"/>
			</div>
			<div class="col-4">
				<!-- right banner -->
				<jdoc:include type="modules" name="right-banner" style="none"/>
			</div>
		</div>
		<!-- menu -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Logo</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<jdoc:include type="modules" name="menu" style="none"/>	
				
				<ul class="nav navbar-nav my-2 my-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo JRoute::_('index.php?option=com_users&view=login'); ?>">Login</a>
					</li>
				</ul>				
			</div>
		</nav>
		<!-- Header with Background Image -->
		<header>
			<jdoc:include type="modules" name="top-banner" style="none"/>			
		</header>

		<div id="main-content">
			<div class="row">
				<div class="col-sm-8">
					<!-- Content for component -->
					<jdoc:include type="message" />
					<jdoc:include type="component" />
					<hr>
				</div>
				<div class="col-sm-4">
					<jdoc:include type="modules" name="info-right" style="none"/>
				</div>
			</div>
		</div>
		<div id="footer-content">
			<div class="row">
				<div class="col-sm-12 my-4">						
					<jdoc:include type="modules" name="content-3" style="none"/>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 my-4">
					<jdoc:include type="modules" name="content-4" style="none"/>
				</div>
				<div class="col-sm-6 my-4">
					<jdoc:include type="modules" name="content-5" style="none"/>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-sm-10 my-4">
					<jdoc:include type="modules" name="content-6" style="none"/>
				</div>
			</div>
		</div>
		<div id="footer-info">
			<div class="row">	
				<div class="col my-4">
					<jdoc:include type="modules" name="footer-1" style="none"/>
				</div>
				<div class="col my-4">
					<jdoc:include type="modules" name="footer-2" style="none"/>
				</div>
				<div class="col my-4">
					<jdoc:include type="modules" name="footer-3" style="none"/>
				</div>
				<div class="col my-4">
					<jdoc:include type="modules" name="footer-4" style="none"/>
				</div>		
			</div>	
		</div>		
	</div>		
	<!-- Footer -->
	<footer class="my-4">
		<jdoc:include type="modules" name="footage" style="none"/>
	</footer>
	<!-- jQuery -->
	<?php 
		$document->addScript('templates/' . $this->template . '/js/jquery.min.js');
		$document->addScript('templates/' . $this->template . '/js/bootstrap.min.js');
	?>		
</body>
</html>
