const workTitles = [
    "CupRevolution - Warehouse clerk",
    "Budapest Park - Bartender",
    "Floor heating installation"
];

const workSubTitles = [
    "June 2021 - August 2021",
    "August 2021 - October 2021",
    "October 2021 - January 2022"
];

const workDescriptions = [
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod, at porro voluptatum consequuntur quasi error repellat nisi soluta velit ad, distinctio sunt autem laborum. Vel a laboriosam aspernatur cum aliquam.",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod, at porro voluptatum consequuntur quasi error repellat nisi soluta velit ad, distinctio sunt autem laborum. Vel a laboriosam aspernatur cum aliquam.",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod, at porro voluptatum consequuntur quasi error repellat nisi soluta velit ad, distinctio sunt autem laborum. Vel a laboriosam aspernatur cum aliquam."
];

const workLinks = [
    "https://www.web.cuprevolution.eu/",
    "https://www.budapestpark.hu/",
    ""
];

const educationTitles = [
    "Benkő István Református Általános Iskola és Gimnázium",
    "Megyeri úti Általános Iskola",
    "BMSZC Neuman Jánnos Számítástechnikai Technikum"
];

const educationSubTitles = [
    "2009 - 2015",
    "2015 - 2017",
    "2017 - 2022"
];

const educationDescriptions = [
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod, at porro voluptatum consequuntur quasi error repellat nisi soluta velit ad, distinctio sunt autem laborum. Vel a laboriosam aspernatur cum aliquam.",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod, at porro voluptatum consequuntur quasi error repellat nisi soluta velit ad, distinctio sunt autem laborum. Vel a laboriosam aspernatur cum aliquam.",
    "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod, at porro voluptatum consequuntur quasi error repellat nisi soluta velit ad, distinctio sunt autem laborum. Vel a laboriosam aspernatur cum aliquam."
];

const educationLinks = [
    "https://benkorefi.hu/",
    "http://megyerisuli.hu/",
    "http://www.njszki.hu/"
];

function loadCards(){
    let temp = document.getElementById("cardTemplate");
    let div = temp.content.querySelector("div.card");
    let i = 0;
    workTitles.forEach(title => {
        let imp = document.importNode(div, true);
        imp.classList.add("shadow-work");
        imp.querySelector(".card-header>h5").innerHTML = workTitles[i];
        imp.querySelector(".card-header>h6").innerHTML = workSubTitles[i];
        imp.querySelector(".card-body>p").innerHTML = workDescriptions[i];
        imp.querySelector(".card-body>a").href = workLinks[i];
        imp.querySelector(".card-body>a").classList.add("visit-work");
        imp.querySelector(".card-header").classList.add("card-header-work");
        document.getElementById("work-cards").appendChild(imp);
        i++;
    });
    i = 0;
    educationTitles.forEach(title => {
        let imp = document.importNode(div, true);
        imp.classList.add("shadow-education");
        imp.querySelector(".card-header>h5").innerHTML = educationTitles[i];
        imp.querySelector(".card-header>h6").innerHTML = educationSubTitles[i];
        imp.querySelector(".card-body>p").innerHTML = educationDescriptions[i];
        imp.querySelector(".card-body>a").href = educationLinks[i];
        imp.querySelector(".card-body>a").classList.add("visit-education");
        imp.querySelector(".card-header").classList.add("card-header-education");
        document.getElementById("education-cards").appendChild(imp);
        i++;
    });
}

window.onload = function(){ loadCards() };