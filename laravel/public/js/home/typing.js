let greetings = ["Hej", "Hello", "Szia", "Salut", "¿Qué tal?", "Ciao", "Oi", "Halløj", "Witaj", "Hei"];
let i = 0;
let currentGreeting = randomGreeting();
let text = document.getElementById("greeting");
let del = false;

function typing(){
    if(del){
        letters = currentGreeting.slice(0, --i);
        text.innerHTML = letters;
        if(letters.length == 0){
            del = false;
            i = 0;
            currentGreeting = randomGreeting();
            setTimeout(typing, 400);
        }
        else setTimeout(typing, 100)
    }
    else{
        letters = currentGreeting.slice(0, ++i);
        text.innerHTML = letters;
        if(i - 1 == currentGreeting.length){
            del = true;
            setTimeout(typing, 1400);
        }
        else{
            setTimeout(typing, 400);
        }
    }
}

function randomGreeting(){
    let greeting = greetings[Math.floor(Math.random() * greetings.length)];
    if(greeting[greeting.length - 1] != "?") greeting += "!";
    return greeting;
}

typing();