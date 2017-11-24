<?php

/**
 * 
 * template for submit a quote page
 */

 get_header();?>

 <div id="primary" class="content-area">
  <main id="main" class="site-main">  
    <section>

      <header>
        <?php the_title('<h1 class="entry-title">','</h1>'); ?>
      </header>
        <?php if(is_user_logged_in() && current_user_can( 'edit_posts')): ?>


      <div class="quote-submission-wrapper">
        <form name="quoteForm" id="quote-submission-form">

        <div>
          <label for="quote-author">Author of Quote</label>
          <input type="text" name="quote_author" id="quote-author">

          </div>


          





          <div>
          <label for="quote-content">Quote</label>
          <textarea rows="3" cols="20"name="quote_content" id="quote-content"></textarea>

          </div>
          <div>
          <label for="quote-source">Where is this quote from?</label>
          <input type="text" name="quote_source" id="quote-source">

          </div>
          
          <div>
          <label for="quote-source-url">Provide a Url</label>
          <input type="url" name="quote_source_url" id="quote-source-url">

          </div>

          <input type="submit" value="Submit Quote" id="quote-submit-button">

        </form>
      <p class="submit-success-message" style="display:none;"></p>
      </div>



<?php else:?>

<p>Whatchu talkin' bout Willis</p>

<p><?php echo sprintf('<a href="%1s">%2s</a>',esc_url( wp_login_url()), "Click here to login."); ?></p>

<?php endif; ?>
    </section>
    <nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
          <p class="brought-to-by">Brought to you by <span class="academy-link"><a href="https://redacademy.com/"> Red Academy<a></span></p>
				</nav>


  </main>


  
</div>



<?php get_footer();?>
