const { willPrefill, prefill_course_name, prefill_currency } = window.APP;

function updatePrice() {
    const course_name = document.getElementById("courseSelection").value;
    const currency = document.getElementById("currencyInput").value;

    if (!course_name || !currency) return;

    fetch(`scripts/fetch-currency-price.php?currency=${currency}&course_name=${encodeURIComponent(course_name)}`)
        .then(res => res.json())
        .then(data => {
            const notAvailable = "N/A"
            const raw_amount = data.price ?? notAvailable;
            let amount;
            if (raw_amount === notAvailable) {
                amount = raw_amount;
            } else {
                amount = Number(raw_amount).toLocaleString('en-US', {
                    minimumFractionDigits: 2,
                    maximumFractionDigits: 2
                });
            }

            document.getElementById("priceDisplay").value = amount;
        })
        .catch(err => console.error("Price fetch failed:", err));
}

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

        if (willPrefill) {
            document.getElementById("courseSelection").value = prefill_course_name;
            const option = document.querySelector(
                `.currency-option[data-code="${prefill_currency}"]`
            );
            updateCurrencyOption(option); //in currency-selector.js, make sure option is valid
            updatePrice();
        }
    })
    .catch(err => console.error('Failed to load courses:', err));

// Trigger when course selection changes
document.getElementById("courseSelection").addEventListener("change", updatePrice);

// Trigger when currency changes
document.querySelectorAll(".currency-option").forEach(opt => {
    opt.addEventListener("click", function () {
        document.getElementById("currencyInput").value = this.dataset.code;
        updatePrice();
    });
});