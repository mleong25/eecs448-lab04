let validate = () => {
    let input1 = document.getElementById('snack').value;
    let input2 = document.getElementById('candy').value;
    let input3 = document.getElementById('drink').value;
    let ship = document.getElementById('shipping').value;
    let email = document.getElementById('email').value;
    let pass = document.getElementById('password').value;
    console.log(ship);

    if ((input1 < 0 || input2 < 0) || (input3 < 0) || (input1 == "" || input2 == "") || (input3 == "")) {
        alert("Cart amounts cannot be negative or empty.");
        return false;
    }
    if (ship != 'Free 7 day' && ship != '$5.00 three day' && ship != '$50.00 over night') {
        alert("Choose a shipping option.");
        return false;
    }
    if(email) {
        var re = /\S+@\S+/;
        if(re.test(email) == false){
            alert("Enter a valid email.");
            return false;
        }
    }
    if(pass == "") {
        alert("Password cannot be empty.");
        return false
    }
}

let reset = () => {
    document.location.reload();
    return false;
}