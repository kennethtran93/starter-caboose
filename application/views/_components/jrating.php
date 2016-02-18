$('.{field}').jRating({
	rateMax : 5, // Highest Rating
	phpPath : '/viewer/rate', // Target for AJAX call
	onSuccess : function(element, rate, data) {
		alert("Your rating of " + rate + " has been recorded for this quote.\nThis page will now be refreshed to show the average rating for this quote.");
		window.location.reload(true);
	}
});