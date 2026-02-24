// membership toggle

document.querySelectorAll(".membership-header")
.forEach(header => {

header.addEventListener("click", () => {

const id = header.dataset.target
const body = document.getElementById(id)

body.style.display =
body.style.display === "block"
? "none"
: "block"

})

})