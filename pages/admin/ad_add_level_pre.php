<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        لإضافة الفرق لكلية 
        {{collage_name}}
        يرجي تحديد القسم 
        
    </div>
    <div>
        <form action="" method="post">
        <select name="part_id" id="">
            {{colege_parts}}
        </select>
        <input type="hidden" name="page" value="admin/ad_add_level.php">
        <input type="submit" name="" id="" value="ارسال">
    </form>
    </div>
</body>
</html>