/**
 * @author:周文博
 * @email:steven198911@163.com
 * @desc:图片滑动插件
 * @copyright by steven198911@163.com
 * @date:2015-06-24
 * @version: 1.0.0
 * @param {Object} $
 */
(function($){
	var timer;
	var startX, startY, endX, endY;
	$.fn.slide = function(options){
		var defaults = {
			currentPage:0,
			currentEle:0,
			pageSize:0,
			count:5
		};
		var sets = $.extend({}, defaults, options || {});
		
	};
})(jQuery);