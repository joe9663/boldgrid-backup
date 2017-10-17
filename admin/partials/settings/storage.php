<?php
/**
 * Display "Backup Storage" options.
 *
 * This file is included on the BoldGrid Backup Settings page and helps render
 * the "Backup Storage" section.
 *
 * @since 1.5.2
 */

$storage_locations = array(
	array(
		'title' => __( 'Local storage', 'boldgrid-backup' ),
		'key' => 'local',
		'is_setup' => true,
		'enabled' => ! empty( $settings['remote']['local']['enabled'] ) && true === $settings['remote']['local']['enabled'],
	),
);

/**
 * Allow other storage providers to register themselves.
 *
 * @since 1.5.2
 *
 * @param array $storage_locations {
 *     An array of details about our storage locations.
 *
 *     @type string $title     Amazon S3
 *     @type string $key       amazon_s3
 *     @type string $configure admin.php?page=boldgrid-backup-amazon-s3
 *     @type bool   $is_setup  Whether or not this provider is properly configured.
 *     @type bool   $enabled   Whether or not the checkbox should be checked.
 * }
 */
$storage_locations = apply_filters( 'boldgrid_backup_register_storage_location', $storage_locations );

?>

<tr>
	<th><?php echo __( 'Backup Storage', 'boldgrid-backup' ); ?></th>

	<td>

		<table id="storage_locations">
		<?php
		foreach( $storage_locations as $location ) {
			$tr = include BOLDGRID_BACKUP_PATH . '/admin/partials/settings/storage-location.php';
			echo $tr;
		}
		?>
		</table>

		<br />
		<p class="hidden" id="no_storage">
			<span class="dashicons dashicons-warning yellow"></span>
			<?php echo __( 'Backup will not occur if no storage locations are selected.', 'boldgrid-backup' ); ?>
		</p>

	</td>
</tr>