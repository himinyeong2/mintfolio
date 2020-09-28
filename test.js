// function selected(optionValue){

// }
function saveValue(e){
    var id = e.id;  // get the sender's id to save it . 
    var val = e.value; // get the value. 
    localStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override . 
}

function getSavedValue(v){
    if (!localStorage.getItem(v)) {
        return "";// You can change this to your defualt value. 
    }
    return localStorage.getItem(v);
}

function deleteValue(e){
    localStorage.removeItem(e);
}
// document.getElementById("txt_1").value = getSavedValue("txt_1")

// document.getElementById("txt_2").value = getSavedValue("txt_2")

// document.getElementById("txt_1").value = getSavedValue("txt_1")
document.getElementById('txt_1').value=  getSavedValue("txt_1");

document.getElementById('click-btn').addEventListener('click',function(){
    location.href="test.php?option="+document.getElementById('txt_1').value;
    saveValue(document.getElementById('txt_1'));
});document.getElementById('click-del-btn').addEventListener('click',function(){
    
    deleteValue(document.getElementById('txt_1').id);
});
// document.getElementById('select-box').value=getSavedValue("select-box")
