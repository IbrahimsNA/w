$(document).ready(function () {

    var OrgTable = [
    ["0", "Ibrahim", "Nahnoush", "ibrahims-n@hotmail.com", "admin", "Active", 0],
    ["1", "Majed", "al-absi", "majed-alabsi@hotmail.com", "moderator", "Offline", 0],
    ["2", "Mohammad", "Foad", "Mohammad-Foad@hotmail.com", "user", "Pending", 0],
     ["3", "Ahmad", "Sa'adi", "Ahmad-Saadi@hotmail.com", "user", "Offline", 0]

    ];

    var table = $('#OrgTable').DataTable({
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
        data: OrgTable,
        'columnDefs': [
           {
               'targets': 0,
               'checkboxes': true
           }
        ],
        'order': [[1, 'asc']],
        columns: [
            {},

            { title: "First Name" },
            { title: "Last Name" },
            { title: "E-mail" },
            { title: "Role" },
            {
                title: "Status",
                render:
               function (data, type, row) {

                   if (data == 'Active') {
                       return `<span class="badge badge-success">Active</span>`;
                   }
                   else if (data == 'Offline') {
                       return `<span class="badge badge-danger">Offline</span>`;

                   } else if (data == 'Pending') {

                       return `<span class="badge badge-secondary">Pending</span>`;
                   }
               }

            }
        ],
        responsive: true
    });




    $('#OrgTable :checkbox').change(function () {
        var checkedboxes = $('#OrgTable input[type="checkbox"]:checked').length;
        var uncheckedboxes = $('#OrgTable :checkbox').not(':checked').length;



        if (checkedboxes == 1) {

            $(".action ,.action-empty").addClass('active-trash').removeClass('disable1');
            $(".action ,.action-view").addClass('active-view').removeClass('disable1');
            $(".action ,.action-edit").addClass('active-edit-user').removeClass('disable1');

        } else if (checkedboxes > 1) {

            $(".action ,.action-empty").addClass('active-trash').removeClass('disable1');
            $(".action ,.action-view").removeClass('active-view').addClass('disable1');
            $(".action ,.action-edit").addClass('disable1').removeClass('active-edit-user');

        }
        else {

            $(".action ,.action-empty").addClass('disable1').removeClass('active-trash');
            $(".action ,.action-view").removeClass('active-view').addClass('disable1');
            $(".action ,.action-edit").addClass('disable1').removeClass('active-edit-user');


        }









        /* End change on*/
    });

});



function addOrg(title) {

    $('.Add-user-side').find('input:text').attr('disabled', false)


    $('.custom-select').attr('disabled', false);

    OpenSideBar('#AddUser', '-40%', '40%', title)
}

function editOrg(title) {

    $('.Add-user-side').find('input:text').attr('disabled', false)


    $('.custom-select').attr('disabled', false);
    OpenSideBar('#AddUser', '-40%', '40%', title)
}

function viewOrg(title) {
    $('.Add-user-side').find('input:text').attr('disabled', true)


    $('.custom-select').attr('disabled', true);
    OpenSideBar('#AddUser', '-40%', '40%', title)
}
function delteOrg(title) {
    remove(title)
}