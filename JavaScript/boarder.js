function chooseBorder (size){
    switch (size) {
        case "4":
        document.getElementById("mytable").border= "4";
        break;
        case "6":
        document.getElementById("mytable").border = "6";
        break;
        case "8":
        document.getElementById("mytable").border = "8";
        break;
        case "10":
        document.getElementById("mytable").border = "10";
        break;
        default:
        //make border = 0 
        document.getElementById("mytable").border = "0";
        break;
    }
}