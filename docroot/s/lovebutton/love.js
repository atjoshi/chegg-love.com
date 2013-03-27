CC('Page.Lovebutton', C.Page.Base.extend({
    postConstruct:function(){
        $('body').on('click', '[data-action=love]', function(){
            var $el = $(this); 
            $.ajax({
                url: "/api/lovesubmit/",
                type: "POST",
                data: {id : $el.data('loveid')},
                success:function(){
                    $('[data-action=loved]').show(); 
                    $el.hide(); 
                },
                error:function(){
                    var popup = window.open('/login?lovebutton=1&id='+$el.data('loveid'),
                        'popUpWindow','height=300,width=500,left=10,top=10,resizable=no,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no,status=no');
                    window.loginsuccess = function() {
                        $('[data-action=loved]').show(); 
                        $el.hide(); 
                    };
                }
            }); 
        });
    }
}));