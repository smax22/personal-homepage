'use strict';
$(document).ready(function() {
	hljs.initHighlightingOnLoad();
	$("#toggle-compose-comment").click(function(){
		$("#compose-comment").slideToggle("fast");
	});
});
