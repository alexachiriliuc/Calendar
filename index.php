
<?php require_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/b61ceea7f4.js" crossorigin="anonymous"></script>

    <title>Title</title>
</head>
<body>
<div class="container">

    <div class="left_side">
        <button id = "create_event" class = "create_event" onclick ="eventFunction()">
            <i class="fa-sharp fa-solid fa-plus plus"> </i>
            <span class="title">Создать</span>
            <i class="fa-sharp fa-solid fa-caret-down caret"></i>
        </button>

        <div id = "myAlert" class="alert-content">
            <button class="btn_item">Мероприятие</button>
            <button class="btn_item" >Задача</button>

        </div>

        <script>
            function eventFunction(){
                document.getElementById("myAlert").classList.toggle("show");
            }

        </script>

        <div class="calendar">
            <div class="month_slider">
                <span class="month"> Декабрь 2022</span>
                <span class="angle">
                   <i class="fa-sharp fa-solid fa-angle-left"></i>
                <i class="fa-solid fa-angle-right"></i>
                </span>
            </div>

            <table id="date_box" class="date_box">


            </table>
            <script>
                let days = document.querySelector('#date_box');
                let arr = ["Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Вс",];

                let dates = document.querySelector('#date_box');
                let arr2 = [];

                fillRow(days, arr);
                fillTable(dates, arr2);

                function fillTable(date_box) {

                    for (let i = 1; i <= 31;i++) {
                        let tr= document.createElement('tr');
                        let td = document.createElement('td')
                            td.innerHTML = i;
                            tr.appendChild(td);
                        date_box.appendChild(tr);
                        }
                }

                function fillRow(date_box, arr) {
                    for (let i = 0; i < arr.length; i++) {
                        let tr = document.createElement('tr');
                        let td= document.createElement('td')
                            td.innerHTML = arr[i];

                        tr.appendChild(td);
                        date_box.appendChild(tr);
                    }
                }
            </script>

            <div class="search">
                <label for="search"></label><input class = "input_search " id="search" type="text" placeholder="Поиск людей" onclick = "searchFunction()">

                <i class="fa-solid fa-user-group glass">
                </i>
            </div>

            <div id="searchAlert" class="list_content">
                <div class="items">
                    <span class = "content_item">name1 </span>
                    <span class = "content_item">name2 </span>
                    <span class = "content_item">name3 </span>
                    <span class = "content_item">name4 </span>

                </div>

            </div>


            <script>

                function searchFunction(){
                    document.getElementById("searchAlert").classList.toggle("show");
                }

            </script>





            <div class="my_calendar">

            </div>

            <div class="others">

            </div>

        </div>

    </div>

    <!-- ===================right_side==================-->

     <div class="right_side" >

         <button id="signup" class = "signup" onclick="signupFunction()">
             <span class="title">Войти</span>
         </button>

         <div class="days"></div>
         <div class="hours"></div>

     </div>

    <script>
        function signupFunction(){
            document.getElementById("signup").classList.toggle("show");

        }
    </script>

    <script>
        let columns = document.querySelector('.days');
        let rows = document.querySelector('.hours');
        fillColumns ();
        fillRows();
        function fillColumns (){
            for (let i=1; i<=7; i++){
                let line = document.createElement('div');
                line.classList.add('vertical');
                columns.appendChild(line);
            }
        }
        function fillRows(){
            for (let i=1; i<=24;i++){
                let line = document.createElement('div');
                line.classList.add('horizontal');
                rows.appendChild(line);

            }
        }

    </script>


 </div>

 </body>
 </html>