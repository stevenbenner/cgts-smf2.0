<?php
// Version: 2.0; Modifications

//	MOD Stop Spammer - START
$txt['stopspammer_error'] = 'Error with Anti SPAM DB. Connection Failed.<br />
Please try again later, or Contact with the WebMaster';
$txt['stopspammer_count'] = 'Spammers blocked up until today';
$txt['stopspammer_title'] = 'Search more info in `Stop Forum Spam`';

$txt['stopspammer_enable'] = 'Enable/Disable MOD Stop Spammer';
$txt['stopspammer_show01'] = 'Show Link "More Info" for All Members';
$txt['stopspammer_show01_sub'] = 'You can check any member at any time with one simple click';

$txt['stopspammer_faildb'] = 'If the Connection Fail with Anti SPAM DB...';
$txt['stopspammer_fail01'] = 'Show Error and Stop Registration';
$txt['stopspammer_fail02'] = 'Allow Immediate Registration';
$txt['stopspammer_fail03'] = 'Member Approval and show yellow icon to check later';
$txt['stopspammer_faildb1_sub'] = 'Your host can make remote connection with the DB';
$txt['stopspammer_faildb2_sub'] = 'Your host couldn\'t make connection with the DB. Try again later.<br />
If this error continues see Support Topic and search ';
$txt['stopspammer_not_translate'] = '<a href="http://www.simplemachines.org/community/index.php?topic=283309.msg1920848#post_issues"><span class="error"><b>Known Issues</b></span></a>';

$txt['stopspammer_leyd01'] = 'Not Spammer: This data wasn\'t in a DB. But you can check';
$txt['stopspammer_leyd02'] = 'Suspect: This member couldn\'t be checked. Check now';
$txt['stopspammer_leyd03'] = 'Spammer: See more info of activity of this spammer';

$txt['stopspammer_profilecheck'] = 'Check this member';
$txt['stopspammer_limitexceded'] = 'You have exceded the check limit (5000 API queries per day).<br />You should wait until tomorrow to check again.';

$txt['in_stop_forum_spam'] = 'In Stop Forum Spam Web:';
$txt['spammers_checks'] = 'Check these Members';
$txt['spammers_report'] = 'Report these Members';
$txt['confirm_spammers_checks'] = 'Are you sure you want to check the selected members?';
$txt['confirm_spammers_report'] = 'Are you sure you want to report the selected members?\n\nThink that when you report a member to SFS they are marked as spammer all over the world\nand they won\\\'t be able to use any of the forums connected to SFS around the world.\n\nDo it only if you are completely sure they are spammers and if by any chance you make a mistake\ntell as soon as possible the mod\\\'s creator to correct the mistake inside the SFS database.';

$txt['stopspammer_api_key'] = 'Your API key';

$txt['stopspammer_check_name'] = 'Check their username';
$txt['stopspammer_check_mail'] = 'Check their email';
$txt['stopspammer_check_ip'] = 'Check their IP';
$txt['stopspammer_check_sub2'] = 'By default, every time you check a member with MOD Stop Spammer it will check their username, email and IP. If you are getting too many false positives because of their usernames you can turn that option off. We wouldn\'t recomend you to turn off the another 2 options (to check their email and IP) unless you know what you are doing.';

// Changed from 2.3.8 to 2.3.9
$txt['stopspammer_check_sub1'] = 'If MOD Stop Spammer is enabled, every time we check a member:';
$txt['stopspammer_api_key_sub'] = 'If you want to use your own API key you must go first to <a href="http://www.stopforumspam.com/signup" target="_blank">www.stopforumspam.com</a> to sign up for one and write it here. If you haven\'t got one you cannot report spammers with this mod.<br /><br />If you need help with this configuration or with anything else about Mod Stop Spammer, apart from the support forums, you can also ask for online help. If you have already installed Mod httpBL you can see how to ask for online help going to Admin => MOD httpBL => Help. If you haven\'t got it you can <a href="http://www.snoopyvirtualstudio.com/contact.php?language=english" target="_blank">see more info here</a>.';

