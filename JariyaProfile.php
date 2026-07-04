<!
Lab          : พี่กินก๊งน้องกินก๊ง X Tokyo Driff
File         : JariyaProfile.php
Created      : 3-07-69
Last Updated : 3-07-69
Author       : ถึงสุขสรรค์ ช่วยเพิ่มคำนำหน้าชื่อให้หน่อยลืมใส่น่ะ อิอิ

<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jariya Profile</title>

<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Kanit',sans-serif;
}

body{
    min-height:100vh;
    background:
        radial-gradient(circle at top left,#06b6d4 0%,transparent 25%),
        radial-gradient(circle at bottom right,#8b5cf6 0%,transparent 25%),
        linear-gradient(135deg,#020617,#0f172a,#111827);
    color:white;
    padding:40px 20px;
}

.container{
    max-width:1200px;
    margin:auto;
}

.profile-card{
    background:rgba(255,255,255,0.04);
    border:1px solid rgba(255,255,255,0.08);
    backdrop-filter:blur(20px);
    border-radius:30px;
    overflow:hidden;
    box-shadow:
        0 0 50px rgba(0,255,255,.08),
        0 20px 60px rgba(0,0,0,.45);
}

.hero{
    padding:70px 50px;
    text-align:center;
    background:
        linear-gradient(
            135deg,
            rgba(6,182,212,.15),
            rgba(139,92,246,.12)
        );
}

.hero h1{
    font-size:4rem;
    font-weight:700;
    background:linear-gradient(
        90deg,
        #67e8f9,
        #ffffff,
        #c4b5fd
    );
    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.hero h2{
    margin-top:10px;
    font-size:1.3rem;
    font-weight:400;
    color:#cbd5e1;
}

.hero .line{
    width:120px;
    height:4px;
    margin:25px auto;
    border-radius:20px;
    background:linear-gradient(
        90deg,
        #22d3ee,
        #8b5cf6
    );
}

.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(350px,1fr));
    gap:25px;
    padding:35px;
}

.card{
    background:rgba(255,255,255,0.03);
    border:1px solid rgba(255,255,255,0.06);
    border-radius:22px;
    padding:25px;
    transition:.35s;
}

.card:hover{
    transform:translateY(-8px);
    border-color:#22d3ee;
    box-shadow:0 10px 30px rgba(34,211,238,.15);
}

.card h3{
    color:#67e8f9;
    margin-bottom:18px;
    font-size:1.3rem;
}

.info{
    margin-bottom:12px;
    font-size:1.05rem;
}

.label{
    color:#fbbf24;
    font-weight:600;
}

.about{
    line-height:1.9;
    color:#dbeafe;
}

.hobby{
    display:flex;
    flex-wrap:wrap;
    gap:12px;
}

.badge{
    padding:10px 18px;
    border-radius:50px;
    background:linear-gradient(
        135deg,
        #0891b2,
        #7c3aed
    );
    color:white;
    font-size:0.95rem;
}

.contact a{
    color:#67e8f9;
    text-decoration:none;
}

.contact a:hover{
    color:#fbbf24;
}

.footer{
    text-align:center;
    padding:25px;
    border-top:1px solid rgba(255,255,255,.05);
    color:#94a3b8;
}

.highlight{
    color:#22d3ee;
    font-weight:600;
}

@media(max-width:768px){

    .hero{
        padding:50px 25px;
    }

    .hero h1{
        font-size:2.5rem;
    }

    .grid{
        padding:20px;
        grid-template-columns:1fr;
    }

}

</style>
</head>
<body>

<div class="container">

    <div class="profile-card">

        <div class="hero">

            <h1>จริยา ไชยนา</h1>

            <div class="line"></div>

            <h2>
                นักศึกษาระดับ ปวส.1/2 สาขาเทคโนโลยีสารสนเทศ
            </h2>

        </div>

        <div class="grid">

            <div class="card">
                <h3>📋 ข้อมูลส่วนตัว</h3>

                <div class="info">
                    <span class="label">ชื่อเล่น :</span>
                    หยา
                </div>

                <div class="info">
                    <span class="label">อายุ :</span>
                    19 ปี
                </div>

                <div class="info">
                    <span class="label">วันเกิด :</span>
                    23 พฤษภาคม 2550
                </div>

                <div class="info">
                    <span class="label">สถานศึกษา :</span>
                    วิทยาลัยอาชีวศึกษาชลบุรี
                </div>

                <div class="info">
                    <span class="label">ระดับชั้น :</span>
                    ปวส.1/2
                </div>

                <div class="info">
                    <span class="label">สาขา :</span>
                    เทคโนโลยีสารสนเทศ
                </div>

            </div>

            <div class="card">
                <h3>🎯 งานอดิเรก</h3>

                <div class="hobby">
                    <div class="badge">🎨 วาดรูป</div>
                    <div class="badge">🎮 เล่นเกม</div>
                    <div class="badge">🕹️ สร้างเกม</div>
                    <div class="badge">💻 เขียนโปรแกรม</div>
                </div>

            </div>

            <div class="card">
                <h3>🚀 เกี่ยวกับฉัน</h3>

                <div class="about">
                    ฉันเป็นนักศึกษาสาขา
                    <span class="highlight">เทคโนโลยีสารสนเทศ</span>
                    ที่สนใจด้านการพัฒนาเว็บไซต์ การเขียนโปรแกรม
                    และการสร้างเกม ชื่นชอบการเรียนรู้เทคโนโลยีใหม่ ๆ
                    เพื่อพัฒนาทักษะด้าน Software Development
                    และต่อยอดสู่การเป็นนักพัฒนาซอฟต์แวร์ในอนาคต
                </div>
            </div>

            <div class="card contact">
                <h3>📞 ช่องทางติดต่อ</h3>

                <div class="info">
                    <span class="label">โทรศัพท์ :</span>
                    063-478-2214
                </div>

                <div class="info">
                    <span class="label">GitHub :</span>
                    <a href="https://github.com/wow1150" target="_blank">
                        github.com/wow1150
                    </a>
                </div>

            </div>

        </div>

        <div class="footer">
            © <?php echo date("Y"); ?> Jariya Chaina Portfolio
        </div>

    </div>

</div>

</body>
</html>
