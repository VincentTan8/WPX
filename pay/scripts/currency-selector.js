//Currency selector section
const currencySelector = document.getElementById("currencySelector");
const dropdown = currencySelector.querySelector(".currency-dropdown");
const selected = currencySelector.querySelector(".currency-selected");
const hiddenInput = document.getElementById("currencyInput");

selected.addEventListener("click", () => {
    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
});

document.querySelectorAll(".currency-option").forEach(option => {
    option.addEventListener("click", () => {
        const code = option.dataset.code;
        const flag = option.dataset.flag;

        // Update visible display
        selected.querySelector(".flag").src = "assets/" + flag;
        selected.querySelector(".code").textContent = code;

        // Update hidden input
        hiddenInput.value = code;

        dropdown.style.display = "none";
    });
});

// Close if user clicks outside
document.addEventListener("click", (e) => {
    if (!currencySelector.contains(e.target)) {
        dropdown.style.display = "none";
    }
});