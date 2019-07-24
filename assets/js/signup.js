

    //--------------------------------------------------------------------------
    //  DreamFactory 2.0 instance specific constants
    //--------------------------------------------------------------------------

    var INSTANCE_URL   = 'https://api.everpayinc.com/';
    var APP_API_KEY     = '5685b5ac1ff7be382dae4a5b3aac3795e590646e8b884142be7f2dcee1a12ee5';


    //--------------------------------------------------------------------------
    //  Login
    //--------------------------------------------------------------------------

    var loginHandle = function(response) {

        if(response.hasOwnProperty('session_token')) {
            setToken('token', response.session_token);
            $.route('groups');
        }
        else {
            var msgObj = {};
            msgObj = parseResponse(response);
            if(msgObj) {
                messageBox(msgObj.code, msgObj.message, msgObj.error);
            }
        }
    };


    $('#register').on('click', function () {
        $.route('register');
    });



    //--------------------------------------------------------------------------
    //  Register
    //--------------------------------------------------------------------------

    $('#register_user').on('click', function () {
        var firstname = $('#register_firstname').val();
        var lastname = $('#register_lastname').val();
        var email = $('#register_email').val();
        var password = $('#register_password').val();

        $.api.register(firstname, lastname, email, password, function(response) {
            if(response.hasOwnProperty('session_token')) {
                setToken('token', response.session_token);
                $.route('groups');
            }
            else {
                var msgObj = {};
                msgObj = parseResponse(response);
                if(msgObj) {
                    messageBox(msgObj.code, msgObj.message, msgObj.error);
                }
            }
        });
    });

    $('#register_cancel').on('click', function () {
        $.route('index');
    });

    //--------------------------------------------------------------------------
    //  Misc functions
    //--------------------------------------------------------------------------

    function setToken(key, value) {
        sessionStorage.setItem(key, value);
    }

    function getToken(key) {
        return sessionStorage.getItem(key);
    }

    function removeToken(key) {

        $.api.logout(function(data) {
            if(data.success) {
                sessionStorage.removeItem(key);
                $.route('index');
            }
            else {
                var response = parseResponse(data);
                messageBox(response.code, response.message, response.error);
            }
        });
    }

    function clearForm() {
        $('input').each(function(){
            $(this).val('');
        });
    }

    function messageBox(title, body, error) {
        $('#modal_title').html(title);
        $('#modal_body').html(body);
        $('#errorMsg').html(error);
        $('#messageBox').modal('show');
    }

    function parseResponse(response) {
        var responseObj = jQuery.parseJSON( response.responseText );

        if (responseObj.hasOwnProperty('error')) {
            if(responseObj.error.context !== null) {
                var errMsg = '';

                $.each(responseObj.error.context, function(data){
                    errMsg += '<br> - ' + responseObj.error.context[data][0].replace(/&quot;/g, '\"');
                });

                var message = responseObj.error.message + '<br>' + errMsg;
                return {code: responseObj.error.code, message: message, error: JSON.stringify(response)};
            }
            else {
                return {code: responseObj.error.code, message: responseObj.error.message.replace(/&quot;/g, '\"'), error: JSON.stringify(response)};
            }
        }
        else {
            return false;
        }
    }
