<?php

/*
* Template Name: Homepage
*/

get_header(); the_post(); ?>

<?php if( is_page() ): ?>
	<div class="row wrapper">

		<!--main banner-->
		<div class="col-lg-12 col-no-padding banner-body">
			<img src="<?php echo get_post_meta(get_the_ID(), 'banner', $single); ?>" class="img" />
		</div>
		<!--main banner end-->

		<div class="clearfix"></div>

		<div class="wrapper-home">

			<div class="col-lg-4 col-md-4 sub-section">
				<h1><?php _e('Asset and Wealth Management', 'goldenequatorcapital.com'); ?></h1>
				<img class="thumbnail thumbnail-home" src="<?php echo get_post_meta(get_the_ID(), 'image-1', $single); ?>" />
				<!-- <?php echo get_post_meta(get_the_ID(), 'hp-intro', $single); ?> -->
				<p>
					<?php _e('Golden Equator Capital (GEC) is an Independent Asset Management and Private Equity Investment firm headquartered in Singapore. For international clients exploring alternatives to diversify their assets and gain access to the Asian financial markets, GEC is the trusted provider of reliable, first-class service.', 'goldenequatorcapital.com'); ?>
				</p>
			</div>

			<div id="sub-section-middle" class="col-lg-4 col-md-4 sub-section sub-section-middle">
				<h2><?php _e('What We Offer', 'goldenequatorcapital.com'); ?></h2>

				<p><?php _e('We provide the following suite of services:', 'goldenequatorcapital.com'); ?></p>

				<ul class="no-bullet">
					<li class="arrow"><?php _e('Investment Advisory Services for High Net Worth Individuals & Families', 'goldenequatorcapital.com'); ?></li>
					<li class="arrow"><?php _e('Discretionary & Advisory Porfolio Management', 'goldenequatorcapital.com'); ?></li>
					<li class="arrow"><?php _e('Retirement Planning', 'goldenequatorcapital.com'); ?></li>
					<li class="arrow"><?php _e('Global Investor Program (GIP) Application', 'goldenequatorcapital.com'); ?></li>
					<li class="arrow"><?php _e('Private Equity Fund Management', 'goldenequatorcapital.com'); ?></li>
				</ul>

				<p><?php _e('In addition, we also stand alongside our clients and bridge gaps in the following areas:', 'goldenequatorcapital.com'); ?></p>

				<ul class="no-bullet">
					<li class="arrow"><?php _e('Insurance', 'goldenequatorcapital.com'); ?></li>
					<li class="arrow"><?php _e('Property Interests and Mortgages', 'goldenequatorcapital.com'); ?></li>
					<li class="arrow"><?php _e('Estate Planning and Trust Establishment', 'goldenequatorcapital.com'); ?></li>
					<li class="arrow"><?php _e('Offshore Private Investment Companies', 'goldenequatorcapital.com'); ?></li>
				</ul>

			</div>

			<div class="col-lg-4 col-md-4 sub-section">
				<h2><?php _e('Corporate News', 'goldenequatorcapital.com'); ?></h2>

				<div class="rss">
					<ul>
						<?php
						$lang = $_GET['lang'];
						$lang_param = '';
						if(!empty($lang))
							$lang_param = '?lang='.$lang;
						?>
						<li>
							<a class="rsswidget" href="http://www.bloomberg.com/news/articles/2015-07-13/golden-equator-starts-hedge-fund-as-it-expands-service-to-rich" title="Golden Equator Starts Hedge Fund as It Expands Service to Rich">Golden Equator Starts Hedge Fund as It Expands Service to Rich</a>
							<span class="rss-date"><?php _e("13 Jul, 2015"); ?></span>
						</li>
						<li>
							<a class="rsswidget" href="http://www.mis-asia.com/tech/industries/apple-seed-launches-eight-startups-in-singapore/" title="Apple Seed launches eight startups in Singapore">Apple Seed launches eight startups in Singapore</a>
							<span class="rss-date"><?php _e("13 Jul, 2015"); ?></span>
						</li>
						<li>
							<a class="rsswidget" href="http://www.dealstreetasia.com/stories/appleseed-expo-showcases-new-cohort-of-startups-8981/" title="Appleseed Expo showcases new cohort of startups">Appleseed Expo showcases new cohort of startups</a>
							<span class="rss-date"><?php _e("10 Jul, 2015"); ?></span>
						</li>
					</ul>
				</div>


				<h2><?php _e('Financial Headlines', 'goldenequatorcapital.com'); ?></h2>

				<div class="rss">
					<?php
					echo do_shortcode('[better-rss feed="http://feeds.reuters.com/news/hedgefunds" show_date=1 items=3]');
					?>
				</div>

				<!--<h2><?php /*_e('World Clock', 'goldenequatorcapital.com'); */?></h2>

                        <div class="clocks">

                            <div class="row">
                                <div class="clock">
                    				<iframe src="http://free.timeanddate.com/clock/i333jcuq/n236/fc630/tcfbc251/pct/avt/fs18/ftb/pl0/pr0/pt0/pb0/th1/ts1" frameborder="0" allowTransparency="true"></iframe>
                                    <?php /*_e('Singapore', 'goldenequatorcapital.com'); */?>
                				</div>

                				<div class="clock">
                    				<iframe src="http://free.timeanddate.com/clock/i333jcuq/n136/fc630/tcfbc251/pct/avt/fs18/ftb/pl0/pr0/pt0/pb0/th1/ts1" frameborder="0" allowTransparency="true"></iframe>
                                    <?php /*_e('London', 'goldenequatorcapital.com'); */?>
                				</div>

                				<div class="clock">
                				    <iframe src="http://free.timeanddate.com/clock/i333jcuq/n179/fc630/tcfbc251/pct/avt/fs18/ftb/pl0/pr0/pt0/pb0/th1/ts1" frameborder="0" allowTransparency="true"></iframe>
                                    <?php /*_e('New York', 'goldenequatorcapital.com'); */?>
                				</div>
                            </div>

                            <div class="row" style="margin-top: 15px;">
                				<div class="clock">
                    				<iframe src="http://free.timeanddate.com/clock/i333jcuq/n776/fc630/tcfbc251/pct/avt/fs18/ftb/pl0/pr0/pt0/pb0/th1/ts1" frameborder="0" allowTransparency="true"></iframe>
                                    <?php /*_e('Dubai', 'goldenequatorcapital.com'); */?>
                				</div>

                				<div class="clock">
                				    <iframe src="http://free.timeanddate.com/clock/i333jcuq/n240/fc630/tcfbc251/pct/avt/fs18/ftb/pl0/pr0/pt0/pb0/th1/ts1" frameborder="0" allowTransparency="true"></iframe>
                                    <?php /*_e('Sydney', 'goldenequatorcapital.com'); */?>
                				</div>

                				<div class="clock">
                    				<iframe src="http://free.timeanddate.com/clock/i333jcuq/n248/fc630/tcfbc251/pct/avt/fs18/ftb/pl0/pr0/pt0/pb0/th1/ts1" frameborder="0" allowTransparency="true"></iframe>
                                    <?php /*_e('Tokyo', 'goldenequatorcapital.com'); */?>
                    			</div>
                            </div>
                        </div>-->
			</div>
		</div>
	</div>
<?php endif; ?>

<?php get_footer(); ?>