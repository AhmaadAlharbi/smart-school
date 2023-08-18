<div>
    <form wire:submit.prevent="store" method="POST">
        @csrf
        <div class="mt-5">
            <label class="ti-form-label mb-0">Grade | المرحلة الدراسية</label>
            <select wire:model="grade_id" class="mt-2 ti-form-select" name="grade_id" id="">
                <option value="{{$grade->id}}">{{$grade->Name}}</option>
                @foreach($grades as $gradeInLoop)
                @if($gradeInLoop->id !== $grade->id)
                <option value="{{$gradeInLoop->id}}">{{$gradeInLoop->Name}}</option>
                @endif
                @endforeach
            </select>
            <div class="mt-5">
                <label class="ti-form-label mb-0">Department | القسم الدراسي</label>
                <select wire:model="selectedDepartment" class="mt-2 ti-form-select">
                    @foreach($specializations as $specialization)
                    <option value="{{$specialization->id}}">{{$specialization->Name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mt-5">
                <label class="ti-form-label mb-0">Teachers | المعلمون </label>
                <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-2 mt-3">
                    @foreach($teachers as $teacher)
                    <label
                        class="flex p-3 w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary">
                        <span class="text-sm text-gray-500">{{ $teacher->Name }}</span>
                        <input type="checkbox" class="ti-form-checkbox ltr:ml-auto rtl:mr-auto mt-0.5"
                            wire:model="selectedTeachers" value="{{ $teacher->id }}">
                    </label>
                    @endforeach






                </div>
                <button type="submit" class="ti-btn ti-btn-secondary mt-5">
                    Save
                </button>

            </div>
        </div>
    </form>
</div>