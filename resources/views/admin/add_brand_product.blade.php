@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm thương hiệu sản phẩm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-brand-product')}}" method="POST">
                            {{ csrf_field() }}
                            <?php
                                $message = Session::get('message');
                                if($message){
                                    echo '<span class="text-message">'.$message.'</span>';
                                    Session::put('message', null);
                                }
                            ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên thương hiệu</label>
                            <input type="text" class="form-control" name="brand_product_name" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả</label>
                            <textarea style="resize: none" rows="8" type="password" name="brand_product_desc" class="form-control" id="exampleInputPassword1" placeholder="Password"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Trạng thái</label>
                            <select name="brand_product_status" class="form-control input-lg m-bot15">
                                <option value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                            </select>
                        </div>
                        <button type="submit" name="add_brand_product" class="btn btn-info">Thêm thương hiệu</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
</div>
@endsection