// New in version 2.3.9
$txt['stopspammer_settings'] = 'MOD Stop Spammer settings';
$txt['stopspammer_enable_sub'] = 'With this check-box checked the mod is ON. With the check-box unchecked the mod is OFF.';
$txt['stopspammer_error_no_api_key'] = 'You cannot report a spammer without an API key from www.stopforumspam.com<br /><br />You need to register on their site first, ask them for an API key and then navigate inside your forum to:<br />Admin => Members => Registration => Settings<br />Scroll down to Stop Spammer settings, write your API key there and save your settings.';
$txt['stopspammer_no_connect_1'] = 'Mod Stop Spammer is ON but there is no connection just now with Stop Forum Spam. Please try later.';
$txt['stopspammer_no_connect_2'] = 'If the problem persists ask for help in the <a href="http://www.snoopyvirtualstudio.com/foro/index.php?board=31.0" target="_blank">official support forum</a>.';
$txt['stopspammer_new_version_1'] = 'Mod Stop Spammer is ON but it is not up-to-date.';
$txt['stopspammer_new_version_2'] = 'There is a new version of this mod. The version you have is: ';
$txt['stopspammer_new_version_3'] = '<a href="http://www.snoopyvirtualstudio.com/foro/index.php?board=31.0" target="_blank">Please update it here whenever you can</a> to the new version: ';
$txt['stopspammer_all_ok'] = 'Mod Stop Spammer is ON, it is up-to-date and the connection with Stop Forum Spam is perfect.';
$txt['stopspammer_is_off'] = 'Mod Stop Spammer is OFF.';
//	MOD Stop Spammer - END

// MOD httpBL START
// General
$txt['httpBL_title'] = 'MOD httpBL';
$txt['httpBL_honeyPot_link_error'] = 'Wrong honeyPot link. Check your MOD httpBL configuration.';
$txt['httpBL_honeyPot_key_error'] = 'Wrong http:BL API key. Check your MOD httpBL configuration.';
$txt['httpBL_honeyPot_key_error_2'] = 'Connection failed. This either means that your http:BL API key is incorrect or that there is a problem in your DNS system.';
$txt['httpBL_caught'] = 'Spammers stopped by MOD httpBL: ';

// Config page
$txt['httpBL_description'] = 'The MOD httpBL checks every visitor\'s IP to see if it\'s already in projecthoneypot\'s DB. If this is true the mod redirects them to the warning.php page denying them access to the forum.<br />Here you can turn the mod on and off and change some of its parameters.';
$txt['httpBL_enable'] = 'Enable/Disable MOD httpBL';
$txt['httpBL_enable_bad_API_key'] = 'The API key you have written is wrong. Check it out carefully and try again.';
$txt['httpBL_honeyPot_link'] = 'Link to your Honey Pot';
$txt['httpBL_honeyPot_key'] = 'Your Honey Pot http:BL API key';
$txt['httpBL_honeyPot_word'] = 'Keyword of your Honey Pot link';
$txt['httpBL_honeyPot_word_sub'] = 'This is the only word in your Honey Pot link the spammers are going to see. Write something to attract them and make them click on it and not anything scary for them. If you cannot find out a good word just leave it blank. The mod will choose one for you.';
$txt['httpBL_info_email_1'] = 'First word of your email';
$txt['httpBL_info_email_2'] = 'Second word of your email';
$txt['httpBL_info_email_3'] = 'Third word of your email';
$txt['httpBL_enable_bad_email'] = 'Check the email address you have written. You cannot leave blank any of the 3 words.';
$txt['httpBL_bad_last_activity'] = 'Number of days to consider good an IP';
$txt['httpBL_bad_last_activity_sub'] = 'If an IP used to belong some time ago to a spammer, but nobody has seen it doing anything wrong since at least this number of days, we don\'t consider it dangerous now and we leave the visitor pass.';
$txt['httpBL_bad_threat'] = 'Threat level considered bad';
$txt['httpBL_bad_threat_sub'] = 'Project Honey Pot gives every IP a threat level which is changing every day depending on what this IP does and how many days ago it did it. Every IP with a threat level lower than the number you put here will pass without even been checked.';
$txt['httpBL_very_bad_threat'] = 'Threat level considered VERY bad';
$txt['httpBL_very_bad_threat_sub'] = 'Every IP with a threat level greater than the number you put here won\'t be able to pass at all. The IPs with a threat level between both numbers will see a captcha and, if they prove they are humans, they will be granted a pass for a few hours.';
$txt['httpBL_cookie_length'] = 'Hours until an IP needs to prove again it\'s human';
$txt['httpBL_no_negative_here'] = 'The number of days and the threat level cannot be negative numbers or 0.';
$txt['httpBL_no_higher_than'] = 'The threat level considered bad cannot be higher than the threat level considered <strong>VERY</strong> bad.';
$txt['httpBL_viewlog_extra'] = 'View extra information in the log';
$txt['httpBL_viewlog_extra_sub'] = 'If you tick this options you are going to see all the information in the log, but maybe it\'s too much and you will loose perspective. Sometimes it\'s better to see only the important things.';

