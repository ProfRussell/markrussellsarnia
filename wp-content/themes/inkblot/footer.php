<?php
/** Footer template.
 * 
 * @package Inkblot
 */
?>
 <div class="mainlinks">
		<div id="content-footer" role="complementary" class="widgets"><?php dynamic_sidebar( 'content-footer' ); ?></div><!-- #content-footer -->
			</div><!-- #content -->
			<footer id="footer" role="contentinfo">
				<?php
					printf( __( '<a href="#document">%1$s</a> &bull; Powered by %2$s with %3$s', 'inkblot' ),
						InkblotTag::inkblot_copyright(),
						'<a href="//wordpress.org" target="_blank">WordPress</a>',
						'<a href="//github.com/mgsisk/inkblot" target="_blank">Inkblot</a>'
					);
				?>
<?php if (file_exists('sitemap.xml')): ?> &bull; <a href="sitemap.xml">Sitemap</a><?php endif; ?>
  </div>
 <div class="mainlinks">
      <h3>Main Navigation</h3>
      <ul>
        <li><a href="http://markrussellsarnia.com" title="Home">Home</a></li>
        <li><a href="/meet-mark/" title="Meet Mark">About Mark</a></li>
        <li><a href="/events/" title="Events">Events</a></li>
        <li><a href="/city-issues/" title="City Issues">City Issues</a></li>
        <li><a href="/election-info/" title="Voting Info">Election Info</a></li>
        <li><a href="/blog/" title="My Blog">Latest News</a></li>
        <li><a href="/contact-us/" title="Contact Us">Contact Us</a></li>
      </ul>
    </div>
    <div class="mainlinks">
      <h3>Take Action</h3>
      <ul>
        <li><a href="/contact-us/request-a-lawn-sign/" title="Get a lawn sign">Get a lawn sign</a></li>
        <li><a href="/contact-us/volunteer/" title="Volunteer">Get Involved</a></li>
        <li><a href="/contact-us/donate/" title="Donate to the campaign">Make a donation</a></li>
        <li><a href="/contact-us/cover-photo/" title="Change your facebook cover photo">Get a Facebook Cover Photo</a></li>
      </ul>
    </div>
    <div class="mainlinks social_links2">
      <h3>Connect</h3>
      <ul>
        <li class="facebook"><a href="https://www.facebook.com/599186166835563" title="Mark on Facebook" target="_blank">Facebook</a></li>
        <li class="twitter"><a href="https://www.twitter.com/Mr_M_Russell" title="Mark on Twitter" target="_blank">Twitter</a></li>
        <li class="youtube"><a href="http://www.youtube.com/user/MarkRussellSarnia" title="Mark on YouTube" target="_blank">YouTube</a></li>
      </ul>
    </div>

			</footer><!-- #contentinfo -->
			<div id="page-footer" role="complementary" class="widgets"><?php dynamic_sidebar( 'page-footer' ); ?></div><!-- #page-footer -->
		</div><!-- #page -->
		<div id="document-footer" role="complementary" class="widgets"><?php dynamic_sidebar( 'document-footer' ); ?></div><!-- #document-footer -->
		<?php wp_footer(); ?>
	</body><!-- #document -->
</html>