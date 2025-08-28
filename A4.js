var name = "Ziad" ;
var gpa = 3.7;

function yourResult(name , gpa){
    console.log("Hello " + name + " your gpa is: " + gpa)
    if (gpa < 3)
    {
        console.log("so, you failed");
    }
    else {
        console.log("so, you succeeded")
    }
}
yourResult(name ,gpa);