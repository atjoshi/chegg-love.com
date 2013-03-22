CC('Page.Index', C.Page.Base.extend({
    postConstruct:function(){
        $('#myCarousel').carousel();
    }
}));