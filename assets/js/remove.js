$(document).ready(function() {
	$(".remove").click(function() {
		$(".flash").hide();
	})

	setTimeout(function() {
		$(".flash").fadeOut("slow");
	}, 3000);

	$(document).on("change", ".change-img", function() {
		var image_name = $(".change-img").val();
		var file = image_name.split("\\").pop();
		$("#change-image-label").html(file);
	})
})