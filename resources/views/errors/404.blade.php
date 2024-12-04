@extends('admin_layout404')

@section('content')
<div class="p-body-main                             
<div uix_component="MainContent" class="p-body-content">
    <!-- ABOVE MAIN CONTENT -->
    <div class="p-body-main  ">
        <div uix_component="MainContent" class="p-body-content">
            <!-- ABOVE MAIN CONTENT -->
            <div class="p-body-pageContent">
                <div class="blockMessage">
                    <meta http-equiv="refresh" content="5; url={{ url('/') }}">
                    <center><b>Trang bạn yêu cầu không tìm thấy<br><br>
                            Hệ thống sẽ tự động chuyển về trang chủ trong <span id="countdown">5</span> giây...</b>
                    </center>
                </div>
            </div>
            <!-- BELOW MAIN CONTENT -->
        </div>
    </div>
    <script>
        var timeleft = 5;
        var downloadTimer = setInterval(function() {
            if (timeleft <= 0) {
                clearInterval(downloadTimer);
                document.getElementById("countdown").innerHTML = "Finished";
            } else {
                document.getElementById("countdown").innerHTML = timeleft;
            }
            timeleft -= 1;
        }, 1000);
    </script>
    
    <!-- BELOW MAIN CONTENT -->
</div>
</div>

@endsection
