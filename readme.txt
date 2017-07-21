=== Comment Titles SEO ===
Contributors: seo-dave
Donate link: http://stallion-theme.co.uk/comment-titles-wordpress-seo-plugin/
Tags: Comments, Comment Titles, Comments SEO, Comment Form, WordPress SEO, WordPress SEO Plugin, SEO Plugin, SEO, Search Engine Optimization, Search Engine Optimisation
Requires at least: 4.4
Tested up to: 4.8
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The Comment Titles SEO Plugin adds an extra field to the Comment Form for your commenter's to add a relevant title (Comment Title) adding additional SEO value.

== Description ==

WordPress lacks the ability to add a title to a comment, by adding Comment Titles a Post can be more like a forum generating multiple conversation threads with their own titles. If you also install the free [WordPress SEO Comments Plugin](https://wordpress.org/plugins/blog-comments-seo/ "WordPress SEO Comments Plugin") your comments will be output as SEO Comment Posts as well: larger comments are output like a WordPress Post and Google will index and rank them in their own right: generate free Google traffic from your comments!

For a full description see the [Comment Titles SEO Plugin Article](http://stallion-theme.co.uk/comment-titles-wordpress-seo-plugin/ "Comment Titles SEO Plugin").

**WordPress Comments and SEO - Why Use the Comment Titles SEO Plugin?**

There's a potential SEO issue with user comments, a webmaster might spend hours crafting the perfectly search engine optimized text for a Posts main text. However, your visitors post comments with no search engine optimization potentially damaging all your hard work!

The Comment Title adds additional text we can use to improve a Posts optimization by improving the SEO quality of your visitors comments without editing you users comments. By having Comment Titles you have the option to modify the titles to improve the comments optimization to support the main Posts content.

The Comment Titles can also be used by other plugins/themes for further SEO gain, for example the [Stallion Responsive SEO Theme](http://stallion-theme.co.uk/stallion-responsive-theme/ "Stallion Responsive") integrates the Comment Titles into the SEO Comment Posts output. Visit the link above and scroll down to the comments (the above WordPress Post has over 100 comments), to see how it works in practice.

Keep an eye out for the next update of the [WordPress SEO Comments Plugin](https://wordpress.org/plugins/blog-comments-seo/ "WordPress SEO Comments Plugin"). Version 3.0.0 (working on the update now) will use this plugins Comment Titles to improve it's SEO output.

**WordPress SEO Plugins**

I'm attempting to replicate the Stallion Responsive Themes awesome SEO output via various plugins (see list below) to work with any WordPress theme.

* [Stallion SEO Plugin](https://wordpress.org/plugins/stallion-wordpress-seo-plugin/)
* [Display Widgets SEO Plus Plugin](https://wordpress.org/plugins/display-widgets-seo-plus/)
* [SEO Comments Plugin](https://wordpress.org/plugins/blog-comments-seo/)
* [Comment Titles SEO Plugin](https://wordpress.org/plugins/comment-titles-seo/)
* More WordPress SEO Plugins are planned

= Tags =

Comments, Comment Titles, Comments SEO, WordPress SEO, WordPress SEO Plugin, SEO Plugin, SEO, Search Engine Optimization, Search Engine Optimisation

== Other Notes ==

**WordPress SEO Resources**

For WordPress SEO tips and tutorials, check out the following articles:

* [WordPress SEO Tutorial](http://stallion-theme.co.uk/seo-tutorial-for-wordpress/)
* [WordPress SEO Tutorial Friendly Permalinks](http://stallion-theme.co.uk/seo-friendly-wordpress-permalinks/)
* [WordPress SEO Tutorial Title Tag Optimization](http://stallion-theme.co.uk/wordpress-title-element-tag-optimization/)
* [WordPress SEO Tutorial 301 Redirects](http://stallion-theme.co.uk/wordpress-seo-tutorial-301-redirects/)
* [WordPress SEO Tutorial Anchor Text](http://stallion-theme.co.uk/wordpress-seo-tutorial-anchor-text/)
* [WordPress SEO Tutorial Alt Text](http://stallion-theme.co.uk/wordpress-seo-tutorial-alt-text/)
* [WordPress SEO Tutorial Related Posts Plugins](http://stallion-theme.co.uk/wordpress-seo-tutorial-related-posts-plugins/)
* [WordPress SEO Tutorial Duplicate Content](http://stallion-theme.co.uk/wordpress-seo-tutorial-duplicate-content-and-canonical-urls/)
* [WordPress SEO Tutorial Google XML Sitemaps](http://stallion-theme.co.uk/wordpress-seo-tutorial-google-xml-sitemaps/)
* [WordPress SEO Comments Plugin](http://stallion-theme.co.uk/wordpress-seo-comments-plugin/)

== Installation ==

You can use the built in WordPress plugin installer (under 'Plugins >> Add New : Upload') or you can install the Comment Titles SEO Plugin manually using FTP (described below).

1. Upload the `comment-titles-seo` folder to the `/wp-content/plugins/` directory using FTP.
2. Activate the Comment Titles SEO Plugin through the `Plugins` menu in WordPress.
3. There aren't any settings with this plugin, you will have a new `Comment Title` field within your Comments Form and when Editing a Comment. The Comment Titles are also shown under the main `Comments` admin page.

== Frequently Asked Questions ==

= Why is the Comment Title Form Field Different For Logged In/Logged Out Visitors? =

There's two ways to add a new comment field to the comment form.

Manually modify the themes PHP code (usually the themes comments.php template file) and place the Comment Tile code precisely where you want within the comment form output. This is how I built the Stallion Responsive SEO Theme version of the Comment Title feature, means the location is precise.

Or (how this plugin works);

Use a WordPress filter to place the code wherever the filter places the code. WordPress includes various filters for adding features to the comment form area, BUT the filters aren't consistent between logged in visitors and logged out visitors (oversight by core WordPress IMHO).

We ideally want the extra Comment Title field to be placed above the main comment form field (where the visitor types the comments content): I think it makes sense to have it above where the content is typed. Unfortunately there isn't a single WordPress filter for placing code here for both logged in/logged out visitors, therefore we have to use two filters (one for logged in, one for logged out visitors).

The two filters are `comment_form_logged_in_after` (logged in) and `comment_form_before_fields` (logged out).

Depending upon your theme the output might be different. In TwentySeventeen (default theme) for example logged in visitors see the Comment Title field ABOVE the main comment form field and for logged out visitors BELOW the main comment form field (above the Name Field).

It works, but I find it a little annoying and there's no obvious solution to make the location consistent AND automated: I'm sure you don't want to be messing around with PHP code :-)

= Where Can I See an Example of the Comment Titles SEO Plugin in Action? =

A couple of good examples can be found at 

[Stallion WordPress SEO Plugin](http://stallion-theme.co.uk/stallion-wordpress-seo-plugin/ "Stallion WordPress SEO Plugin") - 60 plus comments, all have Comment Titles.

[WordPress SEO Tutorial](http://stallion-theme.co.uk/seo-tutorial-for-wordpress/ "WordPress SEO Tutorial") - 60 plus comments, all have Comment Titles.

= How To Use The Comment Titles In a Theme/Plugin =

The [Stallion Responsive SEO Theme](http://stallion-theme.co.uk/stallion-responsive-theme/ "Stallion Responsive") and the [WordPress SEO Comments Plugin](https://wordpress.org/plugins/blog-comments-seo/) integrate the Comment Titles into the SEO Comment Posts making the output significantly better search engine optimized.

For example [Go To This Comment](http://stallion-theme.co.uk/stallion-responsive-theme/comment-page-1/#comment-3646) and note it has a Comment Title - "Best Meme Generator WordPress Plugin".
Scroll to the bottom of that comment and note the link floating to the right with the Comment Title as anchor text.
The link [Goes to This SEO Comment Post](http://stallion-theme.co.uk/stallion-responsive-theme/?cid=3646).
Study the SEO Comment Post carefully, note it's Title Tag and H1 Heading also uses the Comment Title meaning SEO wise it can rank in Google for the Comment Title.

Without the Title Tag and the H1 Heading the SEO Comment Post output wouldn't be particularly well optimized (title tag is a excerpt of the comment text) and wouldn't rank high in Google for searches related to the Comment Title. Try it, search Google for the title : Best Meme Generator WordPress Plugin.

Will try to add code samples in a future update.

== Screenshots ==

1. WordPress Comment Form with Extra Comment Title Field.

2. Edited WordPress Comment with Extra Comment Title Field.

3. WordPress Comments Showing the Comment Title Output.

4. WordPress Comments Showing the Comment Title Output Including Integration with the WordPress SEO Comments Plugin.

== Changelog ==

= 1.0 =
* First release.

== Upgrade Notice ==

= 1.0.0 =
* First release.