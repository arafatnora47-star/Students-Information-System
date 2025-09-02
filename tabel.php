<html>
<head>
        <title>Students Table</title>
 <!--Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
 <!-- bg shadow-->
<body  class="bg-light">




     <!--كلاس بيخلي الجدول داخل صفحة بفراغات على جنب -->
<div class="container mt-5">

     <!-- مربع رسالة (معلومة)-->
    <div class="alert alert-info text-center fw-bold shadow-sm">
        Welcome To Everyone</div>

<div class="container mt-5">
   
 <!-- البحث عن اسم او رقم الطالب -->
            <form method="GET" class="mb-3 text-center">
                <input type="text" name="search" 
                       value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>" 
                       placeholder="ابحث عن اسم او رقم الطالب" 
                       style="width:200px; padding:5px;">
                <button type="submit" class="btn btn-sm btn-primary">بحث</button>
            </form>
        
         <!-- card بيحول الديف لصندوق وعمل تنسيق واضافة الوان وخلفية-->
        <div class="card shadow-lg">
        <div class="card-header bg-primary text-white fw-bold">
            Students List
        </div>
        <div class="card-body">
            <div class="table-responsive">

            <table class="table table-bordered table-striped table-hover text-center align-middle mb-0">
    <thead class="table-dark">
    <tr>
        <td>#</td>
        <td>stdNo</td>
        <td>stdName</td>
        <td>stdEmail</td>
        <td>stdGAP</td> 
    </tr>
    </thead>
</div>
</div>
</div>


<?php
    $students = [
[
 
'stdNo' => '20003',
'stdName' => 'Ahmed Ali', 'stdEmail' => 'ahmed@gmail.com', 'stdGAP' => 88.7
], [
'stdNo' => '30304',
'stdName' => 'Mona Khalid', 'stdEmail' => 'mona@gmail.com', 'stdGAP' => 78.5
], [
'stdNo' => '10002',
'stdName' => 'Bilal Hmaza', 'stdEmail' => 'bilal@gmail.com', 'stdGAP' => 98.7
], [
'stdNo' => '10005',
'stdName' => 'Said Ali', 'stdEmail' => 'said@gmail.com', 'stdGAP' => 98.7
], [
'stdNo' => '10007',
'stdName' => 'Mohammed ahmed', 'stdEmail' => 'mohamed@gmail.com', 'stdGAP' => 98.7
]
];

//يتحقق إذا المستخدم كتب اشي في مربع البحث ويمر على كل عنصر في المصفوفة
// بياخد الكلمة اللي المستخدم كتبها في مربع البحث ويصفي المصفوفة
if (isset($_GET['search']) && $_GET['search'] != '') {
    $search = strtolower($_GET['search']);
    $students = array_filter($students, function($student) use ($search) {
        return strpos(strtolower($student['stdName']), $search) !== false 
            || strpos(strtolower($student['stdNo']), $search) !== false;
    });
}
?>


    <?php 
    $x = 1;
    foreach($students as $student){?>
    <tr>
        <td>
            <?php echo $x++;?>
        </td>
        <td>
            <?php echo $student["stdNo"] ?>
        </td>
        <td>
            <?php echo $student["stdName"] ?>
        </td>

        <td>
            <?php echo $student["stdEmail"] ?>
        </td>
        
        <td>
            <?php echo $student["stdGAP"] ?>
        </td>
    </tr>

    <?php }?>


    <tr>
         <!--تحسب عدد العناصر داخل المصفوفة -->
        <td colspan = "5"> <strong> students number : <?php echo count($students); ?></strong></td>

    </tr>
    

</table>

 
    </body>
</html>





















