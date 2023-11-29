<div class="filter">
    <div class="uk-flex uk-flex-middle uk-flex-space-between">
        <div class="perpage">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <select name="perpage" id="" class="form-control input-sm perpage filter ">
                    @for($i = 20;$i<=200;$i+=20) 
                        <option value="{{$i}}">{{$i }} bản ghi</option>
                    @endfor
                </select>
            </div>
        </div>
        <div class="action">
            <div class="uk-flex uk-flex-middle">
                <select name="user_catalogue_id" class="form-control mr10" id="">
                    <option value="0" selected="selected">Chọn nhóm thành viên</option>
                    <option value="1">Quản trị viên</option>
                </select>
                <div class="uk-search uk-flex uk-flex-middle">
                    <div class="input-group">
                        <input type="text"
                         name="keyword"
                         id=""
                         value=""
                         placeholder="Nhập từ khóa bạn muốn tìm..."
                         class="form-control"
                         >
                         <span>
                            <button type="submit"
                            name="search"
                            value="Search"
                            class="btn btn-primary mb0 btn-sm"
                            >Tìm kiếm</button>
                         </span>
                    </div>
                </div>
                <a href="" class="btn btn-danger"><i class="fa fa-plus">Thêm mới thành viên</i></a>
            </div>
        </div>
    </div>
</div>