define(function(require) {
	var videojs = require('izap_videos_videojs_js');
	videojs.options.flash.swf = elgg.get_simplecache_url('videojs/video-js.swf');
	return videojs;
});