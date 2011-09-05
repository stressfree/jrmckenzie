<div class="project-item">
<div class="project-container">
<?php foreach ($fields as $id => $field): ?>
  <?php print $field->wrapper_prefix; ?>
    <?php print $field->label_html; ?>
    <?php print $field->content; ?>
  <?php print $field->wrapper_suffix; ?>
<?php endforeach; ?>
</div>
</div>
