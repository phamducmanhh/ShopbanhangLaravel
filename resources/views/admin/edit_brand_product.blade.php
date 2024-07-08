@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật thương hiệu sản phẩm
                </header>
                <div class="panel-body">
                    @foreach($edit_brand_product as $key => $edit_value)
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/update-brand-product/'.$edit_value->brand_id)}}" method="POST">
                            {{ csrf_field() }}
                            <?php
                                $message = Session::get('message');
                                if($message){
                                    echo '<span class="text-message">'.$message.'</span>';
                                    Session::put('message', null);
                                }
                            ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" value="{{$edit_value->brand_name}}" class="form-control" name="brand_product_name" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả</label>
                            <textarea style="resize: none" rows="8" type="password" name="brand_product_desc" class="form-control" id="exampleInputPassword1" placeholder="Password">{{$edit_value->brand_desc}}</textarea>
                        </div>
                        <button type="submit" name="edit_brand_product" class="btn btn-info">Cập nhật danh mục</button>
                    </form>
                    </div>
                    @endforeach
                </div>
            </section>

    </div>
</div>
@endsection