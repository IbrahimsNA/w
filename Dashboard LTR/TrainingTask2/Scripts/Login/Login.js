
/*Forget Password */
function forget() {
    alertify.prompt('Forget Password ', 'Please Type Your Email', ''
               , function (evt, value) { alertify.prompt().close(); }
               , function () { alertify.prompt().close(); });

}
/*end Forget Password*/
/*Activate Account */
function activate() {
    alertify.prompt('Activate Account ', 'Please Type Your Email', ''
               , function (evt, value) { alertify.prompt().close(); }
               , function () { alertify.prompt().close(); });

}
/*end Activate Account*/

