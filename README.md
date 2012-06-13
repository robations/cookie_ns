cookie_ns
=========

Cookie Nonsense: some simple PHP and JS to add EU cookie law notifications

How to use
==========

Download the files and add to a directory under your webroot, say, `cookie_ns`.

Add include statements to your template file(s):

    <?php
    // You can add this somewhere at the bottom of the page, for example, below the
    // footer
    include('cookie_ns/notice.php');
    ?>

    <?php
    // Add this at the bottom of the page, probably best to add after other script
    // tags and before the closing </body> tag.
    include('cookie_ns/javascript.php');
    ?>

You will probably need to adjust the path, depending on your directory structure.

Copy `config.php.default` as `config.php` and edit the configuration (you can set a
link to your privacy policy and edit other text values).

You can edit the inline styles in notice.php or override them in your stylesheet
(class names have been set for most elements).