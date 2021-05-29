<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href=" <?= base_url() ?>public/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href=" <?= base_url() ?>public/dist/css/skins/_all-skins.min.css">
    <style type="text/css">
    .table-dark th {
        position: sticky;
        top: 0;
        background-color: #fff;
    }
    </style>

</head>

<body class="hold-transition skin-blue sidebar-mini" style="overflow: hidden;">
    <aside class="main-sidebar">
        <section class="sidebar">
            <div class="user-panel">
                <div class="pull-left image">
                    <img src=" <?= base_url() ?>public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>Admin </p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <hr>
            </hr>
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Menu</li>
                <li class=" ">
                    <a href="<?= base_url() ?>index.php/Admin/admin">
                        <i class="fa fa-dashboard"></i> <span>Thống Kê</span>
                    </a>
                </li>

                <li class="active ">
                    <a href="<?= base_url() ?>index.php/admin/tao_pm">
                        <i class="fa fa-dashboard"></i> <span>Phiếu mượn</span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-list-alt"></i> <span>Sách</span>
                        <span class="label label-success"></span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= base_url() ?>index.php/admin/themmoi"><i class="fa fa-circle-o"></i> Thêm
                                mới</a></li>
                        <li><a href="<?= base_url() ?>index.php/admin/Cs_Sach"><i class="fa fa-circle-o"></i> Chỉnh
                                sửa</a></li>
                        <li><a href="<?= base_url() ?>index.php/admin/sachmuon"><i class="fa fa-circle-o"></i> Sách đang
                                mượn </a></li>
                    </ul>
                </li>
                <li>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="glyphicon glyphicon-user"></i> <span>Member</span>
                        <span class="label label-success"></span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?= base_url() ?>index.php/admin/qlyuser"><i class="fa fa-circle-o"></i> User</a>
                        </li>
                        <li><a href="<?= base_url() ?>index.php/admin/addmember"><i class="fa fa-circle-o"></i> Thêm</a>
                        </li>

                    </ul>
                </li>
            </ul>
        </section>
    </aside>

    <div class="content-wrapper">
        <section class="content">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tạo phiếu mượn</h3>
                    </div>
                    <div class="box-body">
                        <form method="post" class="row" action="<?= base_url() ?>index.php/admin/tao_pm"
                            enctype="multipart/form-data">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mã sách</label>
                                        <?php foreach ($dt as $value) : ?>
                                            <div>
                                            <input name="masach[]" type="checkbox" value="<?= $value->masach ?>">
                                            <label for="<?= $value->masach ?>"> <?= $value->masach ?>:<?= $value->tensach ?></label><br>
                                             </div>
                                            <?php endforeach; ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Thong tin nguoi muon</label>
                                    <input name="id_account" type="text" list="user" class="form-control">
                                    <datalist id="user">
                                        <?php foreach ($dt2 as $value) : ?>
                                        <option value="<?= $value->id_account?>">
                                            <?= $value->	fullname ?>,<?= $value->phone ?>
                                            <?php endforeach; ?>
                                    </datalist>
                                </div>
                                            
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Ngay tra</label>
                                    <input name="ngaytra" type="date" class="form-control" list="nxb">

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nguoi cho muon</label>
                                    <input name="quanlythuvien" type="text" list="admin" class="form-control"
                                        id="exampleInputPassword1">
                                    <datalist id="admin">
                                        <?php foreach ($dt3 as $value) : ?>
                                        <option value="<?= $value->fullname?>">
                                            <?php endforeach; ?>
                                    </datalist>
                                </div>
                                <div>
                                    <input type="submit" name="them" value="ADD" class="btn btn-primary"></input>
                                </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <section class="content-header">
                    <table class="table table-striped">
                        <tr>
                            <th style="width: 10px">#</th>
                            <th> masach</th>
                            <th> id_account </th>
                            <th>ngaymuon</th>
                            <th> ngaytra</th>
                            <th>quanlythuvien</th>
                            <th>X</th>

                        </tr>
                        <?php $i = 0 ;foreach ($data5 as $value) : ?>

                        <tr>
                            <td><?= ++$i ?></td>
                            <td><?= $value->	masach ?></td>
                            <td><?= $value->	id_account  ?></td>
                            <td><?= $value->ngaymuon ?></td>
                            <td><?= $value->	ngaytra ?></td>
                            <td><?= $value->	quanlythuvien ?></td>
                            <td><a href="<?= base_url() ?>index.php/admin/tao_pm?id_muon=<?= $value->id_muon ?>"><i
                                        class="glyphicon glyphicon-erase"></i></a></td>
                            <td style="display: none"><?= $value->id_muon ?></td>
                        </tr>


                        <?php endforeach; ?>

                    </table>
                </section>
            </div>
        </section>
    </div>
    <!-- jQuery 3 -->
    <script src=" <?= base_url() ?>public/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src=" <?= base_url() ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src=" <?= base_url() ?>public/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src=" <?= base_url() ?>public/dist/js/adminlte.min.js"></script>
    <!-- Sparkline -->
    <script src=" <?= base_url() ?>public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap  -->
    <script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= base_url() ?>public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll -->
    <script src=" <?= base_url() ?>public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS -->
    <script src=" <?= base_url() ?>public/bower_components/chart.js/Chart.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=" <?= base_url() ?>public/dist/js/pages/dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=" <?= base_url() ?>public/dist/js/demo.js"></script>
</body>

</html>