<?php
// $Id$
//%%%%%%	Admin Module Name  AdminGroup 	%%%%%
// dont change
if (!defined('_AM_DBUPDATED')) {define("_AM_DBUPDATED","Database Updated Successfully!");}

define("_MD_AM_SITEPREF","Site Preferences");
define("_MD_AM_SITENAME","Site name");
define("_MD_AM_SLOGAN","Slogan for your site");
define("_MD_AM_ADMINML","Admin mail address");
define("_MD_AM_LANGUAGE","Default language");
define("_MD_AM_STARTPAGE","Module or Page for your start page");
define("_MD_AM_NONE","None");
define("_MD_CONTENTMAN","Content Manager");
define("_MD_AM_SERVERTZ","Server timezone");
define("_MD_AM_DEFAULTTZ","Default timezone");
define("_MD_AM_DTHEME","Default theme");
define("_MD_AM_THEMESET","Theme Set");
define("_MD_AM_ANONNAME","Username for anonymous users");
define("_MD_AM_NEWUNOTIFY","Notify by mail when a new user is registered?");
define("_MD_AM_SELFDELETE","Allow users to delete own account?");
define("_MD_AM_LOADINGIMG","Display loading... image?");
define("_MD_AM_USEGZIP","Use gzip compression?");
define("_MD_AM_UNAMELVL","Select the level of strictness for username filtering");
define("_MD_AM_STRICT","Strict (only alphabets and numbers)");
define("_MD_AM_MEDIUM","Medium");
define("_MD_AM_LIGHT","Light (recommended for multi-byte chars)");
define("_MD_AM_BANNERS","Activate banner ads?");
define("_MD_AM_MYIP","Your IP address");
define("_MD_AM_MYIPDSC","This IP will not count as an impression for banners");
define("_MD_AM_ALWDHTML","HTML tags allowed in all posts.");
define("_MD_AM_ADMNOTSET","Admin mail is not set.");
define("_MD_AM_YES","Yes");
define("_MD_AM_NO","No");
define("_MD_AM_DONTCHNG","Don't change!");
define("_MD_AM_REMEMBER","Remember to chmod 666 this file in order to let the system write to it properly.");
define("_MD_AM_IFUCANT","If you can't change the permissions you can edit the rest of this file by hand.");

define("_MD_AM_COMMODE","Default Comment Display Mode");
define("_MD_AM_COMORDER","Default Comments Display Order");
define("_MD_AM_ALLOWHTML","Allow HTML tags in user comments?");
define("_MD_AM_DEBUGMODE","Debug mode");
define("_MD_AM_DEBUGMODEDSC","Several debug options. A running website should have this turned off.");
define("_MD_AM_AVATARALLOW","Allow custom avatar upload?");
define('_MD_AM_AVATARMP','Minimum posts required');
define('_MD_AM_AVATARMPDSC','Enter the minimum number of posts required to upload a custom avatar');
define("_MD_AM_AVATARW","Avatar image max width (pixel)");
define("_MD_AM_AVATARH","Avatar image max height (pixel)");
define("_MD_AM_AVATARMAX","Avatar image max filesize (byte)");
define("_MD_AM_AVATARCONF","Custom avatar settings");
define("_MD_AM_CHNGUTHEME","Change all users' theme");
define("_MD_AM_NOTIFYTO","Select group to which new user notification mail will be sent");
define("_MD_AM_ALLOWTHEME","Allow users to select theme?");
define("_MD_AM_ALLOWIMAGE","Allow users to display image files in posts?");

