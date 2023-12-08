<body>
<div class="home-page">
    <img src= "<?php echo BASE_URL ?>/views/image/LogoComStudio.png">
    <a class="boutton" href="<?php echo BASE_URL ?>/login"> Voire les photos </a>
</div>    
<div class="presentation">
    <h2><?php echo $Content["PrentationTitle"]; ?></h2>
    <p><?php echo $Content["PresentationParagraph"]; ?></p>
</div>
<div class="indicators">
    <div class="experience">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-rocket-takeoff-fill" viewBox="0 0 16 16">
            <path d="M12.17 9.53c2.307-2.592 3.278-4.684 3.641-6.218.21-.887.214-1.58.16-2.065a3.578 3.578 0 0 0-.108-.563 2.22 2.22 0 0 0-.078-.23V.453c-.073-.164-.168-.234-.352-.295a2.35 2.35 0 0 0-.16-.045 3.797 3.797 0 0 0-.57-.093c-.49-.044-1.19-.03-2.08.188-1.536.374-3.618 1.343-6.161 3.604l-2.4.238h-.006a2.552 2.552 0 0 0-1.524.734L.15 7.17a.512.512 0 0 0 .433.868l1.896-.271c.28-.04.592.013.955.132.232.076.437.16.655.248l.203.083c.196.816.66 1.58 1.275 2.195.613.614 1.376 1.08 2.191 1.277l.082.202c.089.218.173.424.249.657.118.363.172.676.132.956l-.271 1.9a.512.512 0 0 0 .867.433l2.382-2.386c.41-.41.668-.949.732-1.526l.24-2.408Zm.11-3.699c-.797.8-1.93.961-2.528.362-.598-.6-.436-1.733.361-2.532.798-.799 1.93-.96 2.528-.361.599.599.437 1.732-.36 2.531Z"/>
            <path d="M5.205 10.787a7.632 7.632 0 0 0 1.804 1.352c-1.118 1.007-4.929 2.028-5.054 1.903-.126-.127.737-4.189 1.839-5.18.346.69.837 1.35 1.411 1.925Z"/>
        </svg>
        <h4>Experience</h4>
        <p><?php echo $Content["ExeperienceYears"]; ?></p>
    </div>
    <div class="serviceFrequency">
        <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
            <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
            <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1m9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0"/>
        </svg>
        <h4>Prestation / ans</h4>
        <p><?php echo $Content["ServciceFrequency"]; ?></p>
    </div>
    <div class="actifsMembers">
        <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
        </svg>
        <h4>Membres actifs</h4>
        <p><?php echo $Content["actifsMembers"]; ?></p>
    </div>
</div>
<div class="portfolio">
    <div>
        <h2>Portfolio</h2>
        <p><?php echo $Content["PortfolioParagraph"]; ?></p>
        <a href="<?php echo BASE_URL ?>/login"> Voire les photos </a>
        <a href="#Devis"> Obtenir un devis </a>
    </div>
    <div>
        <img src="<?php echo BASE_URL ?>/views/image/photoPortfolio.jpg" alt="Photo de la com'studio">
    </div>
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