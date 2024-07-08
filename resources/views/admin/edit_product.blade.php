@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm sản phẩm
                </header>
                <div class="panel-body">
                    
                    <div class="position-center">
                        @foreach($edit_product as $key => $edit_pro)
                        <form role="form" action="{{URL::to('/update-product/'.$edit_pro->product_id)}}" method="POST" enctype='multipart/form-data'>
                            {{ csrf_field() }}
                            <?php
                                $message = Session::get('message');
                                if($message){
                                    echo '<span class="text-message">'.$message.'</span>';
                                    Session::put('message', null);
                                }
                            ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" class="form-control" value="{{$edit_pro->product_name}}" name="product_name" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Giá sản phẩm</label>
                            <input type="text" class="form-control" value="{{$edit_pro->product_price}}" name="product_price" id="exampleInputEmail1" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh</label>
                            <input type="file" class="form-control" name="product_image" id="exampleInputEmail1" >
                            <img src="{{URL::to('public/uploads/product/'.$edit_pro->product_image)}}" width="100px" height="100px">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                            <textarea style="resize: none" rows="8" type="password" name="product_desc" class="form-control" id="exampleInputPassword1" >{{$edit_pro->product_desc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                            <textarea style="resize: none" rows="8" type="password" name="product_content" class="form-control" id="exampleInputPassword1" >{{$edit_pro->product_content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Danh mục sản phẩm</label>
                            <select name="product_cate" class="form-control input-lg m-bot15">
                                @foreach($cate_product as $key => $cate)
                                    @if($cate->category_id == $edit_pro->category_id)
                                        <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                    @else
                                        <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Thương hiệu sản phẩm</label>
                                <select name="product_brand" class="form-control input-lg m-bot15">
                                    @foreach($brand_product as $key => $brand)
                                        @if($brand->brand_id == $edit_pro->brand_id)
                                            <option selected value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                        @else
                                            <option value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Trạng thái</label>
                                    <select name="product_status" class="form-control input-lg m-bot15">
                                        <option  value ="0" {{$edit_pro->product_status == 0 ? 'selected' : ' '}}>Ẩn</option>
                                        <option value="1" {{$edit_pro->product_status==1 ? 'selected' : ' '}}>Hiển thị</option>
                                    </select>
                                </div>
                        <button type="submit" name="add_product" class="btn btn-info">Cập nhật sản phẩm</button>
                    </form>
                    @endforeach
                    </div>
                    
                </div>
            </section>

    </div>
</div>
@endsection