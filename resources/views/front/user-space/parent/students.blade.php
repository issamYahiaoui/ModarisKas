@extends('admin_layout.master')


@section('content')

@if(count($errors->all())>0)
<div class="alert alert-danger text-center col-md-12 ">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><i class="fa fa-minus"></i></span>
    </button>
    <ul class="list-unstyled text-center">
        @foreach($errors->all() as $error)
        <li class="text-center">
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif
@if(Session::has('success'))
<div id="alert" class="alert alert-success text-center col-md-12">

    {{Session::get('success')}}
    <span class="pull-right" data-dismiss="alert" aria-label="Close" aria-hidden="true"><i
            class="fa fa-minus"></i></span>
</div>
@endif


<div class="col-sm-12">
    <div class="white-box">
        <table id="dataTable" class="display responsive nowrap" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="text-center">{{__('lang.name')}}</th>
                <th class="text-center">{{__('lang.email')}}</th>
                <th class="text-center">{{__('lang.schoolStage')}}</th>
                <th class="text-center">{{__('lang.teacherName')}}</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th class="text-center">{{__('lang.name')}}</th>
                <th class="text-center">{{__('lang.email')}}</th>
                <th class="text-center">{{__('lang.schoolStage')}}</th>
                <th class="text-center">{{__('lang.teacherName')}}</th>
            </tr>
            </tfoot>
            <tbody>
            @foreach($list as $model)
            <tr>
                <td class="text-center">Student</td>
                <td class="text-center">Student@gmail.com</td>
                <td class="text-center">School Stage</td>
                <td class="text-center">Teacher's Name</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection

@section('js')

<script src="{{asset('dashboard/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
<script src="https://cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>

<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->
<script>

    $('#dataTable').DataTable({
        dom: 'Bfrtip',
        buttons: [

        ],
        @if(app()->getLocale()=='ar')
    "language": {
        "sProcessing": "جارٍ التحميل...",
            "sLengthMenu": "أظهر _MENU_ مدخلات",
            "sZeroRecords": "لم يعثر على أية سجلات",
            "sInfo": "إظهار _START_ إلى _END_ من أصل _TOTAL_ مدخل",
            "sInfoEmpty": "يعرض 0 إلى 0 من أصل 0 سجل",
            "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
            "sInfoPostFix": "",
            "sSearch": "ابحث:",
            "sUrl": "",
            "oPaginate": {
            "sFirst": "الأول",
                "sPrevious": "السابق",
                "sNext": "التالي",
                "sLast": "الأخير"
        }
    }
    @endif
    });
    $('#dataTable_filter').hide()
</script>
@endsection

@section('css')
<style>
    .btn-label {
        background: none;
    }
</style>
<link href="{{asset('dashboard/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet"
      type="text/css"/>
<link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
      type="text/css"/>
<link href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css" rel="stylesheet"
      type="text/css"/>

@endsection