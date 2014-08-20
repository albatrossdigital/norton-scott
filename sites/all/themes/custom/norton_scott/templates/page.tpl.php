<!--.page -->
<div role="document" class="page">

  <!--.l-header region -->
  <header role="banner" class="l-header">

    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
      <div class="<?php print $top_bar_classes; ?>">
      <?php endif; ?>
        <nav class="top-bar"<?php print $top_bar_options; ?>>
          <ul class="title-area">
            <li class="name"><h1><?php print $linked_site_name; ?></h1></li>
            <li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
          </ul>
          <section class="top-bar-section">
            <?php if ($top_bar_main_menu) :?>
              <?php print $top_bar_main_menu; ?>
            <?php endif; ?>
            <?php if ($top_bar_secondary_menu) :?>
              <?php print $top_bar_secondary_menu; ?>
            <?php endif; ?>
          </section>
        </nav>
      <?php if ($top_bar_classes): ?>
      </div>
      <?php endif; ?>
      <!--/.top-bar -->
    <?php endif; ?>
      
 <!-- Magellan menu -->
<div id="main-nav" data-magellan-expedition="fixed">
      <div class="contain-to-grid">
        <nav class="top-bar" data-topbar data-options="sticky">
          <ul class="title-area">
            <li class="name">
                <a href="#"><img src="images/icon.png" alt="Norton Scott"></a></li> 
            <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
          </ul>
 
     <section class="top-bar-section">
    <!-- Right Nav Section -->
        <ul class="right">
            <li data-magellan-arrival="about"><a href="#about">About</a></li>
            <li data-magellan-arrival="case-studies"><a href="#case-studies">Case Studies</a></li>
            <li data magellan-arrival="news"><a href="http://localhost:8083/sandbox/wireframe/#news-section">News</a></li>
            <li data-magellan-arrival="contact"><a href="#contact">Contact</a></li>
        </ul>
    </section>
        </nav>
      </div>
    </div>
 <!-- End magellan menu -->
      
      
    <!-- Title, slogan and menu -->
    <?php if ($alt_header): ?>
    <section class="row <?php print $alt_header_classes; ?>">

      <?php if ($linked_logo): print $linked_logo; endif; ?>

      <?php if ($site_name): ?>
        <?php if ($title): ?>
          <div id="site-name" class="element-invisible">
            <strong>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </strong>
          </div>
        <?php else: /* Use h1 when the content title is empty */ ?>
          <h1 id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>
      <?php endif; ?>

      <?php if ($site_slogan): ?>
        <h2 title="<?php print $site_slogan; ?>" class="site-slogan"><?php print $site_slogan; ?></h2>
      <?php endif; ?>

      <?php if ($alt_main_menu): ?>
        <nav id="main-menu" class="navigation" role="navigation">
          <?php print ($alt_main_menu); ?>
        </nav> <!-- /#main-menu -->
      <?php endif; ?>

      <?php if ($alt_secondary_menu): ?>
        <nav id="secondary-menu" class="navigation" role="navigation">
          <?php print $alt_secondary_menu; ?>
        </nav> <!-- /#secondary-menu -->
      <?php endif; ?>

    </section>
    <?php endif; ?>
    <!-- End title, slogan and menu -->

    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
      <section class="l-header-region row">
        <div class="medium-12 columns">
          <?php print render($page['header']); ?>
        </div>
      </section>
      <!--/.l-header-region -->
    <?php endif; ?>

  </header>
  <!--/.l-header -->

  <?php if (!empty($page['featured'])): ?>
    <!--/.featured -->
  <div class="bg-video">  
    <section class="l-featured row">
      <div class="medium-8 medium-centered columns">
        <?php print render($page['featured']); ?>
      </div>
    </section>
  </div>
    <!--/.l-featured -->
  <?php endif; ?>
    
  <?php if (!empty($page['about'])): ?>
    <!--/.about -->
 <div class="gray-section">
    <section class="l-about row">
      <div class="medium-12 columns">
        <?php print render($page['about']); ?>
      </div>
    </section>
  </div>
    <!--/.l-about -->
  <?php endif; ?>
    
  <?php if (!empty($page['case_studies'])): ?>
    <!--/.case_studies -->
    <div class="white-section">
    <section class="l-case-studies row">
      <div class="medium-12 columns">
        <?php print render($page['case_studies']); ?>
      </div>
    </section>
    </div>
    <!--/.l-case_studies -->
  <?php endif; ?>
    
  <?php if (!empty($page['news'])): ?>
    <!--/.news -->
  <div class="gray-section">
    <section class="l-news row">
      <div class="medium-12 columns">
        <?php print render($page['news']); ?>
      </div>
    </section>
  </div>
    <!--/.l-news -->
  <?php endif; ?>

  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--/.l-messages -->
    <section class="l-messages row">
      <div class="medium-12 columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--/.l-help -->
    <section class="l-help row">
      <div class="medium-12 columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

  <main role="main" class="row l-main">
    <div class="<?php print $main_grid; ?> main columns">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>

      <a id="main-content"></a>

      <?php if ($breadcrumb): print $breadcrumb; endif; ?>

      <?php if ($title && !$is_front): ?>
        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      <?php endif; ?>

      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php print render($page['content']); ?>
    </div>
    <!--/.main region -->

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </main>
  <!--/.main-->


  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-sections -->
    <div class="navy-section">
    <section class="row l-footer-sections">
      <?php if (!empty($page['footer_firstcolumn'])): ?>
        <div class="footer-first medium-7 columns">
          <?php print render($page['footer_firstcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_secondcolumn'])): ?>
        <div class="footer-second medium-4 medium-offset-1 offset columns">
          <?php print render($page['footer_secondcolumn']); ?>
        </div>
      <?php endif; ?>
    </section>
    
    <!--/.footer-sections-->
  <?php endif; ?>

  <!--.l-footer-->
  <footer class="l-footer panel row" role="contentinfo">
    <?php if (!empty($page['footer'])): ?>
      <div class="footer medium-12 columns">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>

    <?php if ($site_name) :?>
      <div class="copyright medium-12 columns">
        &copy; <?php print date('Y') . ' ' . check_plain($site_name) . ' ' . t('All rights reserved.'); ?>
      </div>
    <?php endif; ?>
  </footer>
  </div>
  <!--/.footer-->

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->

<!--/typekit -->
<?php 
/**
 * Delayed loading of typekit scripts vs Flicker-free loading
 * Source: https://www.farbeyondcode.com/Delayed-loading-of-typekit-scripts-vs-Flicker-free-loading-5-2304.html
 * Avg. Load Time: 66ms; 91ms; 113ms
 */
?>


<script type="text/javascript">
    /* <![CDATA[ */ 
    TypekitConfig = {
        kitId: 'ncq7mvj'
    };
    (function() {
        var tk = document.createElement('script');
        tk.src = '//use.typekit.com/' + TypekitConfig.kitId + '.js';
        tk.type = 'text/javascript';
        tk.async = 'true';
        tk.onload = tk.onreadystatechange = function() {
            var rs = this.readyState;
            if (rs && rs != 'complete' && rs != 'loaded') return;
            try { Typekit.load(TypekitConfig); } catch (e) {}
        };
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(tk, s);
    })(); 
    /* ]]> */
</script>
<!--/.typekit -->
