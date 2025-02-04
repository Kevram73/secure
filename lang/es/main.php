<?php

return [

    'title' => 'Gestion des Incidents',
    'menu' => [
        'profile' => 'Profil',
        'logout' => 'Déconnexion'
    ],
    'sidebar' => [
        'menu' => 'Menu',
        'incidents' => 'Liste des incidents',
        'new_incident' => 'Nouvel incident',
        'mass_creation' => 'Chargement massif',
        'dashboard' => 'Tableau de bord',
        'reports' => 'Rapports',
        'admin' => 'Administrateur',
        'settings' => 'Paramètres',
        'users' => 'Utilisateurs',
        'groups' => 'Groupes',
        'clients' => 'Clients',
        'roles' => 'Rôles',
        'areas' => 'Zones',
        'modules' => 'Modules',
        'problems' => 'Problèmes',
        'service_types' => 'Types de service',
        'progress_types' => 'Types de progression',
        'rules' => 'Règles',
        'priorities' => 'Priorités',
        'sla' => 'Configuration SLA',
        'assignation' => 'Assignation automatique'
    ],
    'status' => [
        'in_progress' => 'En cours',
        'paused' => 'En pause',
        'canceled' => 'Annulé',
        'closed' => 'Fermé',
        'unassigned' => 'Non assigné',
        'resolved' => 'Résolu'
    ],
    'incidents' => [
        'incidents' => 'Incidents',
        'incident' => 'Incident',
        'unassigned_exists' => 'Il y a des incidents non assignés',
        'new' => 'Nouvel incident',
        'filters_applied' => 'Des filtres sont appliqués',
        'filter' => 'Filtrer',
        'search' => 'Rechercher un incident',
        'priorities' => 'Priorités:',
        'filters' => [
            'apply_filters' => 'Appliquer les filtres',
            'assigned' => 'Utilisateur assigné',
            'all_users' => 'Tous les utilisateurs',
            'group' => 'Groupe assigné',
            'all_groups' => 'Tous les groupes',
            'status' => 'État',
            'all_statuses' => 'Tous les états',
            'client' => 'Client',
            'all_clients' => 'Tous les clients',
            'area' => 'Zone',
            'all_areas' => 'Toutes les zones',
            'module' => 'Module',
            'all_modules' => 'Tous les modules',
            'problem' => 'Problème',
            'all_problems' => 'Tous les problèmes',
            'priority' => 'Priorité',
            'all_priorities' => 'Toutes les priorités',
            'opened_ext' => 'Ouverts (non assignés + en cours)',
            'closed_ext' => 'Terminés (résolus + fermés)',
            'unassigned' => 'Non assigné',
            'in_progress' => 'En cours',
            'paused' => 'En pause',
            'resolved' => 'Résolus',
            'opened' => 'Ouverts',
            'closed' => 'Fermés',
            'canceled' => 'Annulés',
            'my_tasks' => 'Mes tâches',
            'remove' => 'Supprimer les filtres'
        ],
        'table' => [
            'inc' => 'Inc',
            'created' => 'Créé',
            'assigned' => 'Assigné',
            'unassigned' => 'Non assigné',
            'creator' => 'Expéditeur',
            'priority' => 'Priorité',
            'status' => 'État'
        ],
        'unnasigned_selection' => '(non assigné)',
        'select_area' => 'Sélectionnez la zone',
        'select_module' => 'Sélectionnez le module',
        'select_problem' => 'Sélectionnez le problème',
        'select_user' => 'Sélectionnez l\'utilisateur',
        'select_client' => 'Sélectionnez le client',
        'select_service_type' => 'Sélectionnez le type de service',
        'no_results' => 'Aucun résultat trouvé',
        'searching' => 'Recherche...',
        'error_incomplete' => 'Vous devez remplir tous les champs',
        'priorities_list' => 'Priorités:',
        'no_incidents_found' => 'Aucun incident trouvé',
        'date' => 'Date',
        'client' => 'Client',
        'assigned_group' => 'Groupe assigné',
        'area' => 'Zone',
        'module' => 'Module',
        'problem' => 'Problème',
        'progress_notes' => 'Progrès / Notes',
        'no_progress' => 'Aucun progrès enregistré',
        'add_private_note' => 'Ajouter une note privée',
        'add_progress' => 'Ajouter un progrès',
        'add_note' => 'Ajouter une note',
        'reopening_title' => 'Réouverture de l\'incident',
        'assigned_to' => 'Assigné à',
        'assigned_group' => 'Groupe assigné',
        'assigned_user' => 'Utilisateur assigné',
        'title' => 'Titre',
        'attachment' => 'Fichier joint',
        'attachments' => 'Fichiers joints',
        'att_select' => 'Sélectionner le fichier',
        'att_remove' => 'Supprimer',
        'reopen_incident' => 'Réouvrir l\'incident',
        'close_incident' => 'Fermer l\'incident',
        'cancel_incident' => 'Annuler l\'incident',
        'optional_message' => 'Observation (optionnelle)',
        'reopen_confirm' => 'Confirmer la réouverture',
        'close_confirm' => 'Confirmer la fermeture',
        'cancel_confirm' => 'Confirmer l\'annulation',
        'caution_msg' => 'ATTENTION : Une fois l\'état sélectionné enregistré, il ne pourra plus être modifié et l\'incident ne pourra plus être modifié.',
        'caution_msg_close' => 'ATTENTION : Une fois l\'incident fermé, il ne pourra plus être modifié.',
        'caution_msg_cancel' => 'ATTENTION : Une fois l\'incident annulé, il ne pourra plus être modifié.',
        'expired' => 'Expiré :time',
        'expires' => 'Expire :time',
    ],
    'sla' => [
        'title' => 'Configuration SLA',
        'sla' => 'SLA:',
        'sla_default' => 'SLA par défaut:',
        'hour' => 'heure',
        'hours' => 'heures',
        'not_setted' => 'non établi',
        'to_expire_time' => 'Heures restantes pour calculer les incidents à expirer:',
        'rules' => 'Règles',
        'no_rules' => 'Aucune règle établie',
        'add_rule' => 'Ajouter une règle',
        'add_rule_title' => 'Créer une règle SLA',
        'edit_rule_title' => 'Modifier une règle SLA',
        'conditions' => 'Conditions',
        'condition' => 'Condition',
        'no_conditions' => 'Aucune condition établie',
        'add_condition' => 'Ajouter une condition',
        'value' => 'Valeur',
        'error_incomplete' => 'La règle est incomplète',
        'delete_question' => 'Êtes-vous sûr de vouloir supprimer la règle ?'
    ],
    'users' => [
        'title' => 'Utilisateurs',
        'create_title' => 'Ajouter un utilisateur',
        'edit_title' => 'Modifier l\'utilisateur',
        'add_user' => 'Ajouter un utilisateur',
        'username' => 'Nom d\'utilisateur',
        'name' => 'Nom',
        'full_name' => 'Nom et prénom',
        'password' => 'Mot de passe',
        'leave_blank' => '(laisser vide pour garder l\'actuel)',
        'type' => 'Type',
        'user_type' => 'Type d\'utilisateur',
        'email' => 'E-mail',
        'role' => 'Rôle',
        'client' => 'Client',
        'group' => 'Groupe',
        'internal' => 'Interne',
        'external' => 'Externe',
        'delete_question' => 'Êtes-vous sûr de vouloir supprimer l\'utilisateur ?',
        'user_profile' => 'Profil de l\'utilisateur',
        'avatar' => 'Image de profil'
    ],
    'common' => [
        'incident' => 'Incident',
        'actions' => 'Actions',
        'priority' => 'Priorité',
        'status' => 'État',
        'sla' => 'SLA',
        'active' => 'Actif',
        'inactive' => 'Inactif',
        'add' => 'Ajouter',
        'save' => 'Enregistrer',
        'description' => 'Description',
        'save_changes' => 'Enregistrer les modifications',
        'deleted' => 'Enregistrement supprimé avec succès',
        'error_deleting' => 'Une erreur s\'est produite lors de la suppression de l\'enregistrement',
        'saved' => 'Données enregistrées avec succès',
        'error_saving' => 'Une erreur s\'est produite lors de l\'enregistrement des données',
        'updated' => 'Données mises à jour avec succès',
        'error_updating' => 'Une erreur s\'est produite lors de la mise à jour des données',
    ],
    'clients' => [
        'title' => 'Clients',
        'client' => 'Client',
        'service_type' => 'Type de service',
        'areas' => 'Zones',
        'status' => 'État',
        'add_client' => 'Ajouter un client',
        'create' => 'Créer un client',
        'client_name' => 'Nom du client',
        'delete_question' => 'Êtes-vous sûr de vouloir supprimer le client ?',
        'edit_title' => 'Modifier le client',
    ],
    'groups' => [
        'title' => 'Groupes',
        'group' => 'Groupe',
        'members' => 'Membres',
        'no_members' => 'Aucun membre enregistré',
        'add_member' => 'Ajouter un membre',
        'add_group' => 'Ajouter un groupe',
        'create' => 'Créer un groupe',
        'group_name' => 'Nom du groupe',
        'delete_question' => 'Êtes-vous sûr de vouloir supprimer le groupe ?',
        'edit_title' => 'Modifier le groupe',
    ],
    'roles' => [
        'title' => 'Rôles',
        'add_role' => 'Ajouter un rôle',
        'role' => 'Rôle',
        'delete_question' => 'Êtes-vous sûr de vouloir supprimer le rôle ?',
        'create_title' => 'Ajouter un rôle',
        'edit_title' => 'Modifier le rôle',
        'permissions' => 'Permissions',
        'admin_permissions' => 'Permissions d\'administrateur',
    ],
    'permissions' => [
        'incidents_create' => 'Créer des incidents',
        'incidents_all' => 'Suivi de tous les incidents',
        'incidents_own' => 'Suivi des incidents créés et/ou assignés',
        'incidents_client' => 'Suivi des incidents créés et/ou assignés au sein de son groupe/client',
        'mass_creation' => 'Chargement massif d\'incidents',
        'dashboard' => 'Tableau de bord',
        'reports' => 'Rapports',
        'admin_users_all' => 'Gérer tous les utilisateurs',
        'admin_users_external' => 'Gérer les utilisateurs externes',
        'admin_roles' => 'Gérer les rôles',
        'admin_clients' => 'Gérer les clients',
        'admin_areas' => 'Gérer les zones',
        'admin_modules' => 'Gérer les modules',
        'admin_problems' => 'Gérer les problèmes',
        'admin_service_types' => 'Gérer les types de service',
        'admin_progress_types' => 'Gérer les types de progression'
    ],
    'areas' => [
        'title' => 'Zones',
        'add_area' => 'Ajouter une zone',
        'area' => 'Zone',
        'delete_question' => 'Êtes-vous sûr de vouloir supprimer la zone ?',
        'create_title' => 'Ajouter une zone',
        'edit_title' => 'Modifier la zone',
        'no_modules' => 'Aucun module assigné'
    ],
    'modules' => [
        'title' => 'Modules',
        'add_module' => 'Ajouter un module',
        'module' => 'Module',
        'delete_question' => 'Êtes-vous sûr de vouloir supprimer le module ?',
        'create_title' => 'Ajouter un module',
        'edit_title' => 'Modifier le module',
        'no_problems' => 'Aucun problème assigné'
    ],
    'problems' => [
        'title' => 'Problèmes',
        'add_type' => 'Ajouter un problème',
        'problem' => 'Problème',
        'delete_question' => 'Êtes-vous sûr de vouloir supprimer le problème ?',
        'create_title' => 'Ajouter un problème',
        'edit_title' => 'Modifier le problème'
    ],
    'serv_types' => [
        'title' => 'Types de service',
        'add_type' => 'Ajouter un type de service',
        'service_type' => 'Type de service',
        'delete_question' => 'Êtes-vous sûr de vouloir supprimer le type de service ?',
        'create_title' => 'Ajouter un type de service',
        'edit_title' => 'Modifier le type de service'
    ],
    'pro_types' => [
        'create' => 'Création de l\'incident',
        'cancelation' => 'Annulation de l\'incident',
        'client_note' => 'Note de l\'utilisateur',
        'close' => 'Fermeture de l\'incident',
        'creation' => 'Création de l\'incident',
        'derivation' => 'Dérivation de l\'incident',
        'observation' => 'Observation sur l\'incident',
        'reopen' => 'Réouverture de l\'incident',
        'private_note' => 'Note privée',
        'resolution' => 'Résolution de l\'incident',
        'take' => 'Prise en charge de l\'incident',
        'waiting' => 'En attente d\'action de l\'utilisateur',
        'title' => 'Types de progression',
        'edit_title' => 'Modifier le type de progression',
        'progress_type' => 'Type de progression',
        'delete_question' => 'Êtes-vous sûr de vouloir supprimer le type de progression ?',
        'edit_title' => 'Modifier le type de progression',
        'any_user' => 'Tout utilisateur',
        'html_view' => 'Vue HTML',
        'code_view' => 'Vue code',
        'creator_visible' => 'Visible pour l\'expéditeur',
        'creator_email' => 'Envoyer une notification à l\'expéditeur',
        'internal_email' => 'Envoyer une notification interne',
        'email_template' => 'Modèle de courrier'
    ],
    'priorities' => [
        'priority' => 'Priorité:',
        'title' => 'Priorités',
        'no_priority' => 'Aucune priorité',
        'low' => 'Basse',
        'medium' => 'Moyenne',
        'high' => 'Haute',
        'critical' => 'Critique',
        'min' => 'Minimum',
        'max' => 'Maximum',
        'edit_title' => 'Modifier la priorité',
        'rules' => 'Règles',
        'no_rules' => 'Aucune règle établie',
        'add_rule' => 'Ajouter une règle',
        'add_rule_title' => 'Créer une règle de priorité',
        'edit_rule_title' => 'Modifier la règle de priorité',
        'not_setted' => 'non établie',
        'conditions' => 'Conditions',
        'condition' => 'Condition',
        'no_conditions' => 'Aucune condition établie',
        'add_condition' => 'Ajouter une condition',
        'value' => 'Valeur',
        'error_incomplete' => 'La règle est incomplète',
        'delete_question' => 'Êtes-vous sûr de vouloir supprimer la règle ?'
    ],
    'assignation' => [
        'title' => 'Règles d\'assignation',
        'group' => 'Groupe',
        'user' => 'Utilisateur',
        'no_rules' => 'Aucune règle établie',
        'add_rule' => 'Ajouter une règle',
        'add_rule_title' => 'Créer une règle d\'assignation',
        'edit_rule_title' => 'Modifier la règle d\'assignation',
        'not_setted' => 'non établie',
        'conditions' => 'Conditions',
        'condition' => 'Condition',
        'no_conditions' => 'Aucune condition établie',
        'add_condition' => 'Ajouter une condition',
        'value' => 'Valeur',
        'error_incomplete' => 'La règle est incomplète',
        'delete_question' => 'Êtes-vous sûr de vouloir supprimer la règle ?'
    ],
    'dashboard' => [
        'title' => 'Tableau de bord',
        'no_incidents' => 'Aucun incident enregistré',
        'registered' => '{0} incidents enregistrés|[1] incident enregistré|[2,*] incidents enregistrés',
        'unassigned' => '{0} incidents non assignés|[1] incident non assigné|[2,*] incidents non assignés',
        'in_progress' => '{0} incidents en cours|[1] incident en cours|[2,*] incidents en cours',
        'paused' => '{0} incidents en pause|[1] incident en pause|[2,*] incidents en pause',
        'resolved' => '{0} incidents résolus|[1] incident résolu|[2,*] incidents résolus',
        'closed' => '{0} incidents fermés|[1] incident fermé|[2,*] incidents fermés',
        'canceled' => '{0} incidents annulés|[1] incident annulé|[2,*] incidents annulés',
        'opened' => '{0} incidents ouverts|[1] incident ouvert|[2,*] incidents ouverts',
        'on_time' => '{0} incidents dans les délais SLA|[1] incident dans les délais SLA|[2,*] incidents dans les délais SLA',
        'to_expire' => '{0} incidents avec SLA à expirer|[1] incident avec SLA à expirer|[2,*] incidents avec SLA à expirer',
        'expired' => '{0} incidents hors SLA|[1] incident hors SLA|[2,*] incidents hors SLA',
        'registered_title' => 'Incidents enregistrés',
        'opened_title' => 'Incidents ouverts',
        'unassigned_title' => 'Incidents non assignés',
        'in_progress_title' => 'Incidents en cours',
        'paused_title' => 'Incidents en pause',
        'resolved_title' => 'Incidents résolus',
        'canceled_title' => 'Incidents annulés',
        'closed_title' => 'Incidents fermés',
        'on_time_title' => 'Incidents dans les délais SLA',
        'to_expire_title' => 'Incidents avec SLA à expirer',
        'expired_title' => 'Incidents hors SLA',
    ],
    'reports' => [
        'title' => 'Rapports',
        'from' => 'De',
        'to' => 'À',
        'client' => 'Client',
        'assigned_to' => 'Utilisateur assigné',
        'assigned_group' => 'Groupe assigné',
        'incident_state' => 'État',
        'all' => 'Tous',
        'include_cancel' => 'Tous (inclure les annulés)',
        'exclude_cancel' => 'Tous (exclure les annulés)',
        'process' => 'Traiter',
        'download' => 'Télécharger le rapport',
        'showing_from_to' => 'Affichage des incidents du :from au :to',
        'columns' => [
            'id' => 'INC',
            'created' => 'OUVERTURE',
            'client' => 'CLIENT',
            'area' => 'ZONE',
            'module' => 'MODULE',
            'problem' => 'PROBLÈME',
            'status' => 'ÉTAT',
            'assigned' => 'ASSIGNÉ',
            'title' => 'TITRE',
            'resolved' => 'RÉSOLU',
            'closed' => 'FERMÉ',
            'sla' => 'SLA',
        ]
    ]

];
