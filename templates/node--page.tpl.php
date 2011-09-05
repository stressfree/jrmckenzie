<div id="node-<?php print $node->nid; ?>" class="basic-content <?php print $classes; ?>">
	<div class="node-inner">
    
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $node_title; ?></a></h2>
    <?php endif; ?>
	
	<?php
	$sidebarCount = 0;
	if (isset($field_sidebar_image)) {
    	foreach ($field_sidebar_image as $entry) {  
    		$sidebarCount += count($entry);	
    	}
    }
    if ($sidebarCount > 0) { ?>
	<div class="sidebar-images">
		<div class="sidebar-images-container">
	<?php
    	foreach ($field_sidebar_image as $entry) {    	
    		foreach ($entry as $sidebar_image) { ?>
    		<div class="sidebar-image image">
	    		<div class="frame">
	    			<a href="<?php print image_style_url('lightbox', $sidebar_image['uri']) ?>" class="lightbox">
	    			<img src="<?php print image_style_url('sidebar', $sidebar_image['uri']) ?>" alt="<?php print $sidebar_image['alt'] ?>" title="<?php print $sidebar_image['title'] ?>" />
	    			</a>
	    	    </div>
	    		<div class="caption"><?php print $sidebar_image['title'] ?></div>
	    	</div>
	    <?php } 
	    } ?>
	    </div>
    </div>
    <?php } ?>

  	<div class="content <?php if (jrmckenzie_show_sidebar($node)) { ?>content-with-sidebar<?php } ?>">
  	  <?php
        print render($content);
        
		if (isset($field_full_image)) { ?>
		<div class="fullwidth-images <?php if (jrmckenzie_show_sidebar($node)) { ?>fullwidth-images-with-sidebar<?php } ?>">
			<div class="fullwidth-images-container">
		<?php
    		foreach ($field_full_image as $entry) {    	
    			foreach ($entry as $full_image) { ?>
    			<div class="fullwidth-image image">
	    			<div class="frame">
	    				<a href="<?php print image_style_url('lightbox', $full_image['uri']) ?>" class="lightbox">
	    				<img src="<?php print image_style_url('fullwidth', $full_image['uri']) ?>" alt="<?php print $full_image['alt'] ?>" title="<?php print $full_image['title'] ?>" />
	    				</a>
	    	    	</div>
	    			<div class="caption"><?php print $full_image['title'] ?></div>
	    		</div>
	    	<?php } 
	    	} ?>
	    	</div>
    	</div>
    <?php } ?>       
  	</div>
	    
    <div class="clear"><!-- --></div>
    
	</div> <!-- /node-inner -->
</div> <!-- /node-->