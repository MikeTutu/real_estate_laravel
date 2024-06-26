@extends('layouts.user_app')

@section('title','User - Dashboard')

@section('header')
<x-user.header/>
@endsection

@section('body')

<div class="container">
    <x-user.navigation nav="dashboard"/>
    <div class="dashboard-details">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="card dash-cards">
                    <div class="card-body">
                        <div class="dash-top-content">
                            <div class="dashcard-img">
                                <img src="assets/img/icons/verified.svg" class="img-fluid" alt>
                            </div>
                        </div>
                        <div class="dash-widget-info">
                            <h6>Active Listing</h6>
                            <h3 class="counter">500</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="card dash-cards">
                    <div class="card-body">
                        <div class="dash-top-content">
                            <div class="dashcard-img">
                                <img src="assets/img/icons/rating.svg" class="img-fluid" alt>
                            </div>
                        </div>
                        <div class="dash-widget-info">
                            <h6>Total Reviews</h6>
                            <h3>15230</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="card dash-cards">
                    <div class="card-body">
                        <div class="dash-top-content">
                            <div class="dashcard-img">
                                <img src="assets/img/icons/chat.svg" class="img-fluid" alt>
                            </div>
                        </div>
                        <div class="dash-widget-info">
                            <h6>Messages</h6>
                            <h3>15</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="card dash-cards">
                    <div class="card-body">
                        <div class="dash-top-content">
                            <div class="dashcard-img">
                                <img src="assets/img/icons/bookmark.svg" class="img-fluid" alt>
                            </div>
                        </div>
                        <div class="dash-widget-info">
                            <h6>Bookmark</h6>
                            <h3>30</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row dashboard-info">
            <div class="col-lg-6 d-flex">
                <div class="card dash-cards w-100">
                    <div class="card-header">
                        <h4>Page Views</h4>
                        <div class="card-dropdown">
                            <ul>
                                <li class="nav-item dropdown has-arrow logged-item">
                                    <a href="#" class="dropdown-toggle pageviews-link"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>This week</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="javascript:void();">Next Week</a>
                                        <a class="dropdown-item" href="javascript:void()">Last Month</a>
                                        <a class="dropdown-item" href="javascript:void()">Next Month</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="review-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <div class="card dash-cards w-100">
                    <div class="card-header">
                        <h4>Visitor Review</h4>
                        <div class="card-dropdown">
                            <ul>
                                <li class="nav-item dropdown has-arrow logged-item">
                                    <a href="#" class="dropdown-toggle pageviews-link"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>All Listing</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="javascript:void(0)">Next Week</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Last Month</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Next Month</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="review-list">
                            <li class="review-box">
                                <div class="review-profile">
                                    <div class="review-img">
                                        <img src="assets/img/profiles/avatar-11.jpg" class="img-fluid"
                                            alt="img">
                                    </div>
                                </div>
                                <div class="review-details">
                                    <h6>Joseph</h6>
                                    <div class="rating">
                                        <div class="rating-star">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                        <div><i class="fa-sharp fa-solid fa-calendar-days"></i> 4 months ago
                                        </div>
                                        <div>by: Demo Test</div>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. It has been the industry's standard dummy.</p>
                                </div>
                            </li>
                            <li class="review-box">
                                <div class="review-profile">
                                    <div class="review-img">
                                        <img src="assets/img/profiles/avatar-01.jpg" class="img-fluid"
                                            alt="img">
                                    </div>
                                </div>
                                <div class="review-details">
                                    <h6>Dev</h6>
                                    <div class="rating">
                                        <div class="rating-star">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                        </div>
                                        <div><i class="fa-sharp fa-solid fa-calendar-days"></i> 4 months ago
                                        </div>
                                        <div>by: Demo Test</div>
                                    </div>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. It has been the industry's standard dummy.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection