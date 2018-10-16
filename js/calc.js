var a = "";
var b = "";

function number(a) {
    var x = document.getElementById("first").innerHTML;
    if (x.length === 0) {
        document.getElementById("first").innerHTML = a;
    } else { if (x.length >= 1) {
        document.getElementById("first").innerHTML = x + a;
        }
    }
}

function sign(b) {
    var x = document.getElementById("first").innerHTML;
    var y = document.getElementById("second").innerHTML;
    var z = document.getElementById("mark").innerHTML;
    if (x !== "" && z === "" && y === "") {
        document.getElementById("mark").innerHTML = b;
        document.getElementById("first").innerHTML = "";
        document.getElementById("second").innerHTML = x;
    }
    
}

function clearAll() {
        document.getElementById("mark").innerHTML = "";
        document.getElementById("second").innerHTML = "";
        document.getElementById("first").innerHTML = ""; 
}

function result() {
    var x = document.getElementById("first").innerHTML;
    var y = document.getElementById("second").innerHTML;
    var z = document.getElementById("mark").innerHTML;
    var r;
    if (x !== "" && z !== "" && y !== "") {
        
        if (z === "+") {
            var p1 = parseFloat(x);
            var p2 = parseFloat(y);
            r = p1 + p2;
        } 
        if (z === "-") {
            r = y - x;
        }
         if (z === "x") {
            r = y * x;
        }
         if (z === "/") {
            r = y / x;
        }
        document.getElementById("mark").innerHTML = "";
        document.getElementById("second").innerHTML = "";
        document.getElementById("first").innerHTML = r;
        setTimeout(clearAll, 1200);    
    }
}