var c = document.getElementById("c");
var ctx = c.getContext("2d");

//making the canvas full screen
c.height = 180;
c.width = window.innerWidth;

//chinese characters - taken from the unicode charset
var chinese = "JavascriptHtml5Css3Node";
//converting the string into an array of single characters
chinese = chinese.split("");

var font_size = 12;
var columns = c.width / font_size; //number of columns for the rain
//an array of drops - one per column
var drops = [];
//x below is the x coordinate
//1 = y co-ordinate of the drop(same for every drop initially)
for (var x = 0; x < columns; x++)
    drops[x] = 1;

//drawing the characters
function draw() {
    //Black BG for the canvas
    //translucent BG to show trail
    ctx.fillStyle = "rgba(74,120,218,0.06)";
    ctx.fillRect(0, 0, c.width, c.height);

    ctx.fillStyle = "#fff"; //green text
    ctx.font = font_size + "px arial";
    //looping over drops
    for (var i = 0; i < drops.length; i++) {
        //a random chinese character to print
        var text = chinese[Math.floor(Math.random() * chinese.length)];
        //x = i*font_size, y = value of drops[i]*font_size
        ctx.fillText(text, i * font_size, drops[i] * font_size);

        //sending the drop back to the top randomly after it has crossed the screen
        //adding a randomness to the reset to make the drops scattered on the Y axis
        if (drops[i] * font_size > c.height && Math.random() > 0.975)
            drops[i] = 0;

        //incrementing Y coordinate
        drops[i]++;
    }
}
setInterval(draw, 50);

$(function(){
    var oSiderLeft = $('.sidebar_left');
    var iScrollTop = $('html,body').scrollTop();
    setScrollPos(iScrollTop)
    $(document).scroll(function(){
        iScrollTop = $('html,body').scrollTop()
        setScrollPos(iScrollTop)
    })
    function setScrollPos(iTop){
        if(iTop>=250){
            oSiderLeft.css({position:'fixed',height:''})
        }else{
            oSiderLeft.css({position:'absolute'})
        }
    }

    //
    var oCateName = $('#list_content .cate_name');
    oCateName.hover(function() {
        $(this).find('>font').fadeIn(200)
    },function() {
        $(this).find('>font').fadeOut(100)
    })

    var oBackTop = $('#back_top_btn');
    var oBackTopActive = $('#back_top_btn_active');
    var isS = true
    oBackTop.click(function(){
        isS = false
        oBackTop.fadeOut(100)
        $('body,html').animate({scrollTop:0},400,function(){
            isS = true
        })
    })

    var $ScrollTop = $(window).scrollTop();
    var $iScrollTop = $(window).height()/2;
    if ($ScrollTop > $iScrollTop) {
        oBackTop.fadeIn(300);
    }else{
        oBackTop.fadeOut(300);
    }
    $(window).scroll(function(){
        if(!isS) return
        $ScrollTop = $(window).scrollTop();
        if ($ScrollTop > $iScrollTop) {
            oBackTop.fadeIn(300);
        }else{
            oBackTop.fadeOut(300);
        }
    });

    // $('#search_btn').on('click',function(){
    //     window.location.href = "/search.html?kw="+$("kw").val()
    // })

    $('#gratuity-alert-btn').click(function(e){
        OpenGratuityAlert()
        e.stopPropagation();
    })

    $('.gratuity-alert-mask').click(function(e){
        CloseGratuityAlert()
        e.stopPropagation();
    })

    //关闭按钮关闭弹窗
    $('.close-btn').click(function(e){
        CloseGratuityAlert()
        e.stopPropagation();
    })

    function OpenGratuityAlert(){
        $('.gratuity-alert-box').removeClass('flipOutX');
        $('.gratuity-alert-mask').fadeIn(400)
        setTimeout(function(){
            $('.gratuity-alert-box').css('display','block').addClass('flipInX');
        },50)
        // document.querySelector('body').style.overflow = 'hidden';
    }

    function CloseGratuityAlert(){
        $('.gratuity-alert-box').removeClass('flipInt').addClass('flipOutX');
        setTimeout(function(){
            $('.gratuity-alert-box').css('display','none')
            $('.gratuity-alert-mask').fadeOut(1)
        },600)
        // document.querySelector('body').style.overflow = '';
    }
})