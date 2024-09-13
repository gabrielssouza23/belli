import {
    getBackendUrl, getBackendUrlApi, showToast
} from "./../_shared/functions.js";

import {
    userAuth
} from "./../_shared/globals.js";

if(!userAuth){
    window.location.href = getBackendUrl("login");
}

/*fetch(getBackendUrlApi("users/token-validate"), {
    method: "GET",
    headers: {
        token: userAuth.token
    }
}).then((response) => {
    response.json().then((data) => {
        if(data.error){
           window.location.href = getBackendUrl("login");
        }
    });
});*/
