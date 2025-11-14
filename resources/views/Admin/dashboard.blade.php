@extends('layouts.admin.master')

@section('contents')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-md flex-shrink-0">
                                <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                    <i class="uim uim-briefcase"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1 overflow-hidden ms-4">
                                <p class="text-muted text-truncate font-size-15 mb-2"> Total Orders</p>
                                <h3 class="fs-4 flex-grow-1 mb-3">245</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-md flex-shrink-0">
                                <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                    <i class="uim uim-briefcase"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1 overflow-hidden ms-4">
                                <p class="text-muted text-truncate font-size-15 mb-2"> Total Customers</p>
                                <h3 class="fs-4 flex-grow-1 mb-3">45</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="avatar-md flex-shrink-0">
                                <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                    <i class="uim uim-briefcase"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1 overflow-hidden ms-4">
                                <p class="text-muted text-truncate font-size-15 mb-2"> Total Sale</p>
                               <div class="d-flex align-items-baseline mb-3">
                                    {{-- <span class="text-muted font-size-16 me-1">Rs</span> --}}
                                    <h3 class="fs-4 mb-0">Rs. 45,458</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- container-fluid -->
@endsection
