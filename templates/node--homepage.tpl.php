<div id="node-<?php print $node->nid; ?>" class="homepage-content <?php print $classes; ?>">
	<div class="node-inner">
    
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $node_title; ?></a></h2>
    <?php endif; ?>

	<div class="homepage-sections">
		<div class="homepage-section">
			<div class="section-wrapper">
				<div class="section-link">
					<a title="<?php print $field_applying_link[0]['title'] ?>" href="<?php print $field_applying_link[0]['url'] ?>">
					<?php print $field_applying_link[0]['title'] ?>
					</a>
				</div>
				<div class="section-info">
					<div class="wrapper">
					<h2 class="homepage-subtitle">Applying for funds</h2>
					<div><?php print $field_applying[0]['safe_value'] ?></div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="homepage-section">
			<div class="section-wrapper">
				<div class="section-link">
					<a title="<?php print $field_about_link[0]['title'] ?>" href="<?php print $field_about_link[0]['url'] ?>">
					<?php print $field_about_link[0]['title'] ?>
					</a>
				</div>
				<div class="section-info">
					<div class="wrapper">
					<h2 class="homepage-subtitle">Who we are</h2>
					<div><?php print $field_about[0]['safe_value'] ?></div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="homepage-section">
			<div class="section-wrapper">
				<div class="section-link">
					<a title="<?php print $field_news_link[0]['title'] ?>" href="<?php print $field_news_link[0]['url'] ?>">
					<?php print $field_news_link[0]['title'] ?>
					</a>
				</div>
				<div class="section-info">
					<div class="wrapper">
					<h2 class="homepage-subtitle">Who we support</h2>
					<div><?php print $field_news[0]['safe_value'] ?></div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="homepage-section">		
			<div class="section-wrapper">
				<div class="section-link">
					<a title="<?php print $field_actions_link[0]['title'] ?>" href="<?php print $field_actions_link[0]['url'] ?>">
					<?php print $field_actions_link[0]['title'] ?>
					</a>
				</div>
				<div class="section-info">			
					<div class="wrapper">
					<h2 class="homepage-subtitle">What you can do</h2>
					<div><?php print $field_actions[0]['safe_value'] ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="clear"><!-- --></div>
	
	<div class="project-carousel">
		<?php print views_embed_view('organisation_stories', 'homepage') ?>
	</div>
	
	<div class="clear"><!-- --></div>
	
	<?php
	if (isset($field_latest_news_display) && isset($field_latest_news)) {
		if ($field_latest_news_display[0]['value'] == 1) { ?>
	<div class="latest-news">
		<div class="latest-news-text">
			<div class="latest-news-header"><!-- --></div>
			<div class="latest-news-container">
				<div class="content">
					<h2 class="latest-news-title">What’s New / Nga Korero Hou</h2>
					<?php print $field_latest_news[0]['safe_value'] ?>
				</div>
			</div>
		</div>
		<div class="latest-news-images"><?php
			if (isset($field_latest_news_images)) {
	    		foreach ($field_latest_news_images as $news_image) { ?>
    			<div class="news-image image">
	    			<div class="frame">
	    				<a href="<?php print image_style_url('lightbox', $news_image['uri']) ?>" class="lightbox">
	    				<img src="<?php print image_style_url('latestnews', $news_image['uri']) ?>" alt="<?php print $news_image['alt'] ?>" />
	    				</a>
	    	    	</div>
	    		</div><?php
	    	    }
			} ?>  
			<div class="clear"><!-- --></div>
		</div>
	</div>
	<div class="clear"><!-- --></div>
	<?php		
		}	
	}
	?>
	
	</div> <!-- /node-inner -->
</div> <!-- /node-->

<!--
<pre style="border: 1px solid #333; padding: 10px; font-size: 12px; background: #fff;">
<?php print_r($node); ?>
</pre>
-->