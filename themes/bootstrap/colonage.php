

<?php $this->inc('elements/header.php'); ?>
		
		   
    
		<div class="row">
		    <div class="span4">
		        
				<div class="hero-unit">
				 <?php
				 $a = new Area('col 1');
				  $a->display($c);
				  ?>
				</div>
		
			</div>
			 <div class="span4">
		       <div class="hero-unit">
				 <?php
				 $a = new Area('col 2');
				  $a->display($c);
				  ?>
				</div>
			</div>
			 <div class="span4">
		        <div class="hero-unit">
				 <?php
				 $a = new Area('col 3');
				  $a->display($c);
				  ?>
				</div>
			</div>
		</div>
		<div class="row">
		    <div class="span12">
		       <div class="hero-unit">
				 <?php
				 $a = new Area('bas 12');
				  $a->display($c);
				  ?>
				</div>
			</div>
			 
		</div>

			
		      
			
				
<?php $this->inc('elements/footer.php'); ?>