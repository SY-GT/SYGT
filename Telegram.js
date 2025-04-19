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

// Submit Form & Send to Telegram Bot
document.getElementById("dmForm").addEventListener("submit", function(e) {
  e.preventDefault();

  // Get product details
  const productName = document.querySelector("h4").innerText;
  const productImage = document.querySelector("img").src;

  // Get form data
  const firstName = document.getElementById("firstName").value;
  const lastName = document.getElementById("lastName").value;
  const phone = document.getElementById("popupPhone").value;
  const email = document.getElementById("popupEmail").value || "Not provided";
  const addressLine1 = document.getElementById("addressLine1").value;
  const city = document.getElementById("city").value;
  const postalCode = document.getElementById("postalCode").value;
  const state = document.getElementById("IndianState").value;

  // Telegram Bot API Token and Chat ID
  const telegramBotToken = "7965577251:AAFMUStxmq0aDe_hiiGXrHcW5kfrw3kwEGU";
const chatId = "5591526043";
  // Message
  const message = `New Order!
Product: ${productName}
Name: ${firstName} ${lastName}
Phone: ${phone}
Email: ${email}
Address: ${addressLine1}, ${city}, ${state} - ${postalCode}`;


  // Send Message to Telegram Bot
  const textUrl = `https://api.telegram.org/bot${telegramBotToken}/sendMessage?chat_id=${chatId}&text=${encodeURIComponent(message)}`;
  fetch(textUrl)
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error(error));

  // Close popup
  document.getElementById("instagramPopup").style.display = "none";
});
