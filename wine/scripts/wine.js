const guestInput = document.getElementById("guestInput");
const addGuestBtn = document.getElementById("addGuestBtn");

let guestIndex = 0;

function addGuest() {
    const wrapper = document.createElement("div");

    wrapper.className = `guestEntry`;
    wrapper.innerHTML = `
        <input type="text" name="guests[${guestIndex}][name]" placeholder="Name" required/>
        <input type="email" name="guests[${guestIndex}][email]" placeholder="Email" required/>
        <input type="tel" name="guests[${guestIndex}][mobile]" placeholder="Mobile number" required/>
        <button type="button" class="guestBtn" onclick="this.parentNode.remove()">x</button>
    `;

    // <button type="button" onclick="this.parentNode.remove()">✖</button>
    guestInput.appendChild(wrapper);
    guestIndex++;
}

addGuestBtn.addEventListener("click", () => {
    addGuest();
});