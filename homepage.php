<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="container">
        <div class="todo-app">  
            <h2>TO-DO LIST <img src="images (2).png" ></h2>
            <div class="row">
                <input type="text" id="input-box" placeholder="Add your text">
                <button onclick="addTask()">Add</button>
            </div>
            <ul id="list-container">
                <!--<li class="checked  ">Task 1</li>
                <li>Task 2</li>
                <li>Task 3</li>-->
            </ul>
            
        </div>
    </div>
    <script src="script.js"></script>
</body> 
</html>