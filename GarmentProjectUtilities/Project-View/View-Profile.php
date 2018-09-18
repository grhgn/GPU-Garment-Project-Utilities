<head>
    <?php
        include "../Project-Process/Connector.php";
        session_start();
        $cumi1= mysqli_query($konek, "SELECT * FROM userdata WHERE username='".$_SESSION['name']."'");
        $cumi=mysqli_fetch_array($cumi1);
    ?>
    <script type="text/javascript">
        $(document).ready(function() {
            var panels = $('.user-infos');
            var panelsButton = $('.dropdown-user');
            panels.hide();
            panelsButton.click(function() {
                var dataFor = $(this).attr('data-for');
                var idFor = $(dataFor);
                var currentButton = $(this);
                idFor.slideToggle(400, function() {
                    if (idFor.is(':visible')) {
                        currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
                    } else {
                        currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
                    }
                })
            });
            $('[data-toggle="tooltip"]').tooltip();
            $('button').click(function(e) {
                e.preventDefault();
                alert("This is a demo.\n :-)");
            });
        });
    </script>
    <style type="text/css">
        .user-row {
            margin-bottom: 14px;
        }
        .user-row:last-child {
            margin-bottom: 0;
        }
        .dropdown-user {
            margin: 13px 0;
            padding: 5px;
            height: 100%;
        }
        .dropdown-user:hover {
            cursor: pointer;
        }
        .table-user-information > tbody > tr {
            border-top: 1px solid rgb(221, 221, 221);
        }
        .table-user-information > tbody > tr:first-child {
            border-top: 0;
        }
        .table-user-information > tbody > tr > td {
            border-top: 0;
        }
        .toppad {
            margin-top: 20px;
        }
        .icon-size
            {
                font-size: 87px;
            }
    </style>
</head>
<div class="container">
    <div class="row">
        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad">


            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $cumi['firstname'];echo' ';echo $cumi['lastname'] ?></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center">
                            <!-- <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> -->
                            <span class="glyphicon glyphicon-user icon-size"></span>
                        </div>
                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td>01/24/1988</td>
                                    </tr>
                                    <tr>
                                        <tr>
                                            <td>Gender</td>
                                            <td>Male</td>
                                        </tr>
                                        <tr>
                                            <td>Home Address</td>
                                            <td>Metro Manila,Philippines</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><?php echo $cumi['email'];?></td>
                                        </tr>
                                        <td>Phone Number</td>
                                        <td>123-4567-890(Landline)
                                            <br>
                                            <br>555-4567-890(Mobile)
                                        </td>

                                    </tr>

                                </tbody>
                            </table>

                            <a href="#" class="btn btn-primary">My Dashboard</a>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                    <span class="pull-right">
                        <a href="#" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="#" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
