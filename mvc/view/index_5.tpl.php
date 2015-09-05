<!DOCTYPE html>
<html>
	<head>
		<?php include "_head.tpl.php"; ?>
	</head>

	<body>
		<?php include "_header.tpl.php"; ?>
		<?php $view = 'index_5'; ?>
		<div class= "content-carusel">
			<div id="mycarousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="item active">
						<img src="../../img/misteryhome.jpg" alt="" class="img-responsive">
					   	<div class="carousel-caption">
					   		Welcome to the best collaborative writing book!
					   		<a href="#" class="btn btn-lg btn-primary" title="Read the book">Read the book</a>
					   	</div> 
					</div>
				</div>
			</div>
		</div>
		<div class="middle container">
			<h2>How does it work?</h2>
			<div class="row bs-wizard col-md-offset-1">			   
				<div class="col-xs-2 bs-wizard-step complete">
					<div class="text-center bs-wizard-stepnum">Step 1</div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center">propose ideas</div>
				</div>

				<div class="col-xs-2 bs-wizard-step complete">
					<div class="text-center bs-wizard-stepnum">Step 2</div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center">vote an idea</div>
				</div>

				<div class="col-xs-2 bs-wizard-step complete ">
					<div class="text-center bs-wizard-stepnum">Step 3</div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center">write the book</div>
				</div>

				<div class="col-xs-2 bs-wizard-step complete">
					<div class="text-center bs-wizard-stepnum">Step 4</div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center">choose a title</div>
				</div>
				<div class="col-xs-2 bs-wizard-step active">
					<div class="text-center bs-wizard-stepnum">Step 5</div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center">enjoy the glory</div>
				</div>
			</div>
			<div class = "vote">
				<input type = "Submit" class = "btn btn-success" Name = "Submit" value = "Click here to vote!" />
			</div>
		</div>
		<?php include "_footer.tpl.php"; ?>   
	</body>
</html>

  