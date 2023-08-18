<div>
    <form wire:submit.prevent="store" method="POST">
        @csrf
        <div>
            <label class="ti-form-label mb-0">Grade | المرحلة الدراسية</label>
            <select wire:model="selectedGrade" class="mt-2 ti-form-select" name="grade_id" id="">
                <option value="{{$grade->id}}">{{$grade->Name}}</option>
                @foreach($grades as $gradeInLoop)
                @if($gradeInLoop->id !== $grade->id)
                <option value="{{$gradeInLoop->id}}">{{$gradeInLoop->Name}}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="mt-5">
            <label class="ti-form-label mb-0">Department | القسم الدراسي</label>
            <select wire:model="selectedDepartment" class="mt-2 ti-form-select">
                <option value="">select a department</option>
                @foreach($specializations as $specialization)
                <option value="{{$specialization->id}}">{{$specialization->Name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-5">
            <label class="ti-form-label mb-0">Subjects | المواد</label>
            <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-2 mt-3">
                @foreach($selectedSubjects as $subject)
                <label
                    class="flex p-3 w-full bg-white border border-gray-200 rounded-sm text-sm focus:border-primary focus:ring-primary">
                    <span class="text-sm text-gray-500">{{ $subject->name }}</span>

                    <input type="checkbox" class="ti-form-checkbox ltr:ml-auto rtl:mr-auto mt-0.5"
                        value="{{ $subject->id }}">
                </label>
                @endforeach
            </div>
            <button type="submit" class="ti-btn ti-btn-secondary mt-5">
                Save
            </button>
        </div>
    </form>
</div>