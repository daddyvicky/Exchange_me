<?php

	// Database Credentials
	define("DB_HOST", 'localhost');
	define("DB_DATABASE", 'exchangeme');
	define("DB_USERNAME", 'root');
	define("DB_PASSWORD", '');

	// Email Credentials
	define("SMTP_HOST", 'smtp.gmail.com');
	define("SMTP_PORT", 465);
	define("SMTP_USERNAME", 'smtp email');
	define("SMTP_PASSWORD", 'mailpass');
	define("SMTP_FROM", 'noreply@exchangeme.com');
	define("SMTP_FROM_NAME", 'Exchange');

	// Global Variables
	define("MAX_LOGIN_ATTEMPTS_PER_HOUR", 5);
	define("MAX_EMAIL_VERIFICATION_REQUESTS_PER_DAY", 3);
	define("MAX_PASSWORD_RESET_REQUESTS_PER_DAY", 3);
	define("PASSWORD_RESET_REQUEST_EXPIRY_TIME", 60*60);
	define("CSRF_TOKEN_SECRET", 'dy4584usgd238mnu90wxnd81y3yexneqwd67');

	// Code we want to run on every page/script
	date_default_timezone_set("UTC"); 
	// error_reporting(0);
	// session_set_cookie_params(['samesite' => 'Lax']);
	
