<?php
/*
 * Include this file at the end of your template file, ideally after other
 * script statements and before the closing </body> tag. The javascript helper
 * will only kick in when jQuery is already included elsewhere.
*/

include_once(dirname(__FILE__) . '/config.php');

?>
<?php if (empty($_COOKIE[$cookieNonsenseSettings['cookie_name']])): ?>
<script src="<?php echo $cookieNonsenseSettings['webpath']; ?>/helper.js"></script>
<?php endif; ?>
