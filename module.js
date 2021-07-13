M.block_rumbletalk = {
    Y : null,
    transaction : [],
    init : function(Y){
        alert('RumbleTalk module initialisation');
        this.Y = Y;
    },

    hello : function(Y){
        alert('Hello, Welcome at RumbleTalk');
        this.Y = Y;
    },

    create_account : function(Y, email, password){
        alert('Hello, Email: ' + email + ' Password: ' + password);
        this.Y = Y;
    }
}
