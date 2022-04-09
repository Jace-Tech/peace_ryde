const selector = name => document.querySelector(name)
const selectors = name => document.querySelectorAll(name)

const twbBtns = selectors("[name=twp]")

twbBtns.forEach(btn => {
    btn.addEventListener("change", () => {
        if(btn.checked == true) {
            const value = (btn.dataset.name + "")
            if(value.toLowerCase() == "no"){
                selector("[data-btn]").disabled = false
            }
            else {
                selector("[data-btn]").disabled = true
                // POP UP
            }
        }
    })
})