// View log page
$txt['httpBL_viewlog_description'] = 'Every time the MOD httpBL stops a spammer or detects an internal error adds an entry to this log you can see here. This is the list of spammers stopped by the mod either because their threat level was higher than the threat level considered <strong>VERY</strong> bad or because they saw the captcha and couldn\'t prove they were humans.';
$txt['httpBL_viewlogerror_description'] = 'This is the list of the internal errors detected by the mod when trying to check an IP. Depending on the error, some of them may have been stopped and others may have been allowed in. To see all the information here you need to press the button <strong>"Show extra information"</strong>.';
$txt['httpBL_log_no_entries'] = 'There are no entries in the MOD httpBL Spammers Log. Either you haven\'t caught any spammer yet or you have erased all the entries.';
$txt['httpBL_logpass_no_entries'] = 'There are no entries in the MOD httpBL Humans Log. Either nobody have proved to be human yet or you have erased all the entries.';
$txt['httpBL_logerror_no_entries'] = 'There are no entries in the MOD httpBL Errors Log. Either you haven\'t got any errors yet or you have erased all the entries.';
$txt['httpBL_viewlog_extra'] = 'Show extra information';
$txt['httpBL_viewlog_normal'] = 'Hide extra information';
$txt['httpBL_log_show_legend'] = 'Show legend';
$txt['httpBL_log_hide_legend'] = 'Hide legend';
$txt['httpBL_pages'] = 'Pages';
$txt['httpBL_log_date'] = 'Date';
$txt['httpBL_log_ip'] = 'IP';
$txt['httpBL_log_threat'] = 'Th. L.';
$txt['httpBL_log_threat_long'] = 'Threat Level - The threat level of this IP in Project Honey Pot database.';
$txt['httpBL_log_activity'] = 'L. B. A.';
$txt['httpBL_log_activity_long'] = 'Last Bad Activity - The number of days since this IP was seen doing something wrong.';
$txt['httpBL_log_suspicious'] = 'S.';
$txt['httpBL_log_suspicious_long'] = 'Suspicious - Just suspicious of being a spammer.';
$txt['httpBL_log_harvester'] = 'H.';
$txt['httpBL_log_harvester_long'] = 'Harvester - A robot that surfs the internet looking for email addresses to use them later to send spam.';
$txt['httpBL_log_comment'] = 'C.';
$txt['httpBL_log_comment_long'] = 'Comment Spammer - A robot that post to blogs and forums. These posts typically are full of links to sites being promoted by the spammers.';
$txt['httpBL_log_url'] = 'Page';
$txt['httpBL_log_url_long'] = 'The page this IP was visiting when it was detected and expelled by the mod.';
$txt['httpBL_log_error_message'] = 'Message';
$txt['httpBL_yes'] = 'Yes';
$txt['httpBL_threat_colors'] = 'Meaning of colors:';
$txt['httpBL_threat_low'] = 'Low threat';
$txt['httpBL_threat_medium'] = 'Medium threat';
$txt['httpBL_threat_high'] = 'High threat';
$txt['httpBL_threat_very_high'] = 'Very high threat';
$txt['httpBL_log_remove_all_confirm'] = 'Are you sure you want to delete all MOD httpBL log entries? - Please notice this action will delete not only the entries in this section, but ALL THE ENTRIES IN THE LOG.';
$txt['httpBL_log_remove_selected_confirm'] = 'Are you sure you want to delete all selected MOD httpBL log entries?';

