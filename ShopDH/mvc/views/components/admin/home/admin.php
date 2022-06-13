 <!-- Begin Page Content -->
 <?php 
  $month = json_decode($data['salesMonth']);
  $year = json_decode($data['salesYear']);
  $customer = json_decode($data['countCustomer']);
  $staff = json_decode($data['countStaff']);
 ?>
 <div class="container-fluid statistical">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h1 mb-0" style="color: wheat; text-align: left; font-size: 1.5rem">Thống kê doanh thu</h1>
   </div>

   <!-- Content Row -->
   <div class="overview-main">
     <div class="overview-wrap">
       <div class="filter-date-wrap">
         <form class="filter-choose-date" onsubmit="return false">
           <div>
             <div class="from-date">
               <label for=""> Từ ngày </label>
               <input type="date" class="choose-date" required>
             </div>
             <div class="next-date">
               <label for=""> Đến ngày </label>
               <input type="date" class="choose-date" required>
             </div>
           </div>
           <button type="submit"> Xem kết quả </button>
         </form>
         <select name="" id="select-date">
           <option value="week"> Tuần này </option>
           <option value="month"> Tháng này </option>
           <option value="quarter"> Quí này </option>
           <option value="year"> Năm này </option>
         </select>
       </div>
       <div class="chart-body">
         <div class="chart-wrap">
           <canvas id="myChart" width="600" height="200"></canvas>
         </div>
         <h1 class="h1 mb-0" style="color: wheat; text-align: left; font-size: 1.5rem">Thống kê số lượng, đơn hàng</h1>
         <div class="chart-wrap" style="margin-top: .5rem;">
           <canvas id="myChart1" width="600" height="200"></canvas>
         </div>
         <!--  <div class="annotation-wrap">
           <div class="annotation">
             <div class="anno-collect">
               <div class="circle-wrap">
                 <div class="circle"></div>
                 <small>Thu</small>
               </div>
               <p class="cirle-collect"></p>
             </div>
             <div class="anno-spending">
               <div class="circle-wrap">
                 <div class="circle-2"></div>
                 <small>Chi</small>
               </div>
               <p class="cirle-spending"></p>
             </div>
             <hr>
             <h3 class="total-finance">
               </>
           </div>
         </div> -->
       </div>
     </div>

   </div>

   <div class="row" style="margin-top: 2rem;">

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-success shadow h-100 py-2 statis-cell">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Danh thu tháng này</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($month->total) ?> VNĐ</div>
             </div>
             <div class="col-auto">
               <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-success shadow h-100 py-2 statis-cell">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Danh thu năm nay</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($year->total) ?> VNĐ</div>
             </div>
             <div class="col-auto">
               <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-primary shadow h-100 py-2 statis-cell">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Khách hàng</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $customer->total ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-calendar fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-primary shadow h-100 py-2 statis-cell">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nhân viên</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $staff->total ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-calendar fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>


   </div>
 </div>
 </div>
 <!-- /.container-fluid -->