define("_MD_AM_USERACTV","Requires activation by user (recommended)");
define("_MD_AM_AUTOACTV","Activate automatically");
define("_MD_AM_ADMINACTV","Activation by administrators");
define("_MD_AM_REGINVITE","Registration by invitation");
define("_MD_AM_ACTVTYPE","Select activation type of newly registered users");
define("_MD_AM_ACTVGROUP","Select group to which activation mail will be sent");
define("_MD_AM_ACTVGROUPDSC","Valid only when 'Activation by administrators' is selected");
define('_MD_AM_DEBUGMODE0','Off');
define('_MD_AM_DEBUGMODE1','Enable debug (inline mode)');
define('_MD_AM_DEBUGMODE2','Enable debug (popup mode)');
define('_MD_AM_DEBUGMODE3','Smarty Templates Debug');
define('_MD_AM_MINUNAME', 'Minimum length of username required');
define('_MD_AM_MAXUNAME', 'Maximum length of username');
define('_MD_AM_GENERAL', 'General Settings');
define('_MD_AM_USERSETTINGS', 'User Settings');
define('_MD_AM_ALLWCHGMAIL', 'Allow users to change email address?');
define('_MD_AM_ALLWCHGMAILDSC', '');
define('_MD_AM_IPBAN', 'IP Banning');
define('_MD_AM_BADEMAILS', 'Enter emails that should not be used in user profile');
define('_MD_AM_BADEMAILSDSC', 'Separate each with a <b>|</b>, case insensitive, regex enabled.');
define('_MD_AM_BADUNAMES', 'Enter names that should not be selected as username');
define('_MD_AM_BADUNAMESDSC', 'Separate each with a <b>|</b>, case insensitive, regex enabled.');
define('_MD_AM_DOBADIPS', 'Enable IP bans?');
define('_MD_AM_DOBADIPSDSC', 'Users from specified IP addresses will not be able to view your site');
define('_MD_AM_BADIPS', 'Enter IP addresses that should be banned from the site.<br />Separate each with a <b>|</b>, case insensitive, regex enabled.');
define('_MD_AM_BADIPSDSC', '^aaa.bbb.ccc will disallow visitors with an IP that starts with aaa.bbb.ccc<br />aaa.bbb.ccc$ will disallow visitors with an IP that ends with aaa.bbb.ccc<br />aaa.bbb.ccc will disallow visitors with an IP that contains aaa.bbb.ccc');
define('_MD_AM_PREFMAIN', 'Preferences Main');
define('_MD_AM_METAKEY', 'Meta Keywords');
define('_MD_AM_METAKEYDSC', 'The keywords meta tag is a series of keywords that represents the content of your site. Type in keywords with each separated by a comma or a space in between. (Ex. ImpressCMS, PHP, mySQL, portal system)');
define('_MD_AM_METARATING', 'Meta Rating');
define('_MD_AM_METARATINGDSC', 'The rating meta tag defines your site age and content rating');
define('_MD_AM_METAOGEN', 'General');
define('_MD_AM_METAO14YRS', '14 years');
define('_MD_AM_METAOREST', 'Restricted');
define('_MD_AM_METAOMAT', 'Mature');
define('_MD_AM_METAROBOTS', 'Meta Robots');
define('_MD_AM_METAROBOTSDSC', 'The Robots Tag declares to search engines what content to index and spider');
define('_MD_AM_INDEXFOLLOW', 'Index, Follow');
define('_MD_AM_NOINDEXFOLLOW', 'No Index, Follow');
define('_MD_AM_INDEXNOFOLLOW', 'Index, No Follow');
define('_MD_AM_NOINDEXNOFOLLOW', 'No Index, No Follow');
define('_MD_AM_METAAUTHOR', 'Meta Author');
define('_MD_AM_METAAUTHORDSC', 'The author meta tag defines the name of the author of the document being read. Supported data formats include the name, email address of the webmaster, company name or URL.');
define('_MD_AM_METACOPYR', 'Meta Copyright');
define('_MD_AM_METACOPYRDSC', 'The copyright meta tag defines any copyright statements you wish to disclose about your web page documents.');
define('_MD_AM_METADESC', 'Meta Description');
define('_MD_AM_METADESCDSC', 'The description meta tag is a general description of what is contained in your web page');
define('_MD_AM_METAFOOTER', 'Meta + Footer');
define('_MD_AM_FOOTER', 'Footer');
define('_MD_AM_FOOTERDSC', 'Be sure to type links in full path starting from http://, otherwise the links will not work correctly in modules pages.');
define('_MD_AM_CENSOR', 'Word Censoring');
define('_MD_AM_DOCENSOR', 'Enable censoring of unwanted words?');
define('_MD_AM_DOCENSORDSC', 'Words will be censored if this option is enabled. This option may be turned off for enhanced site speed.');
define('_MD_AM_CENSORWRD', 'Words to censor');
define('_MD_AM_CENSORWRDDSC', 'Enter words that should be censored in user posts.<br />Separate each with a <b>|</b>, case insensitive.');
define('_MD_AM_CENSORRPLC', 'Bad words will be replaced with:');
define('_MD_AM_CENSORRPLCDSC', 'Censored words will be replaced with the characters entered in this textbox');

