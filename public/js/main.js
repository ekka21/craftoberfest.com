(function($) {
    var methods = {
        bind: function(){
            var context = this;
            var $email = $('#email').val();

            //side bar hover
            $('.nav li').hover(function() {
                $(this).addClass( "on" );
            }, function() {
                $(this).removeClass( "on" );
            });

            //Mobile menu
            $('.hamburger').on('click', function(){
                $(this).addClass('hide');
                $('.navMobile ul').fadeIn(500);
            });


        },

        initialize: function(){
            this.bind();
        }
    }

    methods.initialize();
})(jQuery);