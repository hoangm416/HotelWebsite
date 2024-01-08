<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản lý - Lịch Sử Đặt Phòng</title>
    <?php require('inc/links.php'); ?>
</head>
<body class="bg-light">

    <?php require('inc/header.php'); ?>


    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
               <h3 class="mb-4"> Lịch Sử Đặt Phòng </h3>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <div class="text-end mb-4">
                            <input type="text" id="search_input" oninput="get_bookings(this.value)" class="form-control shadow-none w-25 ms-auto" placeholder="Tìm kiếm...">
                        </div> 
            
                        <div class="table-responsive">
                            <table class="table table-hover border" style="min-width: 1200px;">
                                <thead class="sticky-top">
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Thông tin người dùng</th>
                                        <th scope="col">Thông tin phòng</th>
                                        <th scope="col">Thông tin đặt phòng</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Hành động</th>
                                    </tr>
                                </thead>
                                <tbody id="table-data">
                                </tbody>
                            </table>
                        </div>

                        <nav>
                            <ul class="pagination mt-3" id="table-pagination">
                            </ul>
                        </nav>
                    
                    </div>
                </div>

            

            </div>
        </div>
    </div>



    <?php require('inc/scripts.php'); ?>
    <script src="scripts/booking_records.js"></script>
</body>
</html>