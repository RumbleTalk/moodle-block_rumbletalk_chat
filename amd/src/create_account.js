define(['jquery', 'block_rumbletalk_chat/ajaxcalls'], 
    function($, ajax){

    return {
        init: function(data){
            console.log(data.email);
            alert("Email: " + data.email + ", Password: " + data.password);
            var email = data.email;
            var password = data.password;
            var ajaxx = require("block_rumbletalk_chat/ajaxcalls");
            var ajax2 = new ajaxx();
            ajax2.account_create(email, password);
        }
    }

});
