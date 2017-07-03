/**
 * Created by Johan on 6/21/2017.
 */

/** email statistics pie chart  **/
google.charts.load('current', {'packages':['corechart']});
google.charts.load('current', {'packages':['bar']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    //Statistics pie chart
    var data = google.visualization.arrayToDataTable([
        ['Task', 'Hours per Day'],
        ['Open',     15],
        ['Bounce',      2],
        ['Unsubscribe',  2]

    ]);

    var options = {
        legend: {position: 'none'}
    };

    var chart1 = new google.visualization.PieChart(document.getElementById('piechart'));

    chart1.draw(data, options);

    //behaviours area chart
    var data = google.visualization.arrayToDataTable([
        ['Time', 'Open', 'Click', 'Click Second Time'],
        ['9:00AM',  1000,      400, 200],
        ['10:00AM',  1170,      460, 100],
        ['11:00AM',  660,       1120, 50],
        ['12:00PM',  1030,      540, 150],
        ['1:00PM',  660,       1120, 50],
        ['2:00PM',  660,       1120, 50],
        ['3:00PM',  660,       1120, 50],
        ['4:00PM',  660,       1120, 50]
    ]);

    var options = {
        hAxis: {title: ' ',  titleTextStyle: {color: '#fff'}},
        vAxis: {minValue: 0,
            ticks: [0, 100, 200, 300, 400, 500, 600, 700, 800, 1000]},
        legend: {position: 'none'}
    };

    var chart2 = new google.visualization.AreaChart(document.getElementById('chart_div'));
    chart2.draw(data, options);

    //volume bar chart
    var data = google.visualization.arrayToDataTable([
        ['Month', 'Premium', 'Compact'],
        ['Jan', 1000, 400],
        ['Feb', 1170, 460],
        ['Mar', 660, 1120],
        ['Apr', 1030, 540],
        ['Mai', 1030, 540],
        ['Jun', 1030, 540],
        ['Jul', 1030, 540],
        ['Aug', 1030, 540],
        ['Sep', 1030, 540],
        ['Oct', 1030, 540],
        ['Nov', 1030, 540],
        ['Dev', 1030, 540]
    ]);

    var options = {
        hAxis: {title: ' ',  titleTextStyle: {color: '#fff'}},
        legend: {position: 'none'}



    };

    var chart3 = new google.charts.Bar(document.getElementById('columnchart_material'));

    chart3.draw(data, google.charts.Bar.convertOptions(options));
}

