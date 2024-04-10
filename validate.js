function ValidateFunc(item){


    let formName = "contacts-form";
    let fieldValue = document.forms[formName][item].value;

    let parentDiv = document.getElementById(item+"Container");
    let childDiv = parentDiv.querySelector(".alert");

    if (fieldValue==""){

        if (childDiv === null){

            let warnDiv = document.createElement("div");
            const node = document.createTextNode("A mező nem lehet üres");
            warnDiv.classList.add("alert");
            warnDiv.classList.add("alert-danger");
            warnDiv.appendChild(node);
            parentDiv.appendChild(warnDiv);

            return false;
        }

        
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

    else{
        if (childDiv !== null){
            childDiv.remove();
        }
    }

}

function validateForm(){

    let validateList = ["email","lastName", "firstName", "phone", "message"];

    let isFormValid = true;

    for (item in validateList){
        
        if (ValidateFunc(validateList[item]) === false){
            isFormValid = false
        };

    }

    return isFormValid;
    
}