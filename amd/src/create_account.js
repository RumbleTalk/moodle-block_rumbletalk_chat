define(['jquery', 'core/ajax'], 
    function($, ajax){

    Ajaxcall.prototype.account_create = function(data) {

        console.log(data.email);
        alert("Email: " + data.email + ", Password: " + data.password);
    //     //var test = 1;
    //     var promises = ajax.call([{
    //         methodname: 'mod_testtest_loadsettings',
    //         args: {itemid: itemid},
    //         //done: console.log("ajax done")
    //         fail: notification.exception
    //     }]);
    //     promises[0].then(function(data) {
    //         console.log(data[0].content); //data contains webservice answer
    //         txtareaupdate(data[0].content);
    //     });
    };

});