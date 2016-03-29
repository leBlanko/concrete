<?php $this->inc('elements/header.php'); ?>

	<div class="slider">
		<div class="slider_cont">
			<!-- Separater -->
			<div class="separater_hd"></div>
			
			<!-- SLIDER IMAGE -->
			<div class="slider_image">
				<?php
				$a = new Area('Contenu');
				$a -> display($c);
				?>
			</div><!-- END OF SLIDER IMAGE DIV -->

		</div>
	
	</div><!-- END OF SLIDER DIV -->

	<div class="container_12">

		<div class="grid_4 logic">
				<?php
				$a = new Area('Col1');
				$a -> display($c);
				?>

		</div><!-- END OF LOGIC DIV -->


		<div class="grid_4 solution">
				<?php
				$a = new Area('Col2');
				$a -> display($c);
				?>
		</div><!-- END OF SOLUTION DIV -->


		<div class="grid_4 culture">
				<?php
				$a = new Area('Col3');
				$a -> display($c);
				?>
		</div><!-- END OF LEARN MORE DIV -->
			<div class="clear"></div>

		</div><!-- AND OF CULTURE DIV -->

		<div class="clear"></div>
		<!-- Separater -->
		<div class="sep"></div>



		<!--************************************************************-->



		<div class="grid_4 social_con">
				<?php
				$a = new Area('Social');
				$a -> display($c);
				?>
		<div class="clear"></div>
		</div><!-- END OF SOCIAL CONNECTIONS DIV -->

		<div class="grid_4 contact">
				<?php
				$a = new Area('Contact');
				$a -> display($c);
				?>
			
		</div><!-- END OF CONTACT DIV -->

		<div class="grid_4 news">
				<?php
				$a = new Area('Actualite');
				$a -> display($c);
				?>
		</div><!-- END OF NEWS UPDATES DIV -->
	</div><!-- END OF CONTAINER DIV -->
	<div class="clear"></div>

<?php $this->inc('elements/footer.php'); ?>