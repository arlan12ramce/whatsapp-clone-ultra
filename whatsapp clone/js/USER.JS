const searchBar = document.querySelector(".users .fieldsearch input"),
searchBtn = document.querySelector(".users .fieldsearch button");

searchBtn.onclick = ()=>{
    searchBar.classList.toggle("input");
    searchBar.focus();
    searchBtn.classList.toggle("active");
}