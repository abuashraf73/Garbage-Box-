<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Garbage Box</a>
            </div>

            <div class="nav navbar-top-links navbar-right">
                <?php  if (isset($_SESSION['username'])) : ?>
                    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                    <?php endif ?>
            </div>
            <!-- /.navbar-header -->

            <!--  -->
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="request.php"><i class="fa fa-table fa-fw"></i> Request Sales</a>

                        </li>
                        <li>
                            <a href="history.php"><i class="fa fa-table fa-fw"></i> Sales History</a>
                            
                        </li>
                        <li>
                            <a href="status.php"><i class="fa fa-table fa-fw"></i> Account Status</a>
                            
                        </li>
                        
                        <!--  -->
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>