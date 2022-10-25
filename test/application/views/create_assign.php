<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create assign</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


    <div class="container">
        <form action="<?php echo base_url() . "index.php/Teacher/set_data_assign" ?>" method="post">
         <!-- ส่งไปที่ cointroller -->
            <div class="mb-3 mt-3">
                <label for="text" class="form-label">ชื่องาน:</label>
                <input type="text" class="form-control" id="email" placeholder="" name="assign_name">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">รายละเอียด:</label>
                <input type="text" class="form-control" id="pwd" placeholder="" name="assign_detail">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">นิสิต:</label>
                <input type="text" class="form-control" id="pwd" placeholder="" name="nisit_list">
            </div>


            <div class="mb-3">
                <label for="pwd" class="form-label">วันที่หมด:</label>
                <input type="date" class="form-control" id="pwd" placeholder="" name="date_end">
            </div>

            <button type="submit" class="btn btn-primary">ตกลง</button>
        </form>
    </div>




</body>

</html>