/**
 * Created by diabl on 26/03/2019.
 */
function validSum() {
    var sum = document.forms["addForm"]["sum"];
    var re = new RegExp('^(?=.+)(?:[1-9]\d*|0)?(?:\.\d+)?');
    if((sum.value.match(re)==false)||(sum.value=="")){
        sum.value="";
        return false;
    }
    return true;
}

function validStart(){
    var err = document.forms["addForm"]["err1"];
    var start = document.forms["addForm"]["start"];
    var myDate = new Date(start.value.toString());
    var now = new Date();
    if(myDate<now){
        start.value="";
        return false;
    }
    return true;
}

function validFinish(){
    var finish = document.forms["addForm"]["finish"];
    var start = document.forms["addForm"]["start"];
    var startDate = new Date(start.value.toString());
    var finishDate = new Date(finish.value.toString());
    var now = new Date();
    if((finishDate<startDate)||(finishDate<now)){
        finish.value="";
        return false;
    }
    return true;
}

document.forms["addForm"]["sum"].addEventListener("blur", function() {
    var err = document.forms["addForm"]["err3"];
    var sum = document.forms["addForm"]["sum"];
    var start = document.forms["addForm"]["start"];
    var finish = document.forms["addForm"]["finish"];
    var btn = document.forms["addForm"]["valider"];
    if ((sum.value=='')||(start.value=="")||(finish.value=="")) {
        btn.setAttribute("disabled", null);
        if(sum.value==''){
            err.removeAttribute("hidden");
        }
        else{
            err.setAttribute("hidden", null);
        }
    } else {
        btn.removeAttribute("disabled");
    }
});

document.forms["addForm"]["start"].addEventListener("blur", function() {
    var err = document.forms["addForm"]["err1"];
    var sum = document.forms["addForm"]["sum"];
    var start = document.forms["addForm"]["start"];
    var finish = document.forms["addForm"]["finish"];
    var btn = document.forms["addForm"]["valider"];
    if ((sum.value=='')||(start.value=="")||(finish.value=="")) {
        btn.setAttribute("disabled", null);
    } else {
        btn.removeAttribute("disabled");
    }
});

document.forms["addForm"]["finish"].addEventListener("blur", function() {
    var err = document.forms["addForm"]["err2"];
    var sum = document.forms["addForm"]["sum"];
    var start = document.forms["addForm"]["start"];
    var finish = document.forms["addForm"]["finish"];
    var btn = document.forms["addForm"]["valider"];
    if ((sum.value=='')||(start.value=="")||(finish.value=="")) {
        btn.setAttribute("disabled", null);
    } else {
        btn.removeAttribute("disabled");
    }
});


