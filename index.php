<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Management System</title>
    <!--======= Styles =======-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--======= Ionicons =======-->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!--======= Chart.js =======-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    
<!-- ================================== Navigation ============================================= -->
<div class="container">
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="school-outline"></ion-icon></span>
                    <span class="title">Kennesaw State Alumni</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="managealumni.html">
                    <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                    <span class="title">Alumni</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><ion-icon name="business-outline"></ion-icon></span>
                    <span class="title">Brand Name</span>
                </a>
            </li>
            <li>
                <a href="Donations.html">
                    <span class="icon"><ion-icon name="heart-circle-outline"></ion-icon></span>
                    <span class="title">Donation</span>
                </a>
            </li>
            <li>
                <a href="sign-out.html">
                    <span class="icon"><ion-icon name="exit-outline"></ion-icon></span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<!--========= Main Content ========-->
<div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <div class="search">
            <label>
                <ion-icon name="search-outline"></ion-icon>
                <input type="text" placeholder="Search">
            </label>
        </div>
        <div class="user">
            <ion-icon name="person-circle-outline"></ion-icon>
        </div>
    </div>
    <!-- Cards Section -->
    <div class="cardBox">
        <!-- Donations Card -->
        <div class="card">
        <div class="Donations">
            <div class="cardHeader">
        <a href="Donations.html" class="card-link">
                <ion-icon name="heart-circle-outline"></ion-icon></div>
                <div><h2>Donations</h2></div>
                    <div class="numbers"></div>
                    <div class="cardName">Donations</div>
                <div class="chart-container">
                    <canvas id="donationsChart"></canvas>
                 </div>
                </div>
            </div>
        </a>
       
        <!-- Alumni Card -->
        <div class="card">
    <div class="Alumni">
        <div class="cardHeader">
            <div class="headerContent">
                <h2>Alumni</h2>
                <div class="iconBx"><ion-icon name="people-outline"></ion-icon></div>
            </div>
            <a href="managealumni.html" class="card-link">
                <div class="numbers">120</div>
            </a>
        </div>
    </div>
</div>

    <!-- Recent Graduates Section -->
    <div class="card">
        <div class="recentGraduates">
            <div class="cardHeader">
                <h2>Recent Graduates</h2>
                <a href="#" class="btn">View All</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Degree</td>
                        <td>Employment</td>
                        <td>Skillset</td>
                        <td>Address</td>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Row (Replace with dynamic content from backend) -->
                    <tr>
                        <td>John Doe</td>
                        <td>Bachelor's in Computer Science</td>
                        <td>Software Engineer</td>
                        <td>Java, Python, SQL</td>
                        <td>New York, USA</td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>Master's in Business Administration</td>
                        <td>Business Analyst</td>
                        <td>Financial Analysis, Market Research</td>
                        <td>Los Angeles, USA</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!--========== Scripts ============-->
<script src="assets/js/main.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const donationsCtx = document.getElementById('donationsChart').getContext('2d');
        const donationsData = [5, 10, 15, 20, 25, 30];
        const totalDonations = donationsData.reduce((a, b) => a + b, 0);

        const donationsChart = new Chart(donationsCtx, {
            type: 'doughnut',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                datasets: [{
                    label: 'Donations',
                    data: donationsData,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.7)',
                        'rgba(54, 162, 235, 0.7)',
                        'rgba(255, 206, 86, 0.7)',
                        'rgba(75, 192, 192, 0.7)',
                        'rgba(153, 102, 255, 0.7)',
                        'rgba(255, 159, 64, 0.7)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '70%', // Adjust the cutout percentage to control the size of the doughnut
                plugins: {
                    legend: {
                        display: false // Hide the legend if not needed
                    } 
                    }
                    },
                    plugins: [{
                id: 'textCenter',
                beforeDraw: function(chart) {
                    const width = chart.width,
                        height = chart.height,
                        ctx = chart.ctx;
                    ctx.restore();
                    const fontSize = (height / 100).toFixed(2);
                    ctx.font = fontSize + "em sans-serif";
                    ctx.textBaseline = "middle";
                    const text = totalDonations,
                        textX = Math.round((width - ctx.measureText(text).width) / 2),
                        textY = height / 2;
                    ctx.fillText(text, textX, textY);
                    ctx.save();
                }
            }]
        });
    });
</script>                  
<script>
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');

    toggle.onclick = function() {
        navigation.classList.toggle('active');
        main.classList.toggle('active');
    }
</script>
</body>
</html>