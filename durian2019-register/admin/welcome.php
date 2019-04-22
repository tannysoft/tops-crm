<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>Welcome</title>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
<link rel="stylesheet" href="../assets/style.css">
<style type="text/css">
    body{ font: 14px sans-serif; text-align: center; }
</style>
</head>
<body>
<div class="container-fluid">
<div class="page-header">
<h2>Welcome, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h2>
<ul id="filter" class="nav justify-content-center">
<li class="nav-item">
<a class="nav-link" href="#"><span class="badge badge-secondary">registered</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#"><span class="badge badge-danger">waiting</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#"><span class="badge badge-success">paid</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="#"><span class="badge badge-primary">attended</span></a>
</li>
<li class="nav-item">
<a class="nav-link" href="logout.php"><span class="badge badge-dark">logout</span></a>
</li>
</ul>
</div>
<table id="table" class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>BU</th>
        <th>Employee ID</th>
        <th>Full Name</th>
        <th>Mobile No.</th>
        <th>E-mail</th>
        <th>Round</th>
        <th>Seat</th>
        <th>Total</th>
        <th>Slip</th>
        <th>Status</th>
    </tr>
</thead>
<tfoot>
    <tr>
        <th>ID</th>
        <th>BU</th>
        <th>Employee ID</th>
        <th>Full Name</th>
        <th>Mobile No.</th>
        <th>E-mail</th>
        <th>Round</th>
        <th>Seat</th>
        <th>Total</th>
        <th>Slip</th>
        <th>Status</th>
    </tr>
</tfoot>
</table>
</div>

<div class="modal fade" id="slip-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Slip Upload</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img id="slip-img" width="100%">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" id="slip-confrim" class="btn btn-primary" data-dismiss="modal">Confrim Slip</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    var badges = {
        'registered': 'secondary',
        'waiting': 'danger',
        'paid': 'success',
        'attended': 'primary'
    };
    var datatable = $('#table').DataTable( {
        iDisplayLength: 100,
        processing: true,
        serverSide: true,
        ajax: 'table_processing.php',
        columnDefs: [{
            targets: 0,
            className: 'text-center',
            render: function(data, type, row, meta){
                return '#' + data;
            }
        },{
            targets: 6,
            className: 'text-center',
            render: function(data, type, row, meta){
                if(data == '56')
                    return '5-6PM';
                else if(data == '78')
                    return '7-8PM';
                else
                    return 'N/A'
            }
        },{
            targets: 8,
            className: 'text-center',
            render: function(data, type, row, meta){
                return (data * 419) + ' THB';
            }
        },{
            targets: 9,
            className: 'text-center',
            render: function(data, type, row, meta){
                return '<span class="badge badge-'+badges[data]+' d-block">' + data + '</span>';
            }
        },{
            targets: 10,
            className: 'text-center',
            render: function(data, type, row, meta){
                return '<a href="#">' + data + '</a>';
            }
        }]
    });
    //
    $('#filter > li > a > span').click(function(){
        datatable.search( $(this).text() ).draw();
    });
    //
    $('#table tbody').on('click', 'tr', function () {
        var data = datatable.row(this).data();
        console.log(data);
        if(data[10]!==""){
            $('#slip-modal').modal('show');
            $('#slip-img').attr('src', '../uploads/' + data[10]);
            $('#slip-confrim').click(function(){
                if (data[9]!=='paid') {
                    $.get('api.php?status=paid&id=' + data[0], function(){
                        datatable.ajax.reload(null, false);
                    });
                }
            });
        }
    });
});
</script>
</body>
</html>