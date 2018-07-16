function regformhashngo(form, uid, phone, email, password, confirmpwd,mobile,address) {
     // Check each field has a value
    if (ngoname.value == '' ||
        coordinator.value == '' ||
          email.value == ''     || 
          password.value == ''  || 
          confirmpwd.value == '' ||
          mobile.value == ''         || 
          address.value == '' ) {
 
        alert('You must provide all the requested details. Please try again');
        return false;
    }
 
    // Check the username
 
    re = /^\w+$/; 
    if(!re.test(form.ngoname.value)) { 
        alert("Username must contain only letters, numbers and underscores. Please try again"); 
        form.Teamname.focus();
        return false; 
    }
 
    // Check that the password is sufficiently long (min 6 chars)
    // The check is duplicated below, but this is included to give more
    // specific guidance to the user
    if (password.value.length < 6) {
        alert('Passwords must be at least 6 characters long.  Please try again');
        form.password.focus();
        return false;
    }
 
    // At least one number, one lowercase and one uppercase letter 
    // At least six characters 
 
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
    if (!re.test(password.value)) {
        alert('Passwords must contain at least one number, one lowercase and one uppercase letter.  Please try again');
        return false;
    }
 
    // Check password and confirmation are the same
    if (password.value != confirmpwd.value) {
        alert('Your password and confirmation do not match. Please try again');
        form.password.focus();
        return false;
    }
    // if (age.value <= 18 || age.value >=80) {
    //     alert('Sorry you cannot register');
    //     form.age.focus();
    //     return false;
    // }
 
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");
 
    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);
 
    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
    confirmpwd.value = "";
 
    // Finally submit the form. 
    form.submit();
    return true;
}