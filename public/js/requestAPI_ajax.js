$('.city').ready(function() {
	$('.target').click(function(){
		$.ajax({
			url: "https://api.sandbox.amadeus.com/v1.2/flights/low-fare-search?apikey=9ayCYeVIATeYLQMsbp8zbU436IQvrloV&origin=SGN&destination=ICN&departure_date=2017-09-13&return_date=2017-09-17&number_of_results=10",
			type: 'GET',
			contentType: 'application/json',
			processData: false,
			success: function (response) {
				 console.log(response);
				alert(JSON.stringify(response));
			},
			error: function(err){
				alert("Cannot get data"+err);
			}
		});
	});
});