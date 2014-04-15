<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2010 osCommerce

  Released under the GNU General Public License
*/
?>
      </div>
      <div id="column_right">          
<?php
  if ($oscTemplate->hasBlocks('boxes_column_right')) 
  {
    // replace the quickfind button with "button_quick_find_freeoscommerce_012.gif"
	$boxes_column_right_search_modified = $oscTemplate->getBlocks('boxes_column_right');
	$boxes_column_right_search_modified = str_replace('button_quick_find.gif','button_quick_find_freeoscommerce_012.gif',$boxes_column_right_search_modified);
	echo $boxes_column_right_search_modified;
  }?>
      </div>
    </div>
    <div id="footer">
      <div id="footer_background"></div>
      <div id="footer_content">
        <?php require(DIR_WS_INCLUDES . 'footer.php'); ?>
        <br/><br/><a style="font-size: 11px;" href="http://www.websitehelpfromzach.com/" target="_blank" title="Website Help">Website Help - Website Fixes, Updates and Help</a>
      </div>
    </div>
  </div>
</div>

<?php echo $oscTemplate->getBlocks('footer_scripts'); ?>

</body>
</html>