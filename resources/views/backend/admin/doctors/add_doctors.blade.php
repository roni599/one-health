<!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.admin.components.head')
    <style>
        label {
            display: inline-block;
            width: 130px;
        }

        .input_div {
            padding: 15px;
            padding-left: 32%;
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')
    <div class="container-scroller">
        <!-- sidebar-->
        @include('backend.admin.components.sidebar')
        <!--sidebar-->
        <!-- page-body-wrapper-->
        <div class="container-fluid page-body-wrapper">
            <!--navbar-->
            @include('backend.admin.components.navbar')
            <!--navbar-->
            <!-- main-panel-->
            <div class="main-panel">
                <div class="content-wrapper">
                    <!--content-wrapper body-->
                    <h1 class="h1 text-center">Add Doctor</h1>
                    {{-- @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                        </div>
                    @endif --}}
                    <div class="container mt-3">
                        <form action="{{ route('post_doctor') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input_div">
                                <label for="doctor_name">Doctor Name :</label>
                                <input type="text" class="text-black rounded" id="doctor_name" name="doctor_name"
                                    required>
                            </div>
                            <div class="input_div">
                                <label for="phone">Phone :</label>
                                <input type="text" class="text-black rounded" id="phone" name="phone" required>
                            </div>
                            <div class="input_div">
                                <label for="doctor_name">Speciality :</label>
                                <select class="text-black rounded" style="width: 200px;padding-left:40px;"
                                    name="speciality" id="speciality" required>
                                    <option value="">--select--</option>
                                    <option value="skin">skin</option>
                                    <option value="medecine">medecine</option>
                                    <option value="heart">heart</option>
                                    <option value="eye">eye</option>
                                </select>
                            </div>
                            <div class="input_div">
                                <label for="room_no">Room No :</label>
                                <input type="text" class="text-black rounded" id="room_no" name="room_no" required>
                            </div>
                            <div class="input_div">
                                <label for="room_no">Doctor Image :</label>
                                <input type="file" class="rounded" id="image" name="image" required>
                            </div>
                            <div class="input_div">
                                <button class="btn btn-sm btn-primary p-2 w-50">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!--content-wrapper body-->
                </div>
                <!--footer-->
                @include('backend.admin.components.footer')
                <!--footer-->
            </div>
            <!-- main-panel-->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    @include('backend.admin.components.script')
</body>

</html>
