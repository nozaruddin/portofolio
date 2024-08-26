document.addEventListener("DOMContentLoaded", function() {
    const title = document.querySelector('.typing-title');
    title.classList.add('start-typing');
});
// Open the popup
function openPopup(imgElement) {
    var popup = document.getElementById("imagePopup");
    var popupImg = document.getElementById("popupImage");

    popup.style.display = "block";
    popupImg.src = imgElement.src;
}

// Close the popup
function closePopup() {
    var popup = document.getElementById("imagePopup");
    popup.style.display = "none";
}

