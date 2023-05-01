<?php

return [

    //
    // _Global
    //
    'description'                    => 'Description',
    'getHelpForPage'                 => 'Get help for this page...',
    'name'                           => 'Name',
    'no_selection'                   => 'Selecting anything in this list will have no effect. It is shown for informational purposes only.',

    'alert' => [
        'error'                       => 'Error',
        'information'                 => 'Information',
        'no_change'                   => 'Nothing has changed.',
        'warning'                     => 'Warning',
    ],

    //
    // Account
    //
    'account' => [
        'active'                      => 'Account active',
        'banned'                      => 'Account banned',
        'inactive'                    => 'Account not active',
    ],

    //
    // Activation
    //
    'activation' => [
        'no_user'                     => 'Unable to locate a user with that activation code.',
        'resend'                      => 'Resend activation message one more time.',
        'subject'                     => 'Activate your account',
        'success'                     => 'Please confirm your account by clicking the activation link in the email we have sent.',
        'error_sending'               => 'Failed to send activation message to: {0}',
        'not_activated'               => 'This user account is not yet activated.',
    ],

    //
    // Buttons
    //
    'btn' => [
        'action'                      => 'Action',
        'cancel'                      => 'Cancel',
        'create'                      => 'Create',
        'createGroup'                 => 'Create Group',
        'createPermission'            => 'Create Permission',
        'createRole'                  => 'Create Role',
        'createUser'                  => 'Create User',
        'delete'                      => 'Delete',
        'edit'                        => 'Edit',
        'editGroup'                   => 'Edit Group',
        'editPermission'              => 'Edit Permission',
        'editRole'                    => 'Edit Role',
        'editUser'                    => 'Edit User',
        'reset'                       => 'Reset',
        'search'                      => 'Search',
        'submit'                      => 'Submit',
        'view'                        => 'View',
    ],

    //
    // Exceptions
    //
    'exception' => [
        'invalid_fields'              => 'The "{0}" field cannot be used to validate credentials.',
        'invalid_model'               => 'The {0} model must be loaded prior to use.',
        'no_user_entity'              => 'User Entity must be provided for password validation.',
        'not_logged_in'               => 'You must be logged in to access that page.',
        'insufficient_permissions'    => 'You do not have sufficient permissions to access that page.',
        'too_many_credentials'        => 'You may only validate against 1 credential other than a password.',
        'unknown_error'               => 'Sorry, we encountered an issue sending the email to you. Please try again later.',
        'password_length_not_set'     => 'You must set the `minimumPasswordLength` setting in the Auth config file.',
        'user_not_found'              => 'Unable to locate a user with ID = {0, number}.',
    ],

    //
    // Forgot Password
    //
    'forgot' => [
        'error_email'                 => 'Unable to send email with password reset instructions to: {0}',
        'error_reset'                 => 'Unable to send reset instructions to {0}',
        'disabled'                    => 'Reseting password option has been disabled.',
        'no_user'                     => 'Unable to locate a user with that email.',
        'subject'                     => 'Password Reset Instructions',
        'email_sent'                  => 'A security token has been emailed to you. Enter it in the box below to continue.',
        'reset_success'               => 'Your password has been successfully changed. Please login with the new password.',
    ],

    //
    // Group
    //
    'group'   => [
        'create_success'              => 'New group created: {0}',
        'delete_confirm'              => 'Are you sure you want to delete this group?',
        'delete_success'              => 'Group deleted: {0}',
        'description'                 => 'Group Description',
        'description_desc'            => 'Enter a description for this group.',
        'name'                        => 'Group Name',
        'name_desc'                   => 'Enter a name for this group.',
        'none_found'                  => 'No groups found.',
        'not_found'                   => 'Unable to find group: {0}.',
        'permissions'                 => 'Group Permissions',
        'permissions_desc'            => 'Select one or more permissions that users from this group will be granted.',
        'update_success'              => 'Group "{0}" was successfully updated.',
        'group'                       => 'Group',
        'groups'                      => 'Groups',
    ],

    //
    // Login
    //
    'login' => [
        'already_registered'          => 'Already registered?',
        'bad_attempt'                 => 'Unable to log you in. Please check your credentials.',
        'current'                     => 'Current',
        'home'                        => 'Home',
        'enter_email_instructions'    => 'No problem! Enter your email below and we will send instructions to reset your password.',
        'email'                       => 'Email',
        'email_address'               => 'Email Address',
        'email_or_username'           => 'Email or username',
        'enter_code_email_password'   => 'Enter the code you received via email, your email address, and your new password.',
        'forgot_password'             => 'Forgot Password?',
        'forgot_your_password'        => 'Forgot Your Password?',
        'invalid_password'            => 'Unable to log you in. Please check your password.',
        'action'                      => 'Login',
        'title'                       => 'Login',
        'success'                     => 'Welcome back!',
        'need_an_account'             => 'Need an account?',
        'new_password'                => 'New Password',
        'new_password_repeat'         => 'Repeat New Password',
        'password'                    => 'Password',
        'remember_me'                 => 'Remember me',
        'register'                    => 'Register',
        'repeat_password'             => 'Repeat Password',
        'reset_password'              => 'Reset Password',
        'reset_your_password'         => 'Reset Your Password',
        'send_instructions'           => 'Send Instructions',
        'sign_in'                     => 'Sign In',
        'token'                       => 'Token',
        'too_many_requests'           => 'Too many requests. Please wait {0, number} seconds.',
        'username'                    => 'Username',
        'we_never_share'              => 'We\'ll never share your email with anyone else.',
    ],

    //
    // Modal Dialogs
    //
    'modal' => [
        'confirm'                     => 'Please Confirm',
    ],

    //
    // Navbar
    //
    'nav' => [
        'home'                        => 'Home',
        'authorization'   => [
            'self'                     => 'Authorization',
            'groups'                   => 'Groups',
            'permissions'              => 'Permissions',
            'roles'                    => 'Roles',
            'users'                    => 'Users',
        ],
        'authentication'   => [
            'self'                     => 'Authentication',
            'login'                    => 'Login',
            'logout'                   => 'Logout',
            'forgot_password'          => 'Forgot Password',
            'reset_password'           => 'Reset Password',
            'register'                 => 'Register',
            'whoami'                   => 'Who am I?',
        ],
        'settings'                     => 'Settings',
    ],

    //
    // Password
    //
    'password' => [
        'error_common'                => 'Password must not be a common password.',
        'error_empty'                 => 'A Password is required.',
        'error_length'                => 'Passwords must be at least {0, number} characters long.',
        'error_personal'              => 'Passwords cannot contain re-hashed personal information.',
        'error_pwned'                 => 'The password {0} has been exposed due to a data breach and has been seen {1, number} times in {2} of compromised passwords.',
        'error_pwned_database'        => 'a database',
        'error_pwned_databases'       => 'databases',
        'error_similar'               => 'Password is too similar to the username.',
        'change_success'              => 'Password changed successfully',
        'reset_token_expired'         => 'Sorry. Your reset token has expired.',
        'suggest_length'              => 'Pass phrases - up to 255 characters long - make more secure passwords that are easy to remember.',
        'suggest_common'              => 'The password was checked against over 65k commonly used passwords or passwords that have been leaked through hacks.',
        'suggest_personal'            => 'Variations on your email address or username should not be used for passwords.',
        'suggest_similar'             => 'Do not use parts of your username in your password.',
        'suggest_pwned'               => '{0} should never be used as a password. If you are using it anywhere change it immediately.',
        'user_not_exist'              => 'Password was not changed. User does not exist',
    ],

    //
    // Permission
    //
    'permission'   => [
        'create_success'              => 'New permission created: {0}',
        'delete_confirm'              => 'Are you sure you want to delete this permission?',
        'delete_success'              => 'Permission deleted: {0}',
        'description'                 => 'Permission Description',
        'description_desc'            => 'Enter a description for this permission.',
        'name'                        => 'Permission Name',
        'name_desc'                   => 'Enter a name for this permission.',
        'none_found'                  => 'No permissions found.',
        'not_found'                   => 'Unable to find permission: {0}.',
        'update_success'              => 'permission "{0}" was successfully updated.',
        'permission'                  => 'Permission',
        'permissions'                 => 'Permissions',
        'perm_groups'                 => 'Permission Groups',
        'perm_groups_desc'            => 'These groups hold this permission.',
        'perm_roles'                  => 'Permission Roles',
        'perm_roles_desc'             => 'These roles hold this permission.',
        'perm_users'                  => 'Permission Users',
        'perm_users_desc'             => 'These users hold this permission as a personal permission.',
        'tab_details'                 => 'Details',
        'tab_usage'                   => 'Usage',
    ],

    //
    // Register
    //
    'register' => [
        'create_success'              => 'New user created: {0}, #{1}',
        'disabled'                    => 'Sorry, new user accounts are not allowed at this time.',
        'success'                     => 'Welcome aboard! Please login with your new credentials.',
    ],

    //
    // Role
    //
    'role'   => [
        'create_success'              => 'New role created: {0}',
        'delete_confirm'              => 'Are you sure you want to delete this role?',
        'delete_success'              => 'Role deleted: {0}',
        'description'                 => 'Role Description',
        'description_desc'            => 'Enter a description for this role.',
        'name'                        => 'Role Name',
        'name_desc'                   => 'Enter a name for this role.',
        'none_found'                  => 'No roles found.',
        'not_found'                   => 'Unable to find role: {0}.',
        'permissions'                 => 'Role Permissions',
        'permissions_desc'            => 'Select one or more permissions that users from this role will be granted.',
        'update_success'              => 'Role "{0}" was successfully updated.',
        'role'                        => 'Role',
        'roles'                       => 'Roles',
    ],

    //
    // User
    //
    'user'   => [
        'active'                      => 'Active',
        'active_desc'                 => 'Activate or deactivate this user.',
        'banned'                      => 'Banned',
        'banned_desc'                 => 'Ban or unban this user.',
        'create_success'              => 'New user created: {0} ({1})',
        'delete_confirm'              => 'Are you sure you want to delete this user?',
        'delete_success'              => 'User deleted: {0} ({1})',
        'displayname'                 => 'Display Name',
        'displayname_desc'            => 'Enter the display name of the user used in the application.',
        'email'                       => 'Email',
        'email_desc'                  => 'Enter a valid email address.',
        'firstname'                   => 'First Name',
        'firstname_desc'              => 'Enter the first name of the user.',
        'fullname'                    => 'Full Name',
        'groups'                      => 'User Groups',
        'groups_desc'                 => 'Select one or more groups to assign this user to.',
        'is_banned'                   => 'User has been banned. Contact the administrator',
        'lastname'                    => 'Last Name',
        'lastname_desc'               => 'Enter the last name of the user.',
        'none_found'                  => 'No users found.',
        'not_found'                   => 'Unable to find user: {0}.',
        'password'                    => 'Password',
        'password_desc'               => 'Enter a new password. If you do not want to change your current password, leave this field empty.',
        'pass_confirm'                => 'Repeat Password',
        'pass_confirm_desc'           => 'Repeat your new password. If you do not want to change your current password, leave this field empty.',
        'pass_resetmail'              => 'Send Password Reset Mail',
        'pass_resetmail_desc'         => 'With this switch on, a password reset mail is sent to the user after creation.',
        'permissions'                 => 'Personal Permissions',
        'permissions_desc'            => 'Select one or more individual permissions that this user will be granted. These permissions will be added to those inherited from groups and roles.',
        'permissions_all'             => 'All Permissions',
        'permissions_all_desc'        => 'This is the list of all permissions that this user has. They include the personal permissions from above plus permissions inherited from group and role memberships.',
        'roles'                       => 'User Roles',
        'roles_desc'                  => 'Select one or more roles to assign this user to.',
        'status'                      => 'Status',
        'tab_account'                 => 'Account',
        'tab_groups'                  => 'Groups',
        'tab_permissions'             => 'Permissions',
        'tab_roles'                   => 'Roles',
        'update_success'              => 'User "{0} ({1})" was successfully updated.',
        'user'                        => 'User',
        'users'                       => 'Users',
        'username'                    => 'Username',
        'username_desc'               => 'Enter a username.',
    ],
];
