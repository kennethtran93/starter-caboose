$('.{field}').jRating({
	rateMax : 5, // Highest Rating
	phpPath : '/viewer/rate', // Target for AJAX call
	onSuccess : function(element, rate) {
		var intro = "Thank you for using jRating.";
		var message = "Your rating of " + rate + " has been recorded for this quote.";
		$('.{field}').replaceWith("<p><strong>Thank you!  " + message + "</strong></p>");
		alert(intro + "\n" + message + "\n\nThis page will now be refreshed to show the average rating for this quote.");
		window.location.reload(true);
	}
});