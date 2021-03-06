<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
        <?php $cakeDescription = __d('cake_dev', 'CakePHP BackOffice');?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css( array('bootstrap','font-awesome/css/font-awesome','lineicons/style','gritter/css/jquery.gritter','style','style-responsive') );                
                echo $this->Html->script( array('jquery') );    
                
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

        <div id="login-page">
	  	<div class="container">                    
                    <div class="users form">                        
                      <?php echo $this->Form->create('User',array('class'=>'form-login')); ?>                          
		        <h2 class="form-login-heading">Sign in</h2>
		        <div class="login-wrap">
                            <?php echo $this->Form->input('username',array('class'=>'form-control','placeholder' => __('Username'),'label'=> false));?>
                            <br/>
                            <?php echo $this->Form->input('password',array('class'=>'form-control','placeholder' => __('Password'),'label'=> false));?>
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> <?php echo __('Forgot Password?');?></a>		
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> <?php echo __('SIGN IN');?></button>

                            <div>&nbsp;</div>
                            <?php if($flash = $this->Session->flash()) { ?>
                                <div class="alert alert-danger text-center"><?php  echo $flash; ?></div>   
                            <?php } ?>		
		        </div>				          
		
		      <?php echo $this->Form->end();  ?>	  	
	  	
	  	</div>
	  </div>

          <!-- Modal -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Forgot Password ?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Enter your e-mail address below to reset your password.</p>
                            <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                            <button class="btn btn-theme" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
          <!-- modal -->  
                
	<?php 
            echo $this->Html->script( array('jquery-1.8.3.min','bootstrap.min.js','jquery.dcjqaccordion.2.7','jquery.scrollTo.min','jquery.nicescroll','jquery.sparkline','common-scripts','jquery.gritter','gritter-conf','sparkline-chart','zabuto_calendar') );    
        ?>
                
</body>
</html>
