// Show or hide the button based on the scroll position
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopBtn.style.display = "block";
    } else {
        scrollToTopBtn.style.display = "none";
    }
}

// Scroll to the top when the button is clicked
document.getElementById("scrollToTopBtn").addEventListener("click", function () {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
});
