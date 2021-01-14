<?php
/**
 * Dir class.
 *
 * @link       https://www.boldgrid.com
 * @since      SINCEVERSION
 *
 * @package    Boldgrid\Backup
 * @subpackage Boldgrid\Backup\Archive
 * @copyright  BoldGrid
 * @author     BoldGrid <support@boldgrid.com>
 */

namespace Boldgrid\Backup\V2\Archive;

/**
 * Class: Archive
 *
 * @since SINCEVERSION
 */
class Dirlist {
	/**
	 *
	 * @var Boldgrid\Backup\V2\Archive\Archive
	 */
	private $archive;

	private $core;

	/**
	 *
	 */
	public function __construct( $archive ) {
		$this->core    = apply_filters( 'boldgrid_backup_get_core', null );
		$this->archive = $archive;
	}

	/**
	 *
	 */
	public function get() {
		return $this->core->wp_filesystem->dirlist( $this->archive->get_dir() );
	}

	public function get_by_extension( $extension ) {
		$files = array();

		$dirlist = $this->get();
		foreach ( $dirlist as $key => $data ) {
			if ( pathinfo( $key, PATHINFO_EXTENSION ) === $extension ) {
				$files[] = $data;
			}
		}

		return $files;
	}
}
