<h1>thêm mới chuyên mục sản phẩm</h1>
<form action="<?php echo route('category.add') ?>" method="POST">
    <div>
        <input type="text" name="category_name" placeholder="Tên chuyên mục">
    </div>
    <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
    <button type="submit">Thêm chuyên mục</button>

</form>