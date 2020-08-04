<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


defined('one_time_extermination')        OR define('one_time_extermination', 'One Time Pest Control Treatment is great for move outs if you need to do a treatment to comply with a lease or a sales contract. APSO provide Perfect Pest Management that is both efficient.');
defined('monthly_maintenance')      OR define('monthly_maintenance', 'Pests are active year-around. That means you need protection year-around. Our custom treatments adapt with the season to address seasonal pest activity in your area, giving you protection all year long.'); // lowest automatically-assigned error code
defined('full_service_pest_removal')      OR define('full_service_pest_removal', 'APSO, Inc. specializes in indoor and perimeter pest control, lawn spraying, tree and shrub spraying & termite control services. Our mission is to create a continually expanding, satisfied customer base by delivering expert quality.'); // lowest automatically-assigned error code
defined('competitive_price')      OR define('competitive_price', 'The estimated cost of general pest control management service starts from Rs 800 only for 1 BHK, and it may go up to Rs 2000. For example, 1 BHK general pest control cost – Rs 800'); // lowest automatically-assigned error code
defined('who_we_are')      OR define('who_we_are', "offers a comprehensive range of Professional Pest & Hygiene Solutions for Commercial and Residential premises. The APSO brand also focuses on developing industry-leading service operations through the sharing of best practices, new innovations and the use of digital technologies."); // lowest automatically-assigned error code
defined('why_apso')      OR define('why_apso', "offers a comprehensive range of Professional Pest & Hygiene Solutions for Commercial and Residential premises. The APSO brand also focuses on developing industry-leading service operations through the sharing of best practices, new innovations and the use of digital technologies. Our professional, certified, well trained & friendly service teams are committed to providing our customers with outstanding customer care, efficiency & quality service. They undergo thorough, frequent service training to provide you with the best possible service(s) & products for your requirement. <br><br> APSO provide Perfect Pest Management that is both efficient and cost-effective with dedicated customer service, which gives our clients assurance that they will receive satisfaction, quality and value for money, knowing that all work is carried out with utmost environmental awareness.");

defined('enquiryForm_services')      OR define ("enquiryForm_services", array ("Pest Control", "Home Cleaning", "Bird Netting", "Disinfection Services", "Commercial n Society")); 

defined('who_we_are_aboutUs')      OR define('who_we_are_aboutUs', "APSO’s effective Pest Management addresses the current infestation problem, the overall risk to your property, and sets out a safe application of approved, registered & safest chemicals to treat the infestation. Effective Pest Management goes far beyond simply spraying an infested area for bugs! Safe Affordable Reliable Pest Management is our core business. We want to encourage hygiene, cleanliness & environmental conservation");

defined('popular_cities')      OR define('popular_cities', "Delhi NCR, Mumbai, Chennai, Kolkata, Bangalore, Jaipur, Lucknows");

defined('image_upload_path') OR define("image_upload_path", 'admin_assets/uploadedServiceImages/');
defined('sub_service_image_upload_path') OR define("sub_service_image_upload_path", 'admin_assets/uploadedSubServiceImages/');
defined('blog_image_upload_path') OR define("blog_image_upload_path", 'admin_assets/uploadedBlogImages/');

defined('static_meta_tile') OR define("static_meta_tile", "Apso - Pest control and hygiene services");
defined('static_meta_keywords') OR define("static_meta_keywords", "Apso - Pest control and hygiene services");
defined('static_meta_description') OR define("static_meta_description", "Apso - Pest control and hygiene services");