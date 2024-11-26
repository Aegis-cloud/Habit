<html>
    <head>
        <title>HABIT</title>
    <link rel="stylesheet" href="css/order.css">
    </head>
    
    
    <body>
        <?php
         include('connection.php');
            session_start();
        ?>
<div class="_2S2DLT">
    <div class="_1eq_ut">
      <div class="_1GRhLX _2wHLZw">
        <img src="images/lg.png" padding: 0px width="150" height="100">
        <div class="_38DA9m">
            <span class="_2Xj3Lj"><a href="account.php"><span>My Account</span></a></span>
            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNiIgaGVpZ2h0PSIxMCIgdmlld0JveD0iMCAwIDYgMTAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTEuMiAxTDQgNSAxIDkiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlPSIjNTY1NjU2IiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIvPjwvc3ZnPg==" width="8" height="12" class="_3fuf-K">
            <span class="_2F3FgY"><span>My Orders</span></span>
        </div>
      <div></div>
          <?php
          $u=$_SESSION['u'];
            $a="SELECT * FROM myorder where Uname='$u'";
	            $sql=mysqli_query($conn,$a);
                while($row=mysqli_fetch_assoc($sql)) 
                {
                     $a=$row['quan'];
                     $b=$row['price'];
                     $s=$a*$b;
                    if($row['del_type']=='Home Delivery')
                        $s+=60;
          ?>
    <div class="row _3l2sfs">
        <div class="F4CVC3">
            <div class="row _1LTGeE">
                <div class="col-8-12">
                    <div class="_1-SHG3">
                        Order Id: <b><?php echo $row['order_id']; ?></b>
                    </div>
                </div>
                
            </div>
            <?php
                    $id=$row['order_id'];
                    $b="SELECT * FROM address where order_id='$id'";
	            $sql1=mysqli_query($conn,$b);
                    while($row1=mysqli_fetch_assoc($sql1))
                    {
            ?>
            <div class="row haP8Uf">
                <div class="_3xiuDJ">
                    <div class="row _23QCqI">
                        <div class="col-5-12 _22pgKz">
                            <div class="row" style="position: relative;">
                               <div class="col-3-12 _2eFO7I">
                                    <a href="/izcorpindia-women-casual-tan-artificial-leather-wallet/p/itmf3zezawyhgdch?pid=WCWFF8Y4FCTQJHRV&amp;lid=LSTWCWFF8Y4FCTQJHRVHVMXZW" target="_blank" rel="noopener noreferrer">
                                        <div class="_3BTv9X" style="height: 75px; width: 75px;">
                                            <img class="_1Nyybr  _30XEf0" alt="" style="height:90px; width:75px;" src="<?php echo $row['pic']; ?>">
                                        </div>
                                    </a>
                                </div> 
                                <span class="_3PqwaQ">
                                            <span class="_3Vj7el " >Item Name:<br> </span>
                                            <span class="_14N9bh"><?php echo $row['name'] ?> </span>
                                        </span>
                                        <span class="_3PqwaQ">
                                            <span class="_3Vj7el">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quantity:<br></span>
                                            <span class="_14N9bh">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['quan']; ?></span>
                                        </span>
                                <span class="_3PqwaQ">
                                            <span class="_3Vj7el">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Price:<br></span>
                                            <span class="_14N9bh">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['price']; ?></span>
                                      
                                </span>
                              
                                  </div>
                        </div>
                                <div class="col-8-12">
                                        <span class="_3PqwaQ">
                                            <span class="_3Vj7el " ><br>Address:<br> </span>
                                            <span class="_14N9bh"><?php echo $row1['Address']."<br>".$row1['Town'].",".$row1['State']; ?> </span>
                                        </span>
                                    
                                      <span class="_3PqwaQ">
                                            <span class="_3Vj7el">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delivery Method:</span>
                                            <span class="_14N9bh"><?php echo $row['del_type'];?></span>
                                        </span>
                                    <div class="col-6-12 _1S28mS">
                                        <span class="_38bdEf">Pincode: </span>
                                            <?php echo $row1['Pincode']; ?>
                                        </div>
                                </div>
                          
                        <div class="col-3-12 _1S28mS">
                                        <span class="_38bdEf">Status: </span>
                            <b><?php echo $row['order_status']; ?></b>
                             <?php if($row['order_status']=='Ordered') { ?>
                            <br> <br><br> <p> <a href="cancel.php?id=<?php echo $row['order_id']; ?>" class="btn btn-black px-3 py-2">Cancel</a></p> <?php } ?>
                        </div>
                    </div>
                    
                </div>
                <div class="_34Y-ul"><span class="p4QNf5">Order To: </span>
                    <?php echo $row1['F_name']." ".$row1['L_name']." (".$row1['Phone'].")"; ?></div>
                <div class="row cVUw-4">
                <div class="col-6-12 _1S28mS">
                    <span class="_38bdEf">Ordered On: </span>
                    <?php echo $row['order_date']; ?>
                    </div>
                <div class="col-6-12 Gp5Tnb">
                    <span align: "right" class="_38bdEf">Order Total: </span>
                    <span class="_37pJH1"  ><b><?php echo $s; ?></b></span>
                </div>
                </div>
            </div>
            
        </div>
        <?php
                    }
            ?>
    </div>
          <?php
                
                
                }
          ?>
  </div>
        </div>
 </div>
     
    </body>
</html>