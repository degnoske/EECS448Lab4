function validation(form){
var isvalid=true;
    var m_sew=form.sewage.value;
    var m_bath=form.bath.value;
    var m_glacier=form.glacier.value;
    var m_user=form.username.value;
    var m_pass=form.password.value;
    var m_ship=form.ship.value;
    if(m_sew==""||m_bath==""||m_glacier==""||m_user==""||m_pass==""){
        alert("ERROR Quantaties is left blank");
        isvalid=false;
    }
    if(m_ship==""){
        alert("No shipping option chosen");
        isvalid=false
    }
    if(m_sew<0||m_bath<0||m_glacier<0){
        alert("ERROR Quantaties are negative");
        isvalid=false;
    }



//source:http://stackoverflow.com/questions/46155/validate-email-address-in-javascript
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(m_user)==false){
        alert("Invalid Username");
        isvalid=false;
    }


return isvalid
}