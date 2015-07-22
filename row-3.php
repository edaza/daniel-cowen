<?php?>
<div id="section-3" class="section">
    <div id="section-3-heading" class="section-heading">
		<?php echo danielcowen_display_meta( 3, 'Section')->post_title; ?>
	</div><!-- .section-heading -->	
<div id="section-3-content"class="section-content">
    <div class="2-columns">
			<?php
                danielcowen_column( 'I' );
				danielcowen_column( 'J' );
            ?>
    	</div><!-- .2-columns -->
    </div><!-- #section-3-content -->
</div><!-- #section-3-->	

<div id="section-4" class="section">
	<div id="section-4-heading" class="section-heading">
		<?php echo danielcowen_display_meta( 4, 'Section')->post_title; ?>
	</div><!-- .section-heading -->	
	<div id="section-4-content"class="section-content">
        <div class="1-column">
            <?php
				danielcowen_column( 'K', 'page-news.php' );
            ?>
        </div><!-- .1-column -->
    </div><!-- #section-4-content -->
</div><!-- #section-4 -->