// Errors
$txt['httpBL_log_no_error'] = 'No error';
$txt['httpBL_no_errorNumber'] = 'There is no error number';
$txt['httpBL_no_defined'] = 'No defined yet';
$txt['httpBL_answers_captcha'] = 'Answers on the captcha';
$txt['httpBL_answer_captcha'] = 'Answer on the captcha';
$txt['httpBL_good'] = 'Good';
$txt['httpBL_bad'] = 'Bad';
$txt['httpBL_empty_ip'] = 'Empty IP';
$txt['httpBL_wrote_hiding'] = 'Wrote on a hiding place';
$txt['httpBL_no_show_captcha'] = 'Th. L. too high. Didn\'t show the captcha';
$txt['httpBL_no_reverse_ip'] = 'Cannot check. IP not normal. Allowed to pass';
$txt['httpBL_log_key_error'] = 'Cannot check due to API key error. Allowed to pass';
$txt['httpBL_no_127'] = 'Cannot check. response[raw] doesn\'t start by 127. Allowed to pass';
$txt['httpBL_unknown'] = 'unknown';

// Lines changed from v2.3 to v2.4
$txt['httpBL_log_user_agent'] = 'User Agent';

// New lines in v2.4
$txt['permissionname_httpBL_free_pass'] = 'Never be checked by mod httpBL';
$txt['permissionhelp_httpBL_free_pass'] = 'If this permission is enabled, all the members in this group will be able to enter always the forum without been checked by mod httpBL, even if their computer is controlled by a trojan spammer robot.<br />---<br />Enable it only if you know exactly what you are doing.';
$txt['httpBL_last_act_too_high'] = 'Last activity too long ago. Allowed to pass';
$txt['httpBL_threat_too_low'] = 'Threat Level too low. Allowed to pass';
$txt['httpBL_enable_sub'] = 'With this check-box checked the mod is ON. With the check-box unchecked the mod is OFF.';
$txt['httpBL_mod_no_connect_1'] = 'Mod httpBL is ON but there is no connection just now with HoneyPot. Please try later.';
$txt['httpBL_mod_no_connect_2'] = 'If the problem persists ask for help in the <a href="http://www.simplemachines.org/community/index.php?topic=366399" target="_blank">official support forum</a>.';
$txt['httpBL_mod_new_version_1'] = 'Mod httpBL is ON but it is not up-to-date.';
$txt['httpBL_mod_new_version_2'] = 'There is a new version of this mod. <a href="http://custom.simplemachines.org/mods/index.php?mod=2155" target="_blank">Please update it here whenever you can</a>.';
$txt['httpBL_mod_all_ok'] = 'Mod httpBL is ON, it is up-to-date and the connection with HoneyPot is perfect.';
$txt['httpBL_mod_is_off'] = 'Mod httpBL is OFF.';
$txt['OS_Browser_Compatible'] = 'compatible';
$txt['OS_Browser_OS'] = 'Operating System';
$txt['OS_Browser_Unknown'] = 'Unknown';
$txt['OS_Browser_Browser'] = 'Browser';
$txt['httpBL_cache_length'] = 'Minutes to keep the data in the cache';
$txt['httpBL_cache_length_sub'] = 'Every time the mod checks an IP saves the data in the cache (if it\'s enabled) and in the visitor\'s session for the amount of minutes you write here. If the same IP visit your page again before this amount of minutes have passed, the mod won\'t check it again, but it will use the data stored in the cache and/or session.';
$txt['httpBL_view_os_whosonline'] = 'View OS & Browser data in "Who\'s Online" page';

// Lines changed from v2.4 to v2.5
$txt['httpBL_config'] = 'Settings';
$txt['httpBL_honeyPot_link_sub'] = 'After you have installed a Honey Pot in your server, write here the link to it. It will be something like:<br /><strong>http://www.yourwebsite.com/yourhoneypot.php</strong>';
$txt['httpBL_honeyPot_key_sub'] = 'Please notice Project Honey Pot is not going to give you one if you haven\'t installed a Honey Pot, so you better do that first.';
$txt['httpBL_viewlog'] = 'Spammers Log';
$txt['httpBL_viewlogpass'] = 'Humans Log';
$txt['httpBL_viewlogerror'] = 'Errors Log';
$txt['httpBL_viewlogpass_description'] = 'This is the list of the humans stopped by the mod but allowed in after they have proved they were not robots. Plus all the people detected as spammers in the database but with a threat level lower than the "Threat level considered bad" you have in your settings, so they were not stopped at all.';
$txt['httpBL_info_email_desc'] = 'The mod needs your email address to tell you if there are any problems and to show it to the human beings unlucky enough to have an IP considered as spammer and not knowing how to get out of the page <strong>warning.php</strong>, so they can ask you for help. Then, it has to be a valid email address. We have split it into 3 words so the robots cannot see it. For example, if your address is <strong>info@yourwebsite.com</strong> the first word is <strong>info</strong>, the second one <strong>yourwebsite</strong>, and the third one <strong>com</strong>.';
$txt['httpBL_cookie_length_sub'] = 'As the IPs change very often, when the visitors see the captcha and prove they are human they are allowed inside the page only for this amount of hours. After that, the IP may be coming from a different computer.';
$txt['httpBL_view_os_whosonline_sub'] = 'Mod httpBL uses the functions inside "Mod OS & Browser Detection" to display in the logs the operating system and the browser used by all the visits stored in those logs. If you want to see also in your "Who\'s Online" page, the operating system and the browser used by all your visitors, check this check-box. Of course, to be able to see them, in the logs and in your "Who\'s Online" page, you need to have installed either <a href="http://custom.simplemachines.org/mods/index.php?mod=1515" target="_blank">Mod OS & Browser Detection</a> or the small <a href="http://www.snoopyvirtualstudio.com/foro/index.php?topic=402.0" target="_blank">addon to see OS & Browser in httpBL</a>.';

