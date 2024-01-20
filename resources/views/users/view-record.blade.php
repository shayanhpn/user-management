<x-navbar></x-navbar>
<x-layout>
    <h3>مشخصات کلی</h3>
    <hr>
        <table class="table table-bordered table-striped table-hover table-vertical">
            <tbody>
            <tr>
                <th scope="row">نام</th>
                <td>{{ $record->first_name }}</td>
            </tr>

            <tr>
                <th scope="row">نام خانوادگی</th>
                <td>{{ $record->last_name }}</td>
            </tr>
            <tr>
                <th scope="row">شماره تلفن</th>
                <td>{{ $record->phone_number }}</td>
            </tr>
            <tr>
                <th scope="row">شماره همراه</th>
                <td>{{ $record->mobile_phone }}</td>
            </tr>
            <tr>
                <th scope="row">کشور</th>
                <td>{{ $record->country }}</td>
            </tr>
            <tr>
                <th scope="row">استان/ایالت</th>
                <td>{{ $record->state }}</td>
            </tr>
            <tr>
                <th scope="row">شهر</th>
                <td>{{ $record->city }}</td>
            </tr>
            <tr>
                <th scope="row">آدرس</th>
                <td>{{ $record->address }}</td>
            </tr>
            <tr>
                <th scope="row">تاریخ ایجاد</th>
                <td>{{ $record->created_at->format('d/m/Y') }}</td>
            </tr>
            </tbody>
        </table>

</x-layout>
