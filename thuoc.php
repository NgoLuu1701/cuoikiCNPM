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
      grid-template-columns: repeat(2, 1fr); /* Tạo lưới 2 cột */
      grid-gap: 20px; /* Khoảng cách giữa các ô trong lưới */
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

    .footer {
        padding: 20px;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>PHARMACY</h1>
  </div>

  <h1 style="color:#6586E6; text-indent: 10%;">Thuốc</h1>

  <div class="medicine-list">
    <div class="medicine-item">
      <h3>Paracetamol</h3>
      <p>500mg-1000mg mỗi 4-6h<br>
        (không quá 4 lần trong 24h)
      </p>
    </div>

    <div class="medicine-item">
      <h3>Omeprazole</h3>
      <p>* 250mg-500mg mỗi 8h<br>
        * Hoặc 500mg-875mg mỗi 12h<br>
        * Tùy thuộc vào bệnh nền và chỉ định
      </p>
    </div>

    <div class="medicine-item">
      <h3>Ibuprofen</h3>
      <p>500mg-1000mg mỗi 4-6h<br>
        (không quá 4 lần trong 24h)
      </p>
    </div>

    <div class="medicine-item">
      <h3>Simvastatin</h3>
      <p>* 5mg-40mg mỗi ngày(vào buổi tối)<br>
        * Tùy thuộc vào chỉ định của bác sĩ
      </p>
    </div>

    <div class="medicine-item">
      <h3>Amoxicillin</h3>
      <p>* 20mg mỗi ngày (trước bữa ăn)<br>
        Tùy thuộc vào chỉ định của bác sĩ
      </p>
    </div>

    <div class="medicine-item">
      <h3>Fluoxetine</h3>
      <p>500mg-1000mg mỗi 4-6h<br>
        (không quá 4 lần trong 24h)
      </p>
    </div>
  </div>

  <div class="footer">
    <div class="button-container">
        <a href="kedon.php"><button class="primary-button">Kê đơn</button></a>
      </div>
  </div>
</body>
</html>