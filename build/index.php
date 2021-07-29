<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width", initial-scale=1.0>
    <link rel="stylesheet" href="styles.css">
    <title>track your time</title>

    <!-- Importing jquery cdn -->
	<link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<!-- JavaScript function to display the calendar -->
<script language="javascript">
    $(document).ready(function () {
        $("#txtdate").datepicker({
            showOn: "button",
            // Button image stored on local device
            buttonImage: "./images/calendar.gif",	
				buttonImageOnly: true
        });
    });
</script>
</head>
<body>
<div class="flex flex-row justify-between content-center h-174 p-20 mx-5 my-10">
    <div>
        <button onclick="myFunction0()" class="ml-72 bg-transparent hover:bg-blue-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-black-500 hover:border-transparent rounded">
            <img src="images/start.png" alt="back arrow">
        </button>
        <button onclick="myFunction1()" class="bg-transparent hover:bg-blue-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-black-500 hover:border-transparent rounded">
            <img src="images/close.png" alt="> front arrow">
        </button>
    </div>
    <div class="-ml-11">
        <h1 class="text-3xl" id="tday">
            Today:<span id="tdate"></span>                      
        </h1>
        <script> 
            
         </script> 
    </div>
 <!-- CALENDER BUTTON -->  
    <div>
        <button class="bg-transparent hover:bg-blue-500 text-black-700 font-semibold hover:text-white py-3 px-5 border border-black-500 hover:border-transparent rounded">
            <input id="txtdate" type="hidden">
        </button>
 <!-- DAY and WEEK BUTTON -->       
        <button onclick="myFunction2()" class="bg-transparent hover:bg-blue-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-black-500 hover:border-transparent rounded">Day</button>
        <button onclick="myFunction3()" class="mr-72 bg-transparent hover:bg-blue-500 text-black-700 font-semibold hover:text-white py-2 px-4 border border-black-500 hover:border-transparent rounded">Week</button>
    </div>
