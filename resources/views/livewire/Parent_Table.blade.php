<div class="box-body">
    <button wire:click="showformadd" type="button"
            class="ti-btn ti-btn-primary mb-5">
        {{trans('Parent_trans.add_parent') }}
    </button>
    <div class="overflow-auto table-bordered">

        {{--table--}}
        <table class="ti-custom-table ti-custom-table-head">
            <thead>
            <tr>
                <th>#</th>
                <th>{{ trans('Parent_trans.Name_Father') }}</th>
                <th>{{ trans('Parent_trans.National_ID_Father') }}</th>
                <th>{{ trans('Parent_trans.Passport_ID_Father') }}</th>
                <th>{{ trans('Parent_trans.Phone_Father') }}</th>
                <th>{{ trans('Parent_trans.Job_Father') }}</th>
                <th>{{ trans('Parent_trans.Processes') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($my_parents as $my_parent)
                <tr>

                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $my_parent->Name_Father }}</td>
                    <td>{{ $my_parent->National_ID_Father }}</td>
                    <td>{{ $my_parent->Passport_ID_Father }}</td>
                    <td>{{ $my_parent->Phone_Father }}</td>
                    <td>{{ $my_parent->Job_Father }}</td>
{{--                    <td>--}}
{{--                        <button wire:click="edit({{ $my_parent->id }})" title="{{ trans('Grades_trans.Edit') }}"--}}
{{--                                class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>--}}
{{--                        <button type="button" class="btn btn-danger btn-sm" wire:click="delete({{ $my_parent->id }})"--}}
{{--                                title="{{ trans('Grades_trans.Delete') }}"><i class="fa fa-trash"></i></button>--}}
{{--                    </td>--}}
                    <td class="text-start font-medium">
                        <button type="button"
                                wire:click="edit({{ $my_parent->id }})"
                                class="ti-btn rounded-full ti-btn-ghost-success">
                            {{trans('Grades_trans.Edit')}}
                        </button>



                        <button type="button" class="ti-btn rounded-full ti-btn-ghost-danger"
                                aria-label="Try me! Example: A custom positioned dialog"
                                wire:click="$emit('showDeleteConfirmation', {{ $my_parent->id }})">
                            {{trans('Grades_trans.Delete')}}
                        </button>
                    <script>
                        document.addEventListener('livewire:load', function () {
                            Livewire.on('showDeleteConfirmation', function (parentId) {
                                Swal.fire({
                                    title: '{{ trans('Grades_trans.Warning_Grade') }}',
                                    text: '{{ trans('Grades_trans.Warning_title') }}',
                                    icon: 'warning',
                                    showCancelButton: true,
                                    cancelButtonText: '{{ trans('Grades_trans.Close') }}',
                                    confirmButtonColor: '#5e76a6',
                                    cancelButtonColor: '#ef4444',
                                    confirmButtonText: '{{ trans('Grades_trans.Delete') }}'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Livewire.emit('delete', parentId);
                                        Swal.fire(
                                            'Deleted!',
                                            'Your file has been deleted.',
                                            'success'
                                        );
                                    }
                                });
                            });
                        });
                    </script>



                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>

<!-- SWEETALERT JS -->
<script src="{{asset('build/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
@vite('resources/assets/js/swetalert.js')

