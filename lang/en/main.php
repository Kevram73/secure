<?php

return [

    'title' => 'Incidents',
    'menu' => [
        'profile' => 'Profile',
        'logout' => 'Logout'
    ],
    'sidebar' => [
        'menu' => 'Menu',
        'incidents' => 'Incidents',
        'new_incident' => 'New incident',
        'mass_creation' => 'Mass creation',
        'dashboard' => 'Dashboard',
        'reports' => 'Reports',
        'admin' => 'Admin',
        'settings' => 'Settings',
        'users' => 'Users',
        'groups' => 'Goups',
        'clients' => 'Clients',
        'roles' => 'Roles',
        'areas' => 'Areas',
        'modules' => 'Modules',
        'problems' => 'Problems',
        'service_types' => 'Service types',
        'progress_types' => 'Progress types',
        'rules' => 'Rules',
        'priorities' => 'Priorities',
        'sla' => 'SLA settings',
        'assignation' => 'Auto assignment'
    ],
    'status' => [
        'in_progress' => 'In progress',
        'paused' => 'Paused',
        'canceled' => 'Canceled',
        'closed' => 'Closed',
        'unassigned' => 'Unasssigned',
        'resolved' => 'Resolved'
    ],
    'incidents' => [
        'incidents' => 'Incidents',
        'incident' => 'Incident',
        'unassigned_exists' => "Unassigned incidents",
        'new' => 'New incident',
        'filters_applied' => 'Filters applied',
        'filter' => 'Filters',
        'search' => 'Search incident',
        'priorities' => 'Priorities:',
        'filters' => [
            'apply_filters' => 'Apply filters',
            'assigned' => 'Assigned user',
            'all_users' => 'All users',
            'group' => 'Assigned group',
            'all_groups' => 'All groups',
            'status' => 'Status',
            'all_statuses' => 'All states',
            'client' => 'Client',
            'all_clients' => 'All clients',
            'area' => 'Area',
            'all_areas' => 'All areas',
            'module' => 'Module',
            'all_modules' => 'All modules',
            'problem' => 'Problem',
            'all_problems' => 'All problems',
            'priority' => 'Priority',
            'all_priorities' => 'All priorities',
            'opened_ext' => 'Opened (unassigned + in progress)',
            'closed_ext' => 'Ended (resolved + closed)',
            'unassigned' => 'Unassigned',
            'in_progress' => 'In progress',
            'paused' => 'Paused',
            'resolved' => 'Resolved',
            'opened' => 'Opened',
            'closed' => 'Closed',
            'canceled' => 'Canceled',
            'my_tasks' => 'Mi tasks',
            'remove' => 'Remove filters'
        ],
        'table' => [
            'inc' => 'Inc',
            'created' => 'Created',
            'assigned' => 'Assigned',
            'unassigned' => 'Unassigned',
            'creator' => 'Creator',
            'priority' => 'Priority',
            'status' => 'Status'
        ],
        'unnasigned_selection' => '(unassigned)',
        'select_area' => 'Select area',
        'select_module' => 'Select module',
        'select_problem' => 'Select problem',
        'select_user' => 'Select user',
        'select_client' => 'Select client',
        'select_service_type' => 'Select service type',
        'no_results' => 'No results found',
        'searching' => 'Searching...',
        'error_incomplete' => 'Please complete all fields',
        'priorities_list' => 'Priorities:',
        'no_incidents_found' => 'No incidents found',
        'date' => 'Date',
        'client' => 'Client',
        'assigned_group' => 'Assigned group',
        'area' => 'Area',
        'module' => 'Module',
        'problem' => 'Problem',
        'progress_notes' => 'Progress / Notes',
        'no_progress' => 'No progress registered',
        'add_private_note' => 'Add private note',
        'add_progress' => 'Add progress',
        'add_note' => 'Add note',
        'reopening_title' => 'Incident reopening',
        'assigned_to' => 'Assigned to',
        'assigned_group' => 'Assigned group',
        'assigned_user' => 'Assigned user',
        'title' => 'Titile',
        'attachment' => 'Attachment',
        'attachments' => 'Attachments',
        'att_select' => 'Select file',
        'att_remove' => 'Remove',
        'reopen_incident' => 'Re-open incident',
        'close_incident' => 'Close incident',
        'cancel_incident' => 'Cancel incident',
        'optional_message' => 'Message (optional)',
        'reopen_confirm' => 'Confirm re-open',
        'close_confirm' => 'Confirma close',
        'cancel_confirm' => 'Confirma cancel',
        'caution_msg' => "CAUTION: this status can't be changed anymore.",
        'caution_msg_close' => "CAUTION: this status can't be changed anymore.",
        'caution_msg_cancel' => "CAUTION: this status can't be changed anymore.",
        'expired' => 'Expired :time',
        'expires' => 'Expires :time',
    ],
    'sla' => [
        'title' => 'SLA Settings',
        'sla' => 'SLA:',
        'sla_default' => 'Default SLA:',
        'hour' => 'hour',
        'hours' => 'hours',
        'not_setted' => 'not setted',
        'to_expire_time' => 'Missing hour for expiration calculation:',
        'rules' => 'Rules',
        'no_rules' => 'No rules configured',
        'add_rule' => 'Add rule',
        'add_rule_title' => 'New SLA rule',
        'edit_rule_title' => 'Edit SLA rule',
        'conditions' => 'Conditions',
        'condition' => 'Condition',
        'no_conditions' => 'No conditions configured',
        'add_condition' => 'Add condition',
        'value' => 'Value',
        'error_incomplete' => 'Incompleted rule',
        'delete_question' => 'Are your sure you want to remove this rule?'
    ],
    'users' => [
        'title' => 'Users',
        'create_title' => 'New user',
        'edit_title' => 'Edit user',
        'add_user' => 'Add user',
        'username' => 'Username',
        'name' => 'Name',
        'full_name' => 'Full name',
        'password' => 'Password',
        'leave_blank' => '(leave blank to kepp actual password)',
        'type' => 'Type',
        'user_type' => 'User type',
        'email' => 'Email',
        'role' => 'Role',
        'client' => 'Client',
        'group' => 'Group',
        'internal' => 'Internal',
        'external' => 'External',
        'delete_question' => 'Are you sure you want to remove this user?',
        'user_profile' => 'User profile',
        'avatar' => 'Profile picture'

    ],
    'common' => [
        'incident' => 'Incident',
        'actions' => 'Actions',
        'priority' => 'Priority',
        'status' => 'Status',
        'sla' => 'SLA',
        'active' => 'Active',
        'inactive' => 'Inactive',
        'add' => 'Add',
        'save' => 'Save',
        'description' => 'Description',
        'save_changes' => 'Save changes',
        'deleted' => 'Record removed successfully',
        'error_deleting' => 'There was an error removing record',
        'saved' => 'Data saved sucessfully',
        'error_saving' => 'There was an error saving data',
        'updated' => 'Data updated successfully',
        'error_updating' => 'There was an error updating data',
    ],
    'clients' => [
        'title' => 'Clients',
        'client' => 'Client',
        'service_type' => 'Service type',
        'areas' => 'Areas',
        'status' => 'Status',
        'add_client' => 'Add client',
        'create' => 'Create client',
        'client_name' => 'Client name',
        'delete_question' => 'Are you sure you want to remove this client?',
        'edit_title' => 'Modificar cliente',
    ],
    'groups' => [
        'title' => 'Groups',
        'group' => 'Group',
        'members' => 'Members',
        'no_members' => 'No members registered',
        'add_member' => 'Add member',
        'add_group' => 'Add group',
        'create' => 'Create group',
        'group_name' => 'Group name',
        'delete_question' => 'Are you sure you want to remove this group?',
        'edit_title' => 'Edit group',
    ],
    'roles' => [
        'title' => 'Roles',
        'add_role' => 'Add role',
        'role' => 'Role',
        'delete_question' => 'Are you sure you want to remove this role?',
        'create_title' => 'New role',
        'edit_title' => 'Edit role',
        'permissions' => 'Permissions',
        'admin_permissions' => 'Admin permissions',
    ],
    'permissions' => [
        'incidents_create' => 'Create incidents',
        'incidents_all' => 'Follow all incidents',
        'incidents_own' => 'Follow owned/assigned incidents',
        'incidents_client' => 'Follow created/assigned incidents in his group/organization',
        'mass_creation' => 'Incidents mass creation',
        'dashboard' => 'Dashboard',
        'reports' => 'Reports',
        'admin_users_all' => 'Manage all users',
        'admin_users_external' => 'Manage external users',
        'admin_roles' => 'Manage roles',
        'admin_clients' => 'Manage clients',
        'admin_areas' => 'Manage areas',
        'admin_modules' => 'Manage modules',
        'admin_problems' => 'Manage problems',
        'admin_service_types' => 'Manage service types',
        'admin_progress_types' => 'Manage progress types'
    ],
    'areas' => [
        'title' => 'Areas',
        'add_area' => 'Add area',
        'area' => 'Area',
        'delete_question' => 'Are you sure you want to remove this area?',
        'create_title' => 'New area',
        'edit_title' => 'Edit area',
        'no_modules' => 'No modules assigned'
    ],
    'modules' => [
        'title' => 'Modules',
        'add_module' => 'Add module',
        'module' => 'Module',
        'delete_question' => 'Are you sure you want to remove this module?',
        'create_title' => 'New module',
        'edit_title' => 'Edit module',
        'no_problems' => 'No problems assigned'
    ],
    'problems' => [
        'title' => 'Problems',
        'add_type' => 'Add problem',
        'problem' => 'Problem',
        'delete_question' => 'Are you sure you want to remove this problem?',
        'create_title' => 'New problem',
        'edit_title' => 'Edit problem'
    ],
    'serv_types' => [
        'title' => 'Service types',
        'add_type' => 'Add service type',
        'service_type' => 'Service type',
        'delete_question' => 'Are you sure you want to remove this service type?',
        'create_title' => 'New service type',
        'edit_title' => 'Edit service type'
    ],
    'pro_types' => [
        'create' => 'Incident creation',
        'cancelation' => 'Incident cancelation',
        'client_note' => 'User note',
        'close' => 'Incident closing',
        'creation' => 'Incident creation',
        'derivation' => 'Incident derivation',
        'observation' => 'Incident observation',
        'reopen' => 'Incident re-opening',
        'private_note' => 'Private note',
        'resolution' => 'Incident resolution',
        'take' => 'Incident taking',
        'waiting' => 'Waiting for user action',
        'title' => 'Progress types',
        'edit_title' => 'Edit progress type',
        'progress_type' => 'Progress type',
        'delete_question' => 'Are you sure you want to remove this progress type?',
        'edit_title' => 'Edit progress type',
        'any_user' => 'Some user',
        'html_view' => 'HTML Preview',
        'code_view' => 'Code view',
        'creator_visible' => 'User visible',
        'creator_email' => 'Send user notification',
        'internal_email' => 'Send internal notification',
        'email_template' => 'Email template'
    ],
    'priorities' => [
        'priority' => 'Priority:',
        'title' => 'Priorities',
        'no_priority' => 'No priority',
        'low' => 'Low',
        'medium' => 'Medium',
        'high' => 'High',
        'critical' => 'Critical',
        'min' => 'Minimun',
        'max' => 'Maximun',
        'edit_title' => 'Edit priority',
        'rules' => 'Rules',
        'no_rules' => 'No rules configured',
        'add_rule' => 'Add rule',
        'add_rule_title' => 'New SLA rule',
        'edit_rule_title' => 'Edit SLA rule',
        'not_setted' => 'not setted',
        'conditions' => 'Conditions',
        'condition' => 'Condition',
        'no_conditions' => 'No conditions configured',
        'add_condition' => 'Add condition',
        'value' => 'Value',
        'error_incomplete' => 'Incompleted rule',
        'delete_question' => 'Are your sure you want to remove this rule?'
    ],
    'assignation' => [
        'title' => 'Assignment rules',
        'group' => 'Group',
        'user' => 'User',
        'no_rules' => 'No rules configured',
        'add_rule' => 'Add rule',
        'add_rule_title' => 'New assignment rule',
        'edit_rule_title' => 'Edit assignment rule',
        'not_setted' => 'not setted',
        'conditions' => 'Conditions',
        'condition' => 'Condition',
        'no_conditions' => 'No conditions configured',
        'add_condition' => 'Add condition',
        'value' => 'Value',
        'error_incomplete' => 'Incompleted rule',
        'delete_question' => 'Are your sure you want to remove this rule?'
    ],
    'dashboard' => [
        'title' => 'Dashboard',
        'no_incidents' => 'No incidents registered',
        'registered' => '{0} registered incidents|[1] registered incident|[2,*] registered incidents',
        'unassigned' => '{0} unassigned incidents|[1] unassigned incident|[2,*] unassigned incidents',
        'in_progress' => '{0} incidents in progress|[1] incident in progress|[2,*] incidents in progress',
        'paused' => '{0} paused incidents|[1] paused incident|[2,*] paused incidents',
        'resolved' => '{0} resolved incidents|[1] resolved incident|[2,*] resolved incidents',
        'closed' => '{0} closed incidents|[1] closed incident|[2,*] closed incidents',
        'canceled' => '{0} canceled incidents|[1] canceled incident|[2,*] canceled incidents',
        'opened' => '{0} opened incidents|[1] opened incident|[2,*] opened incidents',
        'on_time' => '{0} incidents on time|[1] incident on time|[2,*] incidents on time',
        'to_expire' => '{0} incidents to expire soon|[1] incident to expire soon|[2,*] incidents to expire soon',
        'expired' => '{0} incidents expired|[1] incident expired|[2,*] incidents expired',
        'registered_title' => 'Registerd incidents',
        'opened_title' => 'Opened incidents',
        'unassigned_title' => 'Unassigned incidents',
        'in_progress_title' => 'Incidents in progress',
        'paused_title' => 'Paused incidents',
        'resolved_title' => 'Resolved incidents',
        'canceled_title' => 'Canceled incidents',
        'closed_title' => 'Closed incidents',
        'on_time_title' => 'Incidents on time',
        'to_expire_title' => 'Incidents to expire soon',
        'expired_title' => 'Expired Incidents',
    ],
    'reports' => [
        'title' => 'Reports',
        'from' => 'From',
        'to' => 'To',
        'client' => 'Client',
        'assigned_to' => 'Assigned user',
        'assigned_group' => 'Assigned group',
        'incident_state' => 'Status',
        'all' => 'All',
        'include_cancel' => 'All (include canceled)',
        'exclude_cancel' => 'All (exclude canceled)',
        'process' => 'Proccess',
        'download' => 'Download report',
        'showing_from_to' => 'Showing incidents from :from to :to',
        'columns' => [
            'id' => 'INC',
            'created' => 'OPENED',
            'client' => 'CLIENT',
            'area' => 'AREA',
            'module' => 'MODULE',
            'problem' => 'PROBLEM',
            'status' => 'STATUS',
            'assigned' => 'ASSIGNED',
            'title' => 'TITLE',
            'resolved' => 'RESOLVED',
            'closed' => 'CLOSED',
            'sla' => 'SLA',
        ]
    ]
    
];
