$(document).ready(function() {

	$('#contact').hide();
	$('#email').hide();

	$.ajax({
		url: 'php/tutor-details.php',
		type: 'GET',
		success: function(data)
		{
			var result = $.parseJSON(data);
			$.each(result, function(key, value){
				$.each(value, function(k, v){
					
					var video = $("<div class='center-block section-heading'><h3>Video Lectures</h3><div class='divider'></div></div>");
					var div = $("<div class='embed-responsive embed-responsive-16by9'><iframe id='video_path' class='embed-responsive-item'></iframe></div>");

					if (k === 'image_path') {
						$('#tutImg').attr("src",v.slice(3));
					}
					if (k === 'lecture_path') {
						$('#video_path').attr("src",v);
					}
					if (k === 'name') {
						$('#name').append(v);
					}
					if (k === 'contact_number') {

						$('#contact').append(v);
					}
					if (k === 'about') {
						$('#about').append(v);
					}
					if (k === 'email') {
						$('#email').append(v);
					}
					if (k === 'email') {
						$('#txtemail').append(v);
					}
					if (k === 'location') {
						$('#location').append(v);
					}
					if (k === 'board') {
						$('#board').append(v);
					}
					if (k === 'class') {
						$('#classes').append(v);
					}
					if (k === 'subject') {
						$('#subject').append(v);
					}
					if (k === 'tutor_category') {
						if (v === "Diamond" || v === "Super Premium" || v === "Premium"|| v === "Silver" || v === "Gold" ) {

							$('#videoLec').append(video);
							$('#videoLec').append(div);
							$('#contact').show();
							$('#email').show();

						}

					}
				});
});
}
})
});