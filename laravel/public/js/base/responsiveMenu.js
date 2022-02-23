let dropped = false;

function dropMenu(){
    if (!dropped){
        document.getElementById("menu").classList.add("drop");
        dropped = true;
    }
    else{
        document.getElementById("menu").classList.remove("drop");
        dropped = false;
    }
}