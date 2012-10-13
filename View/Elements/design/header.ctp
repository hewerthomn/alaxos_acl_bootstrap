<div class="container" id="plugin_acl">
	
	<?php
	echo $this->Session->flash('plugin_acl');
	?>
	
	<h1><?php echo __d('acl', 'ACL plugin'); ?></h1>
	<hr>
    <ul class="nav nav-tabs">
    <?php
    if(!isset($no_acl_links))
    {
        $selected = $this->request->controller;
        $active   = ($selected == 'aros') ? 'active' : '';
        echo "<li class=\"{$active}\">";
        echo $this->Html->link(__d('acl', 'Permissions'), '/admin/acl/aros/index');

        $active   = ($selected == 'acos') ? 'active' : '';
        echo "</li><li class=\"{$active}\">";        
        echo $this->Html->link(__d('acl', 'Actions'), '/admin/acl/acos/index');
        echo "</li>";
    }
    ?>
    </ul>