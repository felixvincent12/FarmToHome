function validateForm() {
    var fName = $('input[name=fname]').val();
    var lName = $('input[name=lname]').val();
    var email = $('input[name=email]').val();
    var pass = $('input[name=pass]').val();
    var passRep = $('input[name=pass-repeat]').val();
    var dob = $('input[name=dob]').val();
    var address1 = $('input[name=address1]').val();
    var city = $('select[name=city] option:selected').val();
    var posCode = $('input[name=postalCode]').val();
    var phoneNum = $('input[name=phoneNum]').val();
    
    if (fName == "")
        document.getElementById("vldfName").innerHTML = "Please fill your first name";
    else
        document.getElementById("vldfName").innerHTML = "";
    
    if(lName == "")
        document.getElementById("vldlName").innerHTML = "Please fill your last name";
    else 
        document.getElementById("vldlName").innerHTML = "";
    
    if(email == "")
        document.getElementById("vldEmail").innerHTML = "Please fill your email";
    else 
        document.getElementById("vldEmail").innerHTML = "";
    
    if(pass == "")
        document.getElementById("vldPass").innerHTML = "Please fill your Password";
    else 
        document.getElementById("vldPass").innerHTML = "";
    
    if(passRep != pass)
        document.getElementById("vldCoPass").innerHTML = "Password does not match";
    else 
        document.getElementById("vldCoPass").innerHTML = "";
    
    if(dob == "")
        document.getElementById("vldDob").innerHTML = "Please fill your date of birth";
    else 
        document.getElementById("vldDob").innerHTML = "";
    
    if(address1 == "")
        document.getElementById("vldAddress1").innerHTML = "Please fill your address";
    else 
        document.getElementById("vldAddress1").innerHTML = "";

    if(city == "")
        document.getElementById("vldCity").innerHTML = "Please select your city location";
    else 
        document.getElementById("vldCity").innerHTML = "";
    
     if(posCode == "")
        document.getElementById("vldPosCode").innerHTML = "Please fill your postal code";
    else 
        document.getElementById("vldPosCode").innerHTML = "";
    
    if(phoneNum == "")
        document.getElementById("vldPhoneNum").innerHTML = "Please fill your phone number";
    else 
        document.getElementById("vldPhoneNum").innerHTML = "";
}