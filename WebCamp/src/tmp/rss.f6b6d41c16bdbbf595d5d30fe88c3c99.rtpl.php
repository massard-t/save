<?php if(!class_exists('raintpl')){exit;}?><div id="rssOutput">RSS-feed will be listed here...</div>
<?php $counter1=-1; if( isset($tab) && is_array($tab) && sizeof($tab) ) foreach( $tab as $key1 => $value1 ){ $counter1++; ?>

<?php echo $key1;?> -> <?php echo $value1;?> 
<?php } ?>