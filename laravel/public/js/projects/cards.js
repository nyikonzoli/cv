const projectTitles = [
    "Webshop",
    "Exam work",
    "This CV",
    "Neural network",
    "Railway network",
    "Countless small school projects",
]

const projectStatuses = [
    "Ongoing",
    "Ongoing",
    "Finished",
    "Ongoing",
    "Finished",
    "Finished",
];

const projectDescriptions = [
    "This was a school project in early 2022 and we were working on it for about one and a half months. We created this project in a team of two and our task was to create a fully functional webshop, with an admin interface. The topic we choose is the webshop of an instrument shop.",
    "It is the final task that we have to do in our training. We had to come up with a somewhat unique idea. We could also choose the technologies that we wanted to use for this project. Currently, we are working on a site like Etsy.com but with some twists and unique ideas.",
    "I created this CV because I wanted to gain some more experience besides school, so hopefully I can start working in the industry much more easily. I had a lot of fun building this site and I learned a lot from it.",
    "I was intrested in artifical intelligence since I was like 14. I already used some libraries in python but I wanted to have a deeper understanding of this technology so I thought it would be a great idea to code my own neural net from scretch.",
    "This was an other school project, but this time it was individual work. We had to to create a program which was able to calculate a path with Dijkstra's algorythm to navigate between the cities. We had to create a back-end API for this one and a desktop application.",
    "I also did many smaller projects in school. You can check a few of those out at my GitHub profile."
];

const projectTechnologies = [
    ["PHP", "Laravel", "Blade", "HTML", "CSS", "WPF", "MySQL"],
    ["PHP", "Laravel", "Blade", "HTML", "CSS", "Flutter", "MySQL"],
    ["PHP", "Laravel", "Blade", "HTML", "CSS", "MySQL"],
    ["C#", "A lot of maths"],
    ["C#", "ASP .NET", "MVC", "WPF", "MSSQL"],
    ["Everything from above"]
];

const projectLinks = [
    "https://github.com/nyikonzoli/webshop-ikt",
    "https://github.com/nyikonzoli/webshop-vizsgaremek",
    "https://github.com/nyikonzoli/cv",
    "https://github.com/nyikonzoli/neural-net",
    "https://github.com/nyikonzoli/VasutHalozat",
    "https://github.com/nyikonzoli", 
];

let technologyColor = new Map();
technologyColor.set("PHP", "#ca2727");
technologyColor.set("Laravel", "#ca2727");
technologyColor.set("Blade", "#ca2727");
technologyColor.set("HTML", "#0d6efd");
technologyColor.set("CSS", "#0d6efd");
technologyColor.set("WPF", "#ffc107");
technologyColor.set("MySQL", "#e66465");
technologyColor.set("Flutter", "#ffc107");
technologyColor.set("MSSQL", "#e66465");
technologyColor.set("C#", "#b827fc");
technologyColor.set("ASP .NET", "#b827fc");
technologyColor.set("MVC", "#b827fc");
technologyColor.set("A lot of maths", "#343a40");
technologyColor.set("Everything from above", "#343a40");

function load(){
    let template = document.getElementById("cardTemplate");
    let div = template.content.querySelector("div");
    let cards = document.getElementById("cards");
    let i = 0;
    projectTitles.forEach(element => {
        let imp = document.importNode(div, true);
        imp.setAttribute("id", "card" + i);
        let h3 = imp.querySelector("h3");
        h3.innerHTML = projectTitles[i];
        let tags = imp.querySelector("div.tags");
        projectTechnologies[i].forEach(tagName => {
            let tag = document.createElement("span");
            tag.classList.add("badge");
            tag.style.backgroundColor = technologyColor.get(tagName);
            if (technologyColor.get(tagName) == "#ffc107"){
                tag.style.color = "black";
            }
            tag.innerHTML = tagName;
            tags.appendChild(tag);
        });
        let a = imp.querySelector("a");
        let j = i;
        a.onclick = function(){ more(j) };
        i += 1;
        cards.appendChild(imp);
    });
}

function more(cardIndex){
    let card = document.getElementById("card" + cardIndex);
    let div = card.querySelector("div.card-text");
    let p1 = document.createElement("p");
    p1.innerHTML = "Status: " + projectStatuses[cardIndex];
    let p2 = document.createElement("p");
    p2.innerHTML = projectDescriptions[cardIndex];
    let visit = card.querySelector("div.card-bottom>div.visit-div");
    let visita = document.createElement("a");
    visita.innerHTML = "Check out";
    visita.href = projectLinks[cardIndex];
    visita.classList.add("visit");
    visita.target = "_base";
    visit.appendChild(visita);
    let a = card.querySelector("div.card-bottom>a");
    a.innerHTML = "Show less";
    a.onclick = function(){ less(cardIndex) };
    div.appendChild(p1);
    div.appendChild(p2);
}

function less(cardIndex){
    let card = document.getElementById("card" + cardIndex);
    let div = card.querySelector("div.card-text");
    div.innerHTML = "";
    let visit = card.querySelector("div.card-bottom>div.visit-div");
    visit.innerHTML = "";
    let a = card.querySelector("div.card-bottom>a");
    a.innerHTML = "Show more";
    a.onclick = function(){ more(cardIndex) };
}

window.onload = function(){ load() };