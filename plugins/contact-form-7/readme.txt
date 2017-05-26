=== Very Simple Contact Form ===
Contributors: Guido07111975
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=donation%40guidovanderleest%2enl
Version: 6.3
License: GNU General Public License v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Requires at least: 3.7
Tested up to: 4.7
Stable tag: trunk
Tags: simple, responsive, contact, form, email, honeypot, captcha, widget, sidebar


This is a very simple contact form. Use shortcode [contact] to display form on page or use the widget.


== Description ==
= About =
This is a very simple responsive translatable contact form. 

It only contains Name, Email, Subject and Message. And a simple captcha sum. 

= How to use =
After installation add shortcode `[contact]` on your page to display form. 

Or go to Appearance > Widgets and add the widget to your sidebar.

By default form submissions will be send to email from admin (set in Settings > General).

While adding the shortcode or the widget you can add several attributes to personalize your form.

While adding the widget you can add some additional information above your form.

= Shortcode attributes = 
* Change email from admin: `[contact email_to="your-email-here"]`
* Multiple email: `[contact email_to="first-email-here, second-email-here"]`

You can also change labels and messages using an attribute.

* Labels: label_name, label_email, label_subject, label_captcha, label_message, label_submit
* Labels in case of error: error_name, error_email, error_subject, error_captcha, error_message
* Sending succeeded: message_success
* Sending failed: message_error

= Examples =
* Change Name and Submit labels: `[contact label_name="Your Name" label_submit="Send"]`
* Change captcha label: `[contact label_captcha="Please enter %s"]`
* Change captcha label: `[contact label_captcha="Please enter %s here"]`

= Subject field =
* Hide field: `[contact hide_subject="true"]`

= Widget attributes =
The widget supports the same attributes. Enter them without shortcode itself and without brackets.

= Examples =
* Change email from admin: `email_to="your-email-here"`
* Multiple email: `email_to="first-email-here, second-email-here"`
* Change Name and Submit labels: `label_name="Your Name" label_submit="Send"`
* Change captcha label: `label_captcha="Please enter %s"`
* Change captcha label: `label_captcha="Please enter %s here"`
* Hide subject field: `hide_subject="true"`

= List form submissions in dashboard =
With plugin [Contact Form DB](https://wordpress.org/plugins/contact-form-7-to-database-extension) you can list form submissions in your dashboard.

Note: Contact Form DB is currently only available on [GitHub](https://github.com/mdsimpson/contact-form-7-to-database-extension/releases).

= Question? =
Please take a look at the FAQ section.

= Translation =
Not included but plugin supports WordPress language packs.

More [translations](https://translate.wordpress.org/projects/wp-plugins/very-simple-contact-form) are very welcome!

= Credits =
Without the WordPress codex and help from the WordPress community I was not able to develop this plugin, so: thank you!

Enjoy!


== Installation ==
Installation info is moved to Description section because of the new plugin directory.


== Frequently Asked Questions ==
= Where is the settingspage? =
Plugin has no settingspage, use a shortcode with attributes or the widget with attributes to make it work.

= How do I set plugin language? =
Plugin uses the WP Dashboard language, set in Settings > General.

If plugin language pack is not available, language fallback will be English.

= How do I add attributes? =
You can find more info about this at the Description section.

= How do I style my form? =
It mostly depends on the stylesheet of your theme.

You can change style (CSS) using for example the [Very Simple Custom Style](https://wordpress.org/plugins/very-simple-custom-style) plugin.

= Can I hide Subject field? =
You can find more info about this at the Description section.

= Can user enter HTML in form? =
Yes, save HTML is allowed in message field and widget info field.

= Can I use multiple shortcodes? =
Do not use multiple shortcodes on the same website. This might cause a conflict. 

But you can use the shortcode on a page and the widget on the same website.

= Are form submissions listed in my dashboard? =
No, they will be send to admin by mail only.

With plugin [Contact Form DB](https://wordpress.org/plugins/contact-form-7-to-database-extension) you can list form submissions in your dashboard.

Note: Contact Form DB is currently only available on [GitHub](https://github.com/mdsimpson/contact-form-7-to-database-extension/releases).

= Why does form submission fail? =
An error message is displayed if plugin was unable to send form. This might be a server issue.

Form submissions are send using the wp_mail function (similar to php mail function). Maybe your hostingprovider disabled the php mail function, ask them to enable it.

= Why am I not receiving form submissions? =
* Look also in your junk/spam folder.
* Check the Description section above and check shortcode (attributes) for mistakes.
* Install another contact form plugin (such as Contact Form 7) to determine whether it's caused by my plugin or something else.

= Why does the captcha number not display properly? =
The captcha (random number) uses a php session to temporary store the number and some hostingproviders have disabled the use of sessions. Ask them for more info about this.

= Does this plugin has anti-spam features? =
Of course, the default WordPress sanitization and escaping functions are included.

It also contains 2 (invisible) honeypot fields (firstname and lastname) and a simple captcha sum.

= How can I make a donation? =
You like my plugin and you're willing to make a donation? Nice! There's a PayPal donate link on the WordPress plugin page and my website.

= Other question or comment? =
Please open a topic in plugin forum.


== Changelog ==
= Version 6.3 =
* bugfix: fixed double form submission (thanks snikolictech)
* updated files vscf-form and vscf-widget-form

= Version 6.2 =
* improvement: check to determine whether form was sent or not
* updated files vscf-form and vscf-widget-form
* minor textual changes
* updated readme file
* new screenshots on wp.org

= Version 6.1 =
* both shortcode files: removed error message above form
* updated file vscf-style

= Version 6.0 =
* message field and widget information field: save html is allowed
* added filter wp_kses_post
* updated files vscf-form, vscf-widget-form and vscf-widget
* fixed mistake in textdomain

For all versions please check file changelog.


== Screenshots == 
1. Very Simple Contact Form (Twenty Seventeen theme).
2. Very Simple Contact Form (Twenty Seventeen theme).
3. Very Simple Contact Form widget (Twenty Seventeen theme).
4. Very Simple Contact Form widget (dashboard).