// Don't translate these lines. They need to be here because in SMF 2.0 this is a little different than 1.x
global $boardurl, $smcFunc;
if (empty($smcFunc['db_query']))
	$httpBL_help_link = $boardurl. '/index.php?action=httpBL;sa=helping';
else
	$httpBL_help_link = $boardurl. '/index.php?action=admin;area=httpBL;sa=helping';

// New lines in v2.5
$txt['httpBL_general_settings'] = 'General Settings';
$txt['httpBL_general_settings_desc'] = 'If you want to use MOD httpBL you must have a Honey Pot installed in your server and a http:BL API key from Project Honey Pot. If you haven\'t got them you need to go first to <a href="http://www.projecthoneypot.org/?rf=62759" target="_blank">www.projecthoneypot.org</a> to ask for a Honey Pot, install it in your server and then ask them for your http:BL API key.';
$txt['httpBL_info_email'] = 'Your email address';
$txt['httpBL_internal_settings'] = 'Internal Settings';
$txt['httpBL_internal_settings_desc'] = 'These are the internal settings to control the way mod httpBL works. We wouldn\'t recommend you to change them until you know the way every change will affect the mod.';
$txt['httpBL_extra_settings'] = 'Extra Settings';
$txt['httpBL_extra_settings_desc'] = 'Other settings you may like to change.';
$txt['httpBL_warning_settings'] = 'Warning Page Settings';
$txt['httpBL_warning_settings_desc'] = 'If you want to see the look of your "warning.php" page with this settings (the page everybody with an IP considered dangerous is going to be redirected) press this link: <a href="'. $boardurl. '/warning.php" target="_blank">warning.php</a><br /><br />That\'s the way it is going to appear to the not too dangerous ones. With a captcha, so they can prove if they are humans. If you want to check the way it is going to come out for the really VERY dangerous ones (without captcha) use this link instead: <a href="'. $boardurl. '/warning.php?style=medium" target="_blank">warning.php?style=medium</a><br /><br />If you want to change its design or translate that page to other languages and you don\'t know how, or if you have any other question about the MOD, you will find useful information in the <a href="'. $httpBL_help_link. '">httpBL HELP section</a>.';
$txt['httpBL_use_two_languages'] = 'Use 2 languages on the warning page';
$txt['httpBL_use_two_languages_sub'] = 'By default the warning page is in 2 different languages: English and Spanish, so all your possible visitors can understand what it says. If you leave this check-box empty it will use only English instead.';
$txt['httpBL_horizontal_separator'] = 'Horizontal separator for the warning page';
$txt['httpBL_horizontal_separator_sub'] = 'The default horizontal separator for each block inside the warning page is &lt;hr /&gt; (horizontal grey line) but you can change it to any other thing you want using HTML language.<br />
For example &lt;br /&gt; will give you just a blank line.<br />
Or for example you can put here any horizontal picture you like just writing:<br />
&lt;img src="http://www.yoursite.com/anypicture.jpg" alt="" border="0" /&gt;<br />
(Replace the link inside the src="" with the actual path to your picture).';
$txt['httpBL_log_clear_this_log'] = 'Clear this log';
$txt['httpBL_log_clear_SpammerLog_confirm'] = 'Are you sure you want to delete all the entries in the MOD httpBL Spammers Log?';
$txt['httpBL_log_clear_HumanLog_confirm'] = 'Are you sure you want to delete all the entries in the MOD httpBL Humans Log?';
$txt['httpBL_log_clear_ErrorLog_confirm'] = 'Are you sure you want to delete all the entries in the MOD httpBL Errors Log?';

