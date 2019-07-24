

(function($) {

    $.extend({

        api: {
            login: function(email, password, callback) {
                $.ajax({
                    dataType: 'json',
                    contentType: 'application/json; charset=utf-8',
                    url: INSTANCE_URL + '/api/v2/user/session',
                    data: JSON.stringify({
                        "email": email,
                        "password": password
                    }),
                    cache:false,
                    method:'POST',
                    success:function (response) {
                        callback(response);
                    },
                    error:function (response) {
                        callback(response);
                        return false;
                    }
                });
            },

            logout: function(callback) {
                $.ajax({
                    dataType: 'json',
                    contentType: 'application/json; charset=utf-8',
                    url: INSTANCE_URL + '/api/v2/user/session',
                    cache:false,
                    method:'DELETE',
                    success:function (response) {
                        callback(response);
                    },
                    error:function (response) {
                        callback(response);
                        return false;
                    }
                });
            },

            register: function(firstname, lastname, email, password, callback) {
                $.ajax({
                    dataType: 'json',
                    contentType: 'application/json; charset=utf-8',
                    url: INSTANCE_URL + '/api/v2/user/register?login=true',
                    data: JSON.stringify({
                        "first_name": firstname,
                        "last_name": lastname,
                        "email": email,
                        "new_password": password
                    }),
                    cache:false,
                    method:'POST',
                    success:function (response) {
                        callback(response);
                    },
                    error:function (response) {
                        callback(response);
                        return false;
                    }
                });
            },

        }
    });

}(jQuery));