</div>

 <!-- ADD BUTTON -->

    <div class="ml-64 -mb-11">  
        <button class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full">
            <img src="images/add.png" alt="add icon">
        </button>
  
        <!--Modal-->
        <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
            <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
                <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
      
                    <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
                        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                        <span class="text-sm">(Esc)</span>
                    </div>

                    <!-- Add margin if you want to see some of the overlay behind the modal-->
                    <div class="modal-content py-4 text-left px-6">
                    <!--Title-->
                        <div class="flex justify-between items-center pb-3">
                            <p class="text-2xl font-bold">New Time Entry</p>
                            <div class="modal-close cursor-pointer z-50">
                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                            </svg>
                        </div>
                    </div>
                    <!--Body-->
                    <fieldset>
                        <form name="frmContact" class="needs-validation " method="post" action="add.php">
                        <p>
                        <label for="Name">Project Name </label>
                        <input type="text" class="form-control" name="txtName" id="txtName" placeholder="Example Client" value="" required>
                        </p>
                        <p>
                        <label for="Task">Task</label>
                        <input type="text"  class="form-control" name="txtTask" id="txtTask" placeholder="Example Design" value="" required>
                        </p>
                        <p>
                        <label for="Notes">Notes</label>
                        <input name="txtNotes" class="form-control"  id="txtNotes"  placeholder="Notes optional">
                        </p> 
                        <p>
                        <label for="WorkTime">Work Time</label>
                        <input type="text"  class="form-control" name="txtWorktime" id="txtWorktime" placeholder="hrs:min:sec" value="" required>
                        </p>    

                    <!--Footer-->
                    <div class="flex justify-end pt-2">
                        <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">
                            <input type="submit" name="Submit" id="Submit" value="Submit"  class="btn btn-primary btn-lg btn-block">
                        </button>
                    </div>
                        </form>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    
    <div class="flex flex-col w-2/4 h-80 mx-50 -mt-36 mx-96 border-4 border-gray-400 rounded-md">
        <div class="flex flex-row border-b-4 border-gray-400 ">
            <a class="flex flex-col h-14 w-24 border-r-4 border-gray-400" href="/time/day/2021/7/5/3857548">
                <button>
                    <div class="time-day-label">M</div>
                    <div class="time-day-total">0:00</div>
                </button>
            </a>
            <a class="flex flex-col h-14 w-24 border-r-4 border-gray-400" href="/time/day/2021/7/6/3857548">
                <button>
                    <div class="time-day-label">T</div>
                    <div class="time-day-total">0:00</div>
                </button>
            </a>
            <a class="flex flex-col h-14 w-24 border-r-4 border-gray-400" href="/time/day/2021/7/7/3857548">
                <button>
                    <div class="time-day-label">W</div>
                    <div class="time-day-total">0:00</div>
                </button> 
            </a>
            <a class="flex flex-col h-14 w-24 border-r-4 border-gray-400" href="/time/day/2021/7/8/3857548">
                <button>
                    <div class="time-day-label">Th</div>
                    <div class="time-day-total">0:00</div>
                </button>
            </a>
            <a class="flex flex-col h-14 w-24 border-r-4 border-gray-400" href="/time/day/2021/7/9/3857548">
                <button>    
                    <div class="time-day-label">F</div>
                    <div class="time-day-total">0:00</div>
                </button>
            </a>
            <a class="flex flex-col h-14 w-24 border-r-4 border-gray-400" href="/time/day/2021/7/10/3857548">
                <button>   
                    <div class="time-day-label">S</div>
                    <div class="time-day-total">0:00</div>
                </button>
            </a>
            <a class="flex flex-col h-14 w-24 border-r-4 border-gray-400" href="/time/day/2021/7/11/3857548">
                <button>
                    <div class="time-day-label">Su</div>
                    <div class="time-day-total">0:00</div>
                </button>
            </a>
            <a class="flex flex-col h-14 w-24">
                <button>
                    <div id="day-view-week-nav-total">Total:</div>
                    <div><strong class="test-week-total">0:00</strong></div>
                </button>
            </a>      

        </div>
        <div class="text-center overflow-auto">
        <iframe src="display.php" title="description" class="h-96 w-full" ></iframe>
        </div>

        
        <script>
               const d= new Date();
            document.getElementById("tdate").innerHTML = d.toDateString();

            function myFunction0(){
                const yesterday = new Date();
                yesterday.setDate(new Date().getDate() - 1);
                document.getElementById("tdate").innerHTML = yesterday.toDateString();
                console.log(tomorrow);
            }

            function myFunction1(){
                const tomorrow = new Date();
                tomorrow.setDate(new Date().getDate() + 1);
                document.getElementById("tdate").innerHTML = tomorrow.toDateString();
                console.log(tomorrow);
            }

            function myFunction2(){
                const tomorrow = new Date();
                tomorrow.setDate(new Date().getDate());
                document.getElementById("tdate").innerHTML = tomorrow.toDateString();
                console.log(tomorrow);
            }

            function myFunction3(){
                const tomorrow = new Date();
                tomorrow.setDate(new Date().getDate() + 7);
                document.getElementById("tdate").innerHTML = tomorrow.toDateString();
                console.log(tomorrow);
            }
               
               
               
               
               var openmodal = document.querySelectorAll('.modal-open')
                for (var i = 0; i < openmodal.length; i++) {
                openmodal[i].addEventListener('click', function(event){
                    event.preventDefault()
                    toggleModal()
                })
                }
                
                const overlay = document.querySelector('.modal-overlay')
                overlay.addEventListener('click', toggleModal)
                
                var closemodal = document.querySelectorAll('.modal-close')
                for (var i = 0; i < closemodal.length; i++) {
                closemodal[i].addEventListener('click', toggleModal)
                }
                
                document.onkeydown = function(evt) {
                evt = evt || window.event
                var isEscape = false
                if ("key" in evt) {
                    isEscape = (evt.key === "Escape" || evt.key === "Esc")
                } else {
                    isEscape = (evt.keyCode === 27)
                }
                if (isEscape && document.body.classList.contains('modal-active')) {
                    toggleModal()
                }
                };
                
                
                function toggleModal () {
                const body = document.querySelector('body')
                const modal = document.querySelector('.modal')
                modal.classList.toggle('opacity-0')
                modal.classList.toggle('pointer-events-none')
                body.classList.toggle('modal-active')
                }
                
                
            </script>        
</body>
</html>