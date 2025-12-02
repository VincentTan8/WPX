fetch('scripts/fetch-course-package.php')
    .then(response => response.json())
    .then(data => {
        const select = document.getElementById('courseSelection');

        data.forEach(item => {
            const opt = document.createElement('option');
            opt.value = item.course_name;
            opt.textContent = item.course_name;
            select.appendChild(opt);
        });
    })
    .catch(err => console.error('Failed to load courses:', err));

function updatePrice() {
    const course_name = document.getElementById("courseSelection").value;
    const currency = document.getElementById("currencyInput").value;

    if (!course_name || !currency) return;

    fetch(`scripts/fetch-currency-price.php?currency=${currency}&course_name=${encodeURIComponent(course_name)}`)
        .then(res => res.json())
        .then(data => {
            document.getElementById("priceDisplay").value = data.price ?? "N/A";
        })
        .catch(err => console.error("Price fetch failed:", err));
}

// Trigger when course selection changes
document.getElementById("courseSelection").addEventListener("change", updatePrice);

// Trigger when currency changes
document.querySelectorAll(".currency-option").forEach(opt => {
    opt.addEventListener("click", function () {
        document.getElementById("currencyInput").value = this.dataset.code;
        updatePrice();
    });
});