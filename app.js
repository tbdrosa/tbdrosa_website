const nav = document.querySelector(" nav");
let previousScrollPosition = window.pageYOffset;
window.addEventListener("scroll", ()=>{
    let currentScrollPosition = window.pageYOffset;
    
    if(previousScrollPosition < currentScrollPosition){
        nav.classList.add("hide"); 
    }else{
        nav.classList.remove("hide"); 
    }
    previousScrollPosition = currentScrollPosition 
})