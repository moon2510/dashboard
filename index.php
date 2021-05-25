<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <link rel="stylesheet" href="index.css">
   <title>Dashboard</title>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>
   <div class="layout">
      <div class="logonav">
         <h1>Designrrr</h1>
         <div class="navbar">
            <div class="option">
               <div class="dashboard icon">
                  <i class="fas fa-chart-line"></i>
                  <h6>Dashboard </h6>
               </div>
            </div>
            <div class="option">
               <div class="project icon">
                  <i class="fas fa-clipboard-list "></i>
                  <h6>Projects</h6>
               </div>
            </div>
            <div class="option">
               <div class="payment icon">
                  <i class="fas fa-money-check"></i>
                  <h6>Payments</h6>
               </div>
            </div>
            <div class="option">
               <div class="tracking icon">
                  <i class="far fa-clock"></i>
                  <h6>Tracking</h6>
               </div>
            </div>
            
            <div class="option">
               <div class="resource icon">
                  <i class="far fa-lightbulb"></i>
                  <h6>Resources</h6>
               </div>
            </div>
            
         </div>
         <div class="helpcenter">
            <h6>Help Center</h6>
            <h5>Visit Our Help Center</h5>
            <img src="/Image/helpp.png" alt="">

         </div>
      </div>
      <div class="center">
         <div class="header">
            <div class="search">
               <form action="text"><i class="fas fa-search"></i><input type="text" placeholder="Search for projects" ></form>
            </div>
            
            <div class="bell">
               <i class="far fa-bell"></i>
               <img src="/Image/avt.jpg" alt="">
            </div>
            
         </div>
         <div class="chart">
            <div class="timespent">
               <div class="timeflex">
                  <h2>Time Spent On Projects </h2>
                  <li id="active">Active</li>
                  <li id="passive">Passive</li>
               </div>
               
               <div class="spentchart bgr">
                  <table border="0" cellpadding="0" cellspacing="0" role="presentation"
                                    style="border: none; border-collapse: collapse;">
                                    <tr>
                                       <td style="padding:2px; vertical-align:bottom;">
                                          <table class="hour" border="1" 
                                             style=" border: 1;">
                                             <tr>
                                                <th>8 hrs</th>          
                                             </tr>
                                             <tr>
                                                <th>6 hrs</th>
                                             </tr>
                                             <tr>
                                                <th>4 hrs</th>
                                             </tr>
                                          </table>
                                       </td>
                                       <td class="timespentchart" style="padding:2px; vertical-align:bottom;">
                                          <table  border="0" cellpadding="0" cellspacing="0" role="presentation"
                                             style=" border: none; border-collapse: collapse; width:35px;">
                                             <td id="chartout" style="height:138px;">
                                                <div id="chartin" style="height:40px;width: 35px;"></div>
                                             </td>
                                             
                                          </table>
                                          <h4>Mon</h4>
                                       </td>
                                       <td class="timespentchart" style="padding: 2px; vertical-align:bottom;">
                                          <table " border="0" cellpadding="0" cellspacing="0" role="presentation"
                                             style=" border: none; border-collapse: collapse; width:35px;">
                                             <td id="chartout" style="height:110px;">
                                                <div id="chartin" style="height:20px;width: 35px;"></div>
                                             </td>
                                          </table>
                                          <h4>Tue</h4>
                                       </td>
                                       <td class="timespentchart" style="padding: 2px; vertical-align:bottom;">
                                          <table " border=" 0" cellpadding="0" cellspacing="0" role="presentation"
                                             style=" border: none; border-collapse: collapse; width:35px;">
                                             <td id="chartout" style="height:122px;">
                                                <div id="chartin" style="height:55px;width: 35px;"></div>
                                             </td>
                                          </table>
                                          <h4>Wed</h4>
                                       </td>
                                       <td class="timespentchart" style="padding: 2px; vertical-align:bottom;">
                                          <table " border=" 0" cellpadding="0" cellspacing="0" role="presentation"
                                             style=" border: none; border-collapse: collapse; width:35px;">
                                             <td id="chartout" style="height:90px;">
                                                <div id="chartin" style="height:50px;width: 35px;"></div>
                                             </td>
                                          </table>
                                          <h4>Thu</h4>
                                       </td>
                                       <td class="timespentchart" style="padding: 2px; vertical-align:bottom;">
                                          <table " border=" 0" cellpadding="0" cellspacing="0" role="presentation"
                                             style=" border: none; border-collapse: collapse; width:35px;">
                                             <td id="chartout" style="height:140px;">
                                                <div id="chartin" style="height:26px;width: 35px;"></div>
                                             </td>
                                          </table>
                                          <h4>Fri</h4>
                                       </td>
                                       <td class="timespentchart" style="padding: 2px; vertical-align:bottom;">
                                          <table " border=" 0" cellpadding="0" cellspacing="0" role="presentation"
                                             style=" border: none; border-collapse: collapse; width:35px;">
                                             <td id="chartout" style="height:55px;">
                                                <div id="chartin" style="height:15px;width: 35px;"></div>
                                             </td>
                                          </table>
                                          <h4>Sat</h4>
                                       </td>
                                       <td class="timespentchart" style="padding: 2px; vertical-align:bottom;">
                                          <table " border=" 0" cellpadding="0" cellspacing="0" role="presentation"
                                             style=" border: none; border-collapse: collapse; width:35px;">
                                             <td id="chartout" style="height:8px;">
                                                <div id="chartin" style="height:0px;width: 35px;"></div>
                                             </td>
                                          </table>
                                          <h4>Sun</h4>
                                       </td>
                                    </tr>
                                 </table>
               </div>
            </div>
            <div class="completion">
               <h2>Completion Rate</h2>
               <div class="ratechart bgr">
                  <canvas id="myChart"></canvas>
                  <script>
                     var xValues = ["In Progress","Completed"];
                     var yValues = [40,60];
                     var barColors = [
                        "#29088A",
                        "#00aba9"
                     ];
                     new Chart("myChart", {
                        type: "doughnut",
                        data: {
                           labels: xValues,
                           datasets: [{
                              backgroundColor: barColors,
                              data: yValues
                           }]
                        } 
                     });
                  </script>

               </div>
            </div>
         </div>
         <div class="project">
            <h2 id="dif">Your Projects</h2>
            <div class="info">
               <div class="infinis bgr divide">
                  <div>
                     <img id="logo" src="/Image/infinis.png" alt="">
                  </div>
                  
                  <div class="projectname">
                     <div>
                        <h5 id="name">Project Name: Infinis</h5>
                     </div>
                     
                     <div class="progress">
                        <h5 id=gray>Progress:</h5>
                        <h5 id=purple>In Progress</h5>
                     </div>
                     <div class="pay">
                        <h5 id="gray">Payment: </h5>
                        <h5 id="blue">Paid</h5>
                     </div>
                     
                  </div>
               </div>
               <div class="quin bgr divide">
                  <div>
                     <img id="logo" src="/Image/quin1.png" alt="">
                  </div>
                  
                  <div class="projectname">
                     <div>
                        <h5 id="name">Project Name: Quintiles</h5>
                     </div>
                  
                     <div class="progress">
                        <h5 id=gray>Progress:</h5>
                        <h5 id=green>Completed</h5>
                     </div>
                     <div class="pay">
                        <h5 id="gray">Payment: </h5>
                        <h5 id="red">On Hold</h5>
                     </div>
                  
                  </div>
               </div>
               <div class="terra bgr divide">
                  <div>
                     <img id="big" src="/Image/terra.png" alt="">
                  </div>
                  
                  <div class="projectname">
                     <div>
                        <h5 id="name">Project Name: Terra Firma</h5>
                     </div>
                  
                     <div class="progress">
                        <h5 id=gray>Progress:</h5>
                        <h5 id=green>Completed</h5>
                     </div>
                     <div class="pay">
                        <h5 id="gray">Payment: </h5>
                        <h5 id="blue">Paid</h5>
                     </div>
                  
                  </div>
               </div>
            </div>
         </div>
         <div class="datanum">
            <div class="trans">
               <h2>Your Transactions</h2>
               <div class="numtrans bgr">
                  <table border="1">
                     <tr class="rows">
                        <th>Date And Time</th>
                        <th>Payment Method</th>
                        <th>Status</th>
                        <th>Amount</th>
                     </tr>
                     <tr class="row">
                        <th>14.02.2020</th>
                        <th>Master Card</th>
                        <th id="green">Paid</th>
                        <th>+$2840,00</th>
                     </tr>
                     <tr class="row">
                        <th>11.02.2020</th>
                        <th>Pay Pal</th>
                        <th id="red">Pending</th>
                        <th>-$1640,03</th>
                     </tr>
                     <tr class="row">
                        <th>30.01.2020</th>
                        <th>Visa</th>
                        <th id="green">Paid</th>
                        <th>+$2980,00</th>
                     </tr>
                     <tr class="row">
                        <th>14.01.2020</th>
                        <th>Master Card</th>
                        <th id="green">Paid</th>
                        <th id="end">+$5890,00</th>
                     </tr>
                  </table>
               </div>
            </div>
            <div class="income">
               <h2>Income / Expense</h2>
               <div class="numincome bgr ">
                  <div>
                     <h5>Completed Projects</h5>
                     <i class="fas fa-piggy-bank"></i>
                     <h5 id="green">$34.000,00</h5>
                     <h5 id="gray">Total Income</h5>
                  </div>
                  <div>
                     <form action="" class="day">
                        <select name="days">
                           <option value="30days">30 days</option>
                           <option value="10days">10 days</option>
                           <option value="20days">20 days</option>
                           <option value="40days">40 days</option>
                        </select>
                     </form>
                     <i class="far fa-money-bill-alt"></i>
                     <h5 id="red">$6.827,34</h5>
                     <h5 id="gray">Total Expense</h5>
                  </div>
               </div>
            </div>
         </div>
      </div>      
   </div>
</body>
</html>