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
                            <strong><a href="https://www.nipissingu.ca/">Nipissing University</a></strong> <br />
                            100 College Drive, Box 5002 <br />
                            North Bay, ON, Canada <br />
                            P1B 8L7 <br />
                            Tel: 705.474.3450<br />
                            Fax: 705.474.1947<br />
                            TTY: 877.688.5507<br />                                
                        </div>
                        <div id="nuFooterLinks">
                            <div style="float: right; text-align: left; padding: 0 1em 0 1em;">
                                <a href="https://www.nipissingu.ca/users">Phone Directory</a><br />
                                <a href="https://mail.nipissingu.ca/">NU Mail</a><br />
                                <a href="https://www.nipissingu.ca/departments/human-resources/health-and-safety">Health &amp; Safety</a><br />
                                <a href="https://www.nipissingu.ca/site-information/site-map">Site Map</a><br />
                            </div>
                            <div style="float: right; text-align: left; padding: 0 1em 0 1em;">
                                <a href="https://my.nipissingu.ca/">MyNipissing</a><br />
                                <a href="https://webadvisor.nipissingu.ca/">WebAdvisor</a><br />
                                <a href="https://learn.nipissingu.ca/">Blackboard</a><br />
                                <a href="https://www.eclibrary.ca/">Library</a><br />
                            </div>
                        </div>
                    </div>
                
                    <div id="nuFooter3">
                        &nbsp;
                    </div>
                
                    <div style="clear: both"></div>
                
                </div>
            </div>
            
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
