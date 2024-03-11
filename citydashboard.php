<?php 
require 'include/navbar.php';
require 'include/sidebar.php';
?>
        <!-- Start main left sidebar menu -->
        

<html>	
	
        <!-- Start app main Content --> 
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Dashboard</h1>
                </div>
				<div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card card-statistic-2">
                        <div class="card-stats">
                        <div class="card-stats-title"> Product Order Statistics 
                            
                        </div>
                        <div class="card-stats-items">
                            <div class="card-stats-item">
                                <div class="card-stats-item-count"><?php echo $mysqli->query("select * from tbl_order where o_status='Pending'")->num_rows;?></div>
                                <div class="card-stats-item-label">Pending</div>
                            </div>
							<div class="card-stats-item">
                                <div class="card-stats-item-count"><?php echo $mysqli->query("select * from tbl_order where o_status='Processing'")->num_rows;?></div>
                                <div class="card-stats-item-label">Process</div>
                            </div>
                           
							<div class="card-stats-item">
                                <div class="card-stats-item-count"><?php echo $mysqli->query("select * from tbl_order where o_status='Cancelled'")->num_rows;?></div>
                                <div class="card-stats-item-label">Cancel</div>
                            </div>
                            <div class="card-stats-item">
                                <div class="card-stats-item-count"><?php echo $mysqli->query("select * from tbl_order where o_status='Completed'")->num_rows; ?></div>
                                <div class="card-stats-item-label">Completed</div>
                            </div>
                        </div>
                        </div>
                        <div class="card-icon shadow-primary bg-primary">
                        <i class="fas fa-shopping-bag heart"></i>
                        </div>
                        <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Orders</h4>
                        </div>
                        <div class="card-body">
                            <?php echo $mysqli->query("select * from tbl_order")->num_rows; ?>
                        </div>
                        </div>
                    </div>
                    </div>
					
					
					
					
                    
					
					
					
					
					
					
                    
                </div>
                <div class="row">
                    
                   

					
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<a href="list_child.php">
                        <div class="card card-statistic-1">
                            <div class="card-icon shadow-primary bg-primary">
                                <i class="fas fa-list-ol"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Total Child Category</h4>
                                </div>
                                <div class="card-body">
                                    <?php echo $mysqli->query("select * from tbl_child")->num_rows;?>
                                </div>
                            </div>
                        </div> 
					</a>
                </div>
            </section>
        </div>
        
       
    </div>
</div>

<?php require 'include/footer.php';?>
</body>
</html>