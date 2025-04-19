
// Open Popup
document.querySelectorAll(".buy-button").forEach(button => {
  button.addEventListener("click", function(e) {
    e.preventDefault();
    document.getElementById("instagramPopup").style.display = "flex";
  });
});

// Close Popup
document.querySelector(".close-btn").addEventListener("click", function() {
  document.getElementById("instagramPopup").style.display = "none";
});

  // Close popup
  document.getElementById("instagramPopup").style.display = "none";
});
