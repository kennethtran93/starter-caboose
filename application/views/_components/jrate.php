$("#jrate").jRate({
	startColor: 'darkred',
	endColor: 'limegreen',
	rating: $('#jrate').attr("data-average"),
	count: 5,
	min: 0,
	max: 5,
	precision: 0.01,
	onSet: function(rating) {
		var idBox = $('#jrate').attr("data-id");
		var rate = Math.round(rating);
		$.post(
			"/viewer/rate", {
				idBox: idBox,
				rate: rate,
				action: 'rating'
			},
			function (data) {
				if (!data.error)
				{
					var intro = "Thank you for using the jRate Rating Plugin.";
					var message = "Your rating of " + rating + " (rounded to " + rate + ") has been recorded for this quote.";
					$('#jrate').replaceWith("<p><strong>Thank you!  " + message + "</strong></p>");
					alert(intro + "\n" + message + "\n\nThis page will now be refreshed to show the average rating for this quote.");
					window.location.reload(true);
				} else
				{
					
				}
			},
			'json'
		);
	}
});