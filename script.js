
let navBar = false;
function navAppear(){
    if (navBar){
        document.getElementById("navC").style.transform = "scale(0)"
        document.getElementById("navBtn").style.transform = "rotate(0deg)"
        navBar = false
    } else{
        navBar = true;
        document.getElementById("navC").style.transform = "scale(1)"
        document.getElementById("navBtn").style.transform = "rotate(-90deg)"

    }
}


function openSection(block){
    let container = document.getElementById(block);
    if (container.style.display === "none"){
        container.style.display = "flex"
    }else{
        container.style.display = "none"
    }
}




// function changeToVid(content){
//     let image = document.getElementById(content);
//     image.src = `/images/${content}.gif`
// }
// function backToImg(content){
//     let image = document.getElementById(content);
//     image.src = `/images/${content}.jpeg`
// }