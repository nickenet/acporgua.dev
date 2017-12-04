<?php

return [
    'login' =>
        [
            'username' => 'Username',
            'password' => 'Password',
            'title' => 'User Login',
            'remember' => 'Remember me?',
            'login' => 'Sign in',
            'placeholder' =>
                [
                    'username' => 'Please enter your username',
                ],
            'success' => 'Login successfully!',
            'fail' => 'Wrong username or password.',
            'not_active' => 'Your account has not been activated yet!',
            'banned' => 'This account is banned.',
            'logout_success' => 'Logout successfully!',
            'dont_have_account' => 'You don\'t have account on this system, please contact administrator for more information!',
        ],
    'forgot_password' =>
        [
            'title' => 'Lost password',
            'message' => '<p>Have you forgotten your password?</p><p>Please enter your username account. System will send a email with active link to reset your password.</p>',
            'submit' => 'Submit',
        ],
    'reset' =>
        [
            'new_password' => 'New password',
            'repassword' => 'Confirm new password',
            'title' => 'Reset your password',
            'update' => 'Update',
            'wrong_token' => 'This link is invalid or exprired. Please try using reset form again.',
            'user_not_found' => 'This username is not exist.',
            'success' => 'Reset password successfully!',
            'fail' => 'Token is invalid, the reset password link has been exprired!',
            'reset' =>
                [
                    'title' => 'Email reset password',
                ],
            'send' =>
                [
                    'success' => 'A email was sent to your email account. Please check and complete this action.',
                    'fail' => 'Can not send email in this time. Please try again later.',
                ],
            'new-password' => 'New password',
        ],
    'email' =>
        [
            'reminder' =>
                [
                    'title' => 'Email reset password',
                ],
            'invite' =>
                [
                    'title' => 'Invite to join ',
                ],
        ],
    'repassword' => 'Password confirm',
    'failed' => 'Failed',
    'throttle' => 'Throttle',
    'not_member' => 'Not a member yet?',
    'register_now' => 'Register now',
    'lost_your_password' => 'Lost your password?',
    'login_title' => 'Login to system ·C·O·D·E·L·I·S·T·.·C·C·',
    'login_via_social' => 'Login with social networks',
    'back_to_login' => 'Back to login page',
];
