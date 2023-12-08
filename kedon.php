<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    .header {
      background-color: #fff;
      color: #000;
      padding: 20px;
      text-align: center;
    }

    .medicine-list {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 20px;
    }

    .medicine-item {
      background-color: #f5f5f5;
      padding: 20px;
      margin-bottom: 20px;
    }

    .medicine-item h3 {
      margin-bottom: 10px;
    }

    .button-container {
      display: flex;
      justify-content: center;
      margin-top: 30px;
    }

    .primary-button {
      padding: 10px 20px;
      background-color: #6586E6;
      color: #000;
      border: none;
      cursor: pointer;
    }

    .content {
      padding: 20px;
    }

    .form-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .form-group {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .form-group label {
      margin-right: 20px;
    }

    .form-group input {
      padding: 5px;
    }

    .form-group select {
      padding: 5px;
    }

    .form-row {
      display: flex;
      flex-wrap: wrap;
      margin-bottom: 20px;
    }

    .form-row .form-group {
      flex: 1 1 calc(50% - 5px); /* Chia đôi hàng dọc theo trục x và tạo khoảng cách 5px giữa các form */
    }

    @media (max-width: 600px) {
      .form-row .form-group {
        flex: 1 1 100%; /* Khi độ rộng màn hình nhỏ hơn 600px, hiển thị mỗi form trên một hàng */
      }
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>PHARMACY</h1>
  </div>

  <h1 style="color:#6586E6; text-indent: 10%;">Tiến hành kê đơn</h1>

  <div class="content">
    <div class="form-container">
      <form>
        <div class="form-row">
          <div class="form-group">
            <label for="patient-id">ID bệnh nhân:</label>
            <input type="text" id="patient-id" name="patient-id"> 
          </div>
          <div class="form-group">
            <label for="medicine-name">Tên thuốc:</label>
            <input type="text" id="medicine-name" name="medicine-name">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="quantity">Số lượng:</label>
            <input type="number" id="quantity" name="quantity">
          </div>
          <div class="form-group">
            <label for="dosage">Liều lượng:</label>
            <input type="text" id="dosage" name="dosage">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="form">Dạng thuốc:</label>
            <select id="form" name="form">
              <option value="viên">Viên</option>
              <option value="giọt">Giọt</option>
              <option value="hỗn dịch">Hỗn dịch</option>
              <option value="bột">Bột</option>
            </select>
          </div>
          <div class="form-group">
            <label for="frequency">Tần xuất:</label>
            <input type="text" id="frequency" name="frequency">
          </div>
        </div>
    </form>
        <div class="button-container">
            <a href="chitietdonthuoc.php"><button class="primary-button">Hoàn thành</button></a>
        </div>
      
    </div>
  </div>
</body>
</html>