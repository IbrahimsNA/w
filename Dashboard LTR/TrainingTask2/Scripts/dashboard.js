$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});





/* confirm remove element */



function remove(title) {


    alertify.confirm('Remove Window', title, function () { alertify.prompt().close() }
                  , function () { alertify.prompt().close() });

}
/* end confirm remove */


function restore(title) {


    alertify.confirm('Restore Deleted Files',title, function () { alertify.prompt().close() }
                  , function () { alertify.prompt().close() });

}
/* end confirm remove */

function OpenSideBar(Id, Animation, width, title, view) {
  
    if (window.matchMedia('(max-width: 700px)').matches) {

        Animation = '-100%'
        width ='100%'
    }



   
    $(".add-new-user h3").html(title);

    $('.Add-user-side , ' + Id + '').show();
    $('.Add-user-side').css({ 'width': width, 'right': Animation });


    $('.Add-user-side').animate({ right: 0 }, 500, function () {
      

    });

    $('.dis').fadeIn("slow");
  


//end addsidebar
}
function CloseSideBar(Id, Animation) {

    if (window.matchMedia('(max-width: 700px)').matches) {
        Animation = '-100%';
        $('.Add-user-side').animate({ right: Animation }, 500, function () {
            $('.Add-user-side , ' + Id + '').hide();

            $('.dis').fadeOut("slow");
            $('.Add-user-side').find('input:text').val('');
            $('.custom-select').prop('selectedIndex', 0);
        });
    }

    $('.Add-user-side').animate({ right: Animation }, 500, function () {
        $('.Add-user-side , ' + Id + '').hide();

        $('.dis').fadeOut("slow");
        $('.Add-user-side').find('input:text').val('');
        $('.custom-select').prop('selectedIndex',0);
    });
  
}
$("html").niceScroll({
    cursorcolor: "#84BD00", // change cursor color in hex
    cursoropacitymin: 0, // change opacity when cursor is inactive (scrollabar "hidden" state), range from 1 to 0
    cursoropacitymax: 1, // change opacity when cursor is active (scrollabar "visible" state), range from 1 to 0
    cursorwidth: "5px", // cursor width in pixel (you can also write "5px")
    cursorborder: "1px solid #84BD00", // css definition for cursor border
    cursorborderradius: "0px", // border radius in pixel for cursor


});