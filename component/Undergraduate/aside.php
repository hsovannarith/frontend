<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';
?>
<aside class="w-full lg:w-1/4 bg-gray-200 border border-b-2 p-4 shadow-md rounded-lg">
    <h2 class="text-3xl font-bold my-4 border-b-2 border-gray-100 text-red-700">Academics</h2>
    <div class="mb-4 bg-gray-100 rounded-md ">
        <h3 class="text-red-700 font-bold p-4">Undergraduate</h3>
        <div class="pl-4 flex items-center space-x-2 p-3 <?php echo ($page == 'introduction') ? 'bg-white' : 'hover:bg-white'; ?> pointer">
            <span class="text-red-600">▶</span>
            <a href="undergraduate.php?page=introduction" class="text-red-600 <?php echo ($page == 'introduction') ? 'font-bold' : ''; ?> no-underline">Introduction</a>
        </div>
        <div class="pl-4 flex items-center space-x-2 p-3 <?php echo ($page == 'background') ? 'bg-white' : 'hover:bg-white'; ?> pointer">
            <span class="text-red-600">▶</span>
            <a href="undergraduate.php?page=background" class="text-red-600 <?php echo ($page == 'background') ? 'font-bold' : ''; ?> no-underline">Background</a>
        </div>
        <div class="pl-4 flex items-center space-x-2 p-3 <?php echo ($page == 'admission') ? 'bg-white' : 'hover:bg-white' ?> pointer">
            <span class="text-red-600">▶</span>
            <a href="undergraduate.php?page=admission" class="text-red-600 <?php echo ($page == 'admission') ? 'font-bold' : ''; ?> no-underline">Admission</a>
        </div>
        <div class="pl-4 flex items-center space-x-2 p-3 <?php echo ($page == 'assessment') ? 'bg-white' : 'hover:bg-white' ?> pointer">
            <span class="text-red-600">▶</span>
            <a href="undergraduate.php?page=assessment" class="text-red-600 <?php echo ($page == 'assessment') ? 'font-bold' : ''; ?> no-underline">Assessment</a>
        </div>
        <div class="pl-4 flex items-center space-x-2 p-3 <?php echo ($page == 'curriculum') ? 'bg-white' : 'hover:bg-white' ?> pointer">
            <span class="text-red-600">▶</span>
            <a href="undergraduate.php?page=curriculum" class="text-red-600 <?php echo ($page == 'curriculum') ? 'font-bold' : ''; ?> no-underline">Curriculum</a>
        </div>
        <div class="pl-4 flex items-center space-x-2 p-3 <?php echo ($page == 'course-description') ? 'bg-white' : 'hover:bg-white' ?> pointer">
            <span class="text-red-600">▶</span>
            <a href="undergraduate.php?page=course-description" class="text-red-600 <?php echo ($page == 'course-description') ? 'font-bold' : '' ?> no-underline">Course Description</a>
        </div>
    </div>
</aside>