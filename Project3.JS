function check() {
    var first = document.getElementById("first").value;
    var second = document.getElementById("second").value;

    if(first.length <= 7){
        alert("The Length of Password One Doesn't Meet The Requirement Of 8 Characters Long")
    } else if (second.length <= 7){
        alert("The Length of The Re-Entered Password Doesn't Meet The Requirement Of 8 Characters Long")
    } else if (first != second){
        alert("The Two Passwords Don't Match")
    } else if (first == second){
        alert("All Set!! Password Match")
    }
}