google.maps.event.addDomListener(window,'load',function(){
	var mapOptions = {
		zoom: 12,
		center: new google.maps.LatLng(35.689488,139.691706),
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
		panControl: false,
		draggable: false
	};
	var mp = new google.maps.Map(document.getElementById('map'), mapOptions);
});