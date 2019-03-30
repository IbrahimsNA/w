$(document).ready(function () {

    /*start deleted msgs*/

    var Inbox = [
    ["1", "Ahmad", "System Architect", "2011/04/25","<i class='far fa-envelope' title='unread'></i>"],
    ["2", "Majed", "Accountant", "2011/04/25", "<i class='far fa-envelope-open'  title='read'></i>"],
    ["3", "Waleed", "Junior Technical Author", "2011/04/25",  "<i class='far fa-envelope' title='unread'></i>"],
    ["4", "Khaled", "Senior Javascript Developer", "2011/04/25", "<i class='far fa-envelope' title='unread'></i>"],
    ["5", "Ibrahim", "Accountant", "2011/04/25", "<i class='far fa-envelope-open'  title='read'></i>"],
    ];

    var table = $('#Inbox').DataTable({
        "searching": false,
        "bPaginate": true,
        "bLengthChange": true,
        "bFilter": true,
        "bInfo": true,
        "bAutoWidth": false,
        "lengthMenu": [5, 10, 50, 100],
        "pageLength": 5,
        deferRender: true,
        dom: 'Bfrtip',
        data: Inbox,
        'columnDefs': [
           {
               'targets': 0,
               'checkboxes': true
           }
        ],
        'order': [[1, 'asc']],
        columns: [
            {},
            { title: "From" },

            { title: "Subject" },
            { title: "Date" }, {
                title: "Status"
            }
 
        ],
        responsive: true
    });

    /*end deleted msgs*/






    $('#Inbox :checkbox').change(function () {
        var checkedboxes = $('#Inbox input[type="checkbox"]:checked').length;
        var uncheckedboxes = $('#Inbox :checkbox').not(':checked').length;



        if (checkedboxes == 1) {

            $(".action ,.action-empty").css({ 'color': 'red', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1');
            //$(".action ,.fa-undo-alt").css({ 'color': '#3e3ef5', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1');
            $(".action ,.fa-eye").css({ 'color': 'black', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1')
        } else if (checkedboxes > 1) {

            $(".action ,.action-empty").css({ 'color': 'red', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1');
            //$(".action ,.fa-undo-alt").css({ 'color': '#3e3ef5', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1');
            $(".action ,.fa-eye").addClass('disable1')
        }
        else {

            $(".action ,.action-empty").addClass('disable1');
            $(".action ,.fa-undo-alt").addClass('disable1');
            $(".action ,.fa-eye").addClass('disable1')
        }









        /* End change on*/
    });


});

function delte(title) {
    remove(title)
}