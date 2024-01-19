<x-navbar></x-navbar>
<x-layout>
    <div class="row">
        <div class="d-flex flex-row justify-content-center">
            <div class="col col-md-4">
                <div class="card text-bg-light mb-3 shadow-sm" style="max-width: 18rem;">
                    <div class="card-header">مدیران</div>
                    <div class="card-body">
                        <h5 class="card-title">تعداد مدیران سایت</h5>
                        <p class="card-text">5</p>
                    </div>
                </div>
            </div>
            <div class="col col-md-4">
                <div class="card text-bg-light mb-3 shadow-sm" style="max-width: 18rem;">
                    <div class="card-header">کاربران</div>
                    <div class="card-body">
                        <h5 class="card-title">تعداد رکوردهای ثبت نام شده</h5>
                        <p class="card-text">20</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered shadow-sm p-4">
            <thead>
                <th>#</th>
                <th>نام</th>
                <th>نام خانوادگی</th>
                <th>شماره تماس</th>
                <th>تاریخ ایجاد شده</th>
                <th>عملیات</th>
            </thead>
            <tbody>
                @forelse($records as $record)
                <tr>
                    <td>{{$counter++}}</td>
                    <td>{{$record->first_name}}</td>
                    <td>{{$record->last_name}}</td>
                    <td>{{$record->phone_number}}</td>
                    <td>{{$record->created_at}}</td>
                    <td class="text-center">
                        <a class="btn btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="نمایش" href="{{route('record.view',$record->id)}}"><i class="fa-solid  fa-binoculars"></i></a>
                        <a class="btn btn-outline-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ویرایش" href="{{route('update.view',$record->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                        <button class="btn btn-outline-danger remove-record-btn"  data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="حذف" data-record-id="{{$record->id}}"><i class="fa-solid fa-user-xmark"></i></button>
                    </td>
                    @empty
                        <td colspan="9">رکوردی وجود ندارد</td>
                </tr>
                @endforelse
            </tbody>
        </table>
            {{$records->links()}}
        </div>
    </div>
</x-layout>