define('_MD_AM_SEARCH', 'Search Options');
define('_MD_AM_DOSEARCH', 'Enable global searches?');
define('_MD_AM_DOSEARCHDSC', 'Allow searching for posts/items within your site.');
define('_MD_AM_MINSEARCH', 'Minimum keyword length');
define('_MD_AM_MINSEARCHDSC', 'Enter the minimum keyword length that users are required to enter to perform search');
define('_MD_AM_MODCONFIG', 'Module Config Options');
define('_MD_AM_DSPDSCLMR', 'Display disclaimer?');
define('_MD_AM_DSPDSCLMRDSC', 'Select yes to display disclaimer in registration page');
define('_MD_AM_REGDSCLMR', 'Registration disclaimer');
define('_MD_AM_REGDSCLMRDSC', 'Enter text to be displayed as registration disclaimer');
define('_MD_AM_ALLOWREG', 'Allow new user registration?');
define('_MD_AM_ALLOWREGDSC', 'Select yes to accept new user registration');
define('_MD_AM_THEMEFILE', 'Check templates for modifications ?');
define('_MD_AM_THEMEFILEDSC', 'If this option is enabled, modified templates will be automatically recompiled when they are displayed. You must turn this option off on a production site.');
define('_MD_AM_CLOSESITE', 'Turn your site off?');
define('_MD_AM_CLOSESITEDSC', 'Select yes to turn your site off so that only users in selected groups have access to the site. ');
define('_MD_AM_CLOSESITEOK', 'Select groups that are allowed to access while the site is turned off.');
define('_MD_AM_CLOSESITEOKDSC', 'Users in the default webmasters group are always granted access.');
define('_MD_AM_CLOSESITETXT', 'Reason for turning off the site');
define('_MD_AM_CLOSESITETXTDSC', 'The text that is presented when the site is closed.');
define('_MD_AM_SITECACHE', 'Site-wide Cache');
define('_MD_AM_SITECACHEDSC', 'Caches whole contents of the site for a specified amount of time to enhance performance. Setting site-wide cache will override module-level cache, block-level cache, and module item level cache if any.');
define('_MD_AM_MODCACHE', 'Module-wide Cache');
define('_MD_AM_MODCACHEDSC', 'Caches module contents for a specified amount of time to enhance performance. Setting module-wide cache will override module item level cache if any.');
define('_MD_AM_NOMODULE', 'There is no module that can be cached.');
define('_MD_AM_DTPLSET', 'Default template set');

// added for mailer
define("_MD_AM_MAILER","Mail Setup");
define("_MD_AM_MAILER_MAIL","");
define("_MD_AM_MAILER_SENDMAIL","");
define("_MD_AM_MAILER_","");
define("_MD_AM_MAILFROM","FROM address");
define("_MD_AM_MAILFROMDESC","");
define("_MD_AM_MAILFROMNAME","FROM name");
define("_MD_AM_MAILFROMNAMEDESC","");
// RMV-NOTIFY
define("_MD_AM_MAILFROMUID","FROM user");
define("_MD_AM_MAILFROMUIDDESC","When the system sends a private message, which user should appear to have sent it?");
define("_MD_AM_MAILERMETHOD","Mail delivery method");
define("_MD_AM_MAILERMETHODDESC","Method used to deliver mail. Default is \"mail\", use others only if that makes trouble.");
define("_MD_AM_SMTPHOST","SMTP host(s)");
define("_MD_AM_SMTPHOSTDESC","List of SMTP servers to try to connect to.");
define("_MD_AM_SMTPUSER","SMTPAuth username");
define("_MD_AM_SMTPUSERDESC","Username to connect to an SMTP host with SMTPAuth.");
define("_MD_AM_SMTPPASS","SMTPAuth password");
define("_MD_AM_SMTPPASSDESC","Password to connect to an SMTP host with SMTPAuth.");
define("_MD_AM_SENDMAILPATH","Path to sendmail");
define("_MD_AM_SENDMAILPATHDESC","Path to the sendmail program (or substitute) on the webserver.");
define("_MD_AM_THEMEOK","Selectable themes");
define("_MD_AM_THEMEOKDSC","Choose themes that users can select as the default theme");

define("_MD_AM_RANKW","Rank image max width (pixel)");
define("_MD_AM_RANKH","Rank image max height (pixel)");
define("_MD_AM_RANKMAX","Rank image max filesize (byte)");

