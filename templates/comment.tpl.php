<?php
/***
 * @file
 * Default theme implementation for comments.
 *
 * Available variables:
 * - $author: Comment author. Can be link or plain text.
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $created: Formatted date and time for when the comment was created.
 *   Preprocess functions can reformat it by calling format_date() with the
 *   desired parameters on the $comment->created variable.
 * - $changed: Formatted date and time for when the comment was last changed.
 *   Preprocess functions can reformat it by calling format_date() with the
 *   desired parameters on the $comment->changed variable.
 * - $new: New comment marker.
 * - $permalink: Comment permalink.
 * - $submitted: Submission information created from $author and $created during
 *   template_preprocess_comment().
 * - $picture: Authors picture.
 * - $signature: Authors signature.
 * - $status: Comment status. Possible values are:
 *   comment-unpublished, comment-published or comment-preview.
 * - $title: Linked title.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - comment: The current template type, i.e., "theming hook".
 *   - comment-by-anonymous: Comment by an unregistered user.
 *   - comment-by-node-author: Comment by the author of the parent node.
 *   - comment-preview: When previewing a new or edited comment.
 *   The following applies only to viewers who are registered users:
 *   - comment-unpublished: An unpublished comment visible only to administrators.
 *   - comment-by-viewer: Comment by the user currently viewing the page.
 *   - comment-new: New comment since last the visit.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * These two variables are provided for context:
 * - $comment: Full comment object.
 * - $node: Node object the comments are attached to.
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_comment()
 * @see template_process()
 * @see theme_comment()
 *
 * @ingroup themeable
 */
?>
<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

      <?php

        if(($node->type == "excursao")||($node->type == "compra_ingressos")||($node->type == "venda_ingressos")||($node->type == "oferecendo_carona")||($node->type == "procura_carona")){

            global $myprofile;
            
            $uid = user_load($comment->uid);
            
            $userpage = 'http://partiufestival.com/user/'.$user->uid;
            $myprofile = profile2_load_by_user($uid, 'main');
            
            $id_comentarista = $myprofile->uid;
            $link_comentarista = 'http://partiufestival.com/user/'.$id_comentarista;
            
            $THUMBNAIL_STYLE = 'quadrada'; 

            /*if(!$myprofile->field_foto['und'][0]['filename']){
                $default_thumbnail = 'http://partiufestival.com/sites/default/files/styles/quadrada/public/default_images/avatar.jpg';
            }else{
              $default_thumbnail = image_style_url($THUMBNAIL_STYLE, $myprofile->field_foto['und'][0]['filename']);
            }  */  

            if(isset($myprofile->field_foto['und'][0]['filename'])){
              $default_thumbnail = image_style_url($THUMBNAIL_STYLE, $myprofile->field_foto['und'][0]['filename']);
            }else{
              $default_thumbnail = 'http://partiufestival.com/sites/default/files/styles/quadrada/public/default_images/avatar.jpg';
            }                   

           

        }
      ?> 


      <div class="col-xs-1" style="padding: 5px; margin: 5px 0 0 0;">
          <a href="<?php print $link_comentarista; ?>"><img src="<?php print $default_thumbnail; ?>" class="img-responsive img-circle" /></a> 
      </div>
      <div class="col-xs-11"  style="padding: 5px; margin: 0">
              <div class="content"<?php print $content_attributes; ?>>
                <?php
                  hide($content['links']);
                ?>
                <p class="mensagem"><?php print render($content); ?></p>
                <p class="autor"><a href="<?php print $link_comentarista; ?>"><?php print render($myprofile->field_nome['und'][0]['value']);?></a></p>
              </div> 
              <?php print render($content['links']) ?>
      </div>



  
</div>
