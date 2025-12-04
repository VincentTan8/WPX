document.addEventListener("DOMContentLoaded", () => {
    const mobileSelect = document.getElementById("mobileCodeSelector");
    const mobileSelected = mobileSelect.querySelector(".mobile-selected");
    const mobileDropdown = mobileSelect.querySelector(".mobile-dropdown");
    const mobileOptions = mobileSelect.querySelectorAll(".mobile-option");
    const mobileInput = document.getElementById("mobileCodeInput");

    mobileSelect.addEventListener("click", () => {
        mobileDropdown.style.display =
            mobileDropdown.style.display === "block" ? "none" : "block";
    });

    mobileOptions.forEach(option => {
        option.addEventListener("click", (e) => {
            e.stopPropagation();

            const code = option.dataset.code;
            const flag = option.dataset.flag;

            mobileSelected.querySelector(".flag").src = "assets/" + flag;
            mobileSelected.querySelector(".code").textContent = code;

            mobileInput.value = code;

            mobileDropdown.style.display = "none";
        });
    });

    document.addEventListener("click", (e) => {
        if (!mobileSelect.contains(e.target)) {
            mobileDropdown.style.display = "none";
        }
    });
});
