const contBand = document.getElementById("cont-banderas");

const textsToChange = document.querySelectorAll("[data-section]");

const changeLanguage = async (language) =>{
    const requestJson = await fetch(`./languages/${language}ServEUA.json`);
    const texts = await requestJson.json();
    
    for(const textToChange of textsToChange){
       const section = textToChange.dataset.section;
       const value = textToChange.dataset.value;

       textToChange.innerHTML = texts[section][value];
    }
}

contBand.addEventListener("click", (e) => {
    changeLanguage(e.target.dataset.language);
});