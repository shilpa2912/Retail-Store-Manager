<?php
include 'db.php';

$sql = "select * from DH_recommendations";
$result = $con->query($sql);
$counter = 0;
if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
      if ($counter==0) {
        // code...
        ?>
      <div style="float:right; width:1100px; height:290px; overflow-y:auto;">
        
 <div class="col-md-8 offset-md-1 mb-3 pt-2 pb-4 " data-aos="zoom-in-down" data-aos-duration="600">
              <?php
      }else{
        ?>
        <div class="col-md-8 offset-md-1 mt-4 mb-4 pt-2 pb-4 " data-aos="zoom-in-down" data-aos-duration="600"  data-aos-anchor-placement="top-bottom" data-aos-offset="100">

        <?php
      }
      ?>
<button type='button' class='close' onclick='$(this).parent().remove();'>×</button>
      <div class="card headline">
          <div class="card-body">
            <div class="card-title">
              <?php
              if ($row['Notification_Type'] == 'Insight') {
                ?>
                <img src="insight_icon.png" alt="Insight " height="50px" width="50px">
                <?php
              }else{
                ?>
                <img src="prediction_icon.png" alt="Prediction "  height="50px" width="50px">
                <?php
              }

               ?>
               <span class="font-weight-bold lead"> <?php echo $row['Notification']; ?></span>
            </div>
            <div class="card-text">
              <span class="text-danger font-weight-bolder"><big> Take Action : </big></span> <b><?php echo $row['Take_Action']; ?></b>
            </div></br>
            <button class="btn btn-info" type="button" name="button"><a href="<?php echo $row['details_page']; ?>"
                    style="text-decoration:none;font-weight:bold;color:white;">
            View Details</a></button>

          </div>
      </div>
    </div>

      <?php
      $counter = $counter + 1;
    }
} else {
    echo "Some Error <br> Contact admin";
}
$con->close();


 ?>
</div>
</div>
