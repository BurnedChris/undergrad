<?php

class Undergrad_social_widget extends WP_Widget{

  function __construct(){
    parent::__construct('Undergrad_social_widget', 'Social Media', array('classname' => 'Undergrad_social_widget', 'description' => 'Display divnks to all your social media' ));
  }
  function form($instance){
    $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
    $title 			= !empty($instance['title']) ? $instance['title'] : '';
    $social_color_options = !empty($instance['social_color_options']) ? $instance['social_color_options'] : 'brand_colors';
    $social_color_fill_options = !empty($instance['social_color_fill_options']) ? $instance['social_color_fill_options'] : 'background_fill';
    $social_color_fill_options = !empty($instance['social_shape_options']) ? $instance['social_shape_options'] : 'circle';
    $social_size_options = !empty($instance['social_size_options']) ? $instance['social_size_options'] : 'threeEM';
    $facebook 		= !empty($instance['facebook']) ? $instance['facebook'] : '';
    $twitter 		= !empty($instance['twitter']) ? $instance['twitter'] : '';
    $vk 		= !empty($instance['vk']) ? $instance['vk'] : '';
    $youtube 		= !empty($instance['youtube']) ? $instance['youtube'] : '';
    $divnkedin 		= !empty($instance['divnkedin']) ? $instance['divnkedin'] : '';
    $googleplus 		= !empty($instance['googleplus']) ? $instance['googleplus'] : '';
    $skype 		= !empty($instance['skype']) ? $instance['skype'] : '';
    $reddit 		= !empty($instance['reddit']) ? $instance['reddit'] : '';
    $instagram 		= !empty($instance['instagram']) ? $instance['instagram'] : '';
    $pinterest 		= !empty($instance['pinterest']) ? $instance['pinterest'] : '';
    $tumblr 		= !empty($instance['tumblr']) ? $instance['tumblr'] : '';
    $disqus 		= !empty($instance['disqus']) ? $instance['disqus'] : '';
    $github 		= !empty($instance['github']) ? $instance['github'] : '';
    $codepen 		= !empty($instance['codepen']) ? $instance['codepen'] : '';
    $stackoverflow 		= !empty($instance['stackoverflow']) ? $instance['stackoverflow'] : '';
    $dribbble 		= !empty($instance['dribbble']) ? $instance['dribbble'] : '';
    $behance 		= !empty($instance['behance']) ? $instance['behance'] : '';
    $fivehundredpx 		= !empty($instance['fivehundredpx']) ? $instance['fivehundredpx'] : '';
    $fdivckr 		= !empty($instance['fdivckr']) ? $instance['fdivckr'] : '';
    $twitch 		= !empty($instance['twitch']) ? $instance['twitch'] : '';
    $vimeo 		= !empty($instance['vimeo']) ? $instance['vimeo'] : '';
    $soundcloud 		= !empty($instance['soundcloud']) ? $instance['soundcloud'] : '';
    $lastfm 		= !empty($instance['lastfm']) ? $instance['lastfm'] : '';
    $steam 		= !empty($instance['steam']) ? $instance['steam'] : '';
    $xbox 		= !empty($instance['xbox']) ? $instance['xbox'] : '';
    $playstation 		= !empty($instance['playstation']) ? $instance['playstation'] : '';

	?>
	<p>
		<label for="<?php echo $this->get_field_id('title'); ?>">Title of the widget</label><br>
		<input type="text" style="width:100%" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>">
	</p>
  <p>
    <label for="<?php echo $this->get_field_id('social_color_options'); ?>">Show Caption with images</label><br>
	<select style="width:100%" id="<?php echo $this->get_field_id('social_color_options'); ?>" name="<?php echo $this->get_field_name('social_color_options'); ?>">
	  	<option value="brand_colors" <?php echo ($instance['social_color_options'] == 'brand_colors') ? 'selected=""' : ''; ?>>Use Brand Color</option>
	  	<option value="use_header_color" <?php echo ($instance['social_color_options'] == 'use_header_color') ? 'selected=""' : ''; ?>>Use Header Color</option>
	</select>
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('social_color_fill_options'); ?>">Icon Fill Options</label><br>
	<select style="width:100%" id="<?php echo $this->get_field_id('social_color_fill_options'); ?>" name="<?php echo $this->get_field_name('social_color_fill_options'); ?>">
	  	<option value="background_fill" <?php echo ($instance['social_color_fill_options'] == 'background_fill') ? 'selected=""' : ''; ?>>Background Fill</option>
	  	<option value="icon_color" <?php echo ($instance['social_color_fill_options'] == 'icon_color') ? 'selected=""' : ''; ?>>Icon Color</option>
      <option value="icon_color_border" <?php echo ($instance['social_color_fill_options'] == 'icon_color_border') ? 'selected=""' : ''; ?>>Icon Fill and Border</option>
	</select>
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('social_shape_options'); ?>">Icon Shape Options</label><br>
	<select style="width:100%" id="<?php echo $this->get_field_id('social_shape_options'); ?>" name="<?php echo $this->get_field_name('social_shape_options'); ?>">
	  	<option value="circle" <?php echo ($instance['social_shape_options'] == 'circle') ? 'selected=""' : ''; ?>>Circle</option>
	  	<option value="rounded" <?php echo ($instance['social_shape_options'] == 'rounded') ? 'selected=""' : ''; ?>>Rounded</option>
      <option value="square" <?php echo ($instance['social_shape_options'] == 'square') ? 'selected=""' : ''; ?>>square</option>
	</select>
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('social_size_options'); ?>">Icon Size Options</label><br>
  <select style="width:100%" id="<?php echo $this->get_field_id('social_size_options'); ?>" name="<?php echo $this->get_field_name('social_size_options'); ?>">
      <option value="twoEM" <?php echo ($instance['social_size_options'] == 'twoEM') ? 'selected=""' : ''; ?>>2em</option>
      <option value="threeEM" <?php echo ($instance['social_size_options'] == 'threeEM') ? 'selected=""' : ''; ?>>3em</option>
      <option value="fourEM" <?php echo ($instance['social_size_options'] == 'fourEM') ? 'selected=""' : ''; ?>>4em</option>
  </select>
  </p>
	<hr style="border:none;height:1px;background:#BFBFBF">
	<p>Insert the URL's to your social networks</p>
  <p>Main Social Media</p>
	<p>
		<label for="<?php echo $this->get_field_id('facebook'); ?>">Facebook</label><br>
		<input type="text" style="width:100%" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" value="<?php echo $facebook; ?>">
	</p>
  <p>
    <label for="<?php echo $this->get_field_id('twitter'); ?>">Twitter</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" value="<?php echo $twitter; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('vk'); ?>">VK</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('vk'); ?>" name="<?php echo $this->get_field_name('vk'); ?>" value="<?php echo $vk; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('youtube'); ?>">YouTube</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" value="<?php echo $youtube; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('divnkedin'); ?>">divnkedin</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('divnkedin'); ?>" name="<?php echo $this->get_field_name('divnkedin'); ?>" value="<?php echo $divnkedin; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('googleplus'); ?>">googleplus</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('googleplus'); ?>" name="<?php echo $this->get_field_name('googleplus'); ?>" value="<?php echo $googleplus; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('skype'); ?>">skype</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('skype'); ?>" name="<?php echo $this->get_field_name('skype'); ?>" value="<?php echo $skype; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('reddit'); ?>">reddit</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('reddit'); ?>" name="<?php echo $this->get_field_name('reddit'); ?>" value="<?php echo $reddit; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('instagram'); ?>">instagram</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('instagram'); ?>" name="<?php echo $this->get_field_name('instagram'); ?>" value="<?php echo $instagram; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('pinterest'); ?>">pinterest</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('pinterest'); ?>" name="<?php echo $this->get_field_name('pinterest'); ?>" value="<?php echo $pinterest; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('tumblr'); ?>">tumblr</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('tumblr'); ?>" name="<?php echo $this->get_field_name('tumblr'); ?>" value="<?php echo $tumblr; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('$disqus'); ?>">disqus</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('disqus'); ?>" name="<?php echo $this->get_field_name('disqus'); ?>" value="<?php echo $disqus; ?>">
  </p>
  <hr style="border:none;height:1px;background:#BFBFBF">
  <p>Developer Social Networks</p>
  <p>
    <label for="<?php echo $this->get_field_id('github'); ?>">github</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('github'); ?>" name="<?php echo $this->get_field_name('github'); ?>" value="<?php echo $github; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('codepen'); ?>">codepen</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('codepen'); ?>" name="<?php echo $this->get_field_name('codepen'); ?>" value="<?php echo $codepen; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('stackoverflow'); ?>">stackoverflow</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('stackoverflow'); ?>" name="<?php echo $this->get_field_name('stackoverflow'); ?>" value="<?php echo $stackoverflow; ?>">
  </p>
  <hr style="border:none;height:1px;background:#BFBFBF">
  <p>Artistic Social Networks</p>
  <p>
    <label for="<?php echo $this->get_field_id('dribbble'); ?>">dribbble</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('dribbble'); ?>" name="<?php echo $this->get_field_name('dribbble'); ?>" value="<?php echo $dribbble; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('behance'); ?>">behance</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('behance'); ?>" name="<?php echo $this->get_field_name('behance'); ?>" value="<?php echo $behance; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('fivehundredpx'); ?>">fivehundredpx</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('fivehundredpx'); ?>" name="<?php echo $this->get_field_name('fivehundredpx'); ?>" value="<?php echo $fivehundredpx; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('fdivckr'); ?>">fdivckr</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('fdivckr'); ?>" name="<?php echo $this->get_field_name('fdivckr'); ?>" value="<?php echo $fdivckr; ?>">
  </p>
  <hr style="border:none;height:1px;background:#BFBFBF">
  <p>Video and Audio Social Networks</p>
  <p>
    <label for="<?php echo $this->get_field_id('twitch'); ?>">twitch</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('twitch'); ?>" name="<?php echo $this->get_field_name('twitch'); ?>" value="<?php echo $twitch; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('vimeo'); ?>">vimeo</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('vimeo'); ?>" name="<?php echo $this->get_field_name('vimeo'); ?>" value="<?php echo $vimeo; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('soundcloud'); ?>">soundcloud</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('soundcloud'); ?>" name="<?php echo $this->get_field_name('soundcloud'); ?>" value="<?php echo $soundcloud; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('lastfm'); ?>">lastfm</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('lastfm'); ?>" name="<?php echo $this->get_field_name('lastfm'); ?>" value="<?php echo $lastfm; ?>">
  </p>
  <hr style="border:none;height:1px;background:#BFBFBF">
  <p>Gaming Social Networks</p>
  <p>
    <label for="<?php echo $this->get_field_id('steam'); ?>">steam</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('steam'); ?>" name="<?php echo $this->get_field_name('steam'); ?>" value="<?php echo $steam; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('xbox'); ?>">xbox</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('xbox'); ?>" name="<?php echo $this->get_field_name('xbox'); ?>" value="<?php echo $xbox; ?>">
  </p>
  <p>
    <label for="<?php echo $this->get_field_id('playstation'); ?>">playstation</label><br>
    <input type="text" style="width:100%" id="<?php echo $this->get_field_id('playstation'); ?>" name="<?php echo $this->get_field_name('playstation'); ?>" value="<?php echo $playstation; ?>">
  </p>

	<?php
  }

