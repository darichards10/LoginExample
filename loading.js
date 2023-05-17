document.addEventListener("DOMContentLoaded", function() {
    // Show the loading preview
    document.getElementById("loadingPreview").classList.remove("hide");
});

window.addEventListener("load", function() {
    // Calculate the duration for the loading preview to stay visible
    var duration = 1000; // 2 seconds in milliseconds

    // Delay hiding the loading preview
    setTimeout(function() {
        var loadingPreview = document.getElementById("loadingPreview");
        
        // Add a CSS transition for the hiding animation
        loadingPreview.style.transition = "opacity 0.3s ease-in-out";
        
        // Hide the loading preview
        loadingPreview.style.opacity = 0;
        
        // Remove the loading preview from the DOM after the transition ends
        setTimeout(function() {
            loadingPreview.parentNode.removeChild(loadingPreview);
        }, 300); // Wait for the transition duration (0.3s) before removing
        
    }, duration);


});