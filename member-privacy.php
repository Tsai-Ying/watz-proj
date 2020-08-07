<?php require __DIR__ . '/__connect_db.php';
$pageName = 'aboutWATZ';  // 這裡放你的pagename
?>
<?php include __DIR__ . '/__html_head.php' ?>

<!-- 自己另外的CSS插件 <link> 請放這邊 (nav.css及google fonts共用的不用放) -->

<style>
        body {
            width: 100vw;
            background-image: url(images/BG2.svg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .wrapper {
            height: 155vh;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .bg-term{
            flex-direction: row;
            justify-content:center;
            align-items: flex-start;
        }
        .selector {
            width: 120px;
            flex-direction: column;
            justify-content: flex-start;
            margin-top: 20%;
        }

        .box {
            width: 120px;
            height: 70px;
            justify-content: flex-start;
        }

        .selector a {
            padding: 10px;
            margin-bottom: 10px;
            border-bottom: 4px solid transparent;
            transition: .2s;

        }

        .selector a:hover {
            border-bottom: 4px solid #FF9685;
        }
        .background{
            margin-left: 20%;
            background: #ffffff;
            width: 870px;
            height: 1000px;
            border-radius: 15px;
        }
        .background li h6{
            width: 700px;
            margin:60px
        }
        @media screen and (max-width: 992px) {
            body {
                background-image: none;
                background-position: center;
            }
            .wrapper{
                width: 100%;
                height:100%;
                margin-top: 100px;
            }
            .bg-term{
                flex-direction: column;
                align-items: center;
            }
            .selector {
                width: 94vw;
                flex-direction: row;
                justify-content: center;
                margin-top: 20px;
                margin-right: 0;
            }

            .box {
                width: 30vw;
                height: 10vw;
                line-height: 30px;
                text-align: center;
                margin-top: 15px;
            }

            .selector a {
                white-space: nowrap;
            }
            .background{
                width: 80vw;
                height: 100%;
                margin: 0;
            }
            .background li h6{
                width: 65vw;
            }
        }
    </style>

<div class="container flex">
    <!-- 如果container有其它class要自己加上 -->

    <?php include __DIR__ . '/__navbar.php' ?>
    <?php include __DIR__ . '/__html_btn-top.php' ?>

    <div class="wrapper flex">
            <div class="bg-term flex">
            <div class="selector flex">
                <div class="box"><a href="">會員資料</a></div>
                <div class="box"><a href="">訂單紀錄</a></div>
                <div class="box"><a href="">會員條款</a></div>
                <div class="box"><a href="">隱私權政策</a></div>
            </div>
            <ul class="background">
                <li class="flex">
                    <h6 class="flex">【隱私權保護政策】<br>

                    <br>WATZ股份有限公司所經營相關網站，本公司十分重視您的隱私權保護，將依個人資料保護法及本隱私權政策蒐集、
                    處理及利用您的個人資料，並提供您對個人資料權利之行使與保護。
                    【本隱私權政策適用之範圍】<br>
                    　
                    <br>本隱私權政策及其所包含之告知事項，僅適用於WATZ股份有限公司所擁有及經營的網站。本網站內可能包含許多連結
                    、或其他合作夥伴所提供的服務，各連結網站或合作夥伴網站的隱私權聲明及與個人資料保護有關之告知事項，請參閱
                    該連結網站或合作夥伴網站。<br>
                    　
                    <br>【個人資料保護法應告知事項】<br>
                    －蒐集單位：WATZ股份有限公司股份有限公司
                    －蒐集目的：提供本公司相關服務、行銷、契約、類似契約或其他法律關係事務、客戶管理與服務、網路購物及其他電
                    子商務服務、廣告和商業行為管理業務、以及經營合於營業登記項目或組織章程所定之業務。
                    －溫馨提醒：網際網路並不是一個安全的資訊傳輸環境，請您在使用本網站時，切勿公開透露您個人資料，因該資料有
                    可能會被他人蒐集和使用，特別是網路上公開的發言場合，如聊天室、留言版，更應避免發表個人身份、密碼或電子郵
                    件等相關個人資料。<br>
                    　
                    <br>【個人資料蒐集】<br>
                    －當您瀏覽本公司經營之相關網站時，不會主動要求輸入個人資料。<br>
                    －當您完成購物流程或參加其他活動時，網站會要求您登錄個人資料，以便完成交易與相關服務。<br>
                    －為了保障各位會員權益，第一次光臨本網站消費的顧客，只要確認完成交易後，即會自動升級為會員。<br>
                    －請確認您所提供的個人資料真實準確，本公司不會承擔您資料中所提供不準確或不完整資訊所造成之損害或錯誤，
                    此將須自行負責。<br>
                    －如果您拒絕提供個人資料，可能無法充分利用本網站某些服務。<br>
                    －請妥善保管您的會員帳號及密碼，不要將上述資料提供給任何人或允許任何人以您的個人資料申請或使用帳號、密碼
                    ，本公司不會承擔任何不當使用密碼之責任。<br>
                    －如果您與他人共用電腦或使用公共電腦，請記得關閉瀏覽器，以防他人看到上述資料取得您帳號的方法。<br>
                    －訂閱電子報只需提供Email帳號，使用者想取消訂閱，可聯繫相應網站之客服協助取消訂閱。<br>
                    　
                    <br>【個人資料類別】<br>
                    　
                    <br>識別類（姓名、職稱、地址、聯絡電話、電子郵件信箱）、特徵類（年齡、性別、出生年月
                    日等）、社會情況類（興趣、休閒、生活格調、消費模式等）、教育、技術或其他專業類
                    （學歷）、受僱情形類（任職公司、職務等）、其他（為完成收款或付款所需之資料、往來
                    電子郵件、網站留言、系統自動紀錄之軌跡資訊及其他得以直接或間接識別，使用者身分之
                    個人資料等），惟將以實際本公司取得之個人資料為限。<br>
                    　
                    <br>【隱私權政策之修改】<br>
                    　
                    <br>本公司有權隨時修改本隱私政策及本網站各項內容之權利，將於網站同一位置公告更改聲明
                    外，不會再對會員進行個別通知。若您對本隱私權保護政策有任何問題或不同意該等變更或
                    修改，可利用電子郵件(service@watz.com.tw)直接與本公司
                    聯繫或停止使用本網站服務。<br>
                </h6>
            </li>
            </ul>
        </div>
            <div class="btn-top flex transition" id="goTop">
                <img src="images/arrow-top.svg" alt="">
                <h3>TOP</h3>
                <div class="bg-btn-top transition"></div>
            </div>
            
            <div class="mobile-show fixedlist">
                <div class="fixedlist-icon flex">
                    <a class="icon-wrapper" href=""><img src="images/icon-faq.svg" alt=""></a>
                    <a class="icon-wrapper" href=""><img src="images/icon-sock.svg" alt=""></a>
                    <a class="icon-wrapper" href=""><img src="images/icon-member.svg" alt=""></a>
                    <a class="icon-wrapper" href="cart.html"><img src="images/icon-cart.svg" alt=""></a>
                </div>
            </div>
        </div>
    <?php include __DIR__ . '/__html_footer.php' ?>
</div>
<?php include __DIR__ . '/__scripts.php' ?>

<script>
    // 這邊放你自己寫的JS
</script>

<?php require __DIR__ . '/__html_foot.php' ?>