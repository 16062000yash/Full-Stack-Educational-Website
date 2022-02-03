const searchwrapper = document.querySelector(".search-input");
const inputbox = searchwrapper.querySelector("input");
const suggBox = searchwrapper.querySelector(".autocom-box");
inputbox.onkeyup = (e)=>{
    let userData = e.target.value;
    let emptyArray = [];
    if(userData){
        emptyArray =suggestions.filter((data)=>{
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
        });
        emptyArray = emptyArray.map((data)=>{
            return data = '<li>'+ data + '</li>';
        });
        console.log(emptyArray);
        searchwrapper.classList.add("active");
        showSuggestions(emptyArray);
        let allList = suggBox.querySelectorAll("li");
        for (let i = 0; i< allList.length; i++){
            allList[i].setAttribute("onclick", "select(this)");
        }
    }else{
        searchwrapper.classList.remove("active");
    }
    showSuggestions(emptyArray);
}

function select(element){
    let selectUserData = element.textContent;
    inputbox.value = selectUserData;
    searchwrapper.classList.remove("active");
}

function showSuggestions(list){
    let listData;
    if(!list.length){
        userValue = inputbox.value;
        listData = '<li>'+ userValue + '</li>';
    }
    else{
        listData = list.join('');
    }
    suggBox.innerHTML = listData;
}