(function (root, factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD. Register as an anonymous module.
		define(['jquery'], factory);
	} else {
		// Browser globals
		root.searchConfigurationParser = factory(root.jQuery);
	}
}(this, function ($) {
	"use strict";
	return function(node) {
		//console.log($(node).data('search-configuration'));
		return $(node).data('search-configuration');
	}
}));
