<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

    google.charts.load('current', {'packages':['corechart']});
    // calllback drawChart
    google.charts.setOnLoadCallback(drawChartgender);
    // callback drawChart piechart_study
    google.charts.setOnLoadCallback(drawChartstudy);
    // callback drawChart piechart_job
    google.charts.setOnLoadCallback(drawChartjob);
    // callback drawChart piechart_income
    google.charts.setOnLoadCallback(drawChartincome);
    // callback drawChart piechart_inredient
    google.charts.setOnLoadCallback(drawChartinredient);
    // callback drawChart piechart_type
    google.charts.setOnLoadCallback(drawCharttype);
    // callback drawChart piecahrt_amount
    google.charts.setOnLoadCallback(drawChartamount);
    // callback drawChart piechart_vitamin
    google.charts.setOnLoadCallback(drawChartvitamin);
    
    function drawChartgender()
    {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Summary per gender'],
            <?php echo $data_gender; ?>
        ]);

        var options = {
            title: '',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_gender'));
        chart.draw(data, options);
    }

    function drawChartstudy()
    {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Summary per Study'],
            <?php echo $data_study; ?>
        ]);
        var options = {
            title: '',
            is3D: true,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart_study'));
        chart.draw(data, options);
    }

    function drawChartjob()
    {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Summary per job'],
            <?php echo $data_job; ?>
        ]);

        var options = {
            title: '',
            is3D: true,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart_job'));
        chart.draw(data, options);
    }

    function drawChartincome()
    {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Summary per income'],
            <?php echo $data_income; ?>
        ]);

        var options = {
            title: '',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_income'));
        chart.draw(data, options);
    }

    function drawChartinredient()
    {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Summary per inredient'],
            <?php echo $data_inredient; ?>
        ]);

        var options = {
            title: '',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_inredient'));
        chart.draw(data, options);
    }

    function drawCharttype()
    {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Summery per type'],
            <?php echo $data_type; ?>
        ]);

        var options = {
            title: '',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_type'));
        chart.draw(data, options);
    }

    function drawChartamount()
    {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Summery per amount'],
            <?php echo $data_amount; ?>
        ]);

        var options = {
            title: '',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_amount'));
        chart.draw(data, options);
    }

    function drawChartvitamin()
    {
        var data = google.visualization.arrayToDataTable([
            ['Task', 'Summery per vitamin'],
            <?php echo $data_vitamin; ?>
        ]);

        var options = {
            title: '',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_vitamin'));
        chart.draw(data, options);
    }
</script>