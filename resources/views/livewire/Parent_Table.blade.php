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
            <tr>
                <td class="font-medium">John Brown</td>
                <td>45</td>
                <td>New York No. 1 Lake Park</td>
                <td class="!text-end font-medium">
                    <a class="text-primary hover:text-primary" href="javascript:void(0);">Delete</a>
                </td>
                <td>New York No. 1 Lake Park</td>
                <td>New York No. 1 Lake Park</td>
                <td>New York No. 1 Lake Park</td>

            </tr>

            </tbody>
        </table>
    </div>
</div>
