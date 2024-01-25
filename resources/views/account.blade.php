@extends('layouts.app')

@section('content')

<div class="bg-light">
        <!-- Page Banner Section Start -->
        <div class="page-banner-section section" style="background-image: url({{URL::asset('images/bar.jpg')}});background-size:cover; background-position: center; background-repeat: no-repeat;">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html" style="font-family: 'Quest'; font-size: 23px;">حسابي</a></li>
                </ul>
            </div>
        </div>
        <!-- Page Banner Section End -->

    <!-- My Account Section Start -->
    <div class="section section-padding" style="font-family: 'Quest';">
        <div class="container">
            <div class="row g-lg-10 g-6">

                <!-- My Account Tab List Start -->
                <div class="col-lg-4 col-12">
                    <ul class="my-account-tab-list nav">
                        <li><a href="#orders" data-bs-toggle="tab" class="active"><i class="sli-notebook"></i> الطلبات</a></li>
                        <li><a href="#account-info" data-bs-toggle="tab"><i class="sli-user"></i> بيانات الحساب</a></li>
                        <li><a href="#change-password" data-bs-toggle="tab"><i class="sli-lock"></i> تغيير كلمة السر</a></li>
                        <li>
                            <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="sli-logout"></i> تسجيل الخروج</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                </form>

                        </li>
                    </ul>
                </div>
                <!-- My Account Tab List End -->

                <!-- My Account Tab Content Start -->
                <div class="col-lg-8 col-12">
                    <div class="tab-content">


                        <!-- Single Tab Content Start -->
                        <div class="tab-pane active" id="orders">
                                <div class="myaccount-content order">
                                    <div class="table-responsive">
                                        <table class="table" style="width:800px;">
                                            <thead>
                                                <tr>
                                                    <th>الطلب</th>
                                                    <th>التاريخ</th>
                                                    <!--th>الحالة</th-->
                                                    <th>الاجمالي</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($invoices as $invoice)
                                                    <tr>
                                                        <td>{{ $invoice->code }}</td>
                                                        <td>{{ $invoice->created_at->format('M d, Y') }}</td>
                                                        <!--td>{{ ($invoice->status) == 1 ? "تم الاستلام" : "لم يتم الاستلام" }}</td-->
                                                        <td><span dir="ltr">{{ $invoice->total }} SR</span></td>
                                                        <td><a href="{{ route('showInvoice', ['invoice_id' => $invoice->id]) }}"><b>عرض الفاتورة</b></a></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <!-- Single Tab Content End -->


                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade" id="change-password">
                            <div class="myaccount-content account-details">
                                <div class="account-details-form">

                                <div id="successMessage" class="alert alert-success" style="display: none;"></div>
                                
                                <div id="errorMessage" class="alert alert-danger" style="display: none;"></div>

                                    <form id="passwordEditForm" method="POST" action="{{ route('updatePassword') }}">
                                        @csrf
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <fieldset>
                                                    <legend>نغيير كلمة السر</legend>
                                                    <br>
                                                    <div class="row g-4">
                                                        <div class="col-12">
                                                            <label for="current-pwd">كلمة السر الحالية</label>
                                                            <input class="form-field" type="password" id="current-pwd" name="current_password" placeholder="كلمة السر الحالية" required>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="new-pwd">كلمة السر الجديدة</label>
                                                            <input class="form-field" type="password" id="new-pwd" name="new_password" placeholder="كلمة السر الجديدة" required>
                                                        </div>
                                                        <div class="col-12">
                                                            <label for="confirm-pwd">تأكيد كلمة السر الجديدة</label>
                                                            <input class="form-field" type="password" id="confirm-pwd" name="new_password_confirmation" placeholder="تأكيد كلمة السر الجديدة" required>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12">
                                                <button type="button" onclick="submitPasswordForm()" class="btn btn-dark btn-primary-hover">حفظ التغييرات</button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                            </div>
                        </div> <!-- Single Tab Content End -->




                        <!-- Single Tab Content Start -->
                        <div class="tab-pane fade" id="account-info">
                            <div class="myaccount-content account-details">
                                <div class="account-details-form">
                                <div id="dataSuccessMessage" class="alert alert-success" style="display: none;"></div>
                                <form id="editForm" method="POST" action="{{ route('updateUser') }}">
                                        @csrf
                                        <div class="row g-4">
                                            <div class="col-md-6 col-12">
                                                <div class="single-input-item">
                                                    <label for="first-name">الاسم الاول <abbr class="required">*</abbr></label>
                                                    <input class="form-field" type="text" id="first-name" name="first_name" placeholder="الاسم الاول" value="{{Auth::user()->first_name}}">
                                                    <span id="error-first_name" class="text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="single-input-item">
                                                    <label for="last-name">الاسم الثاني <abbr class="required">*</abbr></label>
                                                    <input class="form-field" type="text" id="last-name" name="last_name" placeholder="الاسم الثاني" value="{{Auth::user()->last_name}}">
                                                    <span id="error-last_name" class="text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="display-name">الايميل <abbr class="required">*</abbr></label>
                                                <input class="form-field" type="text" id="display-name" name="email" placeholder="الايميل" value="{{Auth::user()->email}}">
                                                <span id="error-email" class="text-danger"></span>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="phone">رقم الجوال <abbr class="required">*</abbr></label>
                                                <input class="form-field" type="text" id="phone" name="phone" placeholder="رقم الجوال" value="{{Auth::user()->phone}}">
                                                <span id="error-phone" class="text-danger"></span>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="address">العنوان <abbr class="required">*</abbr></label>
                                                <input class="form-field" type="text" id="address" name="address" placeholder="العنوان" value="{{Auth::user()->address}}">
                                                <span id="error-address" class="text-danger"></span>
                                            </div>
                                            <div class="col-12">
                                                <button type="button" onclick="submitForm();" class="btn btn-dark btn-primary-hover">حفظ التغييرات</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> <!-- Single Tab Content End -->

                    </div>
                </div> <!-- My Account Tab Content End -->

            </div>
        </div>
    </div>
    <!-- My Account Section End -->
 </div>

 <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    // Ensure the document is ready before executing JavaScript
    function submitForm() {
            const form = document.getElementById('editForm');
            const formData = new FormData(form);

            const xhr = new XMLHttpRequest();
            xhr.open('Post', form.action, true);
            xhr.setRequestHeader('X-CSRF-TOKEN', formData.get('_token'));

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        // Display the success message
                        const successMessage = document.getElementById('dataSuccessMessage');
                        successMessage.innerText = 'تم تحديث المعلومات بنجاح.';
                        successMessage.style.display = 'block';

                        // Optionally, you can update the DOM or perform additional actions
                    } 
                    else if (xhr.status === 422) {
                    // Handle validation errors
                        try {
                            const response = JSON.parse(xhr.responseText);
                            const errors = response.errors;

                            // Display errors next to corresponding form fields
                            displayErrors(errors);

                            // Display a general error message
                            displayGeneralError('Validation failed. Please check the form.');
                        } catch (error) {
                            console.error('Error parsing JSON response:', error);
                        }
                    } else {
                        // Handle other errors
                        const response = JSON.parse(xhr.responseText);
                        const errorMessage = response.error;
                        alert(errorMessage);
                    }
                }
            };

            xhr.send(formData);
        }

        function displayErrors(errors) {
        for (const fieldName in errors) {
            const errorElement = document.getElementById('error-' + fieldName);
            if (errorElement) {
                errorElement.innerText = errors[fieldName][0];
            }
        }
    }

    function displayGeneralError(message) {
        const errorMessageElement = document.getElementById('error-message');
        if (errorMessageElement) {
            errorMessageElement.innerText = message;
            errorMessageElement.style.display = 'block';
        }
    }




        function submitPasswordForm() {
        const form = document.getElementById('passwordEditForm');
        const formData = new FormData(form);

        const xhr = new XMLHttpRequest();
        xhr.open('POST', form.action, true);
        xhr.setRequestHeader('X-CSRF-TOKEN', formData.get('_token'));

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    const errorMessage = document.getElementById('errorMessage');
                    errorMessage.style.display = 'none';
                    // Display the success message
                    const successMessage = document.getElementById('successMessage');
                    successMessage.innerText = JSON.parse(xhr.responseText).message;
                    successMessage.style.display = 'block';

                    // Optionally, you can update the DOM or perform additional actions
                } else if (xhr.status === 422 || xhr.status === 420) {
                    const successMessage = document.getElementById('successMessage');
                    successMessage.style.display = 'none';

                    // Handle validation errors
                    const errorMessage = document.getElementById('errorMessage');
                    errorMessage.innerText = JSON.parse(xhr.responseText).error;
                    errorMessage.style.display = 'block';
                } else {
                    const successMessage = document.getElementById('successMessage');
                    successMessage.style.display = 'none';
                    // Handle other errors
                    const errorMessage = document.getElementById('errorMessage');
                    errorMessage.innerText = 'An error occurred. Please try again.';
                    errorMessage.style.display = 'block';
                }
            }
        };

        xhr.send(formData);
    }


</script>

    @endsection
