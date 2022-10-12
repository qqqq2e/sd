<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>webinar</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-responsive {
        margin: 30px 0;
    }
	.table-wrapper {
		min-width: 1000px;
        background: #fff;
        padding: 20px 25px;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}	
</style>
<script>
$(document).ready(function(){
    var i=0;
    var j=0;
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
    $("#de").hide();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;
                $("#de").show();                    
			});
		} else{
			checkbox.each(function(){
				this.checked = false;
                $("#de").hide(); 
			});
		} 
	});


	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
            --i;
            if(i==0){
                $("#de").hide(); 
            }                   


		}else{
            $("#de").show();
            ++i;

        }
	});
});
</script>
</head>
<body>
<a href="/d" style="" class="btn btn-danger mt-2 mb-5">Dashboard</a>

        <!-- Pre-loader start -->
        <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Manage <b>Webinars</b></h2>
						</div>
						<div class="col-xs-6">
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Meet</span></a>
							<button href="#deleteEmployeeModal2" id="de"  class="btn btn-danger" data-id="" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></button>						
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>
								<span class="custom-checkbox">
									<input type="checkbox" id="selectAll">
									<label for="selectAll"></label>
								</span>
							</th>
                            <th>ID</th>
							<th>Name</th>
							<th>Password</th>
                            <th>Date created</th>
							<th>Start time</th>
							<th>Duration</th>
                            <th>Start url</th>
                            <th>Join url</th>
							<th>Permission</th>
							<th>Etat</th>
							<th>Category</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>	
                        @foreach($meetings as $meet)	

						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox5" class="checkbox" data-id="{{$meet['meeting_id']}}"  name="ids[{{$meet['meeting_id']}}]" value="{{$meet['meeting_id']}}">
									<label for="checkbox5"></label>
								</span>
							</td>
							<td id="id_meeting">{{$meet['meeting_id']}}</td>
                            <td id="name">{{$meet['name']}}</td>
							<td id="password">{{$meet['password']}}</td>
							<td id="created_at">{{$meet['created_at']}}</td>
							<td id="start_time">{{$meet['start_time']}}</td>
							<td id="duration">{{$meet['duration']}}</td>
							<td >{{substr($meet['start_url'],0,17)}}<button onclick="copyToClipboard('#text1')"></button></td>
							<td >{{substr($meet['join_url'],0,17)}}<button onclick="copyToClipboard('#text2')"></button></td>
							<td id="text1" hidden style="display:hidden">{{$meet['start_url']}}</td>
							<td id="text2" hidden style="display:hidden">{{$meet['join_url']}}</td>
							<td id="permission">{{$meet['permission']}}</td>
							<td >{{$meet['etat']}}</td>
							<td id="category">{{$meet['category']}}</td>
							<td>
								<button value="{{$meet['meeting_id']}}" href="#editEmployeeModal"  class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></button>
								<button value="{{$meet['meeting_id']}}" href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
							</td>
						</tr> 

                        @endforeach

					</tbody>
				</table>
                @if(!$meetings)
                <h1>hhhh</h1>
                @endif
				<!-- <div class="clearfix">
					<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
					<ul class="pagination">
						<li class="page-item disabled"><a href="#">Previous</a></li>
						<li class="page-item"><a href="#" class="page-link">1</a></li>
						<li class="page-item active"><a href="#" class="page-link">2</a></li>					
						<li class="page-item"><a href="#" class="page-link">Next</a></li>
					</ul>
				</div> -->

			</div>
		</div>        
    </div>
	<!-- Edit Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="get" action="/add_conferance">
                    @csrf
					<div class="modal-header">						
						<h4 class="modal-title">Add Conferance</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>

					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" name="name" required>
						</div>
						<div class="form-group">
							<label>Start time</label>
							<input type="datetime-local" class="form-control" name="start_time" required >
						</div>
						<div class="form-group">
							<label>Duration</label>
							<input type="number" max=30 min=1 class="form-control" name="duration" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password" required>
						</div>
						<div class="form-group">
							<label>Category</label>
							<input type="text" class="form-control" name="category" required>
						</div>
						<div class="form-group">
							<label>Permission</label>
							<select name="permission">
								<option value="private">Private</option>
								<option value="public">Public</option>

							</select>
						</div>
						<div class="form-group">
							<label>Despription</label>
							<textarea type="description" class="form-control" name="description"></textarea>
						</div>
						<div class="form-group">
							<label>Capacity</label>
							<input type="number" max=100 min=1 class="form-control" name="capacity" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="get" action="update">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
                        <div class="form-group">
							<label>ID</label>
							<input type="text" class="form-control" name="id_meeting_e" id="id_meeting_e" readonly>
						</div>						
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" name="name_e" id="name_e"  required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password_e" id="password_e" required>
						</div>
						<div class="form-group">
							<label>Category</label>
							<input type="text" class="form-control" name="category_e" id="category_e" required>
						</div
						<div class="form-group">
							<label>Start time</label>
							<input class="form-control" type="datetime-local" name="start_time_e" id="start_time_e" ></input>
						</div>
						<div class="form-group">
							<label>Duration</label>
							<input type="number" max=30 min=1 class="form-control" name="duration_e" id="duration_e" required>
						</div>
						<div class="form-group">
							<label>Capacity</label>
							<input type="number" max=100 min=1 class="form-control" name="capacity_e" id="capacity_e" required>
						</div>
						<div class="form-group">
							<label>Despription</label>
							<textarea type="desription" class="form-control" name="description_e" id="description_e" required></textarea>
						</div>
						<div class="form-group">
							<label>Permission</label>
							<select name="permission_e" id="permission_e">
								<option value="private">Private</option>
								<option value="public">Public</option>

							</select>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="get" action="delete">
					<div class="modal-header">						
						<h4 class="modal-title">Delete Meet</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
                        <input type="text" hidden id="id_delete" name="id_delete">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
    	<!-- Delete Modal2 HTML -->
	<div id="deleteEmployeeModal2" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="get" action="delete_all">
                    @csrf
					<div class="modal-header">						
						<h4 class="modal-title">Delete Meet</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
                        <input type="text"  id="del_all"  hidden name="del_all">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

<script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>

<script type="text/javascript">
$(document).ready(function(){
    $(document).on('click','.edit',function(){
        var iny = $(this).val();
        $('#editEmployeeModal').modal('show');
        $.ajax({
            type : "GET",
            url : "/edit1/"+iny,
            success : function(response) {
            console.log(response);
            $('#name_e').val(response.meet.name);
            $('#password_e').val(response.meet.password);
            $('#start_time_e').val(response.meet.start_time);
            $('#duration_e').val(response.meet.duration);
            $('#id_meeting_e').val(response.meet.meeting_id);
			$('#permission_e').val(response.meet.permission);
			$('#capacity_e').val(response.meet.capacity);
			$('#description_e').val(response.meet.description);
			$('#category_e').val(response.meet.category);

            }
        });

    });
});
</script>


<script type="text/javascript">
$(document).ready(function(){
    $(document).on('click','.delete',function(){
        var iny = $(this).val();
        $('#deleteEmployeeModal').modal('show');
        $.ajax({
            type : "GET",
            url : "/delete1/"+iny,
            success : function(response) {
            console.log(response);
            $('#id_delete').val(response.meet.meeting_id);
            }
        });

    });
});
</script>







<script type="text/javascript">
$(document).ready(function(){
    $(document).on('click','#de',function(){
         var ids = [];
         $('.checkbox:checked').each(function(){
            ids.push($(this).attr('data-id'));
         });
         var str = ids.join(',');
         console.log(str);
        $('#deleteEmployeeModal2').modal('show');
        $.ajax({
            type : "GET",
            url : "/delete_all1/"+str,
            success : function(response) {
            console.log(response);
            $('#del_all').val(response.meet);
            }
        });

    });
});
</script>







<!-- <script type="text/javascript">
$(document).ready(function(){
    $(document).on('click','.edit',function(){
        var name = $('#name').text();
        var password = $('#password').text();
        var start_time = $('#start_time').text();
        var duration = $('#duration').text();
        var id_meeting = $('#id_meeting').text();
        var iny = $(this).val();
        $('#editEmployeeModal').modal('show');
        $('#name_e').val(name);
        $('#password_e').val(password);
        $('#start_time_e').val(start_time);
        $('#duration_e').val(duration);
        $('#id_meeting_e').val(iny);

    });
});
</script> -->