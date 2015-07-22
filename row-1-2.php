<?php

?>
<div id="section-1" class="section">
	<div id="section-1-heading" class="section-heading">
		<?php echo danielcowen_display_meta( 1, 'Section')->post_title; ?>
	</div><!-- .section-heading -->	
	<div id="section-1-content" class="section-content">
		<div class="4-columns">
				<?php
                danielcowen_column( 'A' );
				danielcowen_column( 'B' );
				danielcowen_column( 'C' );
				danielcowen_column( 'D' );
                ?>
		</div><!--.4columns-->
	</div><!-- #section-1-content -->	
</div><!-- #section-1 -->

<div id="section-2" class="section">
	<div id="section-2-heading" class="section-heading">
		<?php echo danielcowen_display_meta( 2, 'Section')->post_title; ?>
	</div><!-- .section-heading -->	
	<div id="section-2-content" class="section-content">
		<div class="4-columns">
				<?php
				danielcowen_column( 'E' );
				danielcowen_column( 'F' );
				danielcowen_column( 'G' );
				danielcowen_column( 'H' );
                ?>
		</div><!--.4columns-->
	</div><!-- #section-2-content -->	
</div><!-- #section-2 -->