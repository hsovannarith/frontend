<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';
?>
<aside class="w-full lg:w-1/4 bg-gray-200 border border-b-2 p-4 shadow-md rounded-lg">
    <h2 class="text-3xl font-bold my-4 border-b-2 border-gray-100 text-red-700">People</h2>
    <div class="mb-4 bg-gray-100 rounded-md ">
        <h3 class="text-red-700 font-bold p-4">People</h3>
        <div class="pl-4 flex items-center space-x-2 p-3 <?php echo ($page == 'faculty') ? 'bg-white' : 'hover:bg-white'; ?> pointer">
            <span class="text-red-600">▶</span>
            <a href="staff.php?page=faculty" class="text-red-600 <?php echo ($page == 'faculty') ? 'font-bold' : ''; ?> no-underline">Faculty</a>
        </div>
        <div class="pl-4 flex items-center space-x-2 p-3 <?php echo ($page == 'staff') ? 'bg-white' : 'hover:bg-white'; ?> pointer">
            <span class="text-red-600">▶</span>
            <a href="staff.php?page=staff" class="text-red-600 <?php echo ($page == 'staff') ? 'font-bold' : ''; ?> no-underline">Staff</a>
        </div>
    </div>
</aside>