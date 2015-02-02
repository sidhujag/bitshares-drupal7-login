

<?php	  
/**
 * Theme social links.
 **/
$api_key = trim(variable_get('socialloginandsocialshare_apikey'));
if (!empty($api_key)) {
$my_settings = array(
  'interfacesize' => $interfaceiconsize,
  'lrinterfacebackground' => $interfacebackgroundcolor,
  'noofcolumns' => $interfacerow,
  'apikey' => $api_key,
  'location' => $loc,
  'callback' => url('', array('absolute' => TRUE)),
);
  drupal_add_js(array('lrsociallogin' => $my_settings), 'setting');
  ?>
  <script type="text/javascript"
          src="<?php print $GLOBALS['base_url'] ?>/<?php echo drupal_get_path('module', 'socialloginandsocialshare') ?>/js/sociallogin_interface.js">
  </script>
<?php
}
if (variable_get('socialloginandsocialshare_bitshareslogin_enabled') == 1) {
$my_settings = array(
  'location' => $loc,
  'bitshareslogin_handler' => url('socialloginandsocialshare/bitshareslogin_handler', array('absolute' => TRUE))
);
?>
<script type="text/javascript"
      src="<?php print $GLOBALS['base_url'] ?>/<?php echo drupal_get_path('module', 'socialloginandsocialshare') ?>/js/sociallogin_bitsharesloginbutton.js">
</script>
<div class="cell text-center">
      <a href="javascript:void(0)" onclick="javascript:getBitsharesLoginURL('<?php echo $my_settings['location']; ?>', '<?php echo $my_settings['bitshareslogin_handler']; ?>')" class="btn btn-block btn-lg btn-social btn-bitshares">
        <img alt="BTS" height="42" src="<?php echo $GLOBALS['base_url']; ?>/<?php echo drupal_get_path('module', 'socialloginandsocialshare'); ?>/images/logo-bitshares.svg" width="42">&nbsp;BitShares Login</a>
    </div>
<?php } ?>    
<div class="interfacecontainerdiv"></div>
