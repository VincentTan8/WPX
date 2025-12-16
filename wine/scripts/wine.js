const guestInput = document.getElementById("guestInput");
const addGuestBtn = document.getElementById("addGuest");

function addGuest() {
    const wrapper = document.createElement("div");

    wrapper.className = `guestEntry`;
    wrapper.innerHTML = `
        <input type="text" name="guests[]">
        <button type="button" onclick="this.parentNode.remove()">x</button>
    `;

    // <button type="button" onclick="this.parentNode.remove()">✖</button>
    guestInput.appendChild(wrapper);
}

addGuestBtn.addEventListener("click", () => {
    addGuest();
});