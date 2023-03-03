<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>LARAVEL</title>
</head>

<body>
    <header>
        <h1>Đây là header</h1>
    </header>
    <hr>
    <main>
        <h1>Đây là main</h1>
        <button id="addNew">Thêm mới dữ liệu</button>
        <div id="divAddNew">
            <form action="<?php echo route('users.add') ?>" method="POST">
                <input type="text" placeholder="Tên" name="name_user">
                <input type="text" placeholder="Mail" name="mail_user">
                <input type="hidden" name="_token" value="<?php echo csrf_token()?>">
                <button type="submit">Lưu</button>
            </form>
        </div>
        <a href="<?php echo route('category.list')?>" style="display: none;">list category </a><br>
        <a href="<?php echo route('auth.admin.dashboard') ?>" style="display: none;">main admin</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Mail</th>
                    <th>created_at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(!@empty($userList))
                @foreach ($userList as $item )
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>
                        <a href="#">Chỉnh sửa</a>
                        <a href="#">Xóa</a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <span>Không có dữ liệu</span>
                </tr>
                @endif
            </tbody>
        </table>
    </main>
    <hr>
    <footer>
        <h1>Đây là footer </h1>
    </footer>
</body>

</html>

<style>
    #divAddNew {
        display: none;
    }
</style>

<script>
    $( "#addNew" ).click(function() {
        $( "#divAddNew" ).css('display','block');
    });
</script>