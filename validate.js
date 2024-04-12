function ValidateFunc(item, formName){



    let fieldValue = document.forms[formName][item].value;

    let parentDiv = document.getElementById(item+"_container");
    let childDiv = parentDiv.querySelector(".alert");

    if (fieldValue=="" || fieldValue==" "){

        if (childDiv === null){

            let warnDiv = document.createElement("div");
            const node = document.createTextNode("A mező nem lehet üres");
            warnDiv.classList.add("alert");
            warnDiv.classList.add("alert-danger");
            warnDiv.appendChild(node);
            parentDiv.appendChild(warnDiv);
        }

        return false;
    }

    else if(item=="email"){
        
        if (childDiv !== null){
            childDiv.remove();
        }
    
        let isEmailValid = fieldValue.match(
            /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
          );

        if (isEmailValid === null){
            let warnDiv = document.createElement("div");
            const node = document.createTextNode("Az email cím formátuma nem megfelelő");
            warnDiv.classList.add("alert");
            warnDiv.classList.add("alert-danger");
            warnDiv.appendChild(node);
            parentDiv.appendChild(warnDiv);

            return false;
        }
    }

    else if(item=="phone"){
        
        if (childDiv !== null){
            childDiv.remove();
        }
    
        let isPhoneValid = fieldValue.match(
            /^\+36\d{9}$/
          );

        if (isPhoneValid === null){
            let warnDiv = document.createElement("div");
            const node = document.createTextNode("A telefonszám formátuma nem megfelelő. (szükséges formátum: +36XXXXXXXXX)");
            warnDiv.classList.add("alert");
            warnDiv.classList.add("alert-danger");
            warnDiv.appendChild(node);
            parentDiv.appendChild(warnDiv);

            return false;
        }
    }

    else if(item=="username"){
        
        if (childDiv !== null){
            childDiv.remove();
        }
    
        let isEmailValid = fieldValue.match(
            /^.{0,15}$/
          );

        if (isEmailValid === null){
            let warnDiv = document.createElement("div");
            const node = document.createTextNode("A felhasználónév túl hosszú (max 15 karakter)");
            warnDiv.classList.add("alert");
            warnDiv.classList.add("alert-danger");
            warnDiv.appendChild(node);
            parentDiv.appendChild(warnDiv);

            return false;
        }
    }

    else{
        if (childDiv !== null){
            childDiv.remove();
        }
    }

}

function validateContactsForm(){

    let validateList = ["email","last_name", "first_name", "phone", "message"];

    let isFormValid = true;

    for (item in validateList){
        
        if (ValidateFunc(validateList[item],"contacts-form") === false){
            isFormValid = false
        };

    }

    return isFormValid;
    
}

function validateRegisterForm(){

    let validateList = ["username","last_name", "first_name", "password", "password_confirmation"];

    let isFormValid = true;

    for (item in validateList){
        
        if (ValidateFunc(validateList[item],"register-form") === false){
            isFormValid = false
        };

    }

    return isFormValid;
    
}
