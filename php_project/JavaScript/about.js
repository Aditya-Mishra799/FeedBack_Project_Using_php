let initialText;
function show_less(){
    let btn = document.getElementById("readMoreBtn");
    if(btn.innerText == "Read Less"){
    let text = document.getElementById('text');
    let partial_text = text.innerText;
    initialText = partial_text;
    partial_text = partial_text.substring(0,100);
    partial_text = partial_text.concat(" ..............");
    text.innerText = partial_text;
    let btnCont = document.getElementById("btnContainer");
    btnCont.innerHTML = '<button id ="readMoreBtn" onclick="show_more()">Read More</button>';
    }
   
}
show_less();

function show_more(){
    let btn = document.getElementById("readMoreBtn");
    if(btn.innerText == "Read More"){
    text.innerText = initialText;
    btn.innerText = "Read Less";
    let btnCont = document.getElementById("btnContainer");
    btnCont.innerHTML = '<button id ="readMoreBtn" onclick="show_less()">Read Less</button>';
    }

}


