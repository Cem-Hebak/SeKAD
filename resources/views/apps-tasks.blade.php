@extends('layouts.master')
@section('title') Dashboard @endsection

    @section('content')
        @component('components.breadcrumb')
            @slot('li_1') Dastone @endslot
            @slot('li_2') Apps @endslot
            @slot('li_3') Tasks @endslot
            @slot('title') Tasks @endslot
        @endcomponent

            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="apexchart-wrapper">
                                <div id="task_status" class="apex-charts"></div>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img class="me-3 rounded-circle thumb-xl" src="{{ URL::asset('assets/images/users/user-4.jpg') }}" alt="">
                                <div class="">
                                    <h5 class="mb-0">Robert Marshall</h5>
                                    <small class="text-muted">Project Manager</small>
                                    <ul class="list-unstyled list-inline my-1">
                                        <li class="list-inline-item me-0">
                                            <i class="mdi mdi-star text-warning font-18"></i>
                                        </li>
                                        <li class="list-inline-item me-0">
                                            <i class="mdi mdi-star text-warning font-18"></i>
                                        </li>
                                        <li class="list-inline-item me-0">
                                            <i class="mdi mdi-star text-warning font-18"></i>
                                        </li>
                                        <li class="list-inline-item me-0">
                                            <i class="mdi mdi-star text-warning font-18"></i>
                                        </li>
                                        <li class="list-inline-item me-0">
                                            <i class="mdi mdi-star-half text-warning font-18"></i>
                                        </li>
                                    </ul>
                                </div>
                                <p class="text-muted px-3">Contrary to popular belief, Lorem Ipsum is not simply random text.
                                    It has roots in a piece of classical Latin.
                                </p>
                                <div class="mb-3">
                                    <a href="#" class="me-3 text-warning">2843 Followers</a>
                                    <a href="#" class=" text-warning">295 Following</a>
                                </div>
                                <button type="button" class="btn btn-sm btn-soft-primary">More Detail</button>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="media mb-5">
                                <img src="assets/images/widgets/project3.jpg" alt="" class="thumb-lg rounded-circle">
                                <div class="media-body align-self-center text-truncate ms-3">
                                    <p class="text-muted mb-0 font-11 text-uppercase">Project</p>
                                    <h4 class="mt-0 mb-0 fw-semibold text-dark font-16">Payment App</h4>
                                </div><!--end media-body-->
                            </div>

                            <div class="d-flex justify-content-between">
                                <div>
                                    <span class="badge badge-light">UX/UI Design</span>
                                    <span class="badge badge-light">Python</span>
                                    <span class="badge badge-light">React</span>
                                </div>
                                <small class="fw-semibold font-13 align-self-center">last update 45min</small>
                            </div>
                            <div class="mt-2">
                                <div class="progress mt-3" style="height:5px;">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-4 text-center align-items-center">
                                    <h5 class="mb-0 fw-semibold font-20">5</h5>
                                    <p class="font-12 mb-1 text-muted">Assigned</p>
                                </div>
                                <div class="col-4 text-center align-items-center">
                                    <h5 class="mb-0 fw-semibold font-20">3</h5>
                                    <p class="font-12 mb-1 text-muted">Started</p>
                                </div>
                                <div class="col-4 text-center align-items-center">
                                    <h5 class="mb-0 fw-semibold font-20">7</h5>
                                    <p class="font-12 mb-1 text-muted">Completed</p>
                                </div>
                            </div>
                            <div class="mt-4 d-flex justify-content-between">
                                <p class="mb-0 fw-semibold">Start Date : <span class="text-muted  fw-normal ms-2">20 june 2019</span> </p>
                                <p class="mb-0 text-danger fw-semibold">Deadline : <span class="text-muted fw-normal ms-2">08 Aug 2019</span> </p>
                            </div>
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <h5>🏆 Dastone's availabel team members.</h5>
                        </li>
                        <li class="list-inline-item">
                            <img src="{{ URL::asset('assets/images/users/user-10.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                        </li>
                        <li class="list-inline-item">
                            <img src="{{ URL::asset('assets/images/users/user-9.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                        </li>
                        <li class="list-inline-item">
                            <img src="{{ URL::asset('assets/images/users/user-8.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                        </li>
                        <li class="list-inline-item">
                            <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                        </li>
                        <li class="list-inline-item">
                            <img src="{{ URL::asset('assets/images/users/user-4.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                        </li>
                        <li class="list-inline-item">
                            <a href="" class="avatar-box thumb-xs align-self-center">
                                <span class="avatar-title bg-soft-secondary rounded-circle font-13 fw-normal">+4</span>
                            </a>
                        </li>
                    </ul>
                </div><!--end col-->

                <div class="col-lg-6 text-end">
                    <div class="text-end">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <button type="button" class="btn btn-sm btn-soft-primary">Add New Task</button>
                            </li>
                        </ul>
                    </div>
                </div><!--end col-->
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="task-box">
                                <div class="task-priority-icon"><i class="fas fa-circle text-success"></i></div>
                                <p class="text-muted float-end">
                                    <span class="text-muted">01:33</span> /
                                    <span class="text-muted">9:30</span>
                                    <span class="mx-1">·</span>
                                    <span><i class="far fa-fw fa-clock"></i> June 06</span>
                                </p>
                                <h5 class="mt-0">Organic Farming</h5>
                                <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form.
                                </p>
                                <p class="text-muted text-end mb-1">15% Complete</p>
                                <div class="progress mb-4" style="height: 4px;">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="img-group">
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-1.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-7.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                    </div><!--end img-group-->
                                    <ul class="list-inline mb-0 align-self-center">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                <span class="text-muted fw-bold">15/100</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                <span class="text-muted fw-bold">3</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="ms-2" href="#">
                                                <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end task-box-->
                        </div><!--end card-body-->
                    </div><!--end card-->

                    <div class="card">
                        <div class="card-body">
                            <div class="task-box">
                                <div class="task-priority-icon"><i class="fas fa-circle text-secondary"></i></div>
                                <p class="text-muted float-end">
                                    <span class="text-muted">01:33</span> /
                                    <span class="text-muted">9:30</span>
                                    <span class="mx-1">·</span>
                                    <span><i class="far fa-fw fa-clock"></i> June 06</span>
                                </p>
                                <h5 class="mt-0">Transfer money</h5>
                                <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form.
                                </p>
                                <p class="text-muted text-end mb-1">50% Complete</p>
                                <div class="progress mb-4" style="height: 4px;">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="img-group">
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-2.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-7.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                    </div><!--end img-group-->
                                    <ul class="list-inline mb-0 align-self-center">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                <span class="text-muted fw-bold">25/50</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                <span class="text-muted fw-bold">7</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="ms-2" href="#">
                                                <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end task-box-->
                        </div><!--end card-body-->
                    </div><!--end card-->



                    <div class="card">
                        <div class="card-body">
                            <div class="task-box">
                                <div class="task-priority-icon"><i class="fas fa-check text-success"></i></div>
                                <p class="text-muted float-end">
                                    <span class="text-muted">01:20</span> /
                                    <span class="text-muted">1:30</span>
                                    <span class="mx-1">·</span>
                                    <span><i class="far fa-fw fa-clock"></i> June 06</span>
                                </p>
                                <h5 class="mt-0">Mobile Account Setting</h5>
                                <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form.
                                </p>
                                <p class="text-muted text-end mb-1">100% Complete</p>
                                <div class="progress mb-4" style="height: 4px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="img-group">
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-2.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-4.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-6.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                    </div><!--end img-group-->
                                    <ul class="list-inline mb-0 align-self-center">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                <span class="text-muted fw-bold">128/128</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                <span class="text-muted fw-bold">13</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="ms-2" href="#">
                                                <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end task-box-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="task-box">
                                <div class="task-priority-icon"><i class="fas fa-circle text-danger"></i></div>
                                <p class="text-muted float-end">
                                    <span class="text-danger">10:33</span> /
                                    <span class="text-danger">9:30</span>
                                    <span class="mx-1">·</span>
                                    <span><i class="far fa-fw fa-clock"></i> June 08</span>
                                </p>
                                <h5 class="mt-0">Book My World</h5>
                                <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form.
                                </p>
                                <p class="text-muted text-end mb-1">95% Complete</p>
                                <div class="progress mb-4" style="height: 4px;">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="img-group">
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-9.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-7.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                    </div><!--end img-group-->
                                    <ul class="list-inline mb-0 align-self-center">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                <span class="text-muted fw-bold">82/90</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                <span class="text-muted fw-bold">11</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="ms-2" href="#">
                                                <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end task-box-->
                        </div><!--end card-body-->
                    </div><!--end card-->

                    <div class="card">
                        <div class="card-body">
                            <div class="task-box">
                                <div class="task-priority-icon"><i class="fas fa-circle text-info"></i></div>
                                <p class="text-muted float-end">
                                    <span class="badge badge-danger me-2">Stop</span>
                                    <span class="text-muted">01:33</span> /
                                    <span class="text-muted">9:30</span>
                                    <span class="mx-1">·</span>
                                    <span><i class="far fa-fw fa-clock"></i> June 18</span>
                                </p>
                                <h5 class="mt-0">Body Care</h5>
                                <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form.
                                </p>
                                <p class="text-muted text-end mb-1">37% Complete</p>
                                <div class="progress mb-4" style="height: 4px;">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 37%;" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="img-group">
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-8.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-5.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-7.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                    </div><!--end img-group-->
                                    <ul class="list-inline mb-0 align-self-center">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                <span class="text-muted fw-bold">55/150</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                <span class="text-muted fw-bold">8</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="ms-2" href="#">
                                                <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end task-box-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="task-box">
                                <div class="task-priority-icon"><i class="fas fa-circle text-info"></i></div>
                                <p class="text-muted float-end">
                                    <span class="badge badge-warning me-2">Panding</span>
                                    <span class="text-muted">01:33</span> /
                                    <span class="text-muted">9:30</span>
                                    <span class="mx-1">·</span>
                                    <span><i class="far fa-fw fa-clock"></i> June 18</span>
                                </p>
                                <h5 class="mt-0">New GPS System</h5>
                                <p class="text-muted mb-1">There are many variations of passages of Lorem Ipsum available,
                                    but the majority have suffered alteration in some form.
                                </p>
                                <p class="text-muted text-end mb-1">01% Complete</p>
                                <div class="progress mb-4" style="height: 4px;">
                                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div class="img-group">
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-10.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-8.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                        <a class="user-avatar user-avatar-group" href="#">
                                            <img src="{{ URL::asset('assets/images/users/user-6.jpg') }}" alt="user" class="rounded-circle thumb-xs">
                                        </a>
                                    </div><!--end img-group-->
                                    <ul class="list-inline mb-0 align-self-center">
                                        <li class="list-item d-inline-block me-2">
                                            <a class="" href="#">
                                                <i class="mdi mdi-format-list-bulleted text-success font-15"></i>
                                                <span class="text-muted fw-bold">01/80</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="mdi mdi-comment-outline text-primary font-15"></i>
                                                <span class="text-muted fw-bold">0</span>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="ms-2" href="#">
                                                <i class="mdi mdi-pencil-outline text-muted font-18"></i>
                                            </a>
                                        </li>
                                        <li class="list-item d-inline-block">
                                            <a class="" href="#">
                                                <i class="mdi mdi-trash-can-outline text-muted font-18"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end task-box-->
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/plugins/apex-charts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/jquery.task.init.js') }}"></script>
    <script src="{{ URL::asset('assets/js/app.js') }}"></script>
@endsection
