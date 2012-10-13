<ul class="nav nav-tabs">
<?php
$links    = array();
$selected = isset($selected) ? $selected : $this->params['action'];

$links[] = array(
    ($selected == 'admin_users') ? 'active' : null,
    $this->Html->link(__d('acl', 'Users roles'), '/admin/acl/aros/users')
);

if(Configure :: read('acl.gui.roles_permissions.ajax') === true)
{
    $links[] = array(
        ($selected == 'admin_ajax_role_permissions') ? 'active' : null,
        $this->Html->link(__d('acl', 'Roles permissions'), '/admin/acl/aros/ajax_role_permissions')
    );
}
else
{
    $links[] = array(
        ($select == 'admin_role_permissions') ? 'active' : null,
        $this->Html->link(__d('acl', 'Roles permissions'), '/admin/acl/aros/role_permissions')
    );
}
$links[] = array(
    ($selected == 'admin_user_permissions') ? 'active' : null,
    $this->Html->link(__d('acl', 'Users permissions'), '/admin/acl/aros/user_permissions')
);

$links[] = array(
    ($selected == 'admin_check') ? 'active' : null,
    $this->Html->link(__d('acl', 'Build missing AROs'), '/admin/acl/aros/check')
);

// echo $this->Html->nestedList($links, array('class' => 'acl_links'));
foreach ($links as $link) {
    echo "<li class=\"{$link[0]}\">{$link[1]}</li>\n";
}
?>
</ul>