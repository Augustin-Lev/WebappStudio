<body>
<div class="home-page">
    <img src= "<?php echo BASE_URL ?>/views/image/logo.jpg">
    <a href="<?php echo BASE_URL ?>/login"> Voire les photos </a>
</div>    
<div class="presentation">
    <h2><?php echo $Content["PrentationTitle"]; ?></h2>
    <p><?php echo $Content["PresentationParagraph"]; ?></p>
</div>
<div class="indicators">
    <div class="experience">
        <svg></svg>
        <h4>Experience</h4>
        <p><?php echo $Content["ExeperienceYears"]; ?></p>
    </div>
    <div class="serviceFrequency">
        <svg></svg>
        <h4>Prestation / ans</h4>
        <p><?php echo $Content["ServciceFrequency"]; ?></p>
    </div>
    <div class="actifsMembers">
        <svg></svg>
        <h4>Membres actifs</h4>
        <p><?php echo $Content["actifsMembers"]; ?></p>
    </div>
</div>
<div class="portfolio">
    <h2>Portfolio</h2>
    <p><?php echo $Content["PortfolioParagraph"]; ?></p>
    <a href="<?php echo BASE_URL ?>/login"> Voire les photos </a>
    <a href="#Devis"> Obtenir un devis </a>
</div>
<div>
    <img src="<?php echo BASE_URL ?>/views/image/photoPortfolio.jpg" alt="Photo de la com'studio">
</div>
<div class="serviceProcess">
    <h2><?php echo $Content["ServiceProcessTitle"]; ?></h2>
    <div>
        <div class="process">
            <div>
                <svg></svg>
                <h2><?php echo $Content["ServiceProcess1Title"]; ?></h2>
            </div>
            <p><?php echo $Content["ServiceProcess1Paragraph"];?></p>
        </div>
        <div class="process">
            <div>
                <svg></svg>
                <h2><?php echo $Content["ServiceProcess2Title"]; ?></h2>
            </div>
            <p><?php echo $Content["ServiceProcess2Paragraph"];?></p>
        </div>
        <div class="process">
            <div>
                <svg></svg>
                <h2><?php echo $Content["ServiceProcess3Title"]; ?></h2>
            </div>
            <p><?php echo $Content["ServiceProcess3Paragraph"];?></p>
        </div>
    </div>
</div>
<div class="Services">
    <div>
        <img src="" alt="">
        <h2><?php echo $Content["Service1Title"]; ?></h2>
        <p><?php echo $Content["Service1Paragraph1"]; ?></p>
        <p><?php echo $Content["Service1Paragraph2"]; ?></p>
        <p><?php echo $Content["Service1Paragraph3"]; ?></p>
        <p><?php echo $Content["Service1Paragraph4"]; ?></p>
        
        <a href="#Devis">Obtenir un devis</a>
    </div>
</div>
<div class="Devis" id="Devis">
    <h2>Pour toutes questions : </h2>
    <p>Contactez <?php echo $Content["RespoPrestaNom"]; ?></p>
    <div>
        <div>
            <svg></svg>
            <p><?php echo $Content["RespoPrestaPhone"]; ?></p>
        </div>
        <div>
            <svg></svg>
            <p><?php echo $Content["RespoPrestaMail"]; ?></p>
        </div>
        <div>
            <svg></svg>
            <p><?php echo $Content["RespoPrestaMessenger"]; ?></p>
        </div>
    </div>
    <a href="#Devis"> Obtenir un devis </a>
</div>
<div>
    <h2>Le bureau</h2>
    <div>
        <div>
            <img src="<?php echo BASE_URL ?>/views/image/bureau1.jpg" alt="photo des membres du bureau">
            <h4><?php echo $Content["OfficeMemberTitle1"]; ?></h4>
            <p><?php echo $Content["OfficeMemberName1"]; ?></p>
        </div>
        <div>
            <img src="<?php echo BASE_URL ?>/views/image/bureau2.jpg" alt="photo des membres du bureau">
            <h4><?php echo $Content["OfficeMemberTitle2"]; ?></h4>
            <p><?php echo $Content["OfficeMemberName2"]; ?></p>
        </div>
        <div>
            <img src="<?php echo BASE_URL ?>/views/image/bureau3.jpg" alt="photo des membres du bureau">
            <h4><?php echo $Content["OfficeMemberTitle3"]; ?></h4>
            <p><?php echo $Content["OfficeMemberName3"]; ?></p>
        </div>
        <div>
            <img src="<?php echo BASE_URL ?>/views/image/bureau4.jpg" alt="photo des membres du bureau">
            <h4><?php echo $Content["OfficeMemberTitle4"]; ?></h4>
            <p><?php echo $Content["OfficeMemberName4"]; ?></p>
        </div>
    </div>
    <div>
        <div>
            <img src="<?php echo BASE_URL ?>/views/image/bureau5.jpg" alt="photo des membres du bureau">
            <h4><?php echo $Content["OfficeMemberTitle5"]; ?></h4>
            <p><?php echo $Content["OfficeMemberName5"]; ?></p>
        </div>
        <div>
            <img src="<?php echo BASE_URL ?>/views/image/bureau6.jpg" alt="photo des membres du bureau">
            <h4><?php echo $Content["OfficeMemberTitle6"]; ?></h4>
            <p><?php echo $Content["OfficeMemberName6"]; ?></p>
        </div>
        <div>
            <img src="<?php echo BASE_URL ?>/views/image/bureau7.jpg" alt="photo des membres du bureau">
            <h4><?php echo $Content["OfficeMemberTitle7"]; ?></h4>
            <p><?php echo $Content["OfficeMemberName7"]; ?></p>
        </div>
        <div>
            <img src="<?php echo BASE_URL ?>/views/image/bureau8.jpg" alt="photo des membres du bureau">
            <h4><?php echo $Content["OfficeMemberTitle8"]; ?></h4>
            <p><?php echo $Content["OfficeMemberName8"]; ?></p>
        </div>
    </div>
</div>

</body>