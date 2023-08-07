@extends('super-admin.admin-panel.index')

@section('content')
    <main>
        <header
            class="page-header page-header-compact page-header-light border-bottom bg-white mb-4"
        >
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div
                        class="row align-items-center justify-content-between pt-3"
                    >
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon">
                                    <i data-feather="user"></i>
                                </div>
                                Cattle Registration - Farmer
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">
            <!-- Account page navigation-->
            <div class="row">


                <div class="col-xl-12">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Cattle Registration</div>
                        <div class="card-body">

                            {{-- ---------------------------------------- Farmer Cow Registration ---------------------------------------- --}}


                            <form action="{{ route('cattle_register.store') }}" method="post"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <!-- Form Group (username)-->

                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">

                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLastName"
                                        >Cattle Name</label
                                        >
                                        <input
                                            class="form-control"
                                            id="inputLastName"
                                            type="text"
                                            placeholder=""
                                            value="{{ old('cattle_name') }}"
                                            name="cattle_name"

                                        />
                                    </div>

                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLastName"
                                        >Cattle Breed</label
                                        >
                                        <input
                                            class="form-control"
                                            id="inputLastName"
                                            type="text"
                                            placeholder=""
                                            value="{{ old('cattle_breed') }}"
                                            name="cattle_breed"
                                        />
                                    </div>
                                </div>

                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">

                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLastName"
                                        >Age</label
                                        >
                                        <input
                                            class="form-control"
                                            id="inputLastName"
                                            type="text"
                                            placeholder=""
                                            value="{{ old('age') }}"
                                            name="age"
                                        />
                                    </div>

                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLastName"
                                        >Cattle Color</label
                                        >
                                        <input
                                            class="form-control"
                                            id="inputLastName"
                                            type="text"
                                            placeholder=""
                                            value="{{ old('cattle_color') }}"
                                            name="cattle_color"
                                        />
                                    </div>


                                </div>

                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">

                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLastName"
                                        >Cattle Weight</label
                                        >
                                        <input
                                            class="form-control"
                                            id="inputLastName"
                                            type="text"
                                            placeholder=""
                                            value="{{ old('weight') }}"
                                            name="weight"
                                        />
                                    </div>


                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLastName"
                                        >Cattle Type</label
                                        >
                                        <input
                                            class="form-control"
                                            id="inputLastName"
                                            type="text"
                                            placeholder=""
                                            value="{{ old('cattle_type') }}"
                                            name="cattle_type"
                                        />
                                    </div>
                                </div>

                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (organization name)-->
                                    <div class="col-md-4">
                                        <label class="small mb-1" for="inputOrgName"
                                        >NID Front</label
                                        >
                                        <input type="file" class="form-control" name="nid_front">
                                    </div>

                                    <!-- Form Group (organization name)-->
                                    <div class="col-md-4">
                                        <label class="small mb-1" for="inputOrgName"
                                        >NID Back</label
                                        >
                                        <input type="file" class="form-control" name="nid_back">
                                    </div>

                                    <!-- Form Group (organization name)-->
                                    <div class="col-md-4">
                                        <label class="small mb-1" for="inputOrgName"
                                        >Chairman Certification</label
                                        >
                                        <input type="file" class="form-control" name="chairman_certificate">
                                    </div>
                                </div>

                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (organization name)-->
                                    <div class="col-md-4">
                                        <label class="small mb-1" for="inputOrgName"
                                        >Muzzle Of Cow</label
                                        >
                                        <input type="file" class="form-control" name="muzzle_of_cow">
                                    </div>

                                    <!-- Form Group (organization name)-->
                                    <div class="col-md-4">
                                        <label class="small mb-1" for="inputOrgName"
                                        >Left Side</label
                                        >
                                        <input type="file" class="form-control" name="left_side">
                                    </div>

                                    <!-- Form Group (organization name)-->
                                    <div class="col-md-4">
                                        <label class="small mb-1" for="inputOrgName"
                                        >Right Side</label
                                        >
                                        <input type="file" class="form-control" name="right_side">
                                    </div>
                                </div>


                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (organization name)-->
                                    <div class="col-md-4">
                                        <label class="small mb-1" for="inputOrgName"
                                        >Special Marks</label
                                        >
                                        <input type="file" class="form-control" name="special_marks">
                                    </div>

                                    <!-- Form Group (organization name)-->
                                    <div class="col-md-4">
                                        <label class="small mb-1" for="inputOrgName"
                                        >Cow With Owner</label
                                        >
                                        <input type="file" class="form-control" name="cow_with_owner">
                                    </div>

                                    <div class="col-md-4">
                                        <label class="small mb-1" for="inputLastName"
                                        >Current Price</label
                                        >
                                        <input
                                            class="form-control"
                                            id="inputLastName"
                                            type="number"
                                            placeholder=""
                                            value="{{ old('current_price') }}"
                                            name="current_price"
                                        />
                                    </div>

                                </div>


                                <button class="btn btn-primary" type="submit">
                                    Register cattle
                                </button>
                            </form>

                            {{-- ---------------------------------------- Farmer Cow Registration ---------------------------------------- --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
