<?php $footer_copyright_enabled = stm_option('footer_copyright'); ?>

<?php if($footer_copyright_enabled): ?>
	<?php $footer_logo_enabled = stm_option('footer_logo_enabled'); ?>
	<?php $footer_logo = stm_option('footer_logo'); ?>
	<?php $footer_copyright_text = stm_option('footer_copyright_text'); ?>
	<div id="footer_copyright">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-7" style="padding-right: 0px !important;padding-left: 0px !important;">
					<div class="clearfix">
						<?php if($footer_logo_enabled): ?>
							<div class="pull-left">
								<?php if(!empty($footer_logo) and !empty($footer_logo['id'])): ?>
									<?php $footer_logo_custom = wp_get_attachment_image_src($footer_logo['id'], 'img-50-56'); ?>
									<img class="footer_logo" src="<?php echo esc_attr($footer_logo_custom[0]); ?>" alt="<?php _e('Footer logo', STM_DOMAIN); ?>"/>
								<?php else: ?>
									<img class="footer_logo" src="<?php echo esc_attr($footer_logo['url']); ?>" alt="<?php _e('Footer logo', STM_DOMAIN); ?>"/>
								<?php endif; ?>
							</div>
						<?php endif; ?>
						<?php if($footer_copyright_text): ?>
							<div class="copyright_text"><?php echo balanceTags($footer_copyright_text); ?></div>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-7 col-sm-5">
					<div class="clearfix">
						<div class="pull-right xs-pull-left">
							<?php global $stm_option; ?>
							<?php $socials = stm_option('copyright_use_social'); ?>
							<!-- Header top bar Socials -->
							<?php if(!empty($socials) and stm_option( 'copyright_use_social' )): ?>
								<div class="pull-right">
									<div class="copyright_socials">
										<ul class="clearfix">
											<?php
												foreach ( $stm_option['copyright_use_social'] as $key => $val ) {
													if ( ! empty( $stm_option[$key] ) && $val == 1 ) {
														echo "<li><a href='{$stm_option[$key]}'><i class='fa fa-{$key}'></i></a></li>";
													}
												}
											?>
										</ul>
									</div>
								</div>
							<?php endif; ?>
						</div>
						<div class="pull-right xs-pull-left hidden-sm hidden-xs">
							<ul class="footer_menu heading_font clearfix">
							    <?php
			                        wp_nav_menu( array(
			                                'menu'              => 'secondary',
			                                'theme_location'    => 'secondary',
			                                'depth'             => 1,
			                                'container'         => false,
			                                'menu_class'        => 'header-menu clearfix',
			                                'items_wrap'        => '%3$s',
			                                'fallback_cb' => false
			                            )
			                        );
			                    ?>
						    </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>