(function ($) {
    var haslove = false;
    $(document).ready(function(){
        var love = $('#love');
        var loved = $('#loved'); 
        if(C.utility.getCookie('loved') == 1){
            love.hide(); 
            loved.show(); 
        }
        else{
            love.show(); 
            loved.hide(); 
        }
        
        var html = '<div class="dialog-4">'+
            '<div class="dialog-hdr"><h2 class="dialog-title">Are you considering to love more?</h2>'+
                '<div class="dialog-close-wrapper"><button class="btn-secondary-sm chg-dialog-close"><span class="icn-cross">Close</span></button></div>'+
            '</div>'+
            '<div class="dialog-content"><section>'+
            '<div class="mod-box">'+
                '<div class="row">'+
                    '<div class="col-7 col-first"><a href="http://www.nakedheart.org/en/" data-noajax="true" target="_blank"><img src="/s/sample/img/nakedheart.png" style="width:100%" /></a></div>'+
                    '<div class="col-5 col-last buttondiv"><br/><a href="#" id="nakedheart" class="lovebutton"></a></div>'+
                '</div>'+
            '</div>'+
            '<div class="mod-box">'+
                '<div class="row">'+
                    '<div class="col-7 col-first"><a href="http://www.americanforests.org/" data-noajax="true" target="_blank"><img src="/s/sample/img/americanforests.png" style="width:100%" /></a></div>'+
                    '<div class="col-5 col-last buttondiv"><a href="#"  id="americanforests" class="lovebutton"></a></div>'+
                '</div>'+
            '</div>'+
            '<div class="mod-box">'+    
                '<div class="row">'+
                    '<div class="col-7 col-first" style="padding-top:11px;"><a href="http://www.charitywater.org/" data-noajax="true" target="_blank"><img src="/s/sample/img/charitywater.png" style="width:100%;background:#000;padding:5px;" /></div>'+
                    '<div class="col-5 col-last buttondiv"><a href="#" id="charitywater"  class="lovebutton"></a></div>'+
                '</div>'+
            '</div>'+
            '<div class="mod-box">'+    
                '<div class="row">'+
                    '<div class="col-7 col-first"><a href="http://www.hear-the-world.com/en/start.html" data-noajax="true" target="_blank"><img src="/s/sample/img/hear-the-world.png" style="width:100%" /></a></div>'+
                    '<div class="col-5 col-last buttondiv"><br/><br/><a href="#"  id="hear_the_world" class="lovebutton"></a></div>'+
                '</div>'+
            '</div>'+
            '<div class="mod-box">'+    
                '<div class="row">'+
                    '<div class="col-7 col-first"><a href="http://www.joinred.com/" data-noajax="true" target="_blank"><img src="/s/sample/img/joinred.png" style="width:100%" /></a></div>'+
                    '<div class="col-5 col-last buttondiv"><a href="#"  id="joinred" class="lovebutton"></a></div>'+
                '</div>'+
            '</div>'+    
            '</div>'+
            '</section></div>'+
            '</div>';
        var dialog =new C.widget.dialog({content:html}); 
        dialog.fireClose(); 
        if(C.utility.getCookie('popuploveme') != undefined){
            var id = C.utility.getCookie('popuploveme'); 
            $('#'+id).removeClass('lovebutton').addClass('lovebutton2');
        }
        loved.click(function(e){
            e.preventDefault(); 
            dialog.showDialog(); 
        }); 
        love.click(function(e){
            e.preventDefault(); 
            love.hide(); 
            loved.show();
            document.cookie='loved=1';
            dialog.showDialog(); 
        });
        
        $('.lovebutton').click(function(e){
            e.preventDefault(); 
            if(C.utility.getCookie('popuploveme') != undefined){
                alert('you only allow to love one'); 
            }
            else{
                $(this).removeClass('lovebutton').addClass('lovebutton2');
                document.cookie='popuploveme='+$(this).attr('id');
            } 
        });

    });
    
})(jQuery);