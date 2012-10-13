<ul class="nav nav-tabs">
<?php
$links    = array();
$selected = isset($selected) ? $selected : $this->params['action'];

$links[] = array(
    ($selected == 'admin_synchronize') ? 'active' : null,
    $this->Html->link(__d('acl', 'Synchronize actions ACOs'), '/admin/acl/acos/synchronize')
);

$links[] = array(
    ($selected == 'admin_empty_acos') ? 'active' : null,
    $this->Html->link(__d('acl', 'Clear actions ACOs'), '/admin/acl/acos/empty_acos')
);

$links[] = array(
    ($selected == 'admin_build_acl') ? 'active' : null,
    $this->Html->link(__d('acl', 'Build actions ACOs'), '/admin/acl/acos/build_acl')
);

$links[] = array(
    ($selected == 'admin_prune_acos') ? 'active' : null,
    $this->Html->link(__d('acl', 'Prune actions ACOs'), '/admin/acl/acos/prune_acos')
);

foreach ($links as $link) {
	echo "<li class=\"{$link[0]}\">{$link[1]}</li>\n";
}
?>
</ul>