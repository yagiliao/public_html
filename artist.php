<?php session_start();
include("mysql_connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>瑞奇教授的小天地</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: gray;
            padding: 25px;
        }
    </style>
</head>
<body background="bg/bg02.jpg">

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://csie.asia.edu.tw/"><img src="http://csie.asia.edu.tw/images/logo/en.png" width="110"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">首頁</a></li>
                <li><a href="introduce.php">簡歷</a></li>
                <li><a href="academic.php">學術</a></li>
                <li class="active"><a href="artist.php">著作</a></li>
                <li><a href="common.php">常用連結</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION['id'])){
                    echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"> Logout</span></a></li>';
                }else{
                    echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<table border="1">
    <tr>
        <td><font size="4" face="Times New Roman" color="red">期刊論文<br></font></td>
    </tr>
    </table>
<?php
if ($_SESSION['id'] != null){ ?>
    <table align="center">
        <tr align="center">
            <a href="add1.php"><button>新增</button></a>
            <a href="update1.php"><button>修改</button></a>
            <a href="delete1.php"><button>刪除</button></a>
        </tr>
    </table>
<?php  }  ?>
    <?php
    $sql = "SELECT * FROM artist";
    $result = $link->query($sql);
    while ($row = mysqli_fetch_row($result)){
        echo "<table>
                   <tr>
                    <td>$row[1]<br><br></td>
        </tr>
        </table>
                ";
    }

    ?>
    <table>
    <tr>
        <td>PubMed文獻之樣式歷史資料形狀查詢-藉由Haar小波 ，International Journal of Advanced Information Technologies ,Other
            王經篤(Jing-Doo Wang)，蔣中凱(Chung-Kai Chiang)，陳瑞奇(Jui-Chi Chen)
            2015 Dec，9(2):67-76<br><br></td>
    </tr>
    <tr>
        <td>	Combination Therapy Using Chelating Agent and Zinc for Wilson’s Disease ，Journal of Medical and Biological Engineering ,SCI
            陳瑞奇(Jui-Chi Chen)，莊政宏(Cheng-Hung Chuang)，王經篤(Jing-Doo Wang)，王奇威(Chi-Wei Wang)
            2015 Dec，35(6):697-708<br><br></td>
    </tr>
    <tr>
        <td>A Systematic Review of Studies on Effectiveness and Safety of Commonly Used Medications for Treating Wilson’s Disease ，The Journal of Taiwan Association for Medical Informatics ,Other
            陳瑞奇(Jui-Chi Chen)，莊政宏(Cheng-Hung Chuang)，謝盛元(Sheng-Yuan Hsieh)，王經篤(Jing-Doo Wang)
            2015 Mar，24(1):11-22<br><br></td>
    </tr>
    <tr>
        <td>Optimized Packet Scheduling Management: Maximizing Bandwidth Utilization for Next-generation Mobile Multimedia Communications ，WIRELESS PERSONAL COMMUNICATIONS ,SCI
            陳瑞奇(Jui-Chi Chen)
            2012 Dec，67(3):613-630<br><br></td>
    </tr>
    <tr>
        <td>Dynamic Classified Buffer Control for QoS-Aware Packet Scheduling in IEEE 802.16/WiMAX Networks ，IEEE Communications Letters ,EI
            陳瑞奇(Jui-Chi Chen)
            2010 Sep，14(9):815-817<br><br></td>
    </tr>
    <tr>
        <td>Implementation of a High-Performance Assignment Scheme for Orthogonal Variable-Spreading-Factor Codes in WCDMA Networks ，Asian Journal of Arts and Sciences ,Other
            陳瑞奇(Jui-Chi Chen)
            2010 Jun，1(1):109-128<br><br></td>
    </tr>
    <tr>
        <td>Partial Loss Probability of OVSF Single-code Assignment with Space-limited Batch Arrival Queues: M[2^X]/M/c/c ，JOURNAL OF INFORMATION SCIENCE AND ENGINEERING ,SCI
            陳瑞奇(Jui-Chi Chen)
            2010 Jan，26(1):267-278<br><br></td>
    </tr>
    <tr>
        <td>	Adaptive Time-utility Function Scheme for Downlink Packet Scheduling in IEEE 802.16e/WiMAX Networks ，Asian Journal of Health and Information Sciences ,Other
            陳瑞奇(Jui-Chi Chen)
            2009 Sep，4(2-3):103-112<br><br></td>
    </tr>
    <tr>
        <td>WiMAX無線系統OFDMA次載子配置之連線阻斷率分析 ，Journal of Scientific and Technological Studies ,Other
            陳瑞奇(Jui-Chi Chen)，楊偉儒(Neng-Yih Shih)
            2009 Apr，43(1):71-84<br><br></td>
    </tr>
    <tr>
        <td>	Utilization Optimization for OVSF Single-code Allocation in WCDMA Networks ，JOURNAL OF THE CHINESE INSTITUTE OF ENGINEERS ,SCI
            陳瑞奇(Jui-Chi Chen)
            2008 Sep，31(6):1077-1081<br><br></td>
    </tr>
    <tr>
        <td>	Utilization Optimization for OVSF Multi-code Assignment in WCDMA Networks ，Asian Journal of Health and Information Sciences ,Other
            陳瑞奇(Jui-Chi Chen)，黃惠藩(Hui-Fuang Ng)，林新力(Hsin-Li Lin)
            2007 Dec，2(1-4):49-65<br><br></td>
    </tr>
    <tr>
        <td>Efficient Performance Management of Subcarrier-allocation Systems in Orthogonal Frequency-division Multiple Access Networks ，Lecture Notes in Computer Science ,Other
            陳瑞奇(Jui-Chi Chen)，陳文賢(Wen-Shyen E. Chen)
            2006 Sep，4238():412-421<br><br></td>
    </tr>
    <tr>
        <td>Call Blocking Probability and Bandwidth Utilization of OFDM Subcarrier Allocation in Next-generation Wireless Networks ，IEEE Communications Letters ,EI
            陳瑞奇(Jui-Chi Chen)，陳文賢(Wen-Shyen E. Chen)
            2006 Feb，10(2):82-84<br><br></td>
    </tr>
    <tr>
        <td><font size="4" face="Times New Roman" color="red">研討會論文<br></font></td>
    </tr>
    <tr>
        <td>移動平均線平滑度與滯後性之研究--以政府開放資料之癌症數據為例
            2018資訊教育與科技應用研討會(IETAC 2018)
            修平科技大學,台中,Taiwan，2018.3.30 ~ 2018.3.30
            陳瑞奇、莊政宏、王淨儀<br><br></td>
    </tr>
        <tr>
        <td>移動平均線在資料探勘數據視覺化上的應用
            2017第二十三屆資訊管理暨實務研討會
            國立聯合大學資訊管理學系, Taiwan，2017.12.9 ~ 2017.12.9
            蒙美津、梁文軒、陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>從台灣食品營養資料庫推估與比較本地各類素食食物之特定營養素含量
            2017第43屆台灣營養學會年會暨學術研討會
            弘光科技大學, 台中, Taiwan，2017.5.19 ~ 2017.5.20
            陳瑞奇、王經篤、周仕敏、蒙美津<br><br></td>
    </tr>
        <tr>
        <td>素食食材、營養與健康－以台灣食品營養成分資料庫為例
            2017休閒餐旅觀光教育全國學術研討會
            新北市, Taiwan，2017.4.27 ~ 2017.4.28
            陳瑞奇、莊政宏、王淨儀、蒙美津<br><br></td>
    </tr>
        <tr>
        <td>素食民眾營養攝取分析與特定營養素之含量統計
            素食對健康與環境的影響研討會(台灣素食營養學會105年會)
            台南, Taiwan，2016.12.3 ~ 2016.12.3
            蒙美津、王經篤、周仕敏、陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>從台灣食品營養資料庫推估本地素食人口之營養素攝取狀況
            2016第42屆台灣營養學會年會暨學術研討會
            台北, Taiwan，2016.5.20 ~ 2016.5.21
            陳瑞奇、李明芳、曾聖勛、蒙美津<br><br></td>
    </tr>
        <tr>
        <td>台灣常見素食飲食型態之營養攝取推估、比較及飲食建議
            2016第十一屆國際健康資訊管理研討會(UHIMA 2016)
            台灣台南市立安南醫院，2016.4.23 ~ 2016.4.24
            蒙美津、張竣硯、劉璦、陳紓紋、陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>A Simulation of Natural Wolfberry Recognition Based on Color Classification
            The 28th Annual Conference of Biomedical Fuzzy System Association (BMFSA2015)
            Kumamoto, Japan，2015.11.21 ~ 2015.11.22
            莊政宏、陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>樣式歷史資料之形狀查詢-藉由Haar小波
            2015年資訊科技國際研討會(AIT/CEF 2015)
            朝陽科技大學，2015.4.24 ~ 2015.4.25
            王經篤、蔣中凱、陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>應用資料探勘技術追溯研究威爾森氏症不同藥物多種治療方式的實際有效性
            2014科技部工程司醫工學門成果發表會暨生物醫學工程及醫材產業高峰論壇
            台北，2014.12.13 ~ 2014.12.13
            陳瑞奇、郭佳霖、陳彥棠<br><br></td>
    </tr>
        <tr>
        <td>威爾森氏症常見藥物療法有效性及安全性之文獻回顧分析
            2014年國際醫學資訊聯合研討會(JCMIT2014)
            國立台北護理健康大學，2014.11.15 ~ 2014.11.16
            陳瑞奇、莊政宏、謝盛元、王經篤<br><br></td>
    </tr>
        <tr>
        <td>搜尋生醫文獻資料庫探討威爾森氏症合併藥物療效與部分流行病學之統計研究
            第九屆國際健康資訊管理研討會(UHIMA2014)
            台中東海大學，2014.6.13 ~ 2014.6.14
            陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>罕見疾病威爾森氏症螯合劑與鋅鹽合併療效之系統性回顧調查
            2013生物醫學工程研討會
            Hsinchu, Taiwan，2013.11.15 ~ 2013.11.16
            陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>A Cooperative Bit-Map Routing Protocol in Ad Hoc Networks
            2013 Seventh International Conference on Complex, Intelligent, and Software Intensive Systems (CISIS2013)
            Taichung, Taiwan，2013.7.3 ~ 2013.7.5
            陳興忠、施能義、、陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>以二維馬可夫排隊模型分析WiMAX行動遠距醫療照護之多媒體傳輸效能
            2013全國電磁相容技術與實務研討會
            Changhua, Taiwan，2013.6.27 ~ 2013.6.28
            陳瑞奇、黃惠藩、陳興忠<br><br></td>
    </tr>
        <tr>
        <td>Evaluation of Color Descriptors for Image Matching Under Changing Illumination Conditions
            2012資訊科技國際研討會暨第二屆網路智能與應用研討會
            Taichung, Taiwan，2012.4.27 ~ 2012.4.28
            黃惠藩、陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>新世代多媒體行動網路頻寬利用率最佳化之封包排程管理
            2011年民生電子研討會
            國立臺中技術學院，2011.11.11 ~ 2011.11.11
            陳瑞奇、、、黃惠藩<br><br></td>
    </tr>
        <tr>
        <td>Image Indexing with Illumination Invariant Color Centroids
            The 23rd IPPR Conference on Computer Vision, Graphics, and Image Processing
            Kaoshiung, Taiwan，2010.8.15 ~ 2010.8.17
            黃惠藩、、陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>An Efficient Batch-arrival Queueing Model for Evaluating WiMAX Packet Scheduling Systems
            The IET International Conference on Frontier Computing – Theory, Technologies and Applications
            Taichung, Taiwan，2010.8.4 ~ 2010.8.5
            陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>考量WiMAX網路封包排程服務品質之緩衝區動態控制模型
            The 15th Mobile Computing Workshop (MC2010)第15屆行動計算研討會
            國立臺中教育大學，2010.5.28 ~ 2010.5.28
            陳瑞奇、黃惠藩<br><br></td>
    </tr>
        <tr>
        <td>Abnormality Detection in Video Surveillance Using Trajectory and Frame Features
            The 14th Conference on Artificial Intelligence and Applications (TAAI 2009)
            台中朝陽科技大學，2009.10.31 ~ 2009.10.31
            黃惠藩、、陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>WiMAX無線網路之可調適時間效用封包排程演算法
            2008全國電信研討會(NST’2008)
            雲林虎尾科技大學，2008.12.5 ~ 2008.12.6
            陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>Adaptive TUF Packet Scheduling Scheme for OFDMA-based WiMAX Systems
            2008台灣網際網路研討會(TANET'2008)
            高雄義守大學，2008.10.20 ~ 2008.10.21
            陳瑞奇、林新力、黃惠藩<br><br></td>
    </tr>
        <tr>
        <td>以正交分頻多工存取為基礎之WiMAX點對多點系統連線阻斷率
            2007全國計算機會議(NCS’2007)
            台中亞洲大學，2007.12.20 ~ 2007.12.21
            陳瑞奇、黃惠藩、施能義<br><br></td>
    </tr>
        <tr>
        <td>Pose and expression invariant face recognition with one sample image per person
            National Computer Symposium 2007 (NCS’2007)
            Asia University, Taiwan，2007.12.20 ~ 2007.12.20
            黃惠藩、陳宏文、陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>下一代無線行動網路OFDMA次載子配置系統效能評估與頻寬利用率最佳化分析
            2006全國電信研討會(NST'2006)
            高雄正修科技大學，2006.12.1 ~ 2006.12.2
            陳瑞奇、施能義<br><br></td>
    </tr>
        <tr>
        <td>Efficient Performance Management of Subcarrier-allocation Systems in Orthogonal Frequency-division Multiple Access Networks
            Tthe 9th Asia-Pacific Network Operations and Management Symposium (APNOMS’2006)
            Busan, Korea，2006.9.27 ~ 2006.9.29
            陳瑞奇、陳文賢<br><br></td>
    </tr>
        <tr>
        <td>MX/M/c/c Modeling on a 4G Wireless Resource-allocation System
            The 8th biennial International Symposium on Communications (ISCOM’2005)
            Kaohsiung, Taiwan，2005.11.20 ~ 2005.11.22
            陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>Bandwidth Utilization and Call Blocking Probability of OVSF Single-code Allocation with a Partial-loss Batch-arrival Model
            2005台灣網際網路研討會(TANET’2005)
            台中中興大學，2005.10.26 ~ 2005.10.28
            陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>Performance Evaluation of Multicode Allocation System in WCDMA
            2004 International Computer Symposiums (ICS’2004)
            Taipei, Taiwan，2004.12.15 ~ 2004.12.17
            陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>Queueing Models for Performance Evaluation of 3G WCDMA OVSF Code-assignment Systems
            2004 Symposium on Digital Life and Internet Technologies (CREDIT’2004)
            Tainan, Taiwan，2004.6.24 ~ 2004.6.26
            陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>第三代無線行動通訊TD-SCDMA快速頻道配置演算法
            2003全國計算機會議(NCS’2003)
            Taichung, Taiwan，2003.12.18 ~ 2003.12.19
            陳瑞奇、陳文賢<br><br></td>
    </tr>
        <tr>
        <td>A Fast Frequency Assignment Algorithm for TDMA/GSM Cellular Networks
            2003 International Conference on Informatics, Cybernetics, and Systems (ICICS’2003),
            Kaohsiung, Taiwan, Dec. 15-16 2003.，2003.12.15 ~ 2003.12.16
            陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>Ordered BFS Graph-coloring Algorithms for the Basis of Cellular Frequency Assignment
            2003台灣網際網路研討會(TANET’2003)
            Taipei, Taiwan，2003.10.29 ~ 2003.10.31
            陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>Queue-aided BLRU Scheme for Orthogonal Variable-Spreading- Factor Code Assignment in 3G WCDMA
            The 14th IEEE Proceedings on Personal, Indoor and Mobile Radio Communications (PIMRC’2003)
            Beijing, China，2003.9.7 ~ 2003.9.10
            陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>Implementation of an Efficient Channelization Code Assignment Algorithm in 3G WCDMA
            2001全國計算機會議(NCS’2001)
            Taipei, Taiwan，2001.12.20 ~ 2001.12.21
            陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>Efficient Best-fit LRU Scheme for OVSF Code Allocation in WCDMA
            The 6th biennial International Symposium on Communications (ISCOM’2001)
            Tainan, Taiwan，2001.11.13 ~ 2001.11.16
            陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>A Lower Bound on Blocking Probability of an OVSF Multi-code System in WCDMA
            IEEE 3Gwireless’2001
            San Francisco, USA，2001.5.30 ~ 2001.6.2
            陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>以MS-Access設計財產管理系統之研製與評估
            中州工商專科學校行政電腦化推展研討會
            台灣彰化，1999.5.15 ~ 1999.5.15
            陳瑞奇<br><br></td>
    </tr>
        <tr>
        <td>Real Time VOD System Based on Multi-port Network and Hierarchical Storage Architecture
            96’ Second Workshop on Real-time and Media Systems
            Taipei, Taiwan，1996.7.30 ~ 1996.7.31
            陳瑞奇<br><br></td>
    </tr>
    <tr>
        <td><font size="4" face="Times New Roman" color="red">研討會論文<br></font></td>
    </tr>
    <tr>
        <td>MOST 107- (申請中)，陳瑞奇(Jui-Chi Chen)，國科會，利用時間序列模型進行台灣癌症發生率及死亡率之趨勢分析與預測，2018.8.1 ~ 2019.7.31<br><br></td>
    </tr>
        <tr>
        <td>MOST 107- (申請中)，陳瑞奇(Jui-Chi Chen)，國科會，整合於5G行動通訊中合作式感知無線電網路智慧型頻道配置演算法，2018.7.31 ~ 2019.7.31<br><br></td>
    </tr>
        <tr>
        <td>MOST 106-2314-B-468-004 -，蒙美津(Mei-Shin Mong),陳瑞奇(Jui-Chi Chen)，國科會，台灣地區威爾森氏症低銅飲食銅點數之研發與應用，2017.8.1 ~ 2018.7.31<br><br></td>
    </tr>
        <tr>
        <td>I105IB125，陳瑞奇(Jui-Chi Chen)，民間企業產學合作計畫，中藥藥材零售管理資訊系統，2016.10.1 ~ 2017.9.30<br><br></td>
    </tr>
        <tr>
        <td>個別型，MOST 105-2221-E-468-021-，陳瑞奇(Jui-Chi Chen),蒙美津(Mei-Shin Mong)，國科會，利用電腦演算法從台灣食品營養成分資料庫推估國人素食飲食品質之最佳化，2016.8.1 ~ 2017.7.31<br><br></td>
    </tr>
        <tr>
        <td>個別型，MOST 104-2221-E-468-017-，陳瑞奇(Jui-Chi Chen),蒙美津(Mei-Shin Mong)，國科會，從台灣食品營養資料庫推估及比較本地素食人口之營養素攝取與飲食建議，2015.8.1 ~ 2016.7.31<br><br></td>
    </tr>
        <tr>
        <td>產學合作，I104IB095，陳瑞奇(Jui-Chi Chen)，彰化縣八卦山脈保育協會，清水岩生態教育多媒體導覽系統，2015.6.1 ~ 2016.5.31<br><br></td>
    </tr>
        <tr>
        <td>個別型，MOST 103-2221-E-468-002-，陳瑞奇(Jui-Chi Chen)，國科會，應用資料探勘技術追溯研究威爾森氏症不同藥物多種治療方式的實際有效性(二)，2014.8.1 ~ 2015.7.31<br><br></td>
    </tr>
        <tr>
        <td>個別型，NSC 102-2221-E-468-010-，陳瑞奇(Jui-Chi Chen)，國科會，應用資料探勘技術追溯研究威爾森氏症不同藥物多種治療方式的實際有效性(I)，2013.8.1 ~ 2014.7.31<br><br></td>
    </tr>
        <tr>
        <td>個別型，NSC 101-2221-E-468 -003 -，陳瑞奇(Jui-Chi Chen)，國科會，WiMAX網路支援行動遠距醫療照護之有效多媒體傳輸機制，2012.8.1 ~ 2013.7.31<br><br></td>
    </tr>
        <tr>
        <td>個別型，NSC 97-2221-E-468-003-，陳瑞奇(Jui-Chi Chen)，國科會，第四代行動通訊(II): 植基於OFDMA之WiMAX網路考慮傳輸服務品質的有效允入控制與封包排程器，2008.8.1 ~ 2009.7.31<br><br></td>
    </tr>
        <tr>
        <td>個別型，NSC 96-2221-E-468-001-，陳瑞奇(Jui-Chi Chen)，國科會，第四代無線行動網路正交分頻多工存取次載子資源有效配置技術與效能最佳化，2007.8.1 ~ 2008.7.31<br><br></td>
    </tr>
        <tr>
        <td>個別型，NSC 92-2213-E-235-002-，陳瑞奇(Jui-Chi Chen)，國科會，TD-SCDMA無線網路資源管理與頻道配置快速演算法之研究，2003.8.1 ~ 2004.7.31<br><br></td>
    </tr>
</table>

<footer class="container-fluid text-center">
    <p>E-mail：rikki@asia.edu.tw</p>
</footer>

</body>
</html>
