<div id="node-<?php print $node->nid; ?>" class="basic-content <?php print $classes; ?>">
	<div class="node-inner">
    
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $node_title; ?></a></h2>
    <?php endif; ?>

  	<div class="content">
  	  <?php
        print render($content);
       ?>
  	</div>
        
    <div class="clear"><!-- --></div>
    
	</div> <!-- /node-inner -->
</div> <!-- /node-->
