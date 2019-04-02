/**
 * Created by dytcha on 29/03/2019.
 */
function validMail() {
    var sum = document.forms["addForm"]["email"];
    var re = new RegExp('^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$');
    if((sum.value.match(re)==false)||(sum.value=="")){
        sum.value="";
        return false;
    }
    return true;
}

function validMessage(){
    var finish = document.forms["addForm"]["message"];
    if(finish.value==""){
        return false;
    }
    return true;
}

document.forms["addForm"]["email"].addEventListener("blur", function() {
    var sum = document.forms["addForm"]["email"];
    var finish = document.forms["addForm"]["message"];
    var btn = document.forms["addForm"]["valider"];
    var er= document.forms["addForm"]["erreur"];
    if ((sum.value=='')||(finish.value==""))
    {
        btn.setAttribute("disabled", null);
        er.setAttribute("hidden", null);
    }
    else {
        btn.removeAttribute("disabled");
        er.removeAttribute("hidden");
    }
});

document.forms["addForm"]["message"].addEventListener("blur", function() {
    var sum = document.forms["addForm"]["email"];
    var finish = document.forms["addForm"]["message"];
    var btn = document.forms["addForm"]["valider"];
    if ((sum.value=='')||(finish.value==""))
    {
        btn.setAttribute("disabled", null);
    }
    else {
        btn.removeAttribute("disabled");
    }
});
