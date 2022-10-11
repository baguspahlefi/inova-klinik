<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="styles/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src=" {{url('styles/assets/demo/chart-bar-demo.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="styles/js/datatables-simple-demo.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var january_pasien = <?php echo($january_pasien)?> ;
    var february_pasien = <?php echo($february_pasien)?> ;
    var march_pasien = <?php echo($march_pasien)?> ;
    var april_pasien = <?php echo($april_pasien)?> ;
    var may_pasien = <?php echo($may_pasien)?> ;
    var june_pasien = <?php echo($june_pasien)?> ;
    var july_pasien = <?php echo($july_pasien)?> ;
    var august_pasien = <?php echo($august_pasien)?> ;
    var september_pasien = <?php echo($september_pasien)?> ;
    var october_pasien = <?php echo($october_pasien)?> ;
    var november_pasien = <?php echo($november_pasien)?> ;
    var desember_pasien = <?php echo($desember_pasien)?> ;
      
    const labels = [
      'January',
      'February',
      'March',
      'April',
      'May',
      'June',
      'Juli',
      'Agustus',
      'September',
      'October',
      'November',
      'Desember'
    ];
  
    const data = {
      labels: labels,
      datasets: [{
        label: 'My First dataset',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [
        january_pasien, 
        february_pasien,
        march_pasien, 
        april_pasien, 
        may_pasien,
        june_pasien,
        july_pasien,
        august_pasien,
        september_pasien,
        october_pasien,
        november_pasien,
        desember_pasien
        ],
      }]
    };
  
    const config = {
      type: 'line',
      data: data,
      options: {}
    };
  </script>
  
  <script>
      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );
  </script>



//Bar Graph
<script>
var january_tagihan = <?php echo($january_tagihan)?> ;
var february_tagihan = <?php echo($february_tagihan)?> ;
var march_tagihan = <?php echo($march_tagihan)?> ;
var april_tagihan = <?php echo($april_tagihan)?> ;
var may_tagihan = <?php echo($may_tagihan)?> ;
var june_tagihan = <?php echo($june_tagihan)?> ;
var july_tagihan = <?php echo($july_tagihan)?> ;
var august_tagihan = <?php echo($august_tagihan)?> ;
var september_tagihan = <?php echo($september_tagihan)?> ;
var october_tagihan = <?php echo($october_tagihan)?> ;
var november_tagihan = <?php echo($november_tagihan)?> ;
var desember_tagihan = <?php echo($desember_tagihan)?> ;

var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "Desember"],
    datasets: [{
      label: "Revenue",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: [january_tagihan, february_tagihan, march_tagihan, april_tagihan, may_tagihan, june_tagihan,july_tagihan,august_tagihan,september_tagihan,october_tagihan,november_tagihan,desember_tagihan],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 6
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 15000,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

</script>



