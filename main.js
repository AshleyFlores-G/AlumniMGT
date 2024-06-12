//add hovered class to selected list item
let list = document.querySelectorAll(.navigation li);

function activelink(){
    list.forEach(item=>{
        item.classlist.remove("hovered");
    });
    this.classList.add("hovered");
}

list.forEach(item => item.addEventListener("mouseover, activelink"));
