<form method="get" class="searchform" action="<?php bloginfo('home'); ?>/">
<input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" class="textfield" />
<input type="submit" name="submit" class="submit" value="Search" />
</form>
