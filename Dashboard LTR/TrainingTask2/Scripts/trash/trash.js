$(document).ready(function () { 

/*start deleted msgs*/

var trash = [
["1", "Ahmad", "System Architect", "2011/04/25", 0],
["2", "Majed", "Accountant", "2011/04/25", 0],
["3", "Waleed", "Junior Technical Author", "2011/04/25", 0],
["4", "Khaled", "Senior Javascript Developer", "2011/04/25", 0],
["5", "Ibrahim", "Accountant", "2011/04/25", 0],
];

var table = $('#trash').DataTable({
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
    data: trash,
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
        { title: "Date" },
        {
            title: "Actions",
            render:
           function (data, type, row) {
               return `<span class="action-icon"><i class="far fa-trash-alt"></i></span>`;
           }
        }
    ],
    responsive: true
});

/*end deleted msgs*/






$('#trash :checkbox').change(function () {
    var checkedboxes = $('#trash input[type="checkbox"]:checked').length;
    var uncheckedboxes = $('#trash :checkbox').not(':checked').length;

  

    if (checkedboxes == 1) {

        $(".action ,.action-empty").css({ 'color': 'red', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1');
        $(".action ,.fa-undo-alt").css({ 'color': '#3e3ef5', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1');
 
    } else if (checkedboxes > 1) {
  
        $(".action ,.action-empty").css({ 'color': 'red', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1');
        $(".action ,.fa-undo-alt").css({ 'color': '#3e3ef5', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1');

    }
    else {

        $(".action ,.action-empty").addClass('disable1');
        $(".action ,.fa-undo-alt").addClass('disable1');
    
    }









    /* End change on*/
});


});

function delte(title) {
    remove(title)
}
function undo(title) {
    restore(title)
}