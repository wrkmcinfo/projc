<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        .select {
            font-size: 50px;
            text-align: right;
          

        }

        .s {
            font-size: 30px;
            text-align: right;
            padding-right: 20px;
            margin: 0px 10px;
           color: rgb(37, 20, 190);
           
        }
        .n {
            font-size: 30px;
            text-align: right;
            padding-right: 20px;
            margin: 0px 20px;
            color: rgb(37, 20, 190);
           
        }
        .d {
            font-size: 30px;
            text-align: right;
            padding-right: 20px;
            margin: 0px 20px;
            color: rgb(37, 20, 190);
           
        }
        .div {
            font-size: 30px;
            text-align: right;
            padding-right: 50px;
            margin: 0px 50px;
            color: rgb(37, 20, 190);
           
        }
      
    </style>



</head>
</style>

<body>
   
<div>
   
    <br><br><br><br>
     
    <div class="selsct">
        <div class="s" >
            <select name="الفرقة الدراسية" id="الفرقة الدراسية">
                <option value=" ">  </option>
            <option value="الفرقة الاولي"> الفرقة  الاولي</option>
            <option value="الفرقة الثانية">الفرقة الثانية</option>
            <option value="الفرقة الثالثة">الفرقة  الثالثة</option>
            <option value="الفرقة الرابعة">الفرقة  الرابعة</option>
        </select> 
          <label for="fname">: الفرقة الدراسية </label>

        </div>
       
        <br>
        <div class="n">
        <select name="القسم " id=" ">
         <option value=" ">  </option>
        <option value="القسم "> تكنولوجيا التعليم </option>
        <option value="القسم">تربية فنية </option>
        <option value="القسم ">اقتصاد منزلي </option>
        
    </select>     <bre><label for="fname">: القسم  </label></bre>
    
   </div><br>
   <div class="d">
    <select name="التاريخ " id=" ">
    <option value=" ">  </option>
    <option value=" 1"> يناير </option>
    <option value=" 2"> فبراير </option>
    <option value=" 3"> مارس </option>
    <option value=" 4"> إبريل </option>
    <option value=" 5"> مايو </option>
    <option value=" 6"> يونيو </option>
    <option value=" 7"> يوليو </option>
    <option value=" 8"> أغسطس </option>
    <option value=" 9"> سبتمبر </option>
    <option value=" 10"> اكتوبر </option>
    <option value=" 11"> نوفمبر </option>
    <option value=" 12"> ديسمبر </option>
    
</select>     <bre><label for="fname">: التاريخ  </label></bre>

</div>
<div class="s">
<input type="text" id="lname" name="lname">
        <label for="lname">: اسم المادة</label>
    </div><br>
    <div class="div">

        <a href="https://www.google.com.eg/"><input type="submit" value="دخول">
        </a><br>
    </div>

   
</div>

</body>

</html>