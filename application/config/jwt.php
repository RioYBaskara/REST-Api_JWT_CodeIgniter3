<?php defined('BASEPATH') or exit('No direct script access allowed');

/*
|--------------------
| JWT Secure Key
|--------------------------------------------------------------------------
*/
$config['jwt_key'] = '8a0ea04f8eae838130b83c7c2e3d01938920a833bd284344cafbb9312f62cbe022555be7199d586f7a23586e214d7352fbf6a609c81045c8efcfa5450b99727c6e60b356182245456c3f60a1dc251c7bce07cad6e69f1efefcec4ba3330fc869088f59ad3ce9e958fa2904334d47c8f91c7878346d188ee52e687247e0b90b15d7137781119e94e3065a45797679268a1b73e651d6603af06a73842cf67da293cd2bf16609c18906bdf9d919e531a1dbe41125a75c2fcc0bb488a1c28138185737dabe36e3cacdbd562cecdc97d297ddfc21fc0f0ba8f467eeac32b1804a5fce033fcf4f9fc5d5857cb7f67abe16f3275589baa39bc1aab3f72613bfc3c53596';


/*
|-----------------------
| JWT Algorithm Type
|--------------------------------------------------------------------------
*/
$config['jwt_algorithm'] = 'HS256';


/*
|-----------------------
| Token Request Header Name
|--------------------------------------------------------------------------
*/
$config['token_header'] = 'authorization';


/*
|-----------------------
| Token Expire Time

| https://www.tools4noobs.com/online_tools/hh_mm_ss_to_seconds/
|--------------------------------------------------------------------------
| ( 1 Day ) : 60 * 60 * 24 = 86400
| ( 1 Hour ) : 60 * 60     = 3600
| ( 1 Minute ) : 60        = 60
*/
$config['token_expire_time'] = 3600;