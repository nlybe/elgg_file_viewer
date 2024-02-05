<?php
/**
 * Elgg File Viewer
 * @package elgg_file_viewer
 */

namespace FileViewer\Elgg;

class Bootstrap extends DefaultPluginBootstrap {
	
	const HANDLERS = [];
	
	/**
	 * {@inheritdoc}
	 */
	public function init() {
		$this->initViews();
	}

	/**
	 * Init views
	 *
	 * @return void
	 */
	protected function initViews() {

		// Syntax highlighting
		elgg_register_css('prism', elgg_get_simplecache_url('prism/themes/prism.css'));
		elgg_extend_view('prism/themes/prism.css', 'prism/plugins/line-numbers/prism-line-numbers.css');

		elgg_define_js('prism', [
			'src' => elgg_get_simplecache_url('prism/prism.js'),
			'exports' => 'Prism',
		]);
		elgg_define_js('prism-line-numbers', [
			'src' => elgg_get_simplecache_url('prism/plugins/line-numbers/prism-line-numbers.js'),
			'deps' => ['prism'],
		]);

		// Videojs
		elgg_register_css('videojs', elgg_get_simplecache_url('videojs/video-js.min.css'));

		elgg_define_js('videojs', [
			'src' => elgg_get_simplecache_url('videojs/video.min.js'),
		]);

		elgg_register_page_handler('projekktor', 'elgg_file_viewer_projekktor_video');

		elgg_register_event_handler('create', 'object', 'elgg_file_viewer_make_web_compatible');
		elgg_register_event_handler('update:after', 'object', 'elgg_file_viewer_make_web_compatible');
		elgg_register_plugin_hook_handler('entity:icon:url', 'object', 'elgg_file_view_set_video_icon_url');		
		
	}
}
