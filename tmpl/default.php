<?php defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
<?php if($become_svw_facebbok_fan == 1) :?>
<section id="fb_like_plugin" class="sidebar" style="">
<div class="fb-like-plugin">
    <header>
        <h3>Werde eine Fan vom SVW!</h3>
    </header>
    <? /*<div class="fb-like" data-href="http://facebook.com/svwiesbaden" data-send="false" data-width="<?php echo $pluginWidth; ?>" data-show-faces="true" data-font="arial"></div>*/?>
    <div class="fb-like">
        <fb:like href="http://facebook.com/svwiesbaden" send="false" width="<?php echo $pluginWidth; ?>" show_faces="true"></fb:like> 
    </div>
</div>
</section>
<?php endif;?>