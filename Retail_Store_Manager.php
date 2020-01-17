<html lang="en">

<head>
  <title>PBIS | Prescience</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="shortcut icon" href="assets/images/favicon.png">

  <style>
  .headline{
    background-color: yellow;
    transform: scale(0.9);
    transition: all .4s ease-in-out;
    background-color: #ffffff;
    background-image: linear-gradient(315deg, #ffffff 0%, #d7e1ec 74%); */
    opacity: 0.9;
    border : 1px solid black;
    border-radius: 50px 15px;
  }

    .headline:hover{
      background-color: red;
      transform: scale(1.1);
      transition: all .4s ease-in-out;
      /* background-color: #ffffff; */
      background: linear-gradient(to right, #dad299, #b0dab9);
      /* background-image: linear-gradient(315deg, #d7e1ec 0%, #ffffff 74%); */
      opacity: 1;
      border-radius: 15px 50px;
    }
  </style>

</head>

<body>

  <div class="container-fluid" style="top:1px;position:fixed;background-color:white;z-index:1000">

    <div class="row">
      <div class="col-sm-4" style="background-color:#CD5C5C;">
        <h5> Prescience Decision Solutions</h5>
      </div>
      <div class="col-sm-4 text-center" style="background-color:#CD5C5C; color:White">
        <h5>Newyork Store</h5>
      </div>
      <div class="col-sm-4 text-center" style="background-color:#CD5C5C;">
        <h6>Week:44 &nbsp; &nbsp; &nbsp;Date:18-11-2019</h6>
      </div>
    </div>

    <div class="row text-center mt-3">
      <div class="col-12 col-md-2 pt-0 pb-0" >
        <div class="card h-80" style="background: linear-gradient(to right, #abbaab, #ffffff);">
          <div class="card-body" >
            <canvas id="canvas_for_indicator_down" style="margin:0;width: 0;height: 0;border-left: 15px solid transparent;border-right: 15px solid transparent;border-top: 25px solid red; margin-top: 25px">
            </canvas>
            <canvas id="canvas_for_indicator_up" style="width: 0;height: 0;border-left: 15px solid transparent;border-right: 15px solid transparent;border-bottom: 25px solid green margin-top: 25px;">
            </canvas>
            <p id="wk_tgt_sales_plus_prediction_next_days" style="font-weight:bold;font-size:15px;"></p>
            <span style="font-weight:bold;font-size:12px;">$</span>
            <span id="week_target" style="font-weight:bold;font-size:12px;"></span>
            <p>Week Target</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-2">
        <div class="card h-80" style="background: linear-gradient(to right, #abbaab, #ffffff);" >
          <div class="card-body">
            <canvas id="canvas_for_doughnut_sales"></canvas>
            <span style="font-weight:bold;font-size:20px;">$</span>
            <span id="sales_till_now_value" style="font-weight:bold;font-size:20px;"></span>
            <p>Sales Till Now</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-2">
        <div class="card h-80" style="background: linear-gradient(to right, #abbaab, #ffffff);" >
          <div class="card-body">
            <canvas id="canvas_for_doughnut_prediction"></canvas>
            <span style="font-weight:bold;font-size:20px;">$</span>
            <span id="prediction_this_week_value" style="font-weight:bold;font-size:20px;"></span>
            <p>Predicted Sales</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="card h-80" style="background: linear-gradient(to right, #abbaab, #ffffff);" >

          <!-- background: linear-gradient(to right, #dae2f8, #d6a4a4); "> -->
          <div class="card-body">
            <!-- <p style="text-align:left;"><h6>Sales, Sales Prediction, Last Year Same Week Sales by WeedDay</h6></p> -->
            <canvas id="canvas_for_linechart"></canvas>

          </div>
        </div>
      </div>


<!-- details cards -->

        <div class="col-12 col-md-auto">

          <div class="card" style="width:8rem;height:6rem;background-color:#f0f0f0;">
            <div class="card-body">
          <div>
   <img src="sales.png" style="width:40px;height:50px;"><br>
   <a href="https://app.powerbi.com/reportEmbed?reportId=7f46b1b3-1a0e-4278-af24-2e3a0b85bbc6&autoAuth=true&ctid=326f146c-7702-4760-8024-10e0b015cdfd&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLWluZGlhLXdlc3QtcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D"
     style="color:black;text-decoration:none;">Sales</a>
</div>
</div></div>

<div class="row text-center mt-3">
  <div class="col-12 col-md-auto">
<div class="card" style="width:8rem;height:6rem;background-color:#f0f0f0;">
  <div class="card-body">
<div>
<img src="stockout.png" style="width:40px;height:50px;"><br>
<a href="https://app.powerbi.com/reportEmbed?reportId=9cebab81-4384-49aa-9aae-62dd7c4f3d1b&autoAuth=true&ctid=326f146c-7702-4760-8024-10e0b015cdfd&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLWluZGlhLXdlc3QtcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D"
style="color:black;text-decoration:none;">StockOut</a>
</div>
</div></div>
</div>
</div>

</div>

</div>

    <div class="container-fluid">
      <!-- <div class="row mt-3"> -->
        <div class="row mt-3" style="height:2rem;">
        <div class="col-sm-10" style="background-color:	#00000F; height: 3rem">
          <span class="text-danger"><b> Alert:</b></span>
          <span class="text-white"><small>Seems like you are missing your weekly target by</small></span>
          <span class="text-danger"><small><b>$<?php include 'missing target by.php'; ?></b></small></span>
          <span class="text-white"><small>. You might consider the following things to reach your target.</small></span>
        </div>
        &nbsp; &nbsp;
      <!-- <div class="row text-center mt-2"> -->
        <!-- <div class="col-md-auto text-center"> -->
        <div class="col-12 col-md-auto text-center">
      <div class="card" style="width:8rem;height:6rem;background-color:#f0f0f0;">
        <div class="card-body">
      <a style="color:black;text-decoration:none;" href="https://app.powerbi.com/reportEmbed?reportId=ae6eab5a-131e-4cff-bd62-ebbafd80ba0e&autoAuth=true&ctid=326f146c-7702-4760-8024-10e0b015cdfd&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLWluZGlhLXdlc3QtcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D"
     >
  <div><img src="category.png" style="width:40px;height:50px;"><br>
    Category</div>
</a>
      </div></div>
      </div>
      </div>

      <div class="row mt-2" style="height:1rem;">
      <div class="col-sm-10 mb-3 pt-1 pb-5" style="background-color:	#00000F; height: 2rem; display:none;">
            </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <div class="col-md-2 offset-md-10 mb-2 pt-5 pb-4 pl-4 text-center">
    <div class="card" style="width:8rem;height:6rem;background-color:#f0f0f0;">
      <div class="card-body">
    <a style="color:black;text-decoration:none;" href="https://app.powerbi.com/reportEmbed?reportId=303fd7f7-5f6c-4c04-8c2e-77fd49b00a80&autoAuth=true&ctid=326f146c-7702-4760-8024-10e0b015cdfd&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLWluZGlhLXdlc3QtcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D"
    >
    <div><img src="footfall.jpg" style="width:40px;height:50px;"><br>Footfall</a>
    </div>
    </div></div>
    </div>
  </div>

    </div>

  </div>

  <div class="container-fluid" style="margin-top:55vh">
    <div class="row">
  <?php include 'get_recommendations.php'; ?>

  <div class="col-md-2 offset-md-10 pr-4 text-center" style="position:fixed;bottom:50px;">
<div class="card" style="width:8rem;height:6rem;background-color:#f0f0f0;">
  <div class="card-body">
<div>
<img src="basket.png" style="width:40px;height:50px;"><br>
<a style="color:black;text-decoration:none;" href="https://app.powerbi.com/reportEmbed?reportId=aa47e733-e210-477c-b3bb-b42f48c26820&autoAuth=true&ctid=326f146c-7702-4760-8024-10e0b015cdfd&config=eyJjbHVzdGVyVXJsIjoiaHR0cHM6Ly93YWJpLWluZGlhLXdlc3QtcmVkaXJlY3QuYW5hbHlzaXMud2luZG93cy5uZXQvIn0%3D"
>Basket</a>
</div>
</div></div></div>



</div>

  </div>


  <script type="text/javascript">
    $(document).ready(function() {

      AOS.init();
      // on chart hover, add shadow
      $( ".card" ).hover(
       function() {
         $(this).addClass('shadow-lg').css('cursor', 'pointer');
       }, function() {
         $(this).removeClass('shadow-lg');
       }
      );

      // hiding both arrows at start, this is used in get_indicator function in later stages
      $('#canvas_for_indicator_down').hide();
      $('#canvas_for_indicator_up').hide();

      Chart.defaults.global.legend.labels.usePointStyle = true;
      get_indicator();
      get_doughnut_sales();
      get_doughnut_prediction();
      get_linechart();
    })

    // get get_indicator
    function get_indicator() {
      $.ajax({
        url: "http://localhost:8080/sales_pred_nextdays.php",
        method: "GET",
        success: function(data) {
          data = JSON.parse(data);
          console.log(data);
          var arrow_decider_value = data[0]['wk_tgt_sales_plus_prediction_next_days'];
          console.log(arrow_decider_value);
          // if arrow_decider_value is positive , show red, otherwise show green
          if (arrow_decider_value > 0) {
            console.log('showing down arrow');
            $('#canvas_for_indicator_down').show();
            $('#canvas_for_indicator_up').hide();
          } else {
            console.log('showing up arrow');
            $('#canvas_for_indicator_down').hide();
            $('#canvas_for_indicator_up').show();
          }
          $('#wk_tgt_sales_plus_prediction_next_days').append("$").append((arrow_decider_value / 1000).toFixed(2)).append("K");
          $('#week_target').append((data[0]['week_target'] / 1000).toFixed(2)).append("K");
        }
      });
    }
    // for doughnut_sales

    function get_doughnut_sales() {
      $.ajax({
        url: "http://localhost:8080/metrics_frontpage.php",
        method: "GET",
        success: function(data) {
          data = JSON.parse(data);
          console.log(data);

          var sales_till_now = [];
          var sales_target_gap = [];
          for (var i = 0; i < data.length; i++) {
            sales_till_now.push(data[i]['sales_till_now']);
            sales_target_gap.push(data[i]['sales_target_gap']);
          }
          $('#sales_till_now_value').append((sales_till_now[0] / 1000).toFixed(2)).append("K");
          var ctx = document.getElementById("canvas_for_doughnut_sales");

          var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {

              datasets: [{
                //label: [sales_till_now,  prediction_till_now],
                data: [sales_till_now, sales_target_gap],
                text: "ff",
                backgroundColor: [

                  '#008000', '#DCDCDC'
                ],
                borderColor: [

                  '#008000'
                ],
                borderWidth: 1
              }],
              labels: [sales_till_now, "Sales_Till_Now"]
            },
            options: {
              cutoutPercentage: 95,
              rotation: 1 * Math.PI,
              circumference: 2 * Math.PI,
              legend: {
                display: false
              }
            }
          });
        }
      });
    };
    //doughnut for prediction_deficit
    function get_doughnut_prediction() {
      $.ajax({
        url: "http://localhost:8080/metrics_frontpage.php",
        method: "GET",
        success: function(data) {
          data = JSON.parse(data);
          console.log(data);

          var prediction_this_week = [];
          var week_target = [];
          for (var i = 0; i < data.length; i++) {
            prediction_this_week.push(data[i]['prediction_this_week']);
            week_target.push(data[i]['week_target']);
          }
          $('#prediction_this_week_value').append((prediction_this_week[0] / 1000).toFixed(2)).append("K");

          var prediction_target_gap = week_target - prediction_this_week;
          var ctx = document.getElementById("canvas_for_doughnut_prediction");

          var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {

              datasets: [{
                //label: [sales_till_now,  prediction_till_now],
                data: [prediction_this_week, prediction_target_gap],
                text: "ff",
                backgroundColor: [

                  '#008000', '#DCDCDC'
                ],
                borderColor: [

                  '#008000'
                ],
                borderWidth: 1
              }],
              labels: [prediction_this_week, "prediction_this_week"]
            },
            options: {
              cutoutPercentage: 95,
              rotation: 1 * Math.PI,
              circumference: 2 * Math.PI,
              legend: {
                display: false
              }
            }
          });
        }
      });
    };
    //Barchart code begins here
    function get_linechart() {
      $.ajax({
        url: "http://localhost:8080/comparison_graph.php",
        method: "GET",
        success: function(data) {
          data = JSON.parse(data);
          console.log(data);
          var todays_date = new Date();
          console.log(todays_date);
          var todays_day_number = todays_date.getDay();
          console.log(todays_day_number);
          var day_name = [];
          var sales = [];
          var prediction_this_week = [];
          var sales_last_year_same_week = [];
          for (var i = 0; i < data.length; i++) {
            day_name.push(data[i]['wk_day']);
            prediction_this_week.push(data[i]['prediction_this_week']);
            sales_last_year_same_week.push(data[i]['sales_last_year_same_week']);
          }

          for (var i = 0; i < todays_day_number; i++) {
              sales.push(data[i]['sales']);
            }
          console.log(day_name);
          console.log(sales);
          console.log(prediction_this_week);
          console.log(sales_last_year_same_week);
          var ctx = $("#canvas_for_linechart");

          var barGraph = new Chart(ctx, {
            type: 'line',

            data: {
              datasets: [{
                  label: 'Sales',
                  fill: false,
                  data: sales,
                  borderColor: [
                    '#006400'
                  ],
                  backgroundColor: "rgba(0,0,0,0.1)",
                  borderWidth: 2,
                  lineTension: 0,
                  pointBorderColor: '#006400', // blue point border
                  pointBackgroundColor: '#006400', // wite point fill
                  pointBorderWidth: 1, // point border width
                  order: 1
                }, {
                  label: 'Prediction',
                  fill: false,
                  data: prediction_this_week,
                  borderColor: [
                    '#FF7F50'
                  ],
                  borderDash: [3,7],
                  lineTension: 0,
                  type: 'line',
                  borderWidth: 2,
                  pointBorderColor: '#FF7F50', // blue point border
                  pointBackgroundColor: '#FF7F50', // wite point fill
                  pointBorderWidth: 1, // point border width
                  order: 2,
                },
                {
                  label: 'Last Year Same Week',
                  fill: false,
                  data: sales_last_year_same_week,
                  borderColor: [
                    '#0000FF'
                  ],
                  lineTension: 0,
                  type: 'line',
                  borderWidth: 2,
                  pointBorderColor: '#0000FF', // blue point border
                  pointBackgroundColor: '#0000FF', // wite point fill
                  pointBorderWidth: 1, // point border width
                  order: 3,

                }
              ],
              labels: day_name
            },
            options: {
              responsive:true,
              maintainAspectRatio:false,
              legend: {
                labels: {
                  // usePointStyle: true, // show legend as point instead of box
                  fontSize: 10 // legend point size is based on fontsize
                },
                horizontalAlign: "left"
              },
              scales: {
                xAxes: [{
                  gridLines: {
                    display: false
                  }
                  // ,
                  // scaleLabel: {
                  //   display: true,
                  //   labelString: "Week Day",
                  //   fontColor: "black"
                  // }
                }],
                yAxes: [{
                  gridLines: {
                    display: true,
                    color: 'rgba(0, 0, 0, 0.1)'
                  },
                  ticks: {
                    min: 0,
                    max: 50000,
                    stepSize: 10000,
                    beginAtZero: false,
                    callback: function (value, index, values) {
                               if (parseInt(value) >= 1000) {
                              return '$' + value/1000 + 'K'  ;
                              } else {
                           return value;
                            }
                            }
                          }
                }]
              },
              elements: {
                point: {
                  radius: 0
                }
              }
            }
          });
        },
        error: function(data) {
          console.log(data);
        }
      });
    };
  </script>

</body>

</html>
