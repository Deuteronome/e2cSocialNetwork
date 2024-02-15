let nav = document.getElementById ("Liens")
let navButton = document.getElementById ("Liens2")


let isHidden = true 




function moveNav() {
    if(isHidden) {
        nav.style.transform ="translateX(20vw)"
        isHidden = false 
    } else {
        nav.style.transform ="translateX(-20vw)"
        isHidden = true
    }
    


}


navButton.addEventListener('click',moveNav)
