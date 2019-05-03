(function (root, factory) {
	if (typeof define === 'function' && define.amd) {
		// AMD. Register as an anonymous module.
		define(['jquery', 'searchConfigurationParser'], factory);
	} else {
		// Browser globals
		root.search = factory(root.jQuery, root.searchConfigurationParser);
	}
}(this, function ($, searchConfigurationParser) {
	"use strict";
	$(document).ready(function() {


		var suggestTimeoutId = null;
		var searchConfiguration = searchConfigurationParser($('[data-search-configuration]'));
		console.log(searchConfiguration);

		/* Configure the search input field to get suggestions on key strokes */
		$('#search').typeahead({hint:false,highlight:true,minLength:1}, {
			name: 'states',
			displayKey: 'value',
			source: function(query, sync, render) {
				if(suggestTimeoutId != null) {
					/* Remove delayed call not yet done */
					clearTimeout(suggestTimeoutId);
				}
				/* Limit the rate of calls to the suggest API by adding a delay before effective call */
				suggestTimeoutId = setTimeout(function() {
					//console.log(searchConfiguration['protocol'] + '://' + searchConfiguration['domain'] + ':' + searchConfiguration['port'] + "/suggest.json?q=" + query);
					$.getJSON(searchConfiguration['protocol'] + '://' + searchConfiguration['domain'] + ':' + searchConfiguration['port'] + "/suggest.json?q=" + query, function(data) {
						var parsed = [];
						for (var i = 0; i < data[1].length; i++) {
							var row = data[1][i];
							if (row) {
								parsed[parsed.length] = {
									data: [row],
									value: row,
									result: row
								};
							};
						};
						render(parsed);
					});
				}, 300);
			}
		});
	});
}));


