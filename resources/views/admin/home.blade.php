<div class="panel-header panel-header-lg">
    <canvas id="chartbigDashboardChart"></canvas>

    <script>

        var ctx = document.getElementById('chartbigDashboardChart').getContext('2d');

        var chart = new Chart(ctx,{
            type:'line',
            data:[100,200,300],
            label:['Jan','February','March'],
            options:{
                title:{
                    display: true,
                    text:'Attendance Report'
                }
            }

        })


    </script>
</div>







<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-stats">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="statistics">
                                <div class="info">
                                    <div class="icon icon-primary">
                                        <i class="now-ui-icons users_single-02"></i>
                                    </div>
                                    <h3 class="info-title">{{\App\Student::all()->count()}}</h3>
                                    <h6 class="stats-title">Students</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="statistics">
                                <div class="info">
                                    <div class="icon icon-success">
                                        <i class="now-ui-icons users_single-02"></i>
                                    </div>
                                    <h3 class="info-title">{{\App\Teacher::all()->count()}}</h3>
                                    <h6 class="stats-title">Teachers</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="statistics">
                                <div class="info">
                                    <div class="icon icon-info">
                                        <i class="now-ui-icons users_single-02"></i>
                                    </div>
                                    <h3 class="info-title">{{\App\Student::all()->where('gender','==','0')->count()}}</h3>
                                    <h6 class="stats-title">Males</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="statistics">
                                <div class="info">
                                    <div class="icon icon-danger">
                                        <i class="now-ui-icons users_single-02"></i>
                                    </div>
                                    <h3 class="info-title">{{\App\Student::all()->where('gender','==','1')->count()}}</h3>
                                    <h6 class="stats-title">Females</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">
                        Fees Collection: Today
                    </h6>
                </div>

                <div class="card-body">

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title">
                        Events Today
                    </h6>
                </div>

                <div class="card-body">

                </div>



            </div>
        </div>
    </div>








</div>
