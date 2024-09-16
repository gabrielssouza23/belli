import {
    getBackendUrl, getBackendUrlApi, showToast
} from "./../_shared/functions.js";

import {
    userAuth
} from "./../_shared/globals.js";

if(!userAuth){
    window.location.href = getBackendUrl("login");
}
