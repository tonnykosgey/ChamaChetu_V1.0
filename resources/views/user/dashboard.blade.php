@extends('Layouts/master')

@section('content')
<h5 class="mb-3" ><strong>Dashboard</strong></h5>
 <!--Dashboard Summary widget-->
 <div class="mt-1 mb-3 button-container">
    <div class="row pl-0">
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
            <div class="bg-white border shadow">
                <div class="p-2 text-center">
                    <h5 class="mb-0 mt-2 text-theme"><small><strong>Your Contribution</strong></small></h5>
                    <h1>Ksh 6,500</h1>
                </div>
                <div class="align-bottom">
                    <span id="incomeBar"></span>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
            <div class="bg-white border shadow">
                <div class="p-2 text-center">
                    <h5 class="mb-0 mt-2 text-danger"><small><strong>Total Contribution</strong></small></h5>
                    <h1>Ksh 110,850</h1>
                </div>
                <div class="align-bottom">
                    <span id="expensesBar"></span>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
            <div class="bg-white border shadow">
                <div class="p-2 text-center">
                    <h5 class="mb-0 mt-2 text-green"><small><strong>Gross Profit</strong></small></h5>
                    <h1>Ksh 25,650</h1>
                </div>
                <div class="align-bottom">
                    <span id="profitBar"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Dashboard widget-->



