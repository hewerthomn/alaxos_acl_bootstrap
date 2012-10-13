<?php
echo $this->element('design/header');
echo $this->element('Acos/links');
?>
<hr>
    
<?php
echo '<div class="alert alert-info">';
echo __d('acl', 'This page allows you to clear all actions ACOs.');
echo '</div>';

echo '<p>&nbsp;</p>';

echo '<p>';
echo __d('acl', 'Clicking the link will destroy all existing actions ACOs and associated permissions.');
echo '</p>';

echo '<p>';
echo $this->Html->link('<i class="icon-trash icon-white"></i> '.__d('acl', 'Clear ACOs'), '/admin/acl/acos/empty_acos/run', 
    array('class'=>'btn btn-danger', 'confirm' => __d('acl', 'Are you sure you want to destroy all existing ACOs ?'), 'escape' => false));
echo '</p>';

echo $this->element('design/footer');
?>