@extends('Layouts/master')

@section('content')
<h5 class="mb-0" ><strong>User profile</strong></h5>
<span class="text-secondary">Pages <i class="fa fa-angle-right"></i> User profile</span>

<div class="row mt-3">
    <div class="col-sm-12">
        <!--User profile header-->
        <div class="mt-1 mb-3 button-container bg-white border shadow-sm">
            <div class="profile-bg p-5">
                <img src="assets/img/jd-150.png" height="125px" width="125px" class="rounded-circle shadow profile-img" />
            </div>
            <div class="profile-bio-main container-fluid">
                <div class="row">
                    <div class="col-md-5 offset-md-3 col-sm-12 offset-sm-0 col-12 bio-header">
                        <h3 class="mt-4">Mario Mendez</h3>
                        <span class="text-muted mt-0 bio-request">Senior Architect</span>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12 px-5 text-right pt-4 bio-comment">
                        <button type="button" class="btn btn-default">
                            <i class="far fa-comment"></i>
                        </button>
                        <button type="button" class="btn btn-theme">Request</button>
                    </div>
                </div>
            </div>
        </div>
        <!--/User profile header-->

    </div>
</div>

<div class="row mt-3">
    <!--User profile sidebar-->
    <div class="col-sm-12 col-md-4">
        <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">

            <div class="mb-3">
                <div class="row user-about">
                    <div class="col-sm-4 col-4 border-right text-center">
                        <h4>20</h4>
                        <p>Reviews</p>
                    </div>
                    <div class="col-sm-4 col-4 text-center">
                        <h4>31</h4>
                        <p>Clients</p>
                    </div>
                    <div class="col-sm-4 col-4 border-left text-center">
                        <h4>120</h4>
                        <p>Followers</p>
                    </div>
                </div>
            </div>

            <div class="dropdown-divider"></div>

            <div class="mb-3">
                <h6>Slogan</h6>
                <p class="p-typo">For awesome buildings and drawing plans, i am the best you can call on</p>
                <div class="text-right">
                    <button type="button" class="btn btn-theme">
                        <i class="fa fa-user-plus"></i> Follow
                    </button>
                </div>
            </div>

            <div class="dropdown-divider"></div>

            <div class="profile-gallery">

                <div class="mt-3 mb-3">
                    <h6>Gallery</h6>

                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" src="assets/img/7.jpg" alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="assets/img/gallery-img2.jpg" alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="assets/img/gallery-img3.jpg" alt="Card image cap">
                        </div>
                    </div>
                    <div class="card-group">
                        <div class="card">
                            <img class="card-img-top" src="assets/img/7.jpg" alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="assets/img/gallery-img2.jpg" alt="Card image cap">
                        </div>
                        <div class="card">
                            <img class="card-img-top" src="assets/img/gallery-img3.jpg" alt="Card image cap">
                        </div>
                    </div>

                    <div class="form-group text-right mt-2">
                        <a href="#" class="btn btn-theme text-white">View all</a>
                    </div>
                </div>

                <div class="dropdown-divider"></div>

                <div class="mt-3 mb-3">
                    <h6>Socials</h6>
                    <div class="text-center">
                        <div>
                            <button type="button" class="btn btn-theme icon-round shadow">
                                <i class="fa fa-facebook"></i>
                            </button>
                            <button type="button" class="btn btn-primary icon-round shadow">
                                <i class="fa fa-twitter"></i>
                            </button>
                            <button type="button" class="btn btn-danger icon-round shadow">
                                <i class="fa fa-pinterest"></i>
                            </button>
                            <button type="button" class="btn btn-info icon-round shadow">
                                <i class="fa fa-linkedin"></i>
                            </button>
                        </div>

                        <!--<button type="button" class="btn btn-secondary">
                            <i class="fa fa-user-plus"></i> Follow
                        </button>-->
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!--/User profile sidebar-->

    <!--User profile content-->
    <div class="col-sm-12 col-md-8">
        <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm custom-tabs">

            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-customContent" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home" data-toggle="tab" href="#custom-home" role="tab" aria-controls="nav-home" aria-selected="true">
                            <i class="fa fa-list-ul"></i> Feed
                    </a>
                    <a class="nav-item nav-link" id="nav-profile" data-toggle="tab" href="#custom-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                        <i class="fa fa-file-text-o"></i> Personal Info
                    </a>
                    <a class="nav-item nav-link" id="nav-contact" data-toggle="tab" href="#custom-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                        <i class="fa fa-paperclip"></i> Resume
                    </a>
                </div>
            </nav>

            <div class="tab-content py-3 px-3 px-sm-0" id="nav-customContent">
                <div class="tab-pane fade show active p-4" id="custom-home" role="tabpanel" aria-labelledby="nav-home">

                    <!--Single feed-->
                    <div class="feed-single mb-3">
                        <div class="media">
                            <img class="mr-3 rounded-circle" height="40px" width="40px" src="assets/img/John-doe.png" alt="Generic placeholder image">
                            <div class="media-body">
                                <h6 class="mt-1">Mario Mendez
                                    <small class="text-muted pl-2"><i class="fa fa-clock"></i> 10 hours</small>
                                    <small class="text-muted small pull-right"><i>sponsored</i> <i class="fa fa-bookmark-o pl-2"></i></small>

                                    <p class="clearfix"></p>
                                </h6>
                                <p>New update on my existing projects #portfolio #architecture <a href="#" class="text-theme">www.github.io/architect-mendez</a></p>

                                <div class="feed-footer">
                                    <span class="pr-3"><i class="fa fa-star"></i> 3</span>
                                    <span class="pr-3"><i class="fa fa-comment"></i> 2</span>
                                    <span class="pr-3"><i class="fa fa-share"></i></span>
                                    <span class="pl-3 pull-right"><i class="fa fa-ellipsis-h"></i></span>

                                    <p class="clearfix"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Single feed-->

                    <div class="dropdown-divider"></div>

                    <!--Single feed-->
                    <div class="feed-single mt-3 mb-3">
                        <div class="media">
                            <img class="mr-3 rounded-circle" height="40px" width="40px" src="assets/img/John-doe.png" alt="Generic placeholder image">
                            <div class="media-body">
                                <h6 class="mt-1 mb-2">Mario Mendez
                                    <small class="text-muted  pl-2"><i class="fa fa-clock"></i> 3 days</small>
                                    <small class="text-muted small pull-right"><i>sponsored</i> <i class="fa fa-bookmark-o  pl-2"></i></small>

                                    <p class="clearfix"></p>
                                </h6>

                                <div class="card shadow-sm">
                                    <div><img class="card-img-top" src="assets/img/headphones.jpeg" alt="Card image cap"></div>
                                    <div class="card-body">
                                        <h5 class="card-title mb-1">Architecture services</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p>
                                        <button type="button" class="btn btn-theme px-5 pull-right">HIRE</button>

                                        <p class="clearfix"></p>
                                    </div>
                                </div>

                                <div class="feed-footer">
                                    <span class="pr-3"><i class="fa fa-star"></i> 3</span>
                                    <span class="pr-3"><i class="fa fa-comment"></i> 2</span>
                                    <span class="pr-3"><i class="fa fa-share"></i></span>
                                    <span class="pl-3 pull-right"><i class="fa fa-ellipsis-h"></i></span>

                                    <p class="clearfix"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Single feed-->

                    <div class="dropdown-divider"></div>

                    <!--Single feed-->
                    <div class="feed-single mt-3 mb-3">
                        <div class="media">
                            <img class="mr-3 rounded-circle" height="40px" width="40px" src="assets/img/client-img2.png" alt="Generic placeholder image">
                            <div class="media-body">
                                <h6 class="mt-1 mb-2">Maria Burke
                                    <small class="text-muted  pl-2"><i class="fa fa-clock"></i> 4 days</small>
                                    <small class="text-muted small pull-right"><i>sponsored</i> <i class="fa fa-bookmark-o  pl-2"></i></small>
                                </h6>

                                <div class="card shadow-sm no-border">
                                    <div><img class="card-img-top" src="assets/img/tarred.jpeg" alt="Card image cap"></div>
                                    <div class="card-body">
                                        <blockquote class="blockquote">
                                            <p class="mb-0">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante".</p>
                                        </blockquote>
                                    </div>
                                </div>

                                <div class="feed-footer">
                                    <span class="pr-3"><i class="fa fa-star"></i> 3</span>
                                    <span class="pr-3"><i class="fa fa-comment"></i> 2</span>
                                    <span class="pr-3"><i class="fa fa-share"></i></span>
                                    <span class="pl-3 pull-right"><i class="fa fa-ellipsis-h"></i></span>

                                    <p class="clearfix"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Single feed-->

                </div>
                <!--/Feed tab-->

                <!--Personal info tab-->
                <div class="tab-pane fade p-4" id="custom-profile" role="tabpanel" aria-labelledby="nav-profile">
                    <div class="table-responsive mb-4">
                        <table class="table table-borderless table-striped m-0">
                            <tbody>
                                <tr>
                                    <th scope="row">Full Name</th>
                                    <td>Mario Mendez</td>
                                </tr>
                                <tr>
                                    <th scope="row">Gender</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th scope="row">Birth Date</th>
                                    <td>October 25th, 1990</td>
                                </tr>
                                <tr>
                                    <th scope="row">Marital Status</th>
                                    <td>Single</td>
                                </tr>
                                <tr>
                                    <th scope="row">Location</th>
                                    <td>New York, USA</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="dropdown-divider"></div>

                    <div class="mt-4 mb-4">
                        <h6 class="mb-2">Biography</h6>
                        <p class="p-typo">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
                        </p>
                        <p class="p-typo">
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <p class="p-typo">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
                        </p>
                    </div>

                </div>
                <!--/Personal info tab-->

                <!--Resume tab-->
                <div class="tab-pane fade p-4" id="custom-contact" role="tabpanel" aria-labelledby="nav-contact">

                    <div class="mb-5">
                        <h6 class="mb-2">Skills</h6>

                        <p class="mb-2 mt-3">Photoshop <span class="pull-right">70%</span></p>
                        <div class="progress mb-4" style="height: 7px;">
                            <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="70" style="width: 70%"  aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <p class="mb-2">Illustrator <span class="pull-right">65%</span></p>
                        <div class="progress mb-4" style="height: 7px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <p class="mb-2">Code Editor <span class="pull-right">85%</span></p>
                        <div class="progress mb-4" style="height: 7px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <p class="mb-2">Corel draw <span class="pull-right">55%</span></p>
                        <div class="progress mb-4" style="height: 7px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <div class="dropdown-divider"></div>

                    <div class="mt-5 mb-4">
                        <h6 class="mb-2">Projects</h6>
                        <table class="table table-striped" id="project_table">
                            <thead>
                                <tr>
                                    <th>Project name</th>
                                    <th>Start date</th>
                                    <th>Due date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Web design</td>
                                    <td>13 Feb, 2018</td>
                                    <td>10 June, 2018</td>
                                    <td><span class="badge badge-success">Completed</span></td>
                                </tr>
                                <tr>
                                    <td>App development</td>
                                    <td>03 July, 2018</td>
                                    <td>09 November, 2018</td>
                                    <td><span class="badge badge-warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td>App prototyping</td>
                                    <td>31 January, 2018</td>
                                    <td>02 September, 2018</td>
                                    <td><span class="badge badge-danger">Suspended</span></td>
                                </tr>
                                <tr>
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
    </div>
    <!--/User profile content-->
</div>


@endsection
