<?php
$color = "#219E45";
$titulo = "Planet";
$descricao = "The UNITAR is a dedicated training arm of the United Nations system. UNITAR provides training and capacity development activities to assist mainly developing countries.";
$body_class = "pilar goto-color";
$page_class = "planet";
include('header.php');
?>
        <section class="hero-pilar bg-<?php echo $page_class ?>">
            <div class="linhas"><img src="assets/images/pilar-hero-linhas.png" class="reveal"></div>
            <div class="bg">
                <img src="assets/images/hero-pilar-<?php echo $page_class ?>.jpg" alt="<?php echo $titulo ?>" class="reveal r-scale-out">
            </div>
            <div class="container text-white">
                <div class="row">
                    <div class="col-lg-5 offset-lg-7 pl-xl-4 infos">
                        <div class="row">
                            <div class="col-12 col-md-4 col-lg-12">
                                <i><img src="assets/images/pillar-hero-icon-<?php echo $page_class ?>.svg" alt="<?php echo $titulo ?>" class="reveal r-scale-out"></i>
                            </div>
                            <div class="col-md-8 col-lg-12">
                                <div class="row">
                                    <div class="col-12 reveal">
                                        <h1><?php echo $titulo ?></h1>
                                    </div>
                                    <div class="col-xl-6">
                                        <p class="reveal r-bottom">Support the conservation, restoration and safeguarding of our planet for present and future generations.</p>
                                        <p class="reveal r-bottom">Strengthen capacities to foster a green, low-carbon and climate resilient transition.</p>
                                    </div>
                                    <div class="col-xl-6">
                                        <p class="reveal r-bottom">Strengthen capacities to manage dangerous chemicals and wastes in a sound and sustainable manner.</p>
                                        <p class="reveal r-bottom">Improve the conservation and sustainable use of natural resources.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pilar-dados dados-<?php echo $page_class ?>">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-12 col-md-6 col-lg-4 col-dados reveal">
                        <i class="reveal r-scale-out"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.93 130.87"><path d="M20,130.36a6.49,6.49,0,0,1-6.49-6.49h0v-4.33H4.71A4.12,4.12,0,0,1,2,112.26,32,32,0,0,0,13.55,87.08V17.81A6.5,6.5,0,0,1,20,11.32h4.53a13,13,0,0,1,25.58,0H59.2a13,13,0,0,1,25.58,0H96a13,13,0,0,1,25.59,0h2.36a6.5,6.5,0,0,1,6.5,6.49h0V123.87a6.49,6.49,0,0,1-6.5,6.49H20Zm-2.16-6.49A2.17,2.17,0,0,0,20,126h103.9a2.17,2.17,0,0,0,2.16-2.17h0V106.33a29.29,29.29,0,0,1-9.9,11.77,8.85,8.85,0,0,1-4.82,1.45H17.88Zm0-106.06V87.08A36.73,36.73,0,0,1,5.09,115.34l106.29-.12a4.63,4.63,0,0,0,2.45-.74c7.45-4.89,12.27-15.64,12.27-27.4V17.81a2.16,2.16,0,0,0-2.16-2.16h-23.5a8.64,8.64,0,0,0,8.35,6.49,2.17,2.17,0,0,1,0,4.33A13,13,0,0,1,96,15.65H63.64A8.64,8.64,0,0,0,72,22.14a2.17,2.17,0,0,1,0,4.33A13,13,0,0,1,59.2,15.65H29a8.66,8.66,0,0,0,8.35,6.49,2.17,2.17,0,1,1,0,4.33A13,13,0,0,1,24.57,15.65H20.05a2.17,2.17,0,0,0-2.17,2.16Zm82.56-6.49h16.7a8.61,8.61,0,0,0-16.7,0Zm-36.8,0h16.7a8.61,8.61,0,0,0-16.7,0ZM29,11.32h16.7a8.62,8.62,0,0,0-16.7,0ZM62.3,85.64,44.43,66.55a3.15,3.15,0,0,1,.12-4.21,3.2,3.2,0,0,1,2.1-.79,3.12,3.12,0,0,1,2.23.93L64.37,79.15,91.74,49.74a3,3,0,0,1,4.25-.2h0a3.16,3.16,0,0,1,1.06,2.25,2.72,2.72,0,0,1-.85,2L66.46,85.65a2.89,2.89,0,0,1-4.09.07l-.08-.07Z"/></svg></i>
                        <ul class="items-numbers">
                            <li class="data-events reveal r-right" data-info="127">
                                <h4>127</h4>
                                <h5 class="reveal">Events</h5>
                            </li>
                            <li class="data-beneficiaries reveal r-right" data-info="167946">
                                <h4>167,946</h4>
                                <h5 class="reveal">Total beneficiaries</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-dados reveal">
                        <i class="reveal r-scale-out"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 127.65 127.65"><path d="M123.4,0H4.26A4.26,4.26,0,0,0,0,4.26V8.51a4.27,4.27,0,0,0,4.26,4.26H6.38v8.59H6.3a2.1,2.1,0,0,0-1.82,1.17L.22,31,4,32.94l2.35-4.7v7.93h4.26v-8L13,32.94l3.83-1.88-4.26-8.59a2.13,2.13,0,0,0-1.91-1.2V12.76h17V40L14.14,72.84a4.25,4.25,0,0,0,3.93,5.87h9.59v8.51A19.16,19.16,0,0,0,46.8,106.37h6.39v17a4.25,4.25,0,0,0,4.25,4.26H100a4.26,4.26,0,0,0,4.26-4.26l0-21.55a14.76,14.76,0,0,0,4.21-10.36V12.76h14.89a4.25,4.25,0,0,0,4.26-4.25h0V4.25A4.25,4.25,0,0,0,123.4,0ZM104.25,91.48a10.59,10.59,0,0,1-3,7.4,4.31,4.31,0,0,0-1.25,3V123.4H57.44v-17a4.25,4.25,0,0,0-4.25-4.26H46.81a14.91,14.91,0,0,1-14.9-14.89V76.59a2.13,2.13,0,0,0-2.12-2.13H18.07L31.22,42.55h73Zm0-53.18H31.91V12.77h72.34ZM4.26,8.51V4.25H123.4V8.51Z"/><path d="M40.42,61.7a8.51,8.51,0,0,0,8.51-8.51H44.67a4.26,4.26,0,0,1-8.51,0H31.91a8.51,8.51,0,0,0,8.51,8.51Z"/></svg></i>
                        <ul class="items-numbers">
                            <li class="data-learning-events reveal r-right reveal r-right" data-info="52">
                                <h4>52</h4>
                                <h5 class="reveal">Learning events</h5>
                            </li>
                            <li class="data-learners reveal r-right" data-info="153065">
                                <h4>153,065</h4>
                                <h5 class="reveal">Learners</h5>
                            </li>
                            <li class="data-certificates reveal r-right" data-info="32263">
                                <h4>32,263</h4>
                                <h5 class="reveal">Certificates</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="selos reveal">
                            <img src="assets/images/pilar-icon-08.png" class="order-xl-1" alt="">
                            <img src="assets/images/pilar-icon-12.png" class="order-xl-3" alt="">
                            <img src="assets/images/pilar-icon-13.png" class="order-xl-2" alt="">
                            <img src="assets/images/pilar-icon-14.png" class="order-xl-4" alt="">
                        </div>
                        <p class="reveal r-right"><strong>Key SDG alignment</strong></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="pilar-hl pilar-hl-<?php echo $page_class ?>">
            <div class="bg bg-top bg-<?php echo $page_class ?> reveal r-scale-out">
                <img src="assets/images/pilar-hl-bg-top.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-xl-7 mx-auto">
                        <h2 class="h1 text-center color-<?php echo $page_class ?> reveal r-scale-out">Highlights</h2>
                        <div class="hl-item">
                            <img class="reveal r-bottom" src="assets/images/pilar-<?php echo $page_class ?>-icon-hl-01.svg" alt="">
                            <div class="content reveal">
                                <p>September 2020 saw the <strong>One UN Climate Change Learning Partnership (UN CC:Learn)</strong> – a global partnership that supports countries in the design and implementation of systematic, recurrent and results-oriented climate change learning – <strong>issue its 100,000th certificate of completion.</strong> The partnership currently includes <strong>36 multilateral organizations and is active in more than 30 countries globally to promote global climate change literacy.</strong></p>
                            </div>
                        </div>
                        <div class="hl-item">
                            <img class="reveal r-bottom" src="assets/images/pilar-<?php echo $page_class ?>-icon-hl-02.svg" alt="">
                            <div class="content reveal">
                                <p>We supported countries in <strong>developing and launching climate change learning strategies</strong> including in <strong>Kenya, Kyrgyzstan, Malawi, Zambia and Zimbabwe.</strong> The strategies provide the culmination of a <strong>national debate on how to elevate the importance of education and training as a key means of addressing climate change.</strong></p>
                            </div>
                        </div>
                        <div class="hl-item">
                            <img class="reveal r-bottom" src="assets/images/pilar-<?php echo $page_class ?>-icon-hl-03.svg" alt="">
                            <div class="content reveal">
                                <p><strong>Half of all Danone employees participated in the UNITAR-Danone course on Sustainable Diet,</strong> develop to support Danone’s “One Planet One Health” approach linked to our sustainable lifestyles programme, which works with private sector companies to <strong>reach one million learners by 2025.</strong></p>
                            </div>
                        </div>
                        <div class="hl-item">
                            <img class="reveal r-bottom" src="assets/images/pilar-<?php echo $page_class ?>-icon-hl-04.svg" alt="">
                            <div class="content reveal">
                                <p>Due to the severe restrictions in travelling, <strong>we developed and launched the Persistent Organic Pollutants (PCB) Learn website,</strong> which <strong>provides practical training to countries on management of “PCBs”.</strong></p>
                            </div>
                        </div>
                        <div class="hl-item">
                            <img class="reveal r-bottom" src="assets/images/pilar-<?php echo $page_class ?>-icon-hl-05.svg" alt="">
                            <div class="content reveal">
                                <p>We <strong>supported the governments of Sierra Leone and Democratic Republic of Congo</strong> in the delivery of the final versions of the <strong>Minamata Initial Assessment and the National Action Plan on Artisanal Small Scale Gold Mining.</strong> This is the first time the countries have conducted such assessments on mercury emissions and use. As part of the project implementation, <strong>more than 200 people were trained in both countries.</strong></p>
                            </div>
                        </div>
                        <div class="hl-item">
                            <img class="reveal r-bottom" src="assets/images/pilar-<?php echo $page_class ?>-icon-hl-06.svg" alt="">
                            <div class="content reveal">
                                <p>We <strong>launched the Global E-waste Monitor 2020</strong> - co-published by UNITAR/UNU, ITU and the International Solid Waste Association - capturing more than <strong>1,400 online media hits</strong> in <strong>34 languages</strong> in <strong>more than 80 countries</strong> from <strong>1,200 different news sites worldwide.</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg bg-bottom bg-<?php echo $page_class ?> reveal r-scale-out">
                <img src="assets/images/pilar-hl-bg-bottom.png" alt="">
            </div>
        </section>
        <section class="depoimento bg-<?php echo $page_class ?> text-white">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-8 col-md-5 col-img">
                        <div class="image image-1">
                            <i class="reveal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 671.31 751.31"><path d="M514,750,82,688,1,289,228,126H587l-1,396Z" style="fill:none;stroke:#fff;"/><path d="M161,1,590.65,61.65,670,461,442,626H86V228Z" style="fill:none;stroke:#fff;"/></svg></i>
                            <img class="reveal r-scale-out" src="assets/images/pilar-<?php echo $page_class ?>-depoimento-01.jpg" alt="Maurici Tadeu Ferreira Santos - Brazil">
                        </div>
                    </div>
                    <div class="col-md-7 content">
                        <p><strong>“The course addressed many questions that I had regarding climate change and its dimension, especially in a complex and multifactorial context. It led me to realize that I was wrong about anthropogenic variables, which certainly include my own daily actions, and that greenhouse emissions are not restricted to big cities and large industrial conglomerates as I initially thought. Certainly, they play the major role, but the course encouraged me to ask myself ‘what is my part in all this?”</strong></p>
                        <h3>Maurici Tadeu Ferreira Santos</h3>
                        <h4>Brazil</h4>
                    </div>
                </div>
            </div>
        </section>
        <div class="s-divider bg-<?php echo $page_class ?>"></div>
        <section class="depoimento bg-light">
            <div class="container">
                <div class="row flex-md-row-reverse align-items-center">
                    <div class="col-8 col-md-5 col-img">
                        <div class="image image-2 stroke-<?php echo $page_class ?>">
                            <i class="reveal"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 671.31 751.31"><path d="M514,750,82,688,1,289,228,126H587l-1,396Z" style="fill:none;stroke:#fff;"/><path d="M161,1,590.65,61.65,670,461,442,626H86V228Z" style="fill:none;stroke:#fff;"/></svg></i>
                            <img class="reveal r-scale-out" src="assets/images/pilar-<?php echo $page_class ?>-depoimento-02.jpg" alt="Kafui Korshiwor Boni - Ghana">
                        </div>
                    </div>
                    <div class="col-md-7 content">
                        <p><strong>“We do an evaluation of chemicals and there are documents that the industries submit to be able to import chemicals. What I learned during the course made me have a better understanding of the information the industry submit.”</strong></p>
                        <h3>Kafui Korshiwor Boni</h3>
                        <h4>Ghana</h4>
                    </div>
                </div>
            </div>
        </section>
    <?php include('footer.php'); ?>