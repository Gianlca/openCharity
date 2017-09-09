<div id="page-wrapper">

<header>
	<?php print render($page['header']); ?>
	
	<div id="logo">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>		
	</div>
	
      <div id="main-menu" class="navigation">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div>
</header>

<div id="slideshow">
	<div class="intro"> <?php print render($page['slideshow']); ?> </div>
</div>

<?php print render($page['page_top']); ?>

<article>
	<div>
	      <?php if ($title): ?>
	        <h1 class="title" id="page-title">
	          <?php print $title; ?>
	        </h1>
	      <?php endif; ?>
	      <?php print render($title_suffix); ?>

	<?php print render($page['content']); ?> 
	</div>
</article>

<?php print render($page['page_bottom']); ?>

<footer> <?php print render($page['footer']); ?> </footer>

</div>
