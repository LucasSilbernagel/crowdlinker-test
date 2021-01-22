$(function(){

	// Cache jQuery selectors
	$cta = $(".cta"),
	$modal = $(".modal"),
	$closeModal = $(".closeModal"),
	$modalOverlay = $(".modalOverlay"),
	$backgroundElements = $("header, main, footer");
	
	// Open modal when CTA button is clicked
	$cta.click(function () {
		// Trap focus inside modal when open
		$backgroundElements.attr("aria-hidden", "true");
		$backgroundElements.attr("tabindex", "-1");
		// Disable background scroll
		$('html, body').css({
			overflow: 'hidden',
			height: '100%'
		});
		// Open modal
		$modal.addClass("active");
		$modalOverlay.addClass("active");
	});

	// Close modal when background overlay is clicked
	$modalOverlay.click(function () {
		// Un-trap focus
		$backgroundElements.attr("aria-hidden", "false");
		$backgroundElements.attr("tabindex", "0");
		// Re-enable background scroll
		$('html, body').css({
			overflow: 'auto',
			height: '100%'
		});
		// Hide modal and overlay
		$modal.removeClass("active");
		$modalOverlay.removeClass("active");
	});

	// Close modal when close modal button is clicked
	$closeModal.click(function () {
		// Un-trap focus
		$backgroundElements.attr("aria-hidden", "false");
		$backgroundElements.attr("tabindex", "0");
		// Re-enable background scroll
		$('html, body').css({
			overflow: 'auto',
			height: '100%'
		});
		// Hide modal and overlay
		$modal.removeClass("active");
		$modalOverlay.removeClass("active");
	});

	// Close modal when escape key is pressed
	$(document).keydown(function(event) { 
		if (event.key === 'Escape') { 
			// Un-trap focus
			$backgroundElements.attr("aria-hidden", "false");
			$backgroundElements.attr("tabindex", "0");
			// Re-enable background scroll
			$('html, body').css({
				overflow: 'auto',
				height: '100%'
			});
			// Hide modal and overlay
			$modal.removeClass("active");
			$modalOverlay.removeClass("active");
		}
});

});