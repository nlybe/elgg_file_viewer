<?php
/**
 * Elgg File Viewer
 * @package elgg_file_viewer
 */

require_once(dirname(__FILE__) . '/lib/functions.php');

return [
    'plugin' => [
        'name' => 'File Viewer',
		'version' => '5.2.0',
		'dependencies' => [
			'file' => [
				'must_be_active' => true,
            ],
			'vroom' => [
				'must_be_active' => false,
            ],
        ],
	],
];