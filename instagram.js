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

            // Submit Form & Redirect to Instagram DM
            document.getElementById("dmForm").addEventListener("submit", function(e) {
                e.preventDefault();
                const firstName = document.getElementById("firstName").value;
                const lastName = document.getElementById("lastName").value;
                const phone = document.getElementById("popupPhone").value;
                const email = document.getElementById("popupEmail").value || "Not provided";
                const addressLine1 = document.getElementById("addressLine1").value;
                const addressLine2 = document.getElementById("addressLine2").value;
                const city = document.getElementById("city").value;
                const postalCode = document.getElementById("postalCode").value;
                const state = document.getElementById("IndianState").value;
                const product = this.closest(".col-4")?.querySelector("h4")?.innerText || "Product";

                // Instagram username
                const instagramUsername = "gh0st._.80";

                // Pre-filled message
                const message = `Hi! I want to buy *${product}*.\n\nName: ${firstName} ${lastName}\nPhone: ${phone}\nEmail: ${email}\nAddress: ${addressLine1}, ${addressLine2}, ${city}, ${state} - ${postalCode}`;

                // Open Instagram DM window
                const url = `https://www.instagram.com/direct/t/${instagramUsername}?text=${encodeURIComponent(message)}`;
                const newTab = window.open();
                newTab.location.href = url;

                // Close popup
                document.getElementById("instagramPopup").style.display = "none";
            });