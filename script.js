//sort tracks by alphabet by changing each inputs value
function sortAlphabetical(){
    let titles = ["Instagram","What2do","Dayfly","Put My Hands On You", "The Unknown Guest",
        "Heard Em Say","Spaceship","Champion","Ghost Town","Life of the Party",
        "SWEET / I THOUGHT YOU WANTED TO DANCE","Whoville","Pothole","FUCKING YOUNG / PERFECT","Awkward"
        ,"Luv(sic) Grand Finale","Ordinary Joe","Aruarian Dance","Yes","Think Different",
        "Steps Beach","Stand Tall","Sober","Feels Like Summer","1. Pink Toes"];
    titles.sort();

    const tracks = document.getElementsByName("title");
    for(var i = 0; i < tracks.length; i++){
        document.getElementById(i).value = titles[i];
    }
}

//sort tracks by default by changing each inputs value
function sortDefault(){
    let titles = ["Instagram","What2do","Dayfly","Put My Hands On You", "The Unknown Guest",
        "Heard Em Say","Spaceship","Champion","Ghost Town","Life of the Party",
        "SWEET / I THOUGHT YOU WANTED TO DANCE","Whoville","Pothole","FUCKING YOUNG / PERFECT","Awkward"
        ,"Luv(sic) Grand Finale","Ordinary Joe","Aruarian Dance","Yes","Think Different",
        "Steps Beach","Stand Tall","Sober","Feels Like Summer","1. Pink Toes"];
    const tracks = document.getElementsByName("title");
    for(var i = 0; i < tracks.length; i++){
        document.getElementById(i).value = titles[i];
    }
}
