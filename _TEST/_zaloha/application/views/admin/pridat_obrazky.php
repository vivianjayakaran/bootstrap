<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2><?php echo $basicInfo["title"] ?></h2>
			
			<ul class="shortcut-buttons-set">
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<div class="clear"></div> <!-- End .clear -->
			<?php 

				if($homeInfo->text == ""){ 
					echo 	'<div class="notification attention png_bg">
							<a href="#" class="close"><img src="'.base_url().'img/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>Pozor ! Úvodný text je prázdny. </div>
							</div>';
				}

				if($this->session->flashdata('error')){ 
					echo 	'<div class="notification error png_bg">
							<a href="#" class="close"><img src="'.base_url().'img/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>'.$this->session->flashdata('error').'</div>
							</div>';
				}	

				if($this->session->flashdata('success')){ 
					echo 	'<div class="notification success png_bg">
							<a href="#" class="close"><img src="'.base_url().'img/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>'.$this->session->flashdata('success').'</div>
							</div>';
				}		
			?>

			<?php
				if(validation_errors()){
								echo 	'<div class="notification attention png_bg">
										<a href="#" class="close"><img src="'.base_url().'img/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
										<div>'.validation_errors().'</div>
										</div>';
				}
				if($this->session->flashdata('success_2')){ 
									echo 	'<div class="notification success png_bg">
											<a href="#" class="close"><img src="'.base_url().'img/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
											<div>'.$this->session->flashdata('success_2').'</div>
											</div>';
				}
				if($this->session->flashdata('success_3')){ 
									echo 	'<div class="notification success png_bg">
											<a href="#" class="close"><img src="'.base_url().'img/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
											<div>'.$this->session->flashdata('success_3').'</div>
											</div>';
				}
			?>

<div class="content-box"><!-- Start Content Box -->
					
					<div class="content-box-header">
						
						<h3>Banner upload</h3>
					</div>
					<div class="content-box-content">	

					<div id="adminBannerContainer">
						<?php foreach ($banner as $key => $value): ?>
							
							<div id="oneBanner">
								
								<?php  
									echo '<a href="'.$value->link.'" target = "_blank" ><img src="'.base_url().$value->image.'" class="adminHomeBanner"></img>
									</a>';

									echo '<a href="'.base_url().'media/deleteImageByRow/banner/'.$value->id.'?confirm=true" title="Určite chcete túto položku ?" class="confirm" id="deleteButton">
										<img src="'.base_url().'img/icons/cross.png" alt="Delete" />
									</a>';
								?>	

							</div>

						<?php endforeach ?>
					</div>
					<div class="clear"></div> <!-- End .clear -->
					<h3>Pridať banner</h3>
					<?php	

						$submit = Array (
							"name" => "submit", 
							"value" => "Ulož", 
							"class" => "button",
						);

						$fileUpload = array (
							"type" => "file",
							"name" => "subor",
							"value"=> "subor"
						);

						$link = array(
								'name'		=> 'link',
								'id'		=> 'link',
								'column'	=> 'link',
								'autocomplete' => 'off',
								'class'		=> 'text-input small-input',
						);

						echo form_open_multipart("media/addBanner/banner/image"); 
						
						echo form_upload($fileUpload);

						echo '</br></br>';

			           	echo '<label>Link:</label>';

						echo form_input($link);
									            
						echo '</br></br>';

						echo form_submit($submit);
						echo form_close();
					?>
				</div> <!-- End .content-box -->
</div> <!-- End .content-box -->
<div class="clear"></div> <!-- End .clear -->