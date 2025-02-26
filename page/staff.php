<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
    <?php
    include "../component/Home/navbar.php";
    ?>
    <div class="max-w-screen-xl mx-auto my-4 p-4">
        <div class="flex flex-col lg:flex-row gap-6">
            <!-- Left side -->
             <?php
             include "../component/People/leftside.php";
             ?>

            <!-- Right side -->
            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 'faculty';
            if($page == 'staff'){
                include "../component/People/staffRightSide.php";
            }else if($page == 'faculty'){
                include "../component/People/facultyRightSide.php";
            }
            ?>

        </div>
    </div>
    <?php
    include "../component/Home/footer.php";
    ?>

<body>

</body>

</html>