<div class="row pl-0 mt-3">
    <!--Dashboard widget Contacts-->
    <div class="col-lg-4 col-md-4 col-sm-4 card-pro mb-3">
        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title bc-header">Members</h5>

                <div class="media border-top border-bottom pt-1">
                    <img class="align-self-center mr-2 rounded-circle mb-1" src="assets/img/client-img2.png" width="40px" height="40px" alt="Generic placeholder image">
                    <div class="media-body">
                        <p class="bc-description mt-2">Sarah Reeves <span class="pull-right"><i class="fa fa-pencil"></i></span></p>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="media border-bottom pt-1">
                    <img class="align-self-center mr-2 rounded-circle mb-1" src="assets/img/client-img3.png" width="40px" height="40px" alt="Generic placeholder image">
                    <div class="media-body">
                        <p class="bc-description mt-2">Hermoine Potter <span class="pull-right"><i class="fa fa-pencil"></i></span></p>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="media border-bottom pt-1">
                    <img class="align-self-center mr-2 rounded-circle mb-1" src="assets/img/client-img4.png" width="40px" height="40px" alt="Generic placeholder image">
                    <div class="media-body">
                        <p class="bc-description mt-2">Max Longbottom <span class="pull-right"><i class="fa fa-pencil"></i></span></p>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="media border-bottom pt-1">
                    <img class="align-self-center mr-2 rounded-circle mb-1" src="assets/img/client-img5.png" width="40px" height="40px" alt="Generic placeholder image">
                    <div class="media-body">
                        <p class="bc-description mt-2">Slyvester Jake <span class="pull-right"><i class="fa fa-pencil"></i></span></p>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="media border-bottom pt-1">
                    <img class="align-self-center mr-2 rounded-circle mb-1" src="assets/img/profile.jpg" width="40px" height="40px" alt="Generic placeholder image">
                    <div class="media-body">
                        <p class="bc-description mt-2">Adam Hussein <span class="pull-right"><i class="fa fa-pencil"></i></span></p>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="media border-bottom pt-1">
                    <img class="align-self-center mr-2 rounded-circle mb-1" src="assets/img/client-img2.png" width="40px" height="40px" alt="Generic placeholder image">
                    <div class="media-body">
                        <p class="bc-description mt-2">Stephenie Mark <span class="pull-right"><i class="fa fa-pencil"></i></span></p>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="media pt-1">
                    <img class="align-self-center mr-2 rounded-circle mb-1" src="assets/img/client-img3.png" width="40px" height="40px" alt="Generic placeholder image">
                    <div class="media-body">
                        <p class="bc-description mt-2">Mariya John <span class="pull-right"><i class="fa fa-pencil"></i></span></p>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--Dashboard widget Contacts-->

    <!--Dashboard Profile card-->
    <div class="col-lg-4 col-md-4 col-sm-4 card-pro mb-3">
        <div class="card shadow">
            <div class="card-body">
                <div class="media">
                    <img class="align-self-center mr-3 rounded-circle" src="assets/img/home-right-admin-img.png" width="80px" height="80px" alt="Generic placeholder image">
                    <div class="media-body">
                        <h6 class="mt-0"><strong>Rasheed Rayhan</strong></h6>
                        <p class="mb-3 text-info"><strong>Web designer</strong></p>
                        <button type="button" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Follow
                        </button>
                    </div>
                </div>

                <div class="mt-4 mb-4">
                    <div class="row user-about">
                        <div class="col-sm-4 col-4 border-right">
                            <h4>20</h4>
                            <p>Photos</p>
                        </div>
                        <div class="col-sm-4 col-4">
                            <h4>31</h4>
                            <p>Videos</p>
                        </div>
                        <div class="col-sm-4 col-4 border-left">
                            <h4>120</h4>
                            <p>Tasks</p>
                        </div>
                    </div>
                </div>

                <div class="dropdown-divider"></div>

                <p class="mb-3 mt-3 text-center p-space">
                    Lorem ipsum dolor sit ametetur adipisicing elit, sed do eiusmod tempor incididunt adipisicing elit, sed do
                </p>

                <div class="flex-social mt-4 mb-3">
                    <a href=""><i class="fa fa-facebook-square"></i></a>
                    <a href=""><i class="fa fa-google-plus-square"></i></a>
                    <a href=""><i class="fa fa-spotify"></i></a>
                    <a href=""><i class="fa fa-yahoo-square"></i></a>
                    <a href=""><i class="fa fa-twitter-square"></i></a>
                    <a href=""><i class="fa fa-linkedin-square"></i></a>
                    <a href=""><i class="fa fa-pinterest-square"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--Dashboard Profile card-->

    <div class="col-lg-4 col-md-4 col-sm-4 card-calendar mb-3">
        <!--Calendar-->
        <div class="calendar-wrapper panel-head-primary shadow">
            <div id="calendar" class="calendar-box"></div>
            <div class="dropdown-divider"></div>
            <div class="time pl-3 pr-3 pb-1">
                <h6 class="p-typo"><strong>Meet a friend</strong> <span class="badge badge-success pull-right">10:00am</span></h6>
            </div>
        </div>
        <!--Calendar-->

        <div class="card text-white bg-success mb-3 mt-2 shadow">
            <div class="card-body">
                <h6 class="card-title mb-1">Notification</h6>
                <p class="card-text small text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>

</div>

<!--Latest projects-->
<div class="row mt-3">
    <div class="col-sm-12">
        <div class="shadow panel-head-primary">
            <h5 class="text-center mt-3 mb-3"><strong>Latest Projects</strong></h5>
            <div class="table-responsive">
                <table class="table table-striped" id="project_table">
                    <thead>
                        <tr>
                            <th>Project id</th>
                            <th>Project name</th>
                            <th>Start date</th>
                            <th>Due date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01</td>
                            <td>Web design</td>
                            <td>13 Feb, 2018</td>
                            <td>10 June, 2018</td>
                            <td><span class="badge badge-success">Completed</span></td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>App development</td>
                            <td>03 July, 2018</td>
                            <td>09 November, 2018</td>
                            <td><span class="badge badge-warning">Pending</span></td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>App prototyping</td>
                            <td>31 January, 2018</td>
                            <td>02 September, 2018</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>Web development</td>
                            <td>23 October, 2018</td>
                            <td>15 December, 2018</td>
                            <td><span class="badge badge-info">Negotiations</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