define("_MD_AM_MULTILANGUAGE","Multilanguage");
define("_MD_AM_ML_ENABLE","Enable Multilanguage");
define("_MD_AM_ML_ENABLEDSC","Set to Yes in order to enable multilanguage throughout the site.");
define("_MD_AM_ML_TAGS","Multilanguage tags");
define("_MD_AM_ML_TAGSDSC","Enter the tags to be used on this site, separated by a comma. For example, this would be used to define the tages to be used for english and french : en,fr");
define("_MD_AM_ML_NAMES","Language names");
define("_MD_AM_ML_NAMESDSC","Enter the names of the language to use, separated by a comma");
define("_MD_AM_ML_CAPTIONS","Language captions");
define("_MD_AM_ML_CAPTIONSDSC","Enter the captions you would like to use for these languages");
define("_MD_AM_ML_CHARSET","Charsets");
define("_MD_AM_ML_CHARSETDSC","Enter the charsets of these languages");

define("_MD_AM_REMEMBERME","Enable the 'Remember Me' feature in the login.");
define("_MD_AM_REMEMBERMEDSC","The 'Remember Me' feature can represent a security issue. Use it under your own risk.");

define("_MD_AM_PRIVDPOLICY","Enable the sites 'Privacy Policy'.");
define("_MD_AM_PRIVDPOLICYDSC","The 'Privacy Policy' should be tailored to your site & active whenever you are allowing registrations to your site.");
define("_MD_AM_PRIVPOLICY","Enter your site 'Privacy Policy'.");
define("_MD_AM_PRIVPOLICYDSC","");

define("_MD_AM_WELCOMEMSG","Send a welcome message to newly registered user");
define("_MD_AM_WELCOMEMSGDSC","Send a welcome message to new user when their account gets activated. The content of this message can be configured in the following option.");
define("_MD_AM_WELCOMEMSG_CONTENT","Content of the welcome message");
define("_MD_AM_WELCOMEMSG_CONTENTDSC","You can edit the message that is sent to the new user. Note that you can use the following tags: <br /><br />- {UNAME} = username of the user<br />- {X_UEMAIL} = email of the user<br />- {X_ADMINMAIL} = admin email address<br />- {X_SITENAME} = name of the site<br />- {X_SITEURL} = URL of the site");

define("_MD_AM_SEARCH_USERDATE","Show user and date in search results");
define("_MD_AM_SEARCH_USERDATEDSC","");
define("_MD_AM_SEARCH_NO_RES_MOD","Show modules with no match in search results");
define("_MD_AM_SEARCH_NO_RES_MODDSC","");
define("_MD_AM_SEARCH_PER_PAGE","Item per page in search results");
define("_MD_AM_SEARCH_PER_PAGEDSC","");

define("_MD_AM_EXT_DATE","Do you want to use an extended/local date function?");
define("_MD_AM_EXT_DATEDSC","Note: by activating this option, ImpressCMS will use an extended calendar script <b>ONLY</b> if you have this script running on your site.<br />Please visit <a href='http://wiki.impresscms.org/index.php?title=Extended_date_function'>extended date function</a> for more info.");

define("_MD_AM_EDITOR_DEFAULT","Default Editor");
define("_MD_AM_EDITOR_DEFAULT_DESC","Select the default Editor for all the site.");

define("_MD_AM_EDITOR_ENABLED_LIST","Enabled Editors");
define("_MD_AM_EDITOR_ENABLED_LIST_DESC","Select the selectable editors by the modules (If the module has a configuration to select the editor.)");

define("_MD_AM_ML_AUTOSELECT_ENABLED","Autoselect the language depending the browser configuration");

define("_MD_AM_ALLOW_ANONYMOUS_VIEW_PROFILE","Allow anonymous users to see user profiles.");

