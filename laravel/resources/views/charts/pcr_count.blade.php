<canvas id="myChart"></canvas>
<script>

var date_legend =<?php echo $js_date_legend ?>;
var js_user_count =<?php echo $treated_datas[0] ?>;
var js_user_family_count =<?php echo  $treated_datas[1] ?>;
var js_staff_count =<?php echo  $treated_datas[2] ?>;
var js_staff_family_count =<?php echo  $treated_datas[3] ?>;

var user_count = Object.values(js_user_count);
var user_family_count = Object.values(js_user_family_count);
var staff_count = Object.values(js_staff_count);
var staff_family_count = Object.values(js_staff_family_count);

var xs = Object.keys(date_legend);

var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: xs,
        datasets: [{
            label: '入居者',
            data: user_count,
            backgroundColor: 'rgba(255, 99, 132, 0.5)',
            borderColor: 'rgba(255, 99, 132, 1)',
            borderWidth: 1
        },{
            label: '入居者同居人',
            data: user_family_count,
            backgroundColor: 'rgba(255, 206, 86, 0.5)',
            borderColor: 'rgba(255, 206, 86, 1)',
            borderWidth: 1
        },{
            label: 'スタッフ',
            data: staff_count,
            backgroundColor: 'rgba(75, 192, 192, 0.5)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        },{
            label: 'スタッフ同居人',
            data: staff_family_count,
            backgroundColor: 'rgba(54, 162, 235, 0.5)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            xAxes: [{
                stacked: true
            }],
            yAxes: [{
                stacked: true,
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>