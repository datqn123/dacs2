<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>Quan ly bai viet</h2>
        <ol class="breadcrumb" style="margin-bottom:10px">
            <li>
                <a href="{{route('dashboard.index')}}">DashBoard</a>    
            </li>
            <li class="active"><strong>Quan ly bai viet</strong></li>
        </ol>
    </div>
</div>
<div class="row mt20">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Danh sach thanh vien </h5>
                @include('backend.user.component.toolbox')
            </div>
            <div class="ibox-content">
                @include('backend.user.component.filter')
                @include('backend.user.component.table')
            </div>
        </div>
    </div>
</div>