//Content Manager
define("_MD_AM_CONTMANAGER","Content Manager");
define("_MD_AM_DEFAULT_CONTPAGE","Default Page");
define("_MD_AM_DEFAULT_CONTPAGEDSC","Select the default page to be displayed to the user in Content Manager. Leave blank to have Content Manager default to the most recently created page.");
define("_MD_AM_CONT_SHOWNAV","Display navigation menu on user side?");
define("_MD_AM_CONT_SHOWNAVDSC","Select yes to display the Content Manager navigation menu.");
define("_MD_AM_CONT_SHOWSUBS","Display Related Pages?");
define("_MD_AM_CONT_SHOWSUBSDSC","Select yes to display related pages links on Content Manager pages.");
define("_MD_AM_CONT_SHOWPINFO","Show poster and published info?");
define("_MD_AM_CONT_SHOWPINFODSC","Select yes to show in the page informations about the poster and publish of the page.");
define("_MD_AM_CONT_ACTSEO","Use menu title instead the id in the url (improve seo)?");
define("_MD_AM_CONT_ACTSEODSC","Select yes to the value of menu title instead of the id in the url of the page.");
//Captcha (Security image)
define('_MD_AM_USECAPTCHA', 'Do you want to use CAPTCHA on registration form?');
define('_MD_AM_USECAPTCHADSC', 'Select yes to CAPTCHA (anti-spam) up on registration form.');
define('_MD_AM_USECAPTCHAFORM', 'Do you want to use CAPTCHA on comment forms?');
define('_MD_AM_USECAPTCHAFORMDSC', 'Select yes to add CAPTCHA (anti-spam) to the comments form, in order to avoid spamming.');
define('_MD_AM_ALLWHTSIG', 'Allow to dipslay external images and HTML in the signature?');
define('_MD_AM_ALLWHTSIGDSC', 'If some attackers post an external image using [img], he can know IPs or User-Agents of users visited your site.<br />Allowing HTML can cause Script Insertion vulnerability if malicious user change his/her signature.');
define('_MD_AM_ALLWSHOWSIG', 'Do you want to allow your users to use a signature on their profile/posts, in your site?');
define('_MD_AM_ALLWSHOWSIGDSC', 'By enabling this option, users will be able to use a personal signature which will be added (on their own choice) after their posts.');
// < personalizações > fabio - Sat Apr 28 11:55:00 BRT 2007 11:55:00
define("_MD_AM_PERSON","Personalization");
define("_MD_AM_GOOGLE_ANA","Google Analytics");
define("_MD_AM_GOOGLE_ANA_DESC","Write down the Google Analytics id-code, like: <small>_uacct = \"UA-<font color=#FF0000><b>xxxxxx-x</b></font>\"</small><br />OR<small><br />var pageTracker = _gat._getTracker( UA-\"<font color=#FF0000><b>xxxxxx-x</b></font>\");</small> (you need to write the red bold id-code).");
define("_MD_AM_LLOGOADM","Admin left logo");
define("_MD_AM_LLOGOADM_DESC"," Select an image to use in the top left corner of the admin panel. <br /><i>To select or send an image, at least one image category must be present in system > images</i> ");
define("_MD_AM_LLOGOADM_URL","Admin left logo link URL");
define("_MD_AM_LLOGOADM_ALT","Admin left logo link title");
define("_MD_AM_RLOGOADM","Admin right logo");
define("_MD_AM_RLOGOADM_DESC"," Select an image to use in the top right corner of the admin panel. <br /><i>To select or send an image, at least one image category must be present in system > images</i> ");
define("_MD_AM_RLOGOADM_URL","Admin right logo link URL");
define("_MD_AM_RLOGOADM_ALT","Admin right logo link title");
define("_MD_AM_METAGOOGLE","Google Meta Tag");
define("_MD_AM_METAGOOGLE_DESC",'Code generated by Google to confirm ownership about a site so you can see the complete error page stats. Write down the id-code, like: <small>meta name="verify-v1" content="<font color=#FF0000><b>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</b></font>" </small><br />(you need to write the red bold id-code).<br />
Further information at <a href="http://www.google.com/webmasters/" target="_blank">http://www.google.com/webmasters</a>.');
define("_MD_AM_RSSLOCAL","Admin News feed URL");
define("_MD_AM_RSSLOCAL_DESC","URL of an RSS feed to be displayed under The ImpressCMS Project > News.");
define("_MD_AM_FOOTADM","Admin Footer");
define("_MD_AM_FOOTADM_DESC","Content to be shown at footer at the admin pages.");
define("_MD_AM_EMAILTTF","Font used in email address protection");
define("_MD_AM_EMAILTTF_DESC","Select which font will be used to generate the email address protection.<br /><i>This option only applies if 'Protect email addresses against SPAM?' is set to Yes.</i>");
define("_MD_AM_EMAILLEN","Font size used in email address protection");
define("_MD_AM_EMAILLEN_DESC","<i>This option only applies if 'Protect email addresses against SPAM?' is set to Yes.</i>");
define("_MD_AM_EMAILCOLOR","Font color used in email address protection");
define("_MD_AM_EMAILCOLOR_DESC","<i>This option only applies if 'Protect email addresses against SPAM?' is set to Yes.</i>");
define("_MD_AM_EMAILSHADOW","Shadow color used in email address protection");
define("_MD_AM_EMAILSHADOW_DESC","Choose a color for the shadow of the email address protection.Leave it blank if you don't wish to use any.<br /><i>This option only applies if 'Protect email addresses against SPAM?' is set to Yes.</i>");
define("_MD_AM_SHADOWX","X offset of shadow used in email address protection");
define("_MD_AM_SHADOWX_DESC","Type in a value (in px)) that will represent the horizontal offset of the shadow in the email protection.<br /><i>This option only applies if 'Shadow color used in email address protection' is not empty.</i>");
define("_MD_AM_SHADOWY","Y offset for shadow used in email address protection");
define("_MD_AM_SHADOWY_DESC","Type in a value (in px) that will represent the vertical offset of the shadow in the email protection.<br /><i>This option only applies if 'Shadow color used in email address protection' is not empty.</i>");
define("_MD_AM_EDITREMOVEBLOCK","Edit and Remove blocks from user side?");
define("_MD_AM_EDITREMOVEBLOCKDSC","By enabling this option, you'll see two icons on block titles with a direct access to remove or edit your block.");

define("_MD_AM_EMAILPROTECT","Protect email addresses against SPAM?");
define("_MD_AM_EMAILPROTECTDSC","Enabling this option will ensure everytime an email address is dislpayed on the site, it will be protected agains SPAM robots.<br /><i>To use reCAPTCHA Mailhide, you need to have the mcrypt php module installed.</i>");
define("_MD_AM_MULTLOGINPREVENT","Prevent multiple login from same user?");
define("_MD_AM_MULTLOGINPREVENTDSC","With this option enabled, if a user is already logged in on your site, the same username will not be  able to log another time until the first session is closed.");
define("_MD_AM_MULTLOGINMSG","Multilogin redirection message:");
define("_MD_AM_MULTLOGINMSG_DESC","Message that will be displayed to a user who tries to login with a username already loged in on the site. <br><i>This option only applies if 'Prevent multiple login from same user?' is set to Yes.</i>");
define("_MD_AM_GRAVATARALLOW","Allow using GRAVATAR?");
define("_MD_AM_GRAVATARALWDSC","Show account images from members are hosted by <a href='http://www.gravatar.com/' target='_blank'>Gravatar</a>, a free avatar service. ImpressCMS will automatically display any Gravatar-hosted image linked to the email address from the members.");

define("_MD_AM_SHOW_ICMSMENU","Show ImpressCMS Project drop down menu?");
define("_MD_AM_SHOW_ICMSMENU_DESC","Select NO to not show the drop down menu and YES to show it.");

define("_MD_AM_SHORTURL","Truncate long URLs ?");
define("_MD_AM_SHORTURLDSC","Set this option to Yes if you want all URL posted on your site to be automatically truncated to a certain number of characters. Long URLs, in a forum post for example, can often break the design...");
define("_MD_AM_URLLEN","URL maximum length");
define("_MD_AM_URLLEN_DESC","The maximum amount of characters of an URL. Extra characters will be truncated automatically.<br /><i>This option only applies if 'Truncate long URLs ?' is set to Yes.</i>");
define("_MD_AM_PRECHARS","Amount of starting characters");
define("_MD_AM_PRECHARS_DESC","How many characters should be displayed at the begining of an URL ?<br /><i>This option only applies if 'Truncate long URLs ?' is set to Yes.</i>");
define("_MD_AM_LASTCHARS","Amount of ending characters");
define("_MD_AM_LASTCHARS_DESC","How many characters should be displayed at the end of an URL ?<br /><i>This option only applies if 'Truncate long URLs ?' is set to Yes.</i>");
define("_MD_AM_SIGMAXLENGTH","Maximum amount of characters in users signatures?");
define("_MD_AM_SIGMAXLENGTHDSC","Here you can choose the length of your users signatures.<br /> any character longer than this amount will be ignored.<br /><i>Be careful, long signatures can often break the design...</i>");

define("_MD_AM_USE_GOOGLE_ANA"," Enable Google Analytics?");
define("_MD_AM_USE_GOOGLE_ANA_DESC","");

// added in 1.1.2
define("_MD_AM_UNABLEENCCLOSED","Database Update Failed, You can't change password encryption whilst the site is closed");

######################## Added in 1.2 ###################################
define("_MD_AM_CAPTCHA","Captcha Settings");
define("_MD_AM_CAPTCHA_MODE","Captcha mode");
define("_MD_AM_CAPTCHA_MODEDSC","Please select a type of Captcha for your website");
define("_MD_AM_CAPTCHA_SKIPMEMBER","Captcha Free Groups");
define("_MD_AM_CAPTCHA_SKIPMEMBERDSC","Select groups which are not requiring a captcha. These groups will never see the captcha field.");
define("_MD_AM_CAPTCHA_CASESENS","Case sensitive");
define("_MD_AM_CAPTCHA_CASESENSDSC","Characters in image mode are case-sensitive");
define("_MD_AM_CAPTCHA_MAXATTEMP","Maximum attempts");
define("_MD_AM_CAPTCHA_MAXATTEMPDSC","Maximum attempts for each session");
define("_MD_AM_CAPTCHA_NUMCHARS","Maximum characters?");
define("_MD_AM_CAPTCHA_NUMCHARSDSC","Maximum number of characters to be generated");
define("_MD_AM_CAPTCHA_FONTMIN","Minimum font-size");
define("_MD_AM_CAPTCHA_FONTMINDSC","");
define("_MD_AM_CAPTCHA_FONTMAX","Maximum font-size");
define("_MD_AM_CAPTCHA_FONTMAXDSC","");
define("_MD_AM_CAPTCHA_BGTYPE","Background type");
define("_MD_AM_CAPTCHA_BGTYPEDSC","Background type in image mode");
define("_MD_AM_CAPTCHA_BGNUM","Background Images");
define("_MD_AM_CAPTCHA_BGNUMDSC","Number of background images to generate");
define("_MD_AM_CAPTCHA_POLPNT","Polygon points");
define("_MD_AM_CAPTCHA_POLPNTDSC","Number of polygon points to generate");
define("_MD_AM_BAR","Bar");
define("_MD_AM_CIRCLE","Circle");
define("_MD_AM_LINE","Line");
define("_MD_AM_RECTANGLE","Rectangle");
define("_MD_AM_ELLIPSE","Ellipse");
define("_MD_AM_POLYGON","Polygon");
define("_MD_AM_RANDOM","Random");
define("_MD_AM_CAPTCHA_IMG","Image");
define("_MD_AM_CAPTCHA_TXT","Text");
define("_MD_AM_CAPTCHA_OFF","Disabled");
define("_MD_AM_CAPTCHA_SKIPCHAR","Skip characters");
define("_MD_AM_CAPTCHA_SKIPCHARDSC","This option will skip the entered characters when generating Captcha");
define('_MD_AM_PAGISTYLE','Style of the paginations links:');
define('_MD_AM_PAGISTYLE_DESC','Select the style of the paginations links.');
define('_MD_AM_ALLWCHGUNAME', 'Allow users to change Display Name?');
define('_MD_AM_ALLWCHGUNAMEDSC', '');
define("_MD_AM_JALALICAL","Use Extended Calendar with Jalali?");
define("_MD_AM_JALALICALDSC","By selecting this, you`ll have an extended calendar on forms.<br />Please be aware, this calendar may not work in some Browsers.");
define("_MD_AM_NOMAILPROTECT","None");
define("_MD_AM_GDMAILPROTECT","GD protection");
define("_MD_AM_REMAILPROTECT","re-Captcha");
define("_MD_AM_RECPRVKEY","reCaptcha private api code");
define("_MD_AM_RECPRVKEY_DESC","");
define("_MD_AM_RECPUBKEY","reCaptcha public api code");
define("_MD_AM_RECPUBKEY_DESC","");
define("_MD_AM_CONT_NUMPAGES","Number of pages on list by tag mode");
define("_MD_AM_CONT_NUMPAGESDSC","Define the number of pages to show in user side on list by tag mode.");
define("_MD_AM_CONT_TEASERLENGTH","Teaser Length");
define("_MD_AM_CONT_TEASERLENGTHDSC","Number of characters of the page teaser in list by tag mode.<br />Set to 0 to not limit.");
define("_MD_AM_STARTPAGEDSC","Select the desired Module or Page for your start page by each group.");
define("_MD_AM_DELUSRES","Removing inactive users");
define("_MD_AM_DELUSRESDSC","This Option will remove users who have registered but have not activated their accounts for X days.<br />Please enter an amount of days.");
define("_MD_AM_PLUGINS","Plugins Manager");
define("_MD_AM_SELECTSPLUGINS","Select allowed plugins to be used");
define("_MD_AM_SELECTSPLUGINS_DESC","You can hereby select which plugins are used to sanitize your texts.");
define("_MD_AM_GESHI_DEFAULT","Select plugin to be used for geshi");
define("_MD_AM_GESHI_DEFAULT_DESC","GeSHi (Generic Syntax Hilighter) is a syntax highlighter for your codes.");
define("_MD_AM_SELECTSHIGHLIGHT","Select type of highlighter for the codes");
define("_MD_AM_SELECTSHIGHLIGHT_DESC","You can hereby select which highlighter is used to highlight your codes.");
define("_MD_AM_HIGHLIGHTER_GESHI","GeSHi highlighter");
define("_MD_AM_HIGHLIGHTER_PHP","php highlighter");
define("_MD_AM_HIGHLIGHTER_OFF","Disabled");
define('_MD_AM_DODEEPSEARCH', "Enable 'deep' searching?");
define('_MD_AM_DODEEPSEARCHDSC', "Would you like your initial search results page to indicate how many hits were found in each module?  Note: turning this on can slow down the search process!");
define('_MD_AM_NUMINITSRCHRSLTS', "Number of initial search results: (for 'shallow' searching)");
define('_MD_AM_NUMINITSRCHRSLTSDSC', "'Shallow' searches are made quicker by limiting the results that are returned for each module on the initial search page.");
define('_MD_AM_NUMMDLSRCHRESULTS', "Number of search results per page:");
define('_MD_AM_NUMMDLSRCHRESULTSDSC', "This determines how many hits per page are shown after drilling down into a particular module's search results.");
define('_MD_AM_ADMIN_DTHEME', 'Admin Theme');
define('_MD_AM_ADMIN_DTHEME_DESC', '');
define('_MD_AM_CUSTOMRED', 'Use Ajaxed redirection method?');
define('_MD_AM_CUSTOMREDDSC', '');
define('_MD_AM_DTHEMEDSC','Default theme used to show your site.');

// Added in 1.2

// Autotasks
if (!defined('_MD_AM_AUTOTASKS')) {define('_MD_AM_AUTOTASKS', 'Auto Tasks');}
define("_MD_AM_AUTOTASKS_SYSTEM", "Processing system");
define("_MD_AM_AUTOTASKS_HELPER", "Helper application");
define("_MD_AM_AUTOTASKS_HELPER_PATH", "Path for helper application");

define("_MD_AM_AUTOTASKS_SYSTEMDSC", "Which task system should be used to execute tasks?");
define("_MD_AM_AUTOTASKS_HELPERDSC", "For any processing system other than 'internal', please specify a helper application. However only one application will be used, so choose carefully.");
define("_MD_AM_AUTOTASKS_HELPER_PATHDSC", "If your helper application is not located in system default path, you have to specify the path to your helper application.");
define("_MD_AM_AUTOTASKS_USER", "System user");
define("_MD_AM_AUTOTASKS_USERDSC", "System user to be used for task execution.");

//source editedit
define("_MD_AM_SRCEDITOR_DEFAULT","Default Source Code Editor");
define("_MD_AM_SRCEDITOR_DEFAULT_DESC","Select the default Editor for editing source codes.");

// added in 1.2.1
define("_MD_AM_SMTPSECURE","SMTP Secure Method");
define("_MD_AM_SMTPSECUREDESC","Authentication Method used for SMTPAuthentication. (default is ssl)");
define("_MD_AM_SMTPAUTHPORT","SMTP Port");
define("_MD_AM_SMTPAUTHPORTDESC","The Port use by your SMTP Mail server (default is 465)");

// added in 1.3
define('_MD_AM_AUTOTASKS_PREF_DSC', 'Preferences for the Auto Tasks system.');
define('_MD_AM_CAPTCHA_DSC', 'Manage the settings used by captcha throughout your site.');
define('_MD_AM_GENERAL_DSC', 'The primary settings page for basic information needed by the system.');
define('_MD_AM_MAILER_DSC', 'Configure how your site will handle mail.');
define('_MD_AM_METAFOOTER_DSC', 'Manage your meta information and site footer as well as your crawler options.');
define('_MD_AM_MULTILANGUAGE_DSC', 'Manage your sites Multi-language settings. Enable, and configure what languages are available and how they are triggered.');
define('_MD_AM_PERSON_DSC', 'Personalize the system with custom logos and other settings.');
define('_MD_AM_PLUGINS_DSC', 'Select which plugins are used and available to be used throughout your site.');
define('_MD_AM_SEARCH_DSC', 'Manage how the search function operates for your users.');
define('_MD_AM_USERSETTINGS_DSC', 'Manage how users register for your site. ser names length, formatting and password options.');
define('_MD_AM_CENSOR_DSC', 'Manage the language that is not permitted on your site.');
?>