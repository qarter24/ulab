<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="prod.css">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Poppins:wght@100;400;700;900&family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <div class="banner-container">
    <a href="/">
        <img class="logo " src="images/TTH.png" alt="Telkom Test House Logo">
    </a>
    <div class="search-area">
        <div class="judul">Product Name</div>
    </div>
    <img class="logo telkomlogo" src="images/telkom.png" alt="Telkom Indonesia Logo">
    </div>

   <div class="container-grid">

        <div class="container-image">
            <img src="images\image 4.png" alt="">
            <div class="button">
                <p>Export</p>
            </div>
        </div>

        <div class="container-form">
            <div class="form form-1">
                        <div class="form-header">
                            <p>Data Mentah</p>
                        </div>
                        <div class="form-body">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                        </div>
                    </div>

                    <div class="form form-2">
                        <div class="form-header">
                            <p>Interpolasi</p>
                        </div>
                        <div class="form-body">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                        </div>
                    </div>
                    <div class="form form-3">
                        <div class="form-header">
                            <p>Nilai Koreksi</p>
                        </div>
                        <div class="form-body">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                        </div>
                    </div>
                    <div class="form form-4">
                        <div class="form-header">
                            <p>Hasil Terkoreksi</p>
                        </div>
                        <div class="form-body">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                        </div>
                    </div>
                    <div class="form form-5">
                        <div class="form-header">
                            <p>Mean/2</p>
                        </div>
                        <div class="form-body">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                        </div>
                    </div>
                    <div class="form form-6">
                        <div class="form-header">
                            <p>Final</p>
                        </div>
                        <div class="form-body">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                            <input type="text">
                        </div>
        </div>
    </div>
    </div>

<div class="table-container">
  <table class="styled-table">
    <thead>
      <tr>
        <th>Component</th>
        <th>Unit</th>
        <th>Distribution</th>
        <th>U</th>
        <th>Divider</th>
        <th>Vi</th>
        <th>Ui</th>
        <th>Ci</th>
        <th>UiCi</th>
        <th>(UiCi)²</th>
        <th>(UiCi)⁴/Vi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Data 1</td>
        <td>Unit</td>
        <td>Distribution</td>
        <td>0.26</td>
        <td>2</td>
        <td>-</td>
        <td>0.13</td>
        <td>1</td>
        <td>0.13</td>
        <td>0.169</td>
        <td>0.00E+00</td>
      </tr>
      <tr>
        <td>Data 2</td>
        <td>Unit</td>
        <td>Distribution</td>
        <td>0.26</td>
        <td>2</td>
        <td>-</td>
        <td>0.13</td>
        <td>1</td>
        <td>0.13</td>
        <td>0.169</td>
        <td>0.00E+00</td>
      </tr>
      <!-- Add more rows if needed -->
    </tbody>
    <tfoot>
      <tr class="summary-row">
        <th colspan="9">Sum</th>
        <td>0.2080</td>
        <td>0.169</td>
      </tr>
      <tr class="summary-row">
        <th colspan="9">Combined Uncertainty, Uc</th>
        <td>0.2080</td>
        <td>0.169</td>
      </tr>
      <tr class="summary-row">
        <th colspan="9">Effective Degrees of Freedom, Veff</th>
        <td>0.14422</td>
        <td></td>
      </tr>
      <tr class="summary-row">
        <th colspan="9">Coverage Factor, k</th>
        <td>2</td>
        <td></td>
      </tr>
      <tr class="summary-row kcu">
        <th colspan="9">Expanded Uncertainty, U = kUc</th>
        <td>0.29</td>
        <td></td>
      </tr>
    </tfoot>
  </table>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
