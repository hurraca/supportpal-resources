<?php

return array(

    "user"                          => "User|Users",
    "user_details"                  => "User Details",
    "add_user"                      => "Add user",
    "account_active"                => "Account Active",
    "account_active_desc"           => "Toggle to enable and disable access to authenticated sections.",

    "operator_settings"             => "Operator Settings",
    "op_settings_dept_desc"         => "Select which departments the operator can view and reply to tickets in.",

    "organisation"                  => "Organisation|Organisations",
    "members"                       => "Member|Members",
    "owner"                         => "Owner",
    "manager"                       => "Manager",
    "access_level"                  => "Access Level",
    "access_level_desc"             => "Define the access level for the user in the organisation, based on the following schedule:<br /><strong>Manager</strong> - Can view tickets opened by all users in the organisation and manage users in the organisation<br /><strong>User</strong> - Can view tickets only opened by self",
    "manage_organisation"           => "Manage Organisation",
    "leave_organisation"            => "Leave Organisation",
    "user_membership"               => "User membership",
    "organisation_no_longer"        => "This user will no longer be a part of this organisation.",
    "transfer_ownership"            => "Transfer ownership",
    "transfer_ownership_desc"       => "As the current owner of the organisation, you cannot be removed as a manager and only you can delete the organisation. You may transfer the ownership of the organisation to someone else, be aware that this action cannot be reversed.",
    "transfer_ownership_operator"   => "Only the owner can delete the organisation and cannot be removed from it. Use this option to change the ownership to another user in the organisation.",
    "start_typing_name"             => "Start typing a name...",
    "organisation_add_user"         => "Add user to organisation",
    "organisation_desc"             => "Each organisation can have <strong>managers</strong>, who can manage users and read and reply to other's tickets, and <strong>users</strong>, who can open tickets, but can't read or reply to other's tickets.",
    "organisation_operator_desc"    => "Add existing users to this organisation by clicking \"Add User\" and searching for their name, note that adding a user will remove any links they have with another organisation.",
    "organisation_user_desc"        => "<strong>Manager</strong> - Can manage other users and view &amp; reply to other user's tickets.<br /><strong>User</strong> - Can only open tickets on behalf of organisation and reply to own tickets.",
    "send_confirmation_email"       => "Send confirmation email to user",
    "send_password_reset"           => "Send Password Reset Link",

    "profile"                       => "Profile",
    "address"                       => "Address",
    "city"                          => "City",
    "state"                         => "State",
    "postcode"                      => "Postcode",
    "phone"                         => "Phone Number",
    "website"                       => "Website URL",

    "login"                         => "Login",
    "remember_me"                   => "Remember me",
    "logout"                        => "Logout",
    "return_to_login"               => "Return to Login",

    "user_register_disabled"        => "Sorry, public user registration is currently disabled.",
    "success_register"              => "Account successfully registered!",
    "success_register_desc"         => "Thank you for registering your account, you will just need to confirm your email address before you can login. We will shortly send you an email that contains a confirmation link to finish the process.",
    "register_now"                  => "Register now",
    "register"                      => "Register",
    "register_account"              => "Register Account",
    "register_confirm"              => "Registration Confirmation",
    "register_confirm_desc"         => "Thank you for confirming your email, please enter a password for your account below to finish your account set up.",
    "confirmation_success"          => "Confirmation was successful!",
    "confirmation_unsuccessful"     => "Confirmation was unsuccessful.",
    "thank_you_confirm"             => "Thank you for confirming your account. Please continue to <a href=':route'>login</a>.",
    "signed_up"                     => "Signed up",
    "last_active"                   => "Last active",

    "reset_request"                 => "Password reset request received",
    "reset_request_desc"            => "We will shortly send you an email that contains a confirmation link that will then let you reset the password.",
    "forgot_password"               => "Forgot password?",
    "password_reset"                => "Password Reset",
    "password_reset_confirm"        => "Reset Confirmation",
    "reset_password"                => "Reset Password",
    "password_reset_complete"       => "Reset Complete",
    "set_password"                  => "Set a password",
    "only_enter_to_change"          => "Only enter to change",
    "success_pass_reset"            => "Your password has successfully been reset. Please continue to <a href=':route'>login</a>.",
    "please_set_password"           => "Please set your new password below.",
    "emailed_pwd_reset_link"        => "You have been emailed a reset link.",
    "operator_email_not_found"      => "Operator email address not found.",
    "missing_email_or_reset"        => "Missing email address or reset token.",

    "firstname"                     => "First Name",
    "lastname"                      => "Last Name",
    "formatted_name"                => "Formatted Name",
    "country"                       => "Country",
    "avatar"                        => "Avatar",
    "generate_password"             => "Generate Random Password",
    "confirm_password"              => "Confirm Password",

    "confirmed"                     => "Confirmed",
    "confirmed_desc"                => "Toggle to enable and disable access to authenticated sections.",
    "unconfirmed"                   => "Unconfirmed",

    "group"                         => "User Group|User Groups",
    "group_members"                 => "Group Members",
    "operator_group"                => "Operator Group|Operator Groups",
    "add_group"                     => "Add to Group",

    "customfield"                   => "User Custom Field|User Custom Fields",
    "customfield_order"             => "Drag the rows to change the order custom fields appear to users.",

    "role"               		    => "Role|Roles",

    "operator_login_log"            => "Operator Login Log",
    "system_activity_log"           => "System Activity Log",
    "activity_log"                  => "Activity Log",

    "ban"						    => "Ban|Bans",
    "whitelist"					    => "Whitelist",
    "whitelisted"                   => "Whitelisted",

    "mass_email"                    => "Send Mass Email",
    "send_email"                    => "Send Email",
    "choose_template"               => "Choose template...",

    "ldap_account"                  => "LDAP Account|LDAP Accounts",
    "ldap_operator_desc"            => "Searching for an existing operator, or create a new one.",
    "ldap_server"                   => "LDAP Server",
    "ldap_server_desc"              => "The server hostname. Alternatively, you can specify the full LDAP URI. For example: ldaps://ldap.server:1234/ will connect via SSL to the port 1234.",
    "ldap_username"                 => "LDAP Username",
    "ldap_username_desc"            => "The username that the operator will use to login to the helpdesk (their LDAP username.)",
    "ldap_rdn"                      => "LDAP RDN or DN",
    "ldap_rdn_desc"                 => "The distinguished name for the LDAP username, for example: cn=Sample User,ou=people,dc=example,dc=com",
    "ldap_details"                  => "LDAP Details",
    "ldap_extension_missing"        => "The php-ldap extension is not currently loaded. Users will not be able to login via LDAP.",

    "operator_details"              => "Operator Details",

    "email_notifications"           => "Email Notifications",
    "email_notifications_desc"      => "The email notifications that will be received from the system.",

    "enable_ldap"                   => "Enable LDAP Login",
    "enable_ldap_desc"              => "If you use LDAP, you can enable it for operator login. After enabling, go to the LDAP Accounts settings page to configure it.",
    "user_reg_enabled"              => "User Registration Enabled",
    "user_reg_enabled_desc"         => "Allow new users to register an account in the frontend.",
    "user_reg_captcha"              => "User Registration Captcha",
    "user_reg_captcha_desc"         => "If the captcha should be shown to new users registering.",
    "user_name_format"              => "Name Format",
    "user_name_format_desc"         => "The format that is displayed for user and operator names throughout the help desk.",
    "first_last"                    => "First Last",
    "last_first"                    => "Last First",
    "first_l"                       => "First L.",
    "f_last"                        => "F. Last",
    "password_length"               => "Password Length",
    "password_length_desc"          => "The minimum length in characters for the password when registering or updating an account.",
    "password_strength"             => "Password Strength",
    "password_strength_desc"        => "Select which characters are required when registering a user password.",
    "password_str_must_contain"     => "Must contain:",
    "password_str_letters"          => "At least one alphabetic character.",
    "password_str_digits"           => "At least one digit.",
    "password_str_case"             => "Both upper and lowercase characters.",
    "password_str_symbols"          => "At least one symbol.",

    "load_template"                 => "Load Template",
    "load_template_desc"            => "Choosing a template will replace the current email subject and message.",
    "clear_template"                => "Clear Template",
    "email_per_batch"               => "Emails per batch",
    "batch_interval"                => "Batch interval",
    "select_user_groups"            => "Select user groups or type in e-mail addresses",

    "personal_settings"             => "Personal Settings",
    "personal_settings_desc"        => "Update your own profile and modify settings that relate only to your operator account.",
    "two_fa"                        => "Two-Factor Authentication",
    "ticket_settings"               => "Ticket Settings",
    "notifications"                 => "Notifications",
    "two_fa_success_disabled"       => "Two-factor authentication has successfully been disabled.",
    "two_fa_success_enabled"        => "Two-factor authentication has successfully been enabled.",
    "two_fa_incorrect"              => "The code was incorrect, ensure that the code you entered is correct and that the server time is in sync.",
    "two_fa_enabled"                => "2FA Enabled",
    "two_fa_disable"                => "To disable 2FA, please verify below.",
    "two_fa_enable"                 => "To enable 2FA, please set up the account on your phone using the details below and verify.",
    "verify_code"                   => "Verify Code",
    "verify_and_disable"            => "Verify & Disable",
    "verify_and_enable"             => "Verify & Enable",
    "verify_code_desc"              => "Enter a valid code for your 2FA account to disable 2FA authentication.",
    "qr_code"                       => "QR Code",
    "two_fa_code"                   => "2FA Code",
    "two_fa_secret"                 => "2FA Secret",
    "two_fa_secret_desc"            => "Please store this somewhere safe as you will need this to re-add the authenticator account to your phone should you lose access.",
    "two_fa_verify_desc"            => "Download and install one of the following applications and scan the QR code or enter the secret key. This will set up your account on your device, you will then be able to view the account and it will generate a 6 digit code that you must enter above to verify and complete the set up. Please ensure to click verify before the code expires. Your server time will need to be in sync with an NTP server to function properly.",
    "display_notifications"         => "Display Notifications",
    "display_notifications_desc"    => "The system will poll for new tickets, replies and other operators logging in while you have the operator panel open. You can choose between desktop notifications or in-browser notifications, or disabling it completely.",
    "desktop_notifications"         => "Desktop Notifications",
    "browser_notifications"         => "Browser Notifications",
    "operator_template"             => "Operator Template",

    "search_for_user"               => "Search for user...",
    "select_operator"               => "Select an operator...",
    "select_operators"              => "Select an operator(s)...",
    "select_group"                  => "Select a group...",

    "your_ip_has_been_banned"       => "Your IP has been banned.",
    "3_failed_logins"               => "3 failed logins within 24 hours",
    "password_reset_error"          => "User account or reset token not found, please verify details are correct or try to reset again.",
    "password_reset_not_found"      => "User not found or password cannot be reset.",
    "password_reset_expired"        => "Token has expired, please try to reset again.",
    "password_reset_invalid"        => "Invalid token, please verify details are correct or try to reset again.",
    "password_reset_success"        => "Password reset successfully!",
    "password_reset_already"        => "You have already confirmed your account, you may proceed to login.",
    "password_not_valid"            => "Passwords not valid or not the same.",
    "invalid_reset_request"         => "Invalid password reset request.",

    "simpleauth_token_expired"      => "The access token has expired.",
    "simpleauth_token_invalid"      => "The access token provided is invalid.",
    "simpleauth_invalid_guard"      => "Cannot login as not a valid user.",
    "simpleauth_not_allowed"        => "Operators cannot currently login with SimpleAuth.",

);