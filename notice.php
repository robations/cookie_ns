<?php include_once(dirname(__FILE__) . '/config.php'); ?>
<?php if (empty($_COOKIE[$cookieNonsenseSettings['cookie_name']])): ?>
<div class="cookieNonsense-container" id="cookieNonsense" style="background: #fff; border: 1px solid #ccc; padding: 20px; position: fixed; bottom: 20px; left: 20px; width: 16em; text-align: center;">
    <p class="cookieNonsense-header" style="font-size: 14px; font-weight: bold;"><?php echo $cookieNonsenseSettings['policy_url']; ?></p>
    <?php if (!empty($cookieNonsenseSettings['policy_url'])): ?>
    <p class="cookieNonsense-policy"><a class="cookieNonsense-policyLink" href="<?php echo $cookieNonsenseSettings['policy_url']; ?>">
        <?php echo $cookieNonsenseSettings['policy_link_text']; ?>
    </a></p>
    <?php endif; ?>
    <?php if (!empty($cookieNonsenseSettings['webpath'])): ?>
    <form class="cookieNonsense-form" method="post" action="<?php echo $cookieNonsenseSettings['webpath']; ?>/agree.php" id="cookieNonsense-agree"><div><button class="cookieNonsense-button" type="submit" value="agree"><?php echo $cookieNonsenseSettings['button_text']; ?></button></div></form>
    <?php endif; ?>
</div>
<?php endif; ?>