// Help
$txt['httpBL_helping'] = 'Help';
$txt['httpBL_helping_description'] = 'I would recommend you to read this page carefully even if you don\'t need help with mod httpBL.';
$txt['httpBL_online_title'] = 'Online help';
$txt['httpBL_online_body'] = '<p>There are a lot of ways you can ask for help, but the best one is to ask me directly any doubt you may have, so we can talk about it and sort the problem without losing any time. I don\'t mind to answer questions through forums, emails, PMs, etc, but for me it\'s a lot easier to see what is the problem and find the solution when I can talk about it using a microphone. And also I think this is a lot faster and more effective way to sort problems.<p>
<p>I am connected around 10 hours every day using the programs <strong>"Skype"</strong>, <strong>"YIM"</strong> (Yahoo Messenger) and <strong>"MSN"</strong> (Live Messenger). I have also created a system in my server to write down what I am doing at every moment and have added a piece of code to the mod to read that info from my server (the piece you can see just next to these lines) so you can see if I am available or not.</p>
<p>If you have installed as well the program Skype, the process cannot be any easier. All you have to do is wait until I am available and click on the "Online" button. That will open automatically the program Skype in your computer and will start a conversation between us.</p>
<p>If you prefer to use YIM or MSN instead of Skype or if you haven\'t got a microphone, the button is not going to work automatically. In that case the button is going to be useful for you only to know if I am available or not, but to contact me you will need to add me first inside the program you use, like any other of your contacts. My ID inside those 3 programs is this one:</p>
<ul>
	<li>Skype and YIM : <strong>snoopy_virtual_studio</strong></li>
	<li>MSN : <strong>snoopy_virtual_studio@hotmail.com</strong></li>
</ul>
<p><strong>NOTICE:</strong> Don\'t use my hotmail address to send me emails, as I almost never read them. If you need to send me an email use this other address instead: <a href="mailto:info@snoopyvirtualstudio.com">info@snoopyvirtualstudio.com</a></p>
<p><strong>WARNING:</strong> There are a lot of languages in the world I can understand even if it\'s only a little of it, but the only 2 I am really fluent with are English and Spanish. If you cannot speak any of those 2 languages you can call me if you want, but I cannot promise we will be able to understand each other.</p>
<p><strong>ANOTHER WARNING:</strong> Before you start asking questions it would be a good idea to do a quick search using the links you can see further down, to see if somebody else have already had the same problem and it has already been sorted. The main reason why I have created this "Online Help" system is to save time and it would make no sense at all if I end up answering hundreds of times the same questions every day.</p>';
$txt['httpBL_help_1_title'] = 'Other ways to ask for help';
$txt['httpBL_help_1_body'] = '<p>Of course, even if I personally prefer the "Online Help" system, there will be times when it will be impossible to use it. Either because you live too far away from me and we are never online at the same time, or because you don\'t like the instant messenger programs, or because you need help when I am too busy with other projects and cannot be connected, or whatever other reason. In any of these cases you can find and/or ask for help using a lot of different ways:</p>
<ul>
	<li><strong><a href="http://www.snoopyvirtualstudio.com/tutoriales/index.php?estudio=httpBL_2;language=english" target="_blank">Tutorial explaining how the mod works, how to install it and how to configure it properly</a></strong></li>
</ul>
<p>Every time I update the mod I try to update the tutorial as well, but of course that depends on the amount of free time I have at any given moment, so sometimes you will see the tutorial a little out of date with the actual performance of the mod. But I hope some day I will find time to update the tutorial properly. Besides I have been planing to add to the tutorial also a <strong>"FAQ"</strong> section with all the questions that people have been asking me over time and to add also some other useful sections. It won\'t be a bad idea to check from time to time if there is something new there.</p>
<ul>
	<li><strong><a href="http://www.simplemachines.org/community/index.php?topic=366399.0" target="_blank">Official mod\'s support thread</a></strong></li>
