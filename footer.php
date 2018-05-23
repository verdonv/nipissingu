<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>
            <div id="nuFooter">
                <div id="nuFooterWrap">
                
                    <div id="nuFooter1">
                        &nbsp;
                    </div>
                
                    <div id="nuFooter2">
                        <div id="nuFooterAddress">
                            <strong><a href="http://www.nipissingu.ca/">Nipissing University</a></strong> <br />
                            100 College Drive, Box 5002 <br />
                            North Bay, ON, Canada <br />
                            P1B 8L7 <br />
                            Tel: 705.474.3450<br />
                            Fax: 705.474.1947<br />
                            TTY: 877.688.5507<br />                                
                        </div>
                        <div id="nuFooterLinks">
                            <div style="float: right; text-align: left; padding: 0 1em 0 1em;">
                                <a href="http://www.nipissingu.ca/directories/Pages/TelephoneDirectory.aspx">Phone Directory</a><br />
                                <a href="http://mail.nipissingu.ca/">NU Mail</a><br />
                                <a href="http://www.nipissingu.ca/departments/human-resources/health-and-safety">Health &amp; Safety</a><br />
                                <a href="http://www.nipissingu.ca/information/Pages/Site-Map.aspx">Site Map</a><br />
                            </div>
                            <div style="float: right; text-align: left; padding: 0 1em 0 1em;">
                                <a href="http://my.nipissingu.ca/">MyNipissing</a><br />
                                <a href="http://webadvisor.nipissingu.ca/">WebAdvisor</a><br />
                                <a href="http://blackboard.nipissingu.ca/">Blackboard</a><br />
                                <a href="http://www.eclibrary.ca/">Library</a><br />
                            </div>
                        </div>
                    </div>
                
                    <div id="nuFooter3">
                        &nbsp;
                    </div>
                
                    <div style="clear: both"></div>
                
                </div>
            </div>
            
            <!--
			<div id="site-generator">
				<?php // do_action( 'twentyeleven_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyeleven' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyeleven' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'twentyeleven' ), 'WordPress' ); ?></a>
			</div>
			-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>