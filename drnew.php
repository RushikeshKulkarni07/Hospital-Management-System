<?php
include('dbcon.php');
session_start();

$sql = "SELECT * FROM user1";
$result = mysqli_query($connect, $sql);
$num = mysqli_num_rows($result);

header('Content-Type: text/html; charset=UTF-8');

$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'User';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kolhapur Cancer Centre - Patient Appointments</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        h2 {
            margin-top: 30px;
            text-align: center;
        }
        .header-buttons {
            margin-top: 20px;
            text-align: right;
        }
        .btn-custom {
            margin-left: 10px;
        }
        .panel {
            margin-top: 20px;
        }
        .alert-info {
            margin-top: 20px;
        }
        .table thead {
            background-color: #343a40;
            color: white;
        }
        .fa-trash {
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header-buttons">
        <a href="index.html" class="btn btn-danger btn-custom">Logout</a>
    </div>

    <h2>All Patients</h2>

    <?php if (isset($_GET['msg'])): ?>
        <div class="alert alert-info text-center">
            <?php echo htmlspecialchars($_GET['msg']); ?>
        </div>
    <?php endif; ?>

    <div class="panel panel-default">
        <div class="panel-body">
            <?php if ($num > 0): ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Age</th>
                                <th>Phone No</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Time</th>
                                <th>Date</th>
                                <th>OPD</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 1; while ($row = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo htmlspecialchars($row['fname']); ?></td>
                                    <td><?php echo htmlspecialchars($row['lname']); ?></td>
                                    <td><?php echo (int)$row['age']; ?></td>
                                    <td><?php echo htmlspecialchars($row['phoneno']); ?></td>
                                    <td><?php echo htmlspecialchars($row['email']); ?></td>
                                    <td><?php echo htmlspecialchars($row['address']); ?></td>
                                    <td><?php echo htmlspecialchars($row['time']); ?></td>
                                    <td><?php echo htmlspecialchars($row['date']); ?></td>
                                    <td><?php echo htmlspecialchars($row['opd']); ?></td>
                                    <td>
                                        <a href='delete_patient.php?id=<?php echo $row['id']; ?>' class='btn btn-danger btn-sm' onclick='return confirm("Are you sure you want to delete this patient?")'>
                                            <i class='fa fa-trash'></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <p class="alert alert-warning text-center">No records found.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php mysqli_close($connect); ?>
