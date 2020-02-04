<?php

     $categories = get_categories();
     $options = get_desing_plus_option();

     foreach($categories as $category) {

       $category_id = $category->term_id;
       $cat_data = get_option("cat_$category_id");
       $color1 = $cat_data['color1'];
       $color2 = $cat_data['color2'];
       $color3 = $options['pickedcolor2'];

       if (!empty($cat_data['color1'])){
         echo '.pc #global_menu ul li.menu-category-' . $category_id . ' a { background:#' . $color1 . "; } ";
         if($color2) {
           echo '.pc #global_menu ul li.menu-category-' . $category_id . ' a:hover { background:#' . $color2 . "; } ";
         } else {
           echo '.pc #global_menu ul li.menu-category-' . $category_id . ' a:hover { background:#' . $color3 . "; } ";
         };
         echo '.flex-control-nav p span.category-link-' . $category_id . ' { color:#' . $color1 . "; } ";
         echo '#index-category-post-' . $category_id . ' .headline1 { border-left:5px solid #' . $color1 . "; } ";
         echo '#index-category-post-' . $category_id . ' a:hover { color:#' . $color1 . "; } ";
         echo '.category-' . $category_id . ' a:hover { color:#' . $color1 . "; } ";
         echo '.category-' . $category_id . ' .archive_headline { background:#' . $color1 . "; } ";
         echo '.category-' . $category_id . ' #post_list a:hover { color:#' . $color1 . "; } ";
         echo '.category-' . $category_id . ' .post a { color:#' . $color1 . "; } ";
         if($color2) {
           echo '.category-' . $category_id . ' .post a:hover { color:#' . $color2 . "; } ";
         } else {
           echo '.category-' . $category_id . ' .post a:hover { color:#' . $color3 . "; } ";
         };
         echo '.category-' . $category_id . ' .page_navi a:hover { color:#fff; background:#' . $color1 . "; } ";
         echo '.category-' . $category_id . ' #guest_info input:focus { border:1px solid #' . $color1 . "; } ";
         echo '.category-' . $category_id . ' #comment_textarea textarea:focus { border:1px solid #' . $color1 . "; } ";
         echo '.category-' . $category_id . ' #submit_comment:hover { background:#' . $color1 . "; } ";
         echo '.category-' . $category_id . ' #previous_next_post a:hover { background-color:#' . $color1 . "; } ";
         echo '.category-' . $category_id . ' #single_author_link:hover { background-color:#' . $color1 . "; } ";
         echo '.category-' . $category_id . ' #single_author_post li li a:hover { color:#' . $color1 . "; } ";
         echo '.category-' . $category_id . ' #post_pagination a:hover { background-color:#' . $color1 . "; } ";
         echo '.category-' . $category_id . ' #single_title h2 { background:#' . $color1 . "; } ";
         echo '.category-' . $category_id . ' .author_social_link li.author_link a { background-color:#' . $color1 . "; } ";
         if($color2) {
           echo '.category-' . $category_id . ' .author_social_link li.author_link a:hover { background-color:#' . $color2 . "; } ";
         } else {
           echo '.category-' . $category_id . ' .author_social_link li.author_link a:hover { background-color:#' . $color3 . "; } ";
         };
       };

     };

?>