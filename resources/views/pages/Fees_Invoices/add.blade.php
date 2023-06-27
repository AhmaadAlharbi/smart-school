@extends('layouts.master')

@section('styles')

@endsection

@section('content')

<div class="content">

    <!-- Start::main-content -->
    <div class="main-content">

        <!-- Page Header -->
        <div class="block justify-between page-header sm:flex">
            <div>
                <h3 class="text-gray-700 hover:text-gray-900 text-2xl font-medium"> Empty Page</h3>
            </div>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-sm">
                    <a class="flex items-center font-semibold text-primary hover:text-primary truncate"
                        href="javascript:void(0);">
                        Pages
                        <i
                            class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-gray-300 rtl:rotate-180"></i>
                    </a>
                </li>
                <li class="text-sm text-gray-500 hover:text-primary " aria-current="page">
                    Empty Page
                </li>
            </ol>
        </div>
        <!-- Page Header Close -->

        <!-- Start::row-1 -->
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form class="mb-30" action="{{ route('Fees_Invoices.store') }}" method="POST" id="feesForm">
                            @csrf
                            <!-- Form content here -->
                            <div class="card-body" id="feeRows">
                                <!-- Initial row -->
                                <div class="grid grid-cols-1 md:grid-cols-5 gap-6 mb-3">
                                    <div class="col">
                                        <label class="mb-1">اسم الطالب</label>
                                        <select class="ti-form-select" name="student_id[]" required>
                                            <option value="{{ $student->id }}">{{ $student->name }}</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label class="mb-1">نوع الرسوم</label>
                                        <select class="ti-form-select" name="fee_id[]" required>
                                            <option value="">-- اختار من القائمة --</option>
                                            @foreach($fees as $fee)
                                            <option value="{{ $fee->id }}">{{ $fee->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label class="mb-1">المبلغ</label>
                                        <select class="ti-form-select" name="amount[]" required>
                                            <option value="">-- اختار من القائمة --</option>
                                            @foreach($fees as $fee)
                                            <option value="{{ $fee->amount }}">{{ $fee->amount }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label class="mb-1">البيان</label>
                                        <input type="text" class="ti-form-input" name="description[]" required>
                                    </div>
                                    <div class="col">
                                        <input class="ti-btn rounded-full ti-btn-ghost-danger cursor-pointer"
                                            onclick="deleteRow(this.parentNode.parentNode)" type="button"
                                            value="{{ trans('My_Classes_trans.delete_row') }}" />
                                    </div>
                                </div>

                                <br>
                                <input type="hidden" name="Grade_id" value="{{$student->Grade_id}}">

                            </div>
                            <div class="flex items-center justify-center">
                                <input type="hidden" name="Classroom_id" value="{{$student->Classroom_id}}">
                                <input class="ti-btn ti-btn-dark cursor-pointer" onclick="addRow()" type="button"
                                    value="{{ trans('My_Classes_trans.add_row') }}" />
                                <button type="submit" class="ti-btn ti-btn-primary cursor-pointer">تاكيد
                                    البيانات</button>
                            </div>
                        </form>




                    </div>
                </div>
            </div>
        </div>
        <!-- End::row-1 -->

    </div>
    <!-- Start::main-content -->

</div>

@endsection

@section('scripts')


<script>
    function addRow() {
        var feeRows = document.getElementById('feeRows');
        var rowTemplate = document.querySelector('.grid-cols-1');
        var clonedRow = rowTemplate.cloneNode(true);

        // // Clear the values of the cloned input fields
        // clonedRow.querySelectorAll('select, input').forEach(function(input) {
        //     input.value = '';
        // });

        feeRows.appendChild(clonedRow);
    }

    function deleteRow(row) {
        row.parentNode.removeChild(row);
    }
</script>
@endsection