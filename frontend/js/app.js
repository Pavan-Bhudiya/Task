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

// form validation

document
.getElementById("joinForm")
.addEventListener("submit", function(e){

e.preventDefault()

const name = document.getElementById("name").value.trim()
const email = document.getElementById("email").value.trim()

if(name === "" || email === ""){
alert("Please fill all fields")
return
}

alert("Application submitted!")

})


// menu toggle example

const toggleBtn = document.getElementById("menuToggle")

if(toggleBtn){

toggleBtn.addEventListener("click", () => {
alert("Mobile menu toggled")
})

}
