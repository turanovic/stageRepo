$(document).ready(function() {
    $("form").submit(function() {
        event.preventDefault();
        formSubmit($(this).attr("name"), JSON.stringify($("form").serializeArray()));
    });
});

function formSubmit(form, data) {
    switch(form) {
        case "existing_user":
            existingUSer(new XMLHttpRequest(), form, data);
            break;
        case "new_user":
            newUser();
            break;
    }
    
}

function existingUSer(xhttp, form, data) {
    xhttp.onreadystatechange = function() {
        if(xhttp.status != 404) {
            if (xhttp.status == 200 && xhttp.readyState == 4) {
                switch(JSON.parse(this.response)) {
                        //Success login
                    case 0:
                        errorMSG("&check; U wordt ingelogd.", "good");
                        break;
                        //Empty value
                    case 1:
                        errorMSG("&cross; Er is geen ID ingevuld.", "bad");
                        break;
                        //Incorrect value
                    case 2:
                        errorMSG("&cross; Het opgegeven ID is onjuist.", "bad");
                        break;
                    case 3:
                        errorMSG("&cross; Een ID bestaat alleen uit letters en cijfers.", "bad");
                        break;
                        //Unknown error
                    case 5000:
                        errorMSG("&cross; Er is een onbekende fout.", "bad");
                        break;
                }
            } else if (xhttp.readyState == 0) {
                //errorMSG("0: Request not initialized","bad");
                
            } else if (xhttp.readyState == 1) {
                //errorMSG("1: Server connection established","bad");
                
            } else if (xhttp.readyState == 2) {
                //errorMSG("2: Request received ","bad");
                
            } else if (xhttp.readyState == 3) {
                //errorMSG("3: Processing request ","bad");
            }
        } else {
            errorMSG("&cross; 404: Not Found", "bad");
        }
    }
    xhttp.open("POST", "resources/php/config.php?req="+form+"&data="+data+"");
    xhttp.send();
}

function errorMSG(ERR, CLASS) {
    $("form label").removeAttr("class").addClass(CLASS).html(ERR);
}

function newUser() {
    alert("Directing to create user page");
}