@extends('admin_layout')
@section('admin_content')
    <h3>Biểu đồ nạp tiền</h3>
    <br>
    <ul class="nav nav-pills ranges">
        <li class="active"><a href="#" data-range='7'>7 Days</a></li>
        <li><a href="#" data-range='30'>30 Days</a></li>
        <li><a href="#" data-range='60'>60 Days</a></li>
        <li><a href="#" data-range='90'>90 Days</a></li>
    </ul>

    <div id="stats-container" style="height: 250px;"></div>
    @php
        $users = DB::table('tbl_payment')
            ->select(DB::raw('sum(so_tien) AS count'))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw('Month(created_at)'))
            ->pluck('count');
        
    @endphp
    <h3>Biểu đồ nạp tiền theo tháng</h3>
    <br>
    <div id="container_mothr" style="height: 250px;"></div>

    <script>
        $(function() {

            // Create a function that will handle AJAX requests
            function requestData(days, chart) {
                $.ajax({
                        type: "GET",
                        dataType: 'json',
                        url: "./api-payment", // This is the URL to the API
                        data: {
                            days: days
                        }
                    })
                    .done(function(data) {
                        // When the response to the AJAX request comes back render the chart with new data
                        chart.setData(data);
                    })
                    .fail(function() {
                        // If there is no communication between the server, show an error
                        alert("error occured");
                    });
            }

            var chart = Morris.Bar({
                // ID of the element in which to draw the chart.
                element: 'stats-container',
                data: [0, 0], // Set initial data (ideally you would provide an array of default data)
                xkey: ['date'], // Set the key for X-axis
                ykeys: ['value'], // Set the key for Y-axis
                labels: ['Số tiền nạp'] // Set the label when bar is rolled over
            });

            // Request initial data for the past 7 days:
            requestData(7, chart);

            $('ul.ranges a').click(function(e) {
                e.preventDefault();

                // Get the number of days from the data attribute
                var el = $(this);
                days = el.attr('data-range');

                // Request the data and render the chart using our handy function
                requestData(days, chart);
            })
        });
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        var users = @php echo json_encode($users); @endphp;

        var users = users.map(Number);

        Highcharts.chart('container_mothr', {
            title: {
                text: 'Biểu đồ nạp tiền 2024'
            },
            xAxis: {
                categories: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12']
            },
            yAxis: {
                title: {
                    text: 'Biểu đồ nạp tiền trong năm'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'Nạp tiền',
                data: users
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    </script>
@endsection