  function update($new_instance, $old_instance){
    $instance = $old_instance;
    $instance['title'] 			= strip_tags($new_instance['title']);
    $instance['social_color_options']   = strip_tags($new_instance['social_color_options']);
    $instance['social_color_fill_options']   = strip_tags($new_instance['social_color_fill_options']);
    $instance['social_shape_options']   = strip_tags($new_instance['social_shape_options']);
    $instance['social_size_options']   = strip_tags($new_instance['social_size_options']);
    $instance['facebook'] 		= esc_url($new_instance['facebook']);
    $instance['twitter'] 		= esc_url($new_instance['twitter']);
    $instance['vk'] 		= esc_url($new_instance['vk']);
    $instance['youtube'] 		= esc_url($new_instance['youtube']);
    $instance['divnkedin'] 		= esc_url($new_instance['divnkedin']);
    $instance['googleplus'] 		= esc_url($new_instance['googleplus']);
    $instance['skype'] 		= esc_url($new_instance['skype']);
    $instance['reddit'] 		= esc_url($new_instance['reddit']);
    $instance['instagram'] 		= esc_url($new_instance['instagram']);
    $instance['pinterest'] 		= esc_url($new_instance['pinterest']);
    $instance['tumblr'] 		= esc_url($new_instance['tumblr']);
    $instance['disqus'] 		= esc_url($new_instance['disqus']);
    $instance['github'] 		= esc_url($new_instance['github']);
    $instance['codepen'] 		= esc_url($new_instance['codepen']);
    $instance['stackoverflow'] 		= esc_url($new_instance['stackoverflow']);
    $instance['dribbble'] 		= esc_url($new_instance['dribbble']);
    $instance['behance'] 		= esc_url($new_instance['behance']);
    $instance['fivehundredpx'] 		= esc_url($new_instance['fivehundredpx']);
    $instance['fdivckr'] 		= esc_url($new_instance['fdivckr']);
    $instance['twitch'] 		= esc_url($new_instance['twitch']);
    $instance['vimeo'] 		= esc_url($new_instance['vimeo']);
    $instance['soundcloud'] 		= esc_url($new_instance['soundcloud']);
    $instance['lastfm'] 		= esc_url($new_instance['lastfm']);
    $instance['steam'] 		= esc_url($new_instance['steam']);
    $instance['xbox'] 		= esc_url($new_instance['xbox']);
    $instance['playstation'] 		= esc_url($new_instance['playstation']);


    return $instance;
  }

  function widget($args, $instance){
    extract($args, EXTR_SKIP);
    echo $before_widget;
    ?>
  		<?php echo !empty($instance['title']) ? '<h2 class="widget-title two-em">'.$instance['title'].'</h2>' : '' ?>

      <?php if($instance['social_color_options'] == 'use_header_color' && $instance['social_color_fill_options'] == 'background_fill'){
        $header_color = get_theme_mod('header_color');
        ?>
        <style type="text/css">
          .site-content .widget .social-widget div {
            background-color: <?php
            echo $header_color;?>!important }
        </style>
      <?php } if($instance['social_color_options'] == 'use_header_color' && $instance['social_color_fill_options'] == 'icon_color'){
        $header_color = get_theme_mod('header_color');
        ?>
        <style type="text/css">
          .site-content .widget .social-widget.icon_color div a{
            color: <?php
            echo $header_color;?>!important }
        </style>
      <?php } if($instance['social_color_options'] == 'use_header_color' && $instance['social_color_fill_options'] == 'icon_color_border'){
        $header_color = get_theme_mod('header_color');
        ?>
        <style type="text/css">
          .site-content .widget .social-widget.icon_color_border div{
            border: <?php
            echo $header_color;?> sodivd 0.2em !important; }
          .site-content .widget .social-widget.icon_color_border div a{
            color: <?php
            echo $header_color;?>!important }
        </style>
      <?php } ?>
    	<div class="widget-body">
    		<ul class="clearfix social-widget <?php echo $instance['social_color_fill_options']; ?> <?php echo $instance['social_size_options']; ?> <?php echo $instance['social_shape_options']; ?>">
	    	<?php echo !empty($instance['facebook']) 	? '<a target="_blank" data-title="Facebook" href="'.$instance['facebook'].'"><div class="facebook"><i class="zmdi zmdi-facebook"></i></div></a>' : '' ?>
        <?php echo !empty($instance['twitter']) 	? '<a target="_blank" data-title="twitter" href="'.$instance['twitter'].'"><div class="twitter"><i class="zmdi zmdi-twitter"></i></div></a>' : '' ?>
        <?php echo !empty($instance['vk']) 	? '<a target="_blank" data-title="vk" href="'.$instance['vk'].'"><div class="vk"><i class="zmdi zmdi-vk"></i></div></a>' : '' ?>
        <?php echo !empty($instance['youtube']) 	? '<a target="_blank" data-title="youtube" href="'.$instance['youtube'].'"><div class="youtube"><i class="zmdi zmdi-youtube-play"></i></div></a>' : '' ?>
        <?php echo !empty($instance['divnkedin']) 	? '<a target="_blank" data-title="divnkedin" href="'.$instance['divnkedin'].'"><div class="divnkedin"><i class="zmdi zmdi-divnkedin"></i></div></a>' : '' ?>
        <?php echo !empty($instance['googleplus']) 	? '<a target="_blank" data-title="googleplus" href="'.$instance['googleplus'].'"><div class="googleplus"><i class="zmdi zmdi-google-plus"></i></div></a>' : '' ?>
        <?php echo !empty($instance['skype']) 	? '<a target="_blank" data-title="skype" href="'.$instance['skype'].'"><div class="skype"><i class="zmdi zmdi-skype"></i></div></a>' : '' ?>
        <?php echo !empty($instance['reddit']) 	? '<a target="_blank" data-title="reddit" href="'.$instance['reddit'].'"><div class="reddit"><i class="zmdi zmdi-reddit"></i></div></a>' : '' ?>
        <?php echo !empty($instance['instagram']) 	? '<a target="_blank" data-title="instagram" href="'.$instance['instagram'].'"><div class="instagram"><i class="zmdi zmdi-instagram"></i></div></a>' : '' ?>
        <?php echo !empty($instance['pinterest']) 	? '<a target="_blank" data-title="pinterest" href="'.$instance['pinterest'].'"><div class="pinterest"><i class="zmdi zmdi-pinterest"></i></div></a>' : '' ?>
        <?php echo !empty($instance['tumblr']) 	? '<a target="_blank" data-title="tumblr" href="'.$instance['tumblr'].'"><div class="tumblr"><i class="zmdi zmdi-tumblr"></i></div></a>' : '' ?>
        <?php echo !empty($instance['disqus']) 	? '<a target="_blank" data-title="disqus" href="'.$instance['disqus'].'"><div class="disqus"><i class="zmdi zmdi-disqus"></i></div></a>' : '' ?>
        <?php echo !empty($instance['github']) 	? '<a target="_blank" data-title="github" href="'.$instance['github'].'"><div class="github"><i class="zmdi zmdi-github"></i></div></a>' : '' ?>
        <?php echo !empty($instance['codepen']) 	? '<a target="_blank" data-title="codepen" href="'.$instance['codepen'].'"><div class="codepen"><i class="zmdi zmdi-codepen"></i></div></a>' : '' ?>
        <?php echo !empty($instance['stackoverflow']) 	? '<a target="_blank" data-title="stackoverflow" href="'.$instance['stackoverflow'].'"><div class="stackoverflow"><i class="zmdi zmdi-stackoverflow"></i></div></a>' : '' ?>
        <?php echo !empty($instance['dribbble']) 	? '<a target="_blank" data-title="dribbble" href="'.$instance['dribbble'].'"><div class="dribbble"><i class="zmdi zmdi-dribbble"></i></div></a>' : '' ?>
        <?php echo !empty($instance['behance']) 	? '<a target="_blank" data-title="behance" href="'.$instance['behance'].'"><div class="behance"><i class="zmdi zmdi-behance"></i></div></a>' : '' ?>
        <?php echo !empty($instance['fivehundredpx']) 	? '<a target="_blank" data-title="fivehundredpx" href="'.$instance['fivehundredpx'].'"><div class="fivehundredpx"><i class="zmdi zmdi-500px"></i></div></a>' : '' ?>
        <?php echo !empty($instance['fdivckr']) 	? '<div class="fdivckr"><a target="_blank" data-title="fdivckr" href="'.$instance['fdivckr'].'"><i class="zmdi zmdi-fdivckr"></i></div></a>' : '' ?>
        <?php echo !empty($instance['twitch']) 	? '<a target="_blank" data-title="twitch" href="'.$instance['twitch'].'"><div class="twitch"><i class="zmdi zmdi-twitch"></i></div></a>' : '' ?>
        <?php echo !empty($instance['vimeo']) 	? '<a target="_blank" data-title="vimeo" href="'.$instance['vimeo'].'"><div class="vimeo"><i class="zmdi zmdi-vimeo"></i></div></a>' : '' ?>
        <?php echo !empty($instance['soundcloud']) 	? '<a target="_blank" data-title="soundcloud" href="'.$instance['soundcloud'].'"><div class="soundcloud"><i class="zmdi zmdi-soundcloud"></i></div></a>' : '' ?>
        <?php echo !empty($instance['lastfm']) 	? '<a target="_blank" data-title="lastfm" href="'.$instance['lastfm'].'"><div class="lastfm"><i class="zmdi zmdi-lastfm"></i></div></a>' : '' ?>
        <?php echo !empty($instance['steam']) 	? '<a target="_blank" data-title="steam" href="'.$instance['steam'].'"><div class="steam"><i class="zmdi zmdi-steam"></i></div></a>' : '' ?>
        <?php echo !empty($instance['xbox']) 	? '<a target="_blank" data-title="xbox" href="'.$instance['xbox'].'"><div class="xbox"><i class="zmdi zmdi-xbox"></i></div></a>' : '' ?>
        <?php echo !empty($instance['playstation']) 	? '<a target="_blank" data-title="playstation" href="'.$instance['playstation'].'"><div class="playstation"><i class="zmdi zmdi-playstation"></i></div></a>' : '' ?>

    		</ul>
    	</div>
    <?php
	echo $after_widget;
  }
}

add_action( 'widgets_init', create_function('', 'return register_widget("Undergrad_social_widget");') );
