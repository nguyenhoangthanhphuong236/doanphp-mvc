function show() {
    var p = document.getElementById("pwd");
    p.setAttribute("type", "text");
}

function hide() {
    var p = document.getElementById("pwd");
    p.setAttribute("type", "password");
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);

function validate1(){
	var uu = document.getElementById("txt-input").value;
	var pu1 = document.getElementById("pwd").value;

	if(uu == ""){
		alert("Vui lòng nhập username!");
		return false;
	}
	if((pu1 == "") || (pu1.length < 8)){
		alert("Vui lòng nhập đúng password!");
		return false;
	}
		var name = localStorage.getItem("name_db")																								
		var pass = localStorage.getItem("pass_db")
	if((uu = "hangia159")&&(pu1 = "jeonjungkookie")){
		alert("Bạn đã đăng nhập thành công");location.assign("");
	}	
	return true;
}

