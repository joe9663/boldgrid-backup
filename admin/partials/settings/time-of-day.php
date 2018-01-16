<?php
/**
 * Time of day.
 *
 * @since 1.5.4
 */

defined( 'WPINC' ) ? : die;

ob_start();
?>

<div class="bg-box">
	<div class="bg-box-top">
		<?php esc_html_e( 'Time of Day', 'boldgrid-backup' ); ?>
	</div>
	<div class="bg-box-bottom">
		<select id='tod-h' name='tod_h'>
			<?php
				for ( $x = 1; $x <= 12; $x ++ ) {
			?>
			<option value='<?php echo $x;?>'
			<?php
				if ( ! empty( $settings['schedule']['tod_h'] ) && $x === $settings['schedule']['tod_h'] ) {
					echo ' selected';
				}
			?>><?php echo $x;?></option>
			<?php
				}
			?>
		</select>

		<select id='tod-m' name='tod_m'>
			<?php
				for ( $x = 0; $x <= 59; $x ++ ) {
					// Convert $x to a padded string.
					$x = str_pad( $x, 2, '0', STR_PAD_LEFT );
			?>
			<option value='<?php echo $x;?>'
			<?php
				if ( ! empty( $settings['schedule']['tod_m'] ) && $x == $settings['schedule']['tod_m'] ) {
					echo ' selected';
				}
			?>><?php echo $x;?></option>
			<?php
				}
			?>
		</select>

		<select id='tod-a' name='tod_a'>
			<option value='AM'
				<?php
					if ( ! isset( $settings['schedule']['tod_a'] ) || 'PM' !== $settings['schedule']['tod_a'] ) {
						echo ' selected';
					}
				?>>AM</option>
			<option value='PM'
				<?php
					if ( isset( $settings['schedule']['tod_a'] ) && 'PM' === $settings['schedule']['tod_a'] ) {
						echo ' selected';
					}
				?>>PM</option>
		</select>

		<p class="wp-cron-notice hidden"><em>WP Cron runs on GMT time, which is currently <?php echo date( 'l g:i a e')?>.</em></p>
	</div>
</div>

<?php
$output = ob_get_contents();
ob_end_clean();
return $output;
?>