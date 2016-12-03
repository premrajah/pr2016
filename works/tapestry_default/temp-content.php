<div class="container-box well">
	<div class="row">
  	
		<div class="col-xs-2">
			<img src="img/placeholder.png" class="img-space">

		</div>
  	<div class="col-xs-10 c-area">
  		<h3><span class="c-title">Title! (dynamic content)</span></h3>
  		<span class="c-date"><?php echo  " " . date('Y-m-d') ." " . date('H:i:s', time() - date('Z')); ?></span> 
  		<span class="c-name">Firstname Surname</span>

  		<hr>
			
			<span class="label1 label label-default">Dora the Explorer</span>
			<span class="label2 label label-primary">Assessements</span>
  	</div>
  
	</div>
</div>

<style type="text/css" media="screen">

	.container-box {
		max-height: 200px;
		margin-top: 40px;
		margin-bottom: 40px;
		border: 1px solid rgba(0, 0, 0, 0.2);
		box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.27), 0px 0px 4px rgba(0, 0, 0, 0.16) inset;
		border-radius: 6px;
		border-left: 6px solid #B7B7B7;
	}
	.c-area hr {

		margin-top: 0;
	}

	.c-title {
		color: #225985;
		font-size: 22px;
		font-weight: bold;
	}
	.c-date {
		color: #777;
		font-size: 13px;
	}
	.c-name {
		color: #225985;
		font-size: 13px;
		font-weight: bold;
	}

	.label1 {

		margin-right: 8px;

	}

	.label {

		width: auto;
		height: 60px;
	}

@media only screen and (max-width : 992px) {

	.container-box {
		height: 260px;
		max-height: 300px;
	}

	.col-xs-2 {
		width: 40%;
	}

}

@media only screen and (max-width : 768px) {

	.container-box {

		height: 260px;
		max-height: 300px;
	}

}

@media only screen and (max-width : 480px) {

	.container-box {
		height: 310px;
		max-height: 350px;
	}

	.col-xs-2 {
		width: 25%;
	}

	.label1 {

		margin-bottom: 8px;
	}

}

</style>