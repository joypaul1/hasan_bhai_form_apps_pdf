@extends('layouts.app')
@section('content')
    <div class="row">
        <!-- seo fact area start -->
        <div class="col-12">
            <div class="row">
                <!-- 1. Likes -->
                <div class="mt-5 mb-3 col-4">
                    <div class="card">
                        <div class="seo-fact sbg1">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-direction"></i> Total Client</div>
                                <h2>{{ $customerCount }}</h2>
                            </div>
                            <canvas id="seolinechart1" height="50"></canvas>
                        </div>
                    </div>
                </div>

                <!-- 2. Share -->
                <div class="mb-3 col-4 mt-md-5">
                    <a href="{{ route('customers.index') }}" class="text-decoration-none">
                        <div class="card">
                            <div class="seo-fact sbg2">
                                <div class="p-4 d-flex justify-content-between align-items-center">
                                    <div class="seofct-icon"><i class="ti-share"></i> Add Client Form</div>
                                    <h2> <i class="ti-pencil-alt"></i> </h2>
                                </div>
                                <canvas id="seolinechart2" height="50"></canvas>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- 3. Impressions -->
                <div class="mt-5 mb-3 col-4">
                    <div class="card">
                        <div class="seo-fact sbg3">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-eye"></i> Total User</div>
                                <h2>{{ $userCount }}</h2>
                            </div>
                            <canvas id="seolinechart3" height="60"></canvas>
                        </div>
                    </div>
                </div>

                <!-- 4. New Users -->
                <div class="mt-5 mb-3 col-4">
                    <a href="{{ route('users.create') }}" class="text-decoration-none">
                    <div class="card">
                        <div class="seo-fact sbg4">
                            <div class="p-4 d-flex justify-content-between align-items-center">
                                <div class="seofct-icon"><i class="ti-user"></i> Add New User</div>
                            </div>
                            <canvas id="seolinechart4" height="60"></canvas>
                        </div>
                    </div>
                    </a>
                </div>


            </div>
        </div>

        <!-- seo fact area end -->


        <!-- testimonial area end -->
    </div>
@endsection
