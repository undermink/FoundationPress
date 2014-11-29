<div class="top-bar-container contain-to-grid show-for-medium-up" role="navigation">
    <nav class="top-bar" data-topbar="">
        <ul class="title-area">
            <li class="name">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
            </li>
        </ul>
        <section class="top-bar-section">
            <?php foundationPress_top_bar_l(); ?>
            <?php foundationPress_top_bar_r(); ?>
        </section>
          <section class="middle top-bar-section">
                  <form id="searchform" action="http://klotz/wordpress/" method="get" role="search">
                    <div class="row collapse">
                      <div class="right small-3 columns">
                        <input id="s" type="text" placeholder="Suchen" name="s" value=""></input>
                      </div>
		      <div class="right small-3 columns">
		      </div>
                    </div>
                  </form>
		<?php do_action('foundationPress_searchform_after_search_button'); ?>
                </section>

    </nav>
</div>