</ul>
<p>Full of very interesting questions and answers about the mod and other topics related to the protection against spammers. It is also the place to report any bugs you may find in the mod or to ask for new features you would like to see in future versions.</p>
<ul>
	<li><strong><a href="http://www.snoopyvirtualstudio.com/foro/index.php?board=30.0;language=english" target="_blank">The section dedicated to this mod inside my personal forum</a></strong></li>
</ul>
<p>My personal forum is dedicated to sort any kind of problems anybody may have inside a lot of different IT fields. Inside it there is a section dedicated to mod httpBL, where you can see (among other things) how you can install as well this mod on other web sites made with PHP but without SMF.</p>';
$txt['httpBL_help_2_title'] = 'How you can help us';
$txt['httpBL_help_2_body'] = '<p>This mod is <strong>"Free Source"</strong> and that means it\'s a team work where all of us help each other. So it\'s not only about others solving your problems, but you should also ask yourself in what ways you can help all the people who use it. Depending on your skills and free time, the different ways you can help are these ones:</p>
<ul>
	<li><strong>Donations</strong></li>
</ul>
<p>If this mod have helped you out, donations are a great way of saying "Thanks!". Furthermore, the months when donations reach an acceptable level, I don\'t have to spend so many hours looking for customers to make other types of work and I can devote more time to what really matters: The various free software projects which I collaborate with.</p>
<ul>
	<li><strong>Reporting bugs</strong></li>
</ul>
<p>Whenever you see that the mod is behaving in a way that is not expected, you should report the bug in the appropriate forum. If you also have enough programming knowledge to find where is the failure and propose a solution, the better, but even if you have no idea of where the fault is, the mere fact of reporting it is helpful, because it will allow someone with more experience to know that the bug exists and to dedicate some time to solve it, which will make the mod work even better.</p>
<ul>
	<li><strong>Answering questions in the forum</strong></li>
</ul>
<p>If you\'ve been using this mod for some time and have some practice with it, you\'ll see at times that someone asks a question in the forum that you know the answer. If you answer that question it will save me some time and allow me to concentrate on more important problems.</p>
<ul>
	<li><strong>Helping with the development of this mod</strong></li>
</ul>
<p>If you have enough knowledge of PHP and some free time you can help solving mod bugs and/or developing future versions. To do this I have opened a <strong><a href="http://www.snoopyvirtualstudio.com/foro/index.php?board=36.0;language=english" target="_blank">sub-forum inside my personal forum</a></strong> where you are welcome if you are interested in the subject.</p>
<ul>
	<li><strong>More</strong></li>
</ul>
<p>Any other ideas you can think of to help us is welcome.</p>';
$txt['httpBL_about_title'] = 'About MOD httpBL';
$txt['httpBL_about_body'] = '<p>Mod httpBL was started in 2009 by me, J. C. Redondo "Snoopy", from <strong><a href="http://www.snoopyvirtualstudio.com/index.php?language=english" target="_blank">Snoopy Virtual Studio</a></strong>, based on ideas from Project Honey Pot message board, mainly <strong><a href="http://www.projecthoneypot.org/board/read.php?f=10&i=1&t=1" target="_blank">from this thread</a></strong> and also from the <strong><a href="http://drupal.org/project/httpBL" target="_blank">Drupal http:BL MOD made by praseodym</a></strong>.</p>
<p>Of course, Drupal code is very different from SMF code, so since the beginning I had to change it a lot. Furthermore, since I started it, I\'ve been modifying it a lot more and adding new features, as I have been having new ideas or they have been suggested to me by other people in SMF forum, so in the current version there is very little left from the original work, but all this would not have been possible without that initial work.</p>
<p>Since version 2.4 of October 2010, this mod also uses the functions created by <strong>Marcin Krol</strong> and modified by <strong><a href="http://www.simplemachines.org/community/index.php?action=profile;u=154415" target="_blank">X3mE</a></strong> in his mod <strong><a href="http://www.simplemachines.org/community/index.php?action=profile;u=154415" target="_blank">OS & Browser Detection</a></strong> to detect the Operating System and Browser of potential spammers.</p>
<p>This program, as most of my work, is free software (at least the parts I have done). You may redistribute it and/or modify it for your own projects anyway you want. Just mention where you got it from, to give me the credit I deserve for my efforts. Anyway if you are going to make any money with it, I will be very grateful if you consider donating me a small percentage of your profit.</p>';
// MOD httpBL END

?>