<!DOCTYPE html>
<html>
<head>
    <title>Tính tuổi</title>
</head>
<body>

<form action="/tinhtuoi" method="POST">
    @csrf
    Nhập năm sinh:
    <input type="number" name="nam_sinh" required>
    <button type="submit">Submit</button>
</form>

</body>
</html>