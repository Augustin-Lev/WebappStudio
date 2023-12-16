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
    <div class="portfolio-content">
        <h2>Portfolio</h2>
        <p><?php echo $Content["PortfolioParagraph"]; ?></p>
        <a class="boutton" href="<?php echo BASE_URL ?>/login"> Voire les photos </a>
        <a class="boutton" href="#Devis"> Obtenir un devis </a>
    </div>
</div>
<div class="portfolio-photo">
    <img src="<?php echo BASE_URL ?>/views/image/photoPortfolio.jpg" alt="image du portfolio">
</div>
<div class="serviceProcess">
    <h2><?php echo $Content["ServiceProcessTitle"]; ?></h2>
    <div>
        <div class="process">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-1-circle" viewBox="0 0 16 16">
                    <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383z"/>
                </svg>
                <h2><?php echo $Content["ServiceProcess1Title"]; ?></h2>
            </div>
            <p><?php echo $Content["ServiceProcess1Paragraph"];?></p>
        </div>
        <div class="process">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-2-circle" viewBox="0 0 16 16">
                    <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M6.646 6.24v.07H5.375v-.064c0-1.213.879-2.402 2.637-2.402 1.582 0 2.613.949 2.613 2.215 0 1.002-.6 1.667-1.287 2.43l-.096.107-1.974 2.22v.077h3.498V12H5.422v-.832l2.97-3.293c.434-.475.903-1.008.903-1.705 0-.744-.557-1.236-1.313-1.236-.843 0-1.336.615-1.336 1.306Z"/>
                </svg>
                <h2><?php echo $Content["ServiceProcess2Title"]; ?></h2>
            </div>
            <p><?php echo $Content["ServiceProcess2Paragraph"];?></p>
        </div>
        <div class="process">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-3-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z"/>
                </svg>
                <h2><?php echo $Content["ServiceProcess3Title"]; ?></h2>
            </div>
            <p><?php echo $Content["ServiceProcess3Paragraph"];?></p>
        </div>
    </div>
</div>
<div class="services">
    <h2>Nos prestations</h2>
    <div>
        <img src="<?php echo BASE_URL ?>/views/image/EtoileUnilasalle.png" alt="Etoile unilasalle">
        <h2><?php echo $Content["Service1Title"]; ?></h2>
        <p><?php echo $Content["Service1Paragraph1"]; ?></p>
        <p><?php echo $Content["Service1Paragraph2"]; ?></p>
        <p><?php echo $Content["Service1Paragraph3"]; ?></p>
        <p><?php echo $Content["Service1Paragraph4"]; ?></p>
        
        <a class="boutton" href="#Devis">Obtenir un devis</a>
    </div>
    <div>
        <img src="<?php echo BASE_URL ?>/views/image/photoEntreprise.jpg" alt="Photo Entreprise">
        <h2><?php echo $Content["Service2Title"]; ?></h2>
        <p><?php echo $Content["Service2Paragraph1"]; ?></p>
        <p><?php echo $Content["Service2Paragraph2"]; ?></p>
        <p><?php echo $Content["Service2Paragraph3"]; ?></p>
        <p><?php echo $Content["Service2Paragraph4"]; ?></p>
        
        <a class="boutton" href="#Devis">Obtenir un devis</a>
    </div>
    <div>
        <img src="<?php echo BASE_URL ?>/views/image/photoAutre.jpg" alt="Photo Autre">
        <h2><?php echo $Content["Service3Title"]; ?></h2>
        <p><?php echo $Content["Service3Paragraph1"]; ?></p>
        <p><?php echo $Content["Service3Paragraph2"]; ?></p>
        <p><?php echo $Content["Service3Paragraph3"]; ?></p>
        <p><?php echo $Content["Service3Paragraph4"]; ?></p>
        
        <a class="boutton" href="#Devis">Obtenir un devis</a>
    </div>
</div>
<div class="devis" id="Devis">
    <h2>Pour toutes questions : </h2>
    <p>Contactez <?php echo $Content["RespoPrestaNom"]; ?></p>
    <div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg>
            <p><?php echo $Content["RespoPrestaPhone"]; ?></p>
        </div>
        <div>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-airplane-fill" viewBox="0 0 16 16">
  <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849"/>
</svg>
            <p><?php echo $Content["RespoPrestaMail"]; ?></p>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-messenger" viewBox="0 0 16 16">
                <path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76m5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z"/>
            </svg>
            <p><?php echo $Content["RespoPrestaMessenger"]; ?></p>
        </div>
    </div>
    <a class="boutton" href="#Devis"> Obtenir un devis </a>
</div>
<div class="orga">
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