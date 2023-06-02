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
                    <td>
                        <button wire:click="edit({{ $my_parent->id }})" title="{{ trans('Grades_trans.Edit') }}"
                                class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button>
                        <button type="button" class="btn btn-danger btn-sm" wire:click="delete({{ $my_parent->id }})"
                                title="{{ trans('Grades_trans.Delete') }}"><i class="fa fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>
