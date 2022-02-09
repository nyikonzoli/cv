const titles = ["Sports", "Playing the guitar", "Music and friends"];

function change(i){
    document.querySelector(".circle.activeHobbie").classList.remove("activeHobbie");
    console.log("pagination" + i);
    document.getElementById("pagination" + (i + 1)).classList.add("activeHobbie");
    let text = document.querySelector(".modal-text");
    text.classList.add("floatInOut");
    setTimeout(function(){
        text.querySelector("h1").innerHTML = titles[i];
        setTimeout(function(){
            text.classList.remove("floatInOut");
        }, 500)
    }